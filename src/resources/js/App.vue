<template>
    <!-- ベースの作成 -->
    <div>
        <!-- ヘッダー -->
        <Header />
        <!-- ここにルート別のコンポーネントが入る -->
        <router-view></router-view>
        <Footer />
    </div>
</template>

<script>
import { reactive } from "vue";
import Header from './components/PageBase/Header.vue';
import Footer from './components/PageBase/Footer.vue';


export default {
    name: 'App',
    components:{
        Header,
        Footer
    }
};
</script>