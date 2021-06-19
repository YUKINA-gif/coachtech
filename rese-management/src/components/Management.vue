<template>
  <div class="management flex">
    <!-- メニューバー -->
    <div class="tabs">
      <nav>
        <ul class="contents">
          <li @click="$router.push('/manager/store-manager/create')">店舗代表者権限発行</li>
          <li @click="$router.push('/manager/create')">管理者権限発行</li>
        </ul>
      </nav>
      </div>
  </div>
</template>

<style scoped>
/* ====================
      メニューバー
==================== */
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