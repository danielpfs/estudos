<template>
  <div class="container">
    <div class="row">
      <div class="col-12 col-md-8">
        <router-link :to="{ name: 'home' }">Voltar</router-link>
        <h1>Cadastro</h1>
        <form class="form" @submit.prevent="submit()">
          <div class="form-group">
            <label for="titulo">Título</label>
            <input id="titulo" class="form-control" type="text" v-model="foto.titulo"/>
          </div>
          <div class="form-group">
            <label for="url">URL</label>
            <input id="url" class="form-control" type="text" v-model.lazy="foto.url"/>
          </div>
          <div class="form-group">
            <label for="descricao">Descrição</label>
            <textarea id="descricao" class="form-control" v-model="foto.descricao"/>
          </div>
          <button class="btn btn-primary" type="submit">Cadastrar</button>
        </form>
      </div>
      <div class="col-12 col-md-4">
        <al-card
          :titulo="foto.titulo"
          :url="foto.url"
        >
          {{ foto.descricao }}
        </al-card>
      </div>
    </div>
  </div>
</template>

<script>
import Foto from '../../domain/foto/Foto'
import AlCard from '../shared/card/Card.vue'
import FotoService from '../../domain/foto/FotoService'

export default {
  components: {
    AlCard
  },
  created() {
    this.service = new FotoService(this.$resource)

    if (this.id) {
      this.service
        .buscar(this.id)
        .then(foto => this.foto = foto)
    }
  },
  data() {
    return {
      foto: new Foto(),
      id: this.$route.params.id
    };
  },
  methods: {
    submit() {
      this.service
        .salvar(this.foto)
        .then(() => {
          if (this.foto._id) return this.$router.push({ name: 'home' })
          this.foto = new Foto()
        }, err => console.log(err))
      
      
    }
  }
};
</script>