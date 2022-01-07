<template>
  <div>
    <body>
      <a @click="$router.go(-1)" id="back">←前へ戻る</a>
      {{message}}
    </body>
  </div>
</template>

<script>
// import { reactive } from "vue";
export default {
  data(){
    return{
      message:'',
    }
  },
  mounted(){
    this.message = this.$route.path
  }
};
</script>

<style>
  #back{
    cursor: hand;
    cursor: pointer;
    font-size: 25px;
    font-weight: bold;
    color: rgb(53, 53, 255);
  }
</style>
