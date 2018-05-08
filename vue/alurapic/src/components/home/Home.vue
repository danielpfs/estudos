<template>
  <div class="container">
    <router-link :to="{ name: 'cadastro' }">Cadastrar</router-link>
    <h1>{{ titulo }}</h1>
    <input class="search form-control" @input="filtro = $event.target.value" type="search" placeholder="Pesquisar">
    <div v-show="filtro">
      <p>Pesquisando por "{{ filtro }}":</p>
    </div>
    <al-card v-for="foto in fotosComFiltro"
      :key="foto._id"
      :titulo="foto.titulo" 
      :url="foto.url"
      @altera="altera(foto)"
      @remove="remove(foto)"
    >
        {{ foto.descricao }}
    </al-card>
  </div>
</template>

<script>
import AlCard from '../shared/card/Card.vue'
import FotoService from '../../domain/foto/FotoService'

export default {
  components: {
    AlCard
  },
  computed: {
    fotosComFiltro() {
      if (this.filtro) {
        let exp = new RegExp(this.filtro.trim(), 'i');
        return this.fotos.filter(foto => exp.test(foto.titulo));
      } else {
        return this.fotos;
      }
    }
  },
  created() {
    this.service = new FotoService(this.$resource)
    this.service
      .listar()
      .then(fotos => this.fotos = fotos)
  },
  data() {
    return {
      titulo: "Fotos",
      fotos: [],
      filtro: ''
    }
  },
  methods: {
    altera(foto) {
      this.$router.push({ name: 'alterar', params: { id: foto._id } })
    },
    remove(foto) {
      let r = confirm(`Tem certeza em excluir ${foto.titulo}?`)
      if (r) {
        this.service
          .remover(foto._id)
          .then(() => {
            let i = this.fotos.indexOf(foto)
            this.fotos.splice(i, 1)
            alert('Excluído com sucesso')
          }, err => {
            alert('Erro ao tentar remover na api')
            console.log(err)
          })
        
      }
    }
  }
}
</script>

<style>
.search {
  margin-bottom: 20px;
}
</style>