<template>
  <div>

    <p>{{ parent-text }}</p>

    <button @click="text"></button>
  </div>
</template>

<script>
export default {
  props:["parent-text"]
};
</script>