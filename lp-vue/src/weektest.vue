<template>
  <div id="test">

    <test :parent-text = "sendtext"></test>
  </div>
</template>

<script>
import test from './components/test'
export default {
  components:{
    test
  },
  data() {
    return {
      sendtext:"テスト完了！"
    };
  },
}
</script>