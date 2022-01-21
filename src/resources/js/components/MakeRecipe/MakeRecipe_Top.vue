<template>
  <div>
    <body>
      <a @click="$router.go(-1)" id="back">←前へ戻る</a>

      <div id="make-recipe-top">
        <!-- クリックで画像をアップロードして表示させる -->
        <div id="img">
          <img src="photo/Camera.png" alt="画像" width="128" height="128">
        </div>

        <div id="title">
          <input type="text" name="title" id="title-text" placeholder="タイトル"> <br>
            <select name="recipe_type" style="font-size:35px">
              <option value="全て" selected>全て</option>
              <option value="和食">和食</option>
              <option value="洋食">洋食</option>
              <option value="中華">中華</option>
              <option value="韓国">韓国料理</option>
              <option value="イタリアン">イタリアン</option>
              <option value="フレンチ">フレンチ</option>
              <option value="その他">その他</option>
          </select>
        </div>
      </div>

        <hr>

      <div id="food">
        <h1>～材料～</h1>
        <p id="food-subtext1">ヒント： 入力欄選択時に「Ctrl+Enter」で項目追加出来ます</p>

        <li v-for="(food, id) in foods" :key="id" @keydown.enter.ctrl="addFoodInput()">
          <input v-focus v-model="foods[id]" type="text" name="content" class="food-form" placeholder="食材" >
          <p style="display: inline; font-size:35px;">/</p>
          <input type="text" name="quantity" class="food-form" placeholder="分量">
          <img src="photo/Box.png" alt="ゴミ箱" @click="removeFoodInput(id)" id="box-img">
        </li>

        <button type="button" @click="addFoodInput()" style="font-size:25px;">追加</button>
      </div>



      

        <div id="procedure">
        <h1>～作り方～</h1>
        <p>ヒント： 入力欄選択時に「Ctrl+Enter」で項目追加出来ます</p>

          <!-- DB(手順テーブル)から取り出したデータをリストで表示させる -->
          <ul>
            <li v-for="(procedure, id) in procedures" :key="id" @keydown.enter.ctrl="addProcedureInput()">
              <input v-focus v-model="procedures[id]" type="text" name="content" id="procedure-form" placeholder="手順">
              <img src="photo/Box.png" alt="ゴミ箱" @click="removeProcedureInput(id)" id="box-img">
            </li>
            <button type="button" @click="addProcedureInput()" style="font-size:25px;">追加</button>
          </ul>
          
        </div>

        <hr style="margin-bottom:50px;">

          <!-- activeがtrueならpreviewOnクラスを付与falseなら逆 -->
        <router-link to="/MakeRecipePreview"
          :class="{mouseOn:active===true, mouseOff:active===false}" 
          @mouseover="active=true" 
          @mouseout="active=false"
          id="preview"
          >
        プレビュー
        </router-link>

    </body>
  </div>
</template>

<script>
// import { reactive } from "vue";
export default{
  data(){
      return{
          //inputが入れる為の配列。初期値で空を１つ入れておく
          foods: [''],
          procedures:[''],
          active:false,
      }
  },
  methods: {
        // 食材
      addFoodInput(){
          // itemsに空の配列を追加する
          this.foods.push('');
      },
      removeFoodInput(id){
          // id番の配列を１つ削除する
          this.foods.splice(id, 1);
      },

          // 手順
      addProcedureInput(){
            // itemsに空の配列を追加する
          this.procedures.push('');
      },
      removeProcedureInput(id){
          // id番の配列を１つ削除する
          this.procedures.splice(id, 1);
      },

        // プレビューボタン
      over(){

      },
      leave(){

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
  /* 戻るボタン */
  body{
    width: 80%;
    margin: 0 auto;
    max-width: 1480px;
  }

  #back{
    cursor: hand;
    cursor: pointer;
    font-size: 25px;
    font-weight: bold;
    color: rgb(53, 53, 255);

  }

  /* ここからタイトル部分 */

    /* 全体 */
  #make-recipe-top{
    display: flex;
    flex-wrap: nowrap;
    justify-content: center;
  }

    /* 画像 */
  #img{
    border: 1px solid black;
    width: 25%;
    padding: 40px 0px 40px 0px ;
    text-align: center;
    margin-right: 170px;
    margin-left: 100px;
  }

    /* 料理名 */
  #title-text{
    margin: 40px 0 50px 0;
    height: 35px;
    width: 15em;
    font-size: 30px;
    border-bottom:1px solid #cccccc;
    border-right:none;
    border-left:none;
    border-top:none;
    border-radius:0px;
  }

  /* タイトル部分ここまで */

  /* ここから材料部分 */

    /* タイトル */
  #food h1{
    font-size:40px;
    margin-bottom:0;
  }

    /* 入力のヒント */
  #food-subtext1{
    font-size: 20px;
    margin-top: 0;
    padding-left: 80px;
  }

    /* リスト */
  #food li{
    list-style-type: decimal;
    font-size:35px;
  }

     /* 食材/分量入力部分 */
  .food-form{
    display: inline;
    margin-bottom: 35px;
    height: 35px;
    width: 8em;
    font-size: 30px;
    border-bottom:1px solid #cccccc;
    border-right:none;
    border-left:none;
    border-top:none;
    border-radius:0px;
  }

    /* ゴミ箱 */
  #box-img{
      cursor: hand;
      cursor: pointer;
  }


  
  /* 作り方 */

    /* 全体 */
  #procedure{
    display: inline-block;
    font-size: 25px;
    text-align: center;
  }
  #procedure h1{
    font-size:40px;
    margin-bottom:0;
    text-align: left;
  }
  #procedure p{
    font-size: 20px;
    margin-top: 0;
    text-align: left;
    padding-left: 80px;
  }
    /* 作り方リスト親 */
  #procedure ul{
    text-align: center;
    margin-right: auto;
    margin-left: auto;
    justify-content: center;
  }
    /* 作り方リスト子 */
  #procedure li{
    list-style-type: decimal;
    font-size: 35px;
    font-weight: bold;
    margin-bottom:25px;
    text-align: left;
  }

    /* 作り方フォーム */
  #procedure-form{
    display: inline;
    margin-bottom: 0;
    height: 35px;
    width: 30em;
    font-size: 30px;
    border-bottom:1px solid #cccccc;
    border-right:none;
    border-left:none;
    border-top:none;
    border-radius:0px;
  }

  /* 作り方ここまで */

  /* レシピ投稿ボタン */
    /* マウスオン時共通 */
    .mouseOn{
    cursor: hand;
    cursor: pointer;
    border: 1px solid red;
    color: red;
    border-radius: 20px; 
    text-align: center;
    padding: 5px 20px 5px 20px;
  }
    /* マウスオフ時共通 */
  .mouseOff{
    border: 1px solid black;
    color: black;
    border-radius: 20px; 
    text-align: center;
    padding: 5px 20px 5px 20px;
  }
  /* ページ別での設定 */
  #preview{
    font-size: 35px;
    margin: 60px 0 0 400px;
    width: 20%;
  }

</style>
