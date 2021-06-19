<template>
  <header>
    <div class="header-wrap">
      <h1>estra inc.</h1>
      <nav>
        <ul>
          <li><a href="#">home</a></li>
          <li><a href="#">about</a></li>
          <li><a href="#">service</a></li>
          <li><a href="#">works</a></li>
          <li><a href="#">price</a></li>
          <li><a href="#">contact</a></li>
        </ul>
      </nav>
    </div>

    <div id="hamburger" @click="hamburger" :class="{'active':isActive}">
      <span></span>
      <span></span>
      <span></span>
    </div>

    <nav class="hbg-content" :class="{'open':isActive}">
      <p class="hbg-content-title">estra inc.</p>
     <ul>
        <li><a href="#">home</a></li>
        <li><a href="#">about</a></li>
        <li><a href="#">service</a></li>
        <li><a href="#">works</a></li>
        <li><a href="#">price</a></li>
        <li><a href="#">contact</a></li>
      </ul>
    </nav>
  </header>
</template>

<script>
export default {
  data() {
    return {
      isActive:false
    };
  },
  methods: {
    hamburger(){
      this.isActive = !this.isActive;
    }
  },
};
</script>

<style scoped>
header{
  height: 70px;
  background-color: #000;
}

.header-wrap{
  display: flex;
  justify-content: space-between;
  align-items: center;
}

header h1{
  font-size: 20px;
  font-weight: bold;
  margin-left: 35px;
  color: #f2f2f2;
  line-height: 70px;
}

header nav ul{
  display: flex;
}

header nav ul li{
  margin-right: 35px;
  font-size: 16px;
}

header nav ul li a{
  color: #f2f2f2;
}

@media screen and (max-width:768px){
  #hamburger{
    position: absolute;
    top: 15px;
    right: 15px;
    width: 40px;
    height: 40px;
    cursor: pointer;
    transition: 0.4s;
  }
  #hamburger span{
    position: absolute;
    left: 2px;
    display: block;
    width: 35px;
    height: 3px;
    background-color: #fff;
    transition: 0.8s;
  }

  #hamburger span:nth-of-type(1){
    top: 10px;
  }

  #hamburger span:nth-of-type(2){
    top: 20px;
  }

  #hamburger span:nth-of-type(3){
    top: 30px;
  }

  header nav{
    display: none;
  }
  
  #hamburger.active span:nth-of-type(1) {
    top: 20px;
    transform: rotate(45deg);
  }

  #hamburger.active span:nth-of-type(2) {
    opacity: 0;
  }
  #hamburger.active span:nth-of-type(3) {
    top: 20px;
    transform: rotate(-45deg);
}
  .hbg-content {
    display: block;
    width: calc(100% - 80px);
    height: 100%;
    text-align: center;
    transition: 0.2s;
    position: fixed;
    top: 0;
    left: calc(-100% - 80px);
    background: #fff;
    color: #333333;
    box-shadow: 80px 0 rgba(38, 98, 213, 0.3);
    z-index: 999;
  }
.hbg-content .hbg-content-title{
  margin: 40px 20px;
    font-size: 2.2rem;
    color: #333333;
    text-align: left;
    font-weight: bold;
}
  .hbg-content ul{
     display: flex;
    flex-wrap: wrap;
    flex-direction: column;
   }

  .hbg-content li a {
    color: #333333;
    margin: 10px;
    padding: 5px;
    border-bottom: 0.5px solid #2662d5;
    text-decoration: none;
    display: block;
  }
 
  .hbg-content li {
    width: 70%;
    text-align: left;
  }
  .hbg-content.open {
    left: 0;
  }
}

</style>