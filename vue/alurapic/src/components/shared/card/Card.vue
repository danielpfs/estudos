<template>
  <div class="card" @click="$emit('altera')">
    <img @dblclick="visivel = !visivel" v-al-trans.animate class="card-img-top" :src="url" alt="">
    <div class="card-body">
      <div class="card-title" v-show="visivel">{{ titulo }}</div>
      <div class="card-text"></div>
      <slot></slot>
    </div>
    <div class="card-footer">
        <button class="btn btn-danger" @click="$emit('remove')">Excluir</button>
    </div>
  </div>
</template>

<script>
import Transform from '../../../directives/Transform';

export default {
  directives: {
    'al-trans': Transform
  },
  data() {
    return {
      visivel: true
    };
  },
  props: ['titulo', 'url', 'id']
}
</script>

<style scoped>
.card {
    display: inline-block;
    width: 250px;
    overflow: hidden;
}
</style>

