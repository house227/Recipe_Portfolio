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
          <h1 id="title-text">タイトル</h1>
            <select name="recipe-genre" style="font-size:35px">
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
export default {
  data(){
    return{

    }
  },
  mounted(){
    
  },
  methods: {
  },
  computed:{

  }
};
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
    width: 30%;
    padding: 40px 15px 40px 15px ;
    text-align: center;
    margin-right: 30px;
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
