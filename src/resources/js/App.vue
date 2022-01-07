<template>
    <!-- ベースの作成 -->
    <div>
        <!-- ヘッダー -->
        <HeaderGuestTop v-if="this.$route.path === '/'"/>
        <HeaderUserCreate v-if="this.$route.path === '/newusercreate'"/>
        <!-- ここにルート別のコンポーネントが入る -->
        <router-view></router-view>
        <Footer />
    </div>
</template>

<script>
import { reactive } from "vue";
import HeaderGuestTop from './components/PageBase/Header_GuestTop.vue';
import HeaderUserCreate from './components/PageBase/Header_UserCreate.vue';
import Footer from './components/PageBase/Footer.vue';


export default {
    name: 'App',
    components:{
        HeaderGuestTop,
        HeaderUserCreate,
        Footer,

    },

};
</script>