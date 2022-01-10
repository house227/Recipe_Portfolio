<template>
  <div>
    <body>
      <router-link to="/" id="back">←Topへ戻る</router-link>

      <!-- 送信先/内容は要修正 -->
      <div class="mail-form">
        <h1>※内容をご確認ください</h1>
        <h2>ユーザーネーム</h2>
        <h3>セッションから取り出した情報</h3>

        <h2>アレルギー</h2>
        <li>セッションから取り出した情報</li>
        <li>セッションから取り出した情報</li>

        <!-- ページ作成用リンク -->
        <a href="CreateEnd">確認完了後の処理</a>
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
