<template>
  <div>
    <body>
      <a @click="$router.go(-1)" id="back">←前へ戻る</a>

      <div class="mail-form">

        <h2 style="margin-bottom:0px; padding-right:60px;">ご登録メールアドレス</h2>

        <!-- 送信先/内容は要修正 -->
        <form action="/logintop" >
          <input type="email" name="mail" style="width:300px; height:25px; margin-top:0px;"> 
          <h2 style="margin-bottom:0px; padding-right:180px;">パスワード</h2>
          <input type="password" name="password" style="width:300px; height:25px; margin-top:0px;">
          <br>
          <input type="submit" value="ログイン" style="margin-top:20px; font-size:18px;">
        </form>

          <!-- パスワード再設定用 -->
          <router-link to="/resetpass" style="padding-left:380px; color:blue;">
            パスワードを忘れましたか？
          </router-link>
      </div>
    </body>
  </div>
</template>

<script>
// import { reactive } from "vue";
export default {
  data(){
    return{
      error_cnt: 0,
    }
  },
  mounted(){
    
  },

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

  .mail-form{
    text-align: center;
  }
</style>
