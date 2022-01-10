<template>
  <div>
    <body>
      <a href="/" id="back">←Topへ戻る</a>

      <div class="mail-form">

        <form action="/ResetEnd">
        <!-- パスワード　※ハッシュ化で暗号化しDBへ登録 -->
          <h2 style="margin-bottom:0px; padding-right:190px;">パスワード</h2>
          <input type="email" name="new-mail" style="width:300px; height:25px; margin-top:0px;">
        <!-- パスワード確認 -->
          <h2 style="margin-bottom:0px; padding-right:140px;">パスワード確認</h2>
          <input type="email" name="new-mail" style="width:300px; height:25px; margin-top:0px;">

          <br>
          <input type="submit" value="再登録" style="font-size:25px; margin-top:20px;">
        </form>

      </div>
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

  .mail-form{
    text-align: center;
  }
</style>
