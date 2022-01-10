<template>
  <div>
    <body>
      <a @click="$router.go(-1)" id="back">←前へ戻る</a>

      <div class="mail-form">
        
        
        <!-- バリデーションチェックを入れる -->
        <form action="/Confirm">

        <!-- ユーザーネーム -->
          <h2 style="margin-bottom:0px; padding-right:140px;">ユーザーネーム</h2>
          <input type="email" name="new-mail" style="width:300px; height:25px; margin-top:0px;"> 
          <p style="padding-left: 200px; margin-top:0px;">※マイページから変更可能です</p>

        <!-- パスワード　※ハッシュ化で暗号化しDBへ登録 -->
          <h2 style="margin-bottom:0px; padding-right:190px;">パスワード</h2>
          <input type="email" name="new-mail" style="width:300px; height:25px; margin-top:0px;">
        <!-- パスワード確認 -->
          <h2 style="margin-bottom:0px; padding-right:140px;">パスワード確認</h2>
          <input type="email" name="new-mail" style="width:300px; height:25px; margin-top:0px;">

        <!-- アレルギー -->
        <!-- <select name="allergy" style="font-size:25px">
          <option value="無し" selected>無し</option>
          <option value="卵">卵</option>
          <option value="乳">乳</option>
          <option value="小麦">小麦</option>
          <option value="そば">そば</option>
          <option value="ピーナッツ">ピーナッツ</option>
          <option value="えび">えび</option>
          <option value="かに">かに</option>
          <option value="アーモンド">アーモンド</option>
          <option value="あわび">あわび</option>
          <option value="いか">いか</option>
          <option value="いくら">いくら</option>
          <option value="オレンジ">オレンジ</option>
          <option value="カシューナッツ">カシューナッツ</option>
          <option value="キウイフルーツ">キウイフルーツ</option>
          <option value="牛肉">牛肉</option>
          <option value="くるみ">くるみ</option>
          <option value="ごま">ごま</option>
          <option value="鮭">鮭</option>
          <option value="鯖">鯖</option>
          <option value="大豆">大豆</option>
          <option value="鶏肉">鶏肉</option>
          <option value="バナナ">バナナ</option>
          <option value="豚肉">豚肉</option>
          <option value="松茸">松茸</option>
          <option value="桃">桃</option>
          <option value="やまいも">やまいも</option>
          <option value="りんご">りんご</option>
          <option value="ゼラチン">ゼラチン</option>
        </select> -->
          <br>
          <input type="submit" value="送信" style="margin-top:20px; font-size:18px;">
        </form>
        <p>
          ご入力頂いたメールアドレス宛てに <br> ユーザー登録用メールを送信致します。<br>
          お間違いの無いようお願い致します。
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
