<template>
  <div>
    <body>
      <!-- マイページ上部 -->
      <div id="mypage-top">
        <!-- プロフィール部分 -->
        <div id="avatar">
          <img src="photo/Avatar.jpeg" alt="人" width="150" height="150" id="avatar-img">
          <!-- クリックでフォローリスト画面へ。人数はフォロー中間テーブルから取得 -->
          <div id="follow">
            <a href="/">follow: 10</a>
            <p>/</p>
            <a href="/UserTop">follower: 15</a>
          </div>
          <!-- プロフィール設定画面へ -->
          <div id="setting">
            <router-link to="/"
              :class="{mouseOn:active_setting===true, mouseOff:active_setting===false}" 
              @mouseover="active_setting=true" 
              @mouseout="active_setting=false"
              id="setting-button">
              プロフィール設定
            </router-link>
            <p>アレルギーの編集もこちらから</p>
          </div>
        </div>

        <!-- マイページ右側フリー部分 -->
        <div id="mypage-sub">
            <!-- ifでオススメ表示など後からここに足していく？ -->
          <div id="makeRecipe-link">
            <router-link to="/MakeRecipeTop"
                :class="{makeRecipeOn:active_recipe===true, makeRecipeOff:active_recipe===false}" 
                @mouseover="active_recipe=true" 
                @mouseout="active_recipe=false"
                id="makeRecipe-button">
                レシピを投稿!!
            </router-link>
          </div>
        </div>
      </div>


      <div id="menu">
        <a href="/MypageRecipe"
          :class="{MenuOn:active_menu1===true, MenuOff:active_menu1===false}" 
          @mouseover="active_menu1=true" 
          @mouseout="active_menu1=false">
          マイレシピ
        </a>
        <a href="/MypageFavorite"
          :class="{MenuOn:active_menu2===true, MenuOff:active_menu2===false}" 
          @mouseover="active_menu2=true" 
          @mouseout="active_menu2=false">
          お気に入り
        </a>
        <a href="/MypageNewComment"
          :class="{MenuOn:active_menu3===true, MenuOff:active_menu3===false}" 
          @mouseover="active_menu3=true" 
          @mouseout="active_menu3=false">
          新着コメント
        </a>
      </div>
      
      <h1>コメント画面</h1>

    </body>
  </div>
</template>

<script>
// import { reactive } from "vue";
export default {
  data(){
    return{
      active_setting: false,
      active_recipe: false,
      active_menu1: false,
      active_menu2: false,
      active_menu3: false,
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

  /* Top部分 */

    /* 全体 左*/
  #avatar{
    position: relative;
    top: 50px;
    left: 10%;
    width: 50%;
    margin-right: 0;
  }

  /* 全体 右 */
  #mypage-sub{
    position: relative;
    left: 65%;
    bottom: 80px;
    width: 50%;
  }

    /* プロフィール画像 */
  #avatar-img{
    border: 1px solid black;
    border-radius: 50%;
    padding: 10px;
    text-align: center;
  }

    /* フォロー */
  #follow{
    margin-bottom: 20px;
  }
  #follow p{
    display: inline;
    font-size: 18px;
    margin: 0 10px 0 10px;
  }


  /* プロフィール設定 */
    /* ボタン自体の設定はレシピを投稿側に記述 */
    /* ページ別でのボタン設定 */
  #setting-button{
    font-size: 22px;
  }
  #makeRecipe-button{
    padding: 40px 5px 40px 5px ;
  }

  #setting p{
    margin: 10px 0 50px 100px;
    font-size: 18px;
    color: rgb(255, 145, 20);
  }


  /* メニュー部分 */
  #menu{
    display: flex;
    text-align: center;
    /* margin: 0 0 0 100px; */
  }

  #menu a{
    font-size: 40px;
    color: black;
    text-decoration: none;
    padding: 5px 15px 5px 15px;
    margin:0 0 0 0;
    border: 1px solid black;
    width: 8em;
    text-align: center;
  }

</style>
