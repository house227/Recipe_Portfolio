<template>
  <div>
    <body>
      <router-link to="/" id="back">←Topへ戻る</router-link>

      <!-- 送信先/内容は要修正 -->
      <div class="mail-form">
        <p>
          ご入力頂いたメールアドレス宛てに <br> ユーザー登録用メールを送信致しました。<br>
          受信メールBOX確認後記載されているURLから <br> ユーザー登録画面へアクセスして下さい。
        </p>

        <!-- ページ作成用リンク -->
        <a href="CreateIndex">メールが来た後の処理</a>
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
