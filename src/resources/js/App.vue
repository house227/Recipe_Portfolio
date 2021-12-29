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
import Header from './components/Header.vue';
import Footer from './components/Footer.vue';
import test from './components/test.vue';


export default {
    name: 'App',
    components:{
        Header,
        Footer
    }
};
</script>