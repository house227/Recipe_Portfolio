<template>
  <div>
    <body>
      <a @click="$router.go(-1)" id="back">←前へ戻る</a>

      <!-- 内容(画像や作り方等)はレシピテーブルや手順テーブルから取り出してくる -->
      <h1 id="recipe-title">タイトル(DBから取得したタイトル)</h1>

      <div id="recipe-top">
          <div id="recipe-img" style="padding-right:100px;">

            <img src="photo/Recipe1.jpg" alt="レシピ1" width="460" height="310">
          </div>

          <div id="material" style="padding-top:20px;">
            <h2>～材料～</h2>
            <ul>
              <!-- 食材と数量はそれぞれ食材テーブルから引っ張ってくる -->
              <li>牛肉   200g</li>
              <li>ソース1   大さじ1</li>
              <li>ソース2   大さじ2</li>
            </ul>
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



  /* レシピ名 */
  #recipe-title{
    text-align:center; 
    margin-bottom:10px; 
    font-size: 40px;
  }

  /* 画像と材料表示部分 */
  #recipe-top{
    display: flex;
    flex-wrap: nowrap;
    justify-content: center;
  }

  /* 材料 */
  #material h2{
    font-size: 35px;
    margin-bottom: 0px;
  }
  #material ul{
    font-size: 25px;
    font-weight: bold;
  }
  #material li{
    margin-bottom: 10px;
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
