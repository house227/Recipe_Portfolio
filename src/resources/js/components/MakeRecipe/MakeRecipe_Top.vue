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

      </div>

      <h1 style="font-size:40px;">～材料～</h1>

        <li v-for="(item, id) in items" :key="id" style="list-style-type: decimal; font-size:35px;">
          <input type="text" name="content" id="food-text" placeholder="食材">
          <p style="display: inline; font-size:35px;">/</p>
          <input type="text" name="quantity" id="food-text" placeholder="分量">
          <img src="photo/Box.png" alt="ゴミ箱" @click="removeInput(id)" id="box-img">
        </li>

          <button type="button" @click="addInput()" style="font-size:25px;">追加</button>

      

        <div id="procedure">
        <h1>～作り方～</h1>
          
          <!-- DB(手順テーブル)から取り出したデータをリストで表示させる -->
          <ul>
            <li>肉を切る</li>
            <li>肉を焼く</li>
            <li>ソース1を火にかけ少し温まるまで煮込み、ソース2を加えかき混ぜてかける(長文テスト)</li>
            <li>盛り付けて完成</li>
          </ul>
        </div>

        <hr>


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

  #make-recipe-top{
    display: flex;
    flex-wrap: nowrap;
    justify-content: center;
  }
  #img{
    border: 1px solid black;
    width: 25%;
    padding: 40px 0px 40px 0px ;
    text-align: center;
    margin-right: 170px;
    margin-left: 100px;
  }

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

   #food-text{
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
  
  /* 作り方 */
    /* 全体 */
  #procedure{
    display: inline-block;
    font-size: 25px;
    text-align: center;
  }
    /* リスト親 */
  #procedure ul{
    text-align: center;
    margin-right: auto;
    margin-left: auto;
    justify-content: center;
  }
    /* リスト子 */
    #procedure li{
    list-style-type: decimal;
    font-size: 35px;
    font-weight: bold;
    margin-bottom:25px;
    text-align: left;
  }

</style>
