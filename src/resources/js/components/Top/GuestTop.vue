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
                <!-- このimgの所にはDBから取得したレシピを配置(現在は仮で画像を直接配置) -->
                <!-- リンクも仮で1カ所のみとする(データのやり取りが出来たら編集) -->
                <a href="/RecipeViewGuest">
                    <img src="photo/Recipe1.jpg" alt="レシピ1" width="200" height="150">
                </a>
                <img src="photo/Recipe2.jpg" alt="レシピ2" width="200" height="150">
                <img src="photo/Recipe3.jpg" alt="レシピ3" width="200" height="150">
                <img src="photo/Recipe5.jpg" alt="レシピ5" width="200" height="150">
                <p>もっと見る...</p>
                <hr>
            </div>

            <!-- レシピ検索 -->
            <div id="search-recipe">
                <h1>★レシピ検索</h1>
                
                <!-- レシピ名/ユーザー名で検索 -->
                <!-- 送信方法/送信先は要編集 -->
                <div style="padding-right: 500px">
                    <!-- <form action="/recipes" method="get"> -->
                        <h2 id="form1">●レシピ名/ユーザー名 から検索</h2> 
                        <input type="text" name="main_search"  class="text-form" style="margin-left:60px"
                        v-model="keyword">
                        <input type="submit" value="検索!!" style="font-size: 20px"
                        v-on:click="doSearch">
                        <h2>{{item}}</h2>
                    <!-- </form> -->



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

                    <!-- 検索欄右上のコメント -->
                    <div id="search-text">
                        <h2>定番のレシピ名<span>や</span>検索ユーザー検索<span>!または、</span></h2>
                        <h2><span>“</span>今ある食材<span>”で出来るレシピも検索できます</span></h2>
                    </div>

                    <!-- ゲスト用ログイン/新規登録の促し -->
                    <div id="prompt">
                        <h2>アカウント登録<span>/</span>ログイン<span>をして</span></h2>
                        <h2 id="allergy-text">アレルギー情報<span>を登録しよう！</span></h2>

                        <!-- 新規登録かログインを押せる -->
                        <div id="route">
                            <!-- 仮でPタグだが、Routeに変えてページ以降出来るようにする -->
                            <a href="/NewUserCreate" id="route-tag1">新規登録</a>
                            <a href="/LoginTop" id="route-tag2">ログイン</a>
                        </div>
                    </div>
                </div>
                <hr>
            </div>

            <!-- 献立ランダム生成 -->
            <div id="auto-recipe">
                <h1>★献立ランダム作成</h1>
                <div style="font-size: 20px">
                    <h2 style="margin-bottom: 0px;">定番の和食から海外料理まで</h2>
                    <h2 id="strong-text">好きなジャンルを選ぶだけ<span style="color:black; font-size:35px">で</span></h2>
                    <h2 style="margin-top:0px;">ランダムで献立を作成します！</h2>
                </div>

                <!-- 送信先/送信方法は要変更 -->
                <form action="/" method="post">
                    <!-- 料理ジャンル選択 -->
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
                    <input type="submit" value="検索!!" style="font-size: 28px">
                </form>
            </div>
            
            <router-link to="/MakeRecipeTop" style="font-size:30px; ">
                レシピ投稿（仮ボタン）
            </router-link>
        </body>
    </div>
</template>

<script>
    import axios from 'axios'

    export default{
        data(){
            return{
                // items…inputが入れる為の配列。初期値で空を１つ入れておく
                items: [''],
                // 食材用inputの最大個数
                maxInput: 5,
                keyword:'親子丼',
                item:''
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
            async doSearch(){
                const searchURL = '/api/recipes/' + this.keyword
                const response = await axios.get(searchURL)
                console.log(response);
                console.log(response.data);
                console.log(response.data.title);
                this.item = response.data.title
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


        /* 「レシピ検索」ここから */

        /* 全体 */
        #search-recipe{
            text-align: center;
            position: relative;
        }

        /* タイトル */
        #search-recipe h1{
            color: rgb(255, 145, 0);
            text-decoration:underline rgb(255, 145, 0);
            padding-right: 700px;
        }

        /* フォーム欄個別調整用1 */
        #form1{
            padding-left: 30px;
            margin-bottom: 0px;
        }

        /* フォーム欄個別調整用2 */
        #form2{
            padding-right: 50px;
            margin-bottom: 0px;
        }
        #form-text{
            font-size: 15px;
            margin-bottom: 0px;
        }

        /* 検索ボタン */
        #form2-button{
            margin-left: 200px;
            font-size: 20px;
        }

        /* ジャンル用プルダウンメニュー */
        .recipe-genre{
            font-size:20px;
            margin-bottom: 10px;
        }

        /* テキストフォーム */
        .text-form{
            width: 17em;
            height: 2em;
        }

        /* ゴミ箱 */
        #box-img{
            cursor: hand;
            cursor: pointer;
        }

        /* 検索コメント */
        #search-text{
            width: 470px;
            color: red;
            border: 1px solid black;
            border-radius: 10px; 
            padding: 5px;
            position: absolute; left:50%; bottom:67%;
        }
        /* 検索コメント内SPAN */
        #search-text span{
            font-size: 20px;
            color: black;
        }

        /* ログイン促し欄 */
        #prompt{
            text-align: center;
            color: white;
            background-color: darksalmon;
            border: 1px solid black;
            border-radius: 20px; 
            position: absolute; left:60%; bottom:5%;
            padding: 5px;
        }
        #prompt span{
            color: black;
        }
        #allergy-text{
            color: yellow;
        }
        /* 新規登録/ログインの選択欄 */
        #route{
            display: flex;
            justify-content: center;
            gap: 2px 15px;
            border: 1px solid black;
            border-radius: 20px; 
            width: 200px;
            background-color: white;
            font-size: 20px;
            margin-left: 70px;
            
        }
        #route-tag1{
            color: blue;
        }
        #route-tag2{
            color: red;
        }

        /* 「レシピ検索」ここまで */


        /* 「献立作成」ここから */

        /* 全体 */
        #auto-recipe{
            text-align: center;
        }

        /* タイトル */
        #auto-recipe h1{
            color: rgb(255, 145, 0);
            text-decoration:underline rgb(255, 145, 0);
            font-size: 40px;
        }

        #strong-text{
            color:red; 
            margin-top:0px;
            margin-bottom:0px;
            font-size: 40px;
        }

        /* 「献立作成」ここまで */
</style>