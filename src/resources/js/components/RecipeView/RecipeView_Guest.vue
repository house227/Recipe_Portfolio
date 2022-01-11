<template>
  <div>
    <body>
      <a @click="$router.go(-1)" id="back">←前へ戻る</a>

      <!-- 内容(画像や作り方等)はDBから取り出してくる -->
      <div id="recipe-top">
          <h1 style="text-align:center;">タイトル(DBから取得したタイトル)</h1>
          
          <div id="recipe-img">
            <!-- レシピ画像やお気に入り情報もDBから取りたいが今は仮配置とボタンでスイッチ -->
            <h2 @click="favoriteInput" id="favorite"> 
              <span style="color:red">
                {{ favorite ? '♥' : '♡' }}
              </span> お気に入り
            </h2>
            <img src="photo/Recipe1.jpg" alt="レシピ1" width="400" height="300">
          </div>

          <div id="procedure">
            <h2>～材料～</h2>
            <ul>
              <!-- 食材と数量はそれぞれDBから引っ張ってくる -->
              <li>牛肉   200g</li>
              <li>ソース1   大さじ1</li>
              <li>ソース2   大さじ2</li>
            </ul>
          </div>

      </div>
    </body>
  </div>
</template>

<script>
// import { reactive } from "vue";
export default {
  data(){
    return{
      // お気に入り機能もDBから取りたいが今は仮で作成
      favorite: false,
    }
  },
  mounted(){
    
  },
  methods: {
    favoriteInput(){
      if(this.favorite === false){
        this.favorite = true;
      }else{
        this.favorite = false;
      }
    },
  },
  computed:{

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

  #recipe-top{
    display: flex;
    flex-wrap: nowrap;
    justify-content: center;
  }

  #favorite{
    cursor: hand;
    cursor: pointer;
    font-size: 35px;
    margin-bottom: 0px;
  }
  #procedure h2{
    font-size: 40px;
    margin-bottom: 0px;
  }
  #procedure ul{
    font-size: 35px;
    font-weight: bold;
  }
</style>
