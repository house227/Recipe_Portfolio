<template>
  <!-- レシピ検索 -->
  <div id="search-recipe">
      <h1>★レシピ検索</h1>
      
      <!-- レシピ名/ユーザー名で検索 -->
      <!-- 送信方法/送信先は要編集 -->
      <div id="search-box">
          <form action="/resipes" method="post" style="padding-right:100px;" >
              <h2 id="form1">●レシピ名/ユーザー名 から検索</h2> 
              <input type="text" name="main_search"  class="text-form" style="margin-left:60px">
              <input type="submit" value="検索!!" style="font-size: 20px">
          </form>

          <!-- 送信方法/送信先は要編集 ※各食材に番号を与えないとダメ？(3目並べを思い出せば...)-->
          <form action="/" method="post">
              <h2 id="form2">●食材から検索(5件まで)</h2>

                  <!-- 料理ジャンル選択 -->
                  <select name="recipe-genre" class="recipe-genre">
                      <option value="全て" selected>全て</option>
                      <option value="和食">和食</option>
                      <option value="洋食">洋食</option>
                      <option value="中華">中華</option>
                      <option value="韓国">韓国料理</option>
                      <option value="イタリアン">イタリアン</option>
                      <option value="フレンチ">フレンチ</option>
                      <option value="その他">その他</option>
                  </select>
                  <p id="form-text">※Ctrl+Enterで項目追加出来ます</p>

                  <!-- 食材入力欄 -->
                  <!-- forで配列の中を回す。 -->
                  <li v-for="(item, id) in items" :key="id">
                      <!-- 食材入力欄 v-focusでフォーカスが自動で当てられる -->
                      <input v-focus type="text" v-model="items[id]" class="text-form" @keydown.enter.ctrl="addInput()">
                          <img src="photo/Box.png" alt="ゴミ箱" @click="removeInput(id)" id="box-img">
                  </li>

                  <!-- 追加ボタン (v-ifにより入力欄5個未満の間表示される) -->
                  <button type="button" @click="addInput()" v-if="!maxInputCount" >
                      追加
                      (残り<span v-text="InputCount"></span>つ)
                  </button><br>

                  <input type="submit" value="検索!!" id="form2-button">
          </form>
      </div>
    <hr>
  </div>

  <div id="searched">
      <h2>{{RecipeData}}</h2>
  </div>

</template>

<script>
// import { reactive } from "vue";
import axios from 'axios';
export default {
    props:['RecipeData'],
  data(){
      return{
          // items…inputが入れる為の配列。初期値で空を１つ入れておく
          items: [''],
          // 食材用inputの最大個数
          maxInput: 5,
      }
  },
  mounted(){
      this.SearchRecipe(RecipeData);
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

      async SearchRecipe(data){
        const searchURL = '/api/recipes/' + data;
        const responce = await axios.get(searchURL);
        console.log(responce);
      }
  },
  computed: {
      // 上記v-if文で使用する関数。inputが5個未満の間追加ボタンを表示するv-if文で使用
      maxInputCount(){
          return (this.items.length >= this.maxInput);
      },
      // 食材用inputの数を数えてる(最大値-配列の個数)
      InputCount(){
          return this.maxInput - this.items.length;
      }
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
  #search-box{
    padding-right: 500px; 
    display:flex;
    width:100%;
    margin: 0 0 0 190px;
    padding-right:50px;
  }
</style>
