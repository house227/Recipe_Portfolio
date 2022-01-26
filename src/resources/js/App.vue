<template>
    <!-- ベースの作成 -->
    <div>
        <!-- ヘッダー -->

        <!-- ゲスト用 -->
            <!-- ゲスト用Topページ -->
        <HeaderGuestTop v-if="this.$route.path === '/'"/>
            <!-- ゲスト用レシピ表示ページ -->
        <HeaderGuestTop v-else-if="this.$route.path === '/RecipeViewGuest'"/>
            <!-- ユーザー用レシピ表示ページ -->
        <HeaderUserTop v-else-if="this.$route.path === '/UserTop'" />


        <!-- 新規登録 -->
            <!-- 新規登録 -->
        <HeaderUserCreate v-else-if="this.$route.path === '/NewUserCreate'" />
            <!-- メール送信完了ページ -->
        <HeaderUserCreate v-else-if="this.$route.path === '/SendMail'" />
            <!-- 登録情報詳細設定ページ(メールのURLから来たページ） -->
        <HeaderUserCreate v-else-if="this.$route.path === '/CreateIndex'" />
            <!-- 内容確認ページ -->
        <HeaderUserCreate v-else-if="this.$route.path === '/CreateConfirm'" />
            <!-- 完了ページ -->
        <HeaderUserCreate v-else-if="this.$route.path === '/CreateEnd'" />

        <!-- ログイン -->
            <!-- ログインTopページ -->
        <HeaderLogin v-else-if="this.$route.path === '/LoginTop'" />

        <!-- マイページ -->
            <!-- マイページTop -->
        <HeaderUserTop v-else-if="this.$route.path === '/MypageTop'" />
            <!-- マイレシピ一覧画面 -->
        <HeaderUserTop v-else-if="this.$route.path === '/MypageRecipe'" />
            <!-- お気に入り一覧画面 -->
        <HeaderUserTop v-else-if="this.$route.path === '/MypageFavorite'" />
            <!-- コメント一覧画面 -->
        <HeaderUserTop v-else-if="this.$route.path === '/MypageNewComment'" />



        <!-- パスワード再設定 -->
            <!-- パスワード再設定Topページ -->
        <HeaderLogin v-else-if="this.$route.path === '/ResetPass'" />
            <!-- メール送信完了ページ -->
        <HeaderLogin v-else-if="this.$route.path === '/ResetSendMail'" />
            <!-- パスワード再設定ページ -->
        <HeaderLogin v-else-if="this.$route.path === '/ResetIndex'" />
            <!-- 再設定完了ページ -->
        <HeaderLogin v-else-if="this.$route.path === '/ResetEnd'" />

        <!-- レシピ投稿 -->
            <!-- レシピ作成ページ -->
        <HeaderUserTop v-else-if="this.$route.path === '/MakeRecipeTop'" />
        <HeaderUserTop v-else-if="this.$route.path === '/MakeRecipePreview'" />

        <!-- レシピ検索結果 -->
            <!-- ゲスト版名前検索結果 -->
        <HeaderGuestTop v-else-if="this.$route.path === '/recipes'" />

        <!-- ここにルート別のコンポーネントが入る -->
        <router-view></router-view>



        <Footer />
    </div>
</template>

<script>
import { reactive } from "vue";
import HeaderGuestTop from './components/PageBase/Header_GuestTop.vue';
import HeaderUserTop from './components/PageBase/Header_UserTop.vue';
import HeaderUserCreate from './components/PageBase/Header_UserCreate.vue';
import HeaderLogin from './components/PageBase/Header_Login.vue';
import Footer from './components/PageBase/Footer.vue';


export default {
    name: 'App',
    components:{
        HeaderGuestTop,
        HeaderUserTop,
        HeaderUserCreate,
        HeaderLogin,
        Footer,

    },

};
</script>