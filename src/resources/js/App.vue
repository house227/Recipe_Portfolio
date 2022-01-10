<template>
    <!-- ベースの作成 -->
    <div>
        <!-- ヘッダー -->
        <HeaderGuestTop v-if="this.$route.path === '/'"/>

        <HeaderUserCreate v-else-if="this.$route.path === '/NewUserCreate'" />
        <HeaderUserCreate v-else-if="this.$route.path === '/SendMail'" />
        <HeaderUserCreate v-else-if="this.$route.path === '/CreateIndex'" />
        <HeaderUserCreate v-else-if="this.$route.path === '/CreateConfirm'" />
        <HeaderUserCreate v-else-if="this.$route.path === '/CreateEnd'" />

        <HeaderLogin v-else-if="this.$route.path === '/LoginTop'" />
        <HeaderLogin v-else-if="this.$route.path === '/ResetPass'" />
        <HeaderLogin v-else-if="this.$route.path === '/ResetSendMail'" />
        <HeaderLogin v-else-if="this.$route.path === '/ResetIndex'" />
        <HeaderLogin v-else-if="this.$route.path === '/ResetEnd'" />
        <!-- ここにルート別のコンポーネントが入る -->
        <router-view></router-view>
        <Footer />
    </div>
</template>

<script>
import { reactive } from "vue";
import HeaderGuestTop from './components/PageBase/Header_GuestTop.vue';
import HeaderUserCreate from './components/PageBase/Header_UserCreate.vue';
import HeaderLogin from './components/PageBase/Header_Login.vue';
import Footer from './components/PageBase/Footer.vue';


export default {
    name: 'App',
    components:{
        HeaderGuestTop,
        HeaderUserCreate,
        HeaderLogin,
        Footer,

    },

};
</script>