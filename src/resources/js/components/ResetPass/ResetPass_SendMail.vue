<template>
  <div>
    <body>
      <router-link to="/" id="back">←Topへ戻る</router-link>

      <!-- 送信先/内容は要修正 -->
      <div class="mail-form">
        <p>
          ご入力頂いたメールアドレス宛てに <br> パスワード再設定用メールを送信致しました。<br>
          受信メールBOX確認後記載されているURLから <br> パスワード再設定画面へアクセスして下さい。
        </p>

        <!-- 作成用リンク -->
        <a href="">次へ</a>
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
