<template>
  <div id="header">
    <button @click="showText" type="submit">send</button>
    <p>{{show}}</p>
  </div>
</template>

<script>
export default {
  data() {
    return {
      show: ""
    };
  },
  props: ["parentText"],
  methods: {
    showText() {
      this.show = this.parentText;
    }
  }
};
</script>