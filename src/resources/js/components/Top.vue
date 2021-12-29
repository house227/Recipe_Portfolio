<template>
    <!-- トップページ -->
    <div>
        <body>
            <!-- タイトル -->
            <div id="top-title">
                <div id="comment">
                    <h3>今日は何作ろう...</h3>
                    <h2>あなたに合ったレシピが <br> きっと見つかる！</h2>
                </div>
                <img src="photo/Search.jpg" alt="検索" width="300" height="200">
            </div>
            
            <!-- おすすめの料理 -->
            <div id="recommend-recipe">
                <h1>★おすすめのレシピ</h1>
                <!-- このimgの所にはDBから取得したレシピ画像を配置(現在は仮で画像を直接配置) -->
                <img src="photo/Recipe1.jpg" alt="レシピ1" width="200" height="150">
                <img src="photo/Recipe2.jpg" alt="レシピ2" width="200" height="150">
                <img src="photo/Recipe3.jpg" alt="レシピ3" width="200" height="150">
                <img src="photo/Recipe5.jpg" alt="レシピ5" width="200" height="150">
                <p>もっと見る...</p>
                <hr>
            </div>
            
        </body>
    </div>
</template>

<script>
</script>

<style>
        /* ここから「トップページタイトル」 */

    /* トップページタイトル */
    #top-title{
        display: flex;
        flex-wrap: nowrap;
        justify-content: center;
    }

    /* タイトルコメント全体 */
    #comment{
        padding-top: 20px;
        padding-right: 10px;
    }

    /* タイトルコメント１ */
    #comment h3{
        margin-bottom: 0px;
        text-align: center;
        color:dimgray;
    }

    /* タイトルコメント２ */
    #comment h2{
        margin-top: 0px;
        text-align: center;
        color:red;
    }

        /* 「トップページタイトル」ここまで */


        /* ここから「おすすめレシピ」 */

    /* 全体 */
    #recommend-recipe{
        text-align: center;
    }


    /* タイトル */
    #recommend-recipe h1{
        color: rgb(255, 145, 0);
        text-decoration:underline rgb(255, 145, 0);
        padding-right: 600px;
    }

    /* 画像 */
    #recommend-recipe img{
        widows: 100%;
        max-width: 400px;
        max-height: 350px;
        margin-right: 20px;
        border: 1px solid dimgray;
    }

    /* 全表示用リンク */
    #recommend-recipe p{
        color: blue;
        padding-left: 800px;
    }

        /* 「おすすめレシピ」ここまで */
</style>