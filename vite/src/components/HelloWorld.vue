<template>
  <div>
    <h1>{{ msg }}</h1>
    <button @click="count++">count is: {{ count }}</button>
    <img src="../assets/logo.svg" alt="Logo" />
  </div>
</template>

<script>
export default {
  props: ['msg'],
  data() {
    return {
      count: 0
    }
  },
}
</script>

<style scoped>
h1 {
  color: #42b983;
}

img {
  width: 100px;
  height: 100px;
}
</style>
