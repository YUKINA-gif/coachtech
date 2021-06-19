<template>
<div>
  <p>{{ id }}</p>
  <button @click="back">戻る</button>
</div>
</template>

<script>
export default {
  props: ["id"],
  methods:{
  back(){
    this.$router.push('/');
  }
  }
};
</script>