<template>
  <div class="management flex">
    <div class="tabs">
      <nav>
        <ul class="contents">
          <li @click="$router.push('/manager')" >店舗代表者権限発行</li>
          <li @click="$router.push('/manager/create')">管理者権限発行</li>
        </ul>
      </nav>
      </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      stores: [],
      areas: [],
      genres: [],
      postItem: [],
    }
  },
}
</script>

<style scoped>
.management{
  width: 100%;
}
.tabs{
  position: fixed;
  top: 10;
  left: 0;
  height: 100%;
  width: 170px;
  background-color: rgb(53, 52, 52);
  line-height: 4;
  color: #fff;
}
.contents li{
  padding-left: 10px;
  cursor: pointer;
}
.contents li:hover{
  background-color: #ffa500;
}
</style>