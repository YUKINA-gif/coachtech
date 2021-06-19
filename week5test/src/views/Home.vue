<template>
  <div class="home">
    <ul>
      <li>
        <router-link :to="{ name: 'Member',params:{ id: 1 }}">
          1へ進む
        </router-link>
      </li>
       <li>
        <router-link :to="{ name: 'Member',params:{ id: 2 }}">
          2へ進む
        </router-link>
      </li>
       <li>
        <router-link :to="{ name: 'Member',params:{ id: 3 }}">
          3へ進む
        </router-link>
      </li>
    </ul>
  </div>
</template>

<style scoped>
li{
  list-style: none;
  line-height: 1.5;
}
</style>
