<template>
  <div>
    <body>
      <router-link to="/" id="back">←Topへ戻る</router-link>

      <!-- 送信先/内容は要修正 -->
      <div class="mail-form">

        <h1>
          パスワードの再設定が完了しました <br>
          再度ログインしてください。
        </h1>

        <!-- 作成用リンク -->
        <a href="/LoginTop" style="color: rgb(255, 145, 0); font-size:25px;">ログイン</a>
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
