<template>
  <div>
    <body>
      <router-link to="/" id="back">←Topへ戻る</router-link>

      <!-- 送信先/内容は要修正 -->
      <div class="mail-form">
        <h1>
          ご登録ありがとうございました！  <br>
          ログインし、当アプリをご活用ください
        </h1>

        <div class="route">
          <!-- 仮でPタグだが、Routeに変えてページ以降出来るようにする -->
          <a href="/NewUserCreate" id="route-tag1">新規登録</a>
          <a href="/LoginTop" id="route-tag2">ログイン</a>
        </div>

        <h1>マイページへ繋げられると良い</h1>
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

.route{
  display: flex;
  justify-content: center;
  gap: 2px 30px;
  width: 200px;
  background-color: white;
  font-size: 20px;
  margin-left: 400px;
  
}
#route-tag1{
  color: blue;
}
#route-tag2{
  color: red;
}
</style>
