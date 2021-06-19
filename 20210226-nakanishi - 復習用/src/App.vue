<template>
  <div id="app">
    <input type="text" v-model="postCode"/>
    <button @click="serch">住所自動入力</button>
    <p>Address:{{ address }}</p>
  </div>
</template>


<script>
import axios from 'axios';
export default{
  data() {
    return {
      postCode:"",
    }
  },
  methods: {
    asyanc serch(){

  }
  },
  
}
</script>


<style>
</style>