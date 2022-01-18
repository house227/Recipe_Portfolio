<template>
  <div>
    <body>
      <a @click="$router.go(-1)" id="back">←前へ戻る</a>

      <div class="mail-form">
        
        
        <!-- バリデーションチェックを入れる -->
        <!-- バリデーションチェック後セッションへ入れておく -->
        <!-- 送信先/方法等は要編集 -->
        <form action="/CreateConfirm">
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
        <h2 style="margin-bottom:0px; padding-right:190px;">アレルギー</h2>
        <li v-for="(item, id) in items" :key="id">
          <select name="allergy" v-model="items[id]" style="font-size:35px">
            <option value="無し">---無し---</option>
            <option value="卵" selected>卵</option>
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
          </select>
          <img src="photo/Box.png" alt="ゴミ箱" @click="removeInput(id)" id="box-img">
          <p style="padding-left: 200px; margin-top:0px;">※マイページから変更可能です</p>        
        </li>
          <button type="button" @click="addInput()" style="font-size:25px;">追加</button>
          
          <br>
          <input type="submit" value="送信" style="margin-top:20px; font-size:30px;">
        </form>
      </div>
    </body>
  </div>
</template>

<script>
// import { reactive } from "vue";
export default{
    data(){
        return{
            // items…inputが入れる為の配列。初期値で空を１つ入れておく
            items: [''],
            // 食材用inputの最大個数
            maxInput: 5,
        }
    },
    methods: {
        addInput(){
            // フォームが５未満の時のみフォーム欄を増やす
            if(!this.maxInputCount){
                // itemsに空の配列を追加する
            this.items.push('');
            }
            
        },
        removeInput(id){
            // id番の配列を１つ削除する
            this.items.splice(id, 1);
        },
    },
    directives: {
        // 食材入力欄に自動でフォーカスを当てる(当てたい場所にv-focusを付与)
        focus: {
            mounted(el) {
                el.focus();
            }
        },
    },
}
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
