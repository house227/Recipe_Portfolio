<template>
  <div>
    <body>
      <a @click="$router.go(-1)" id="back">←前へ戻る</a>

      <div class="mail-form">
        <h2 style="margin-bottom:0px; padding-right:90px;">ご登録メールアドレス</h2>
        <form action="/ResetSendMail">
          <input type="email" name="new-mail" style="width:300px; height:25px; margin-top:0px;"> <br>
          <input type="submit" value="送信" style="margin-top:20px; font-size:18px;">
        </form>
        <p>
          ご入力頂いたメールアドレス宛てに <br> パスワード再設定用メールを送信致します。
        </p>
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
