<template>
    <!-- ベースの作成 -->
    <div>
        <!-- ヘッダー -->
        <Header />
        {{ data.message }}
        <router-view></router-view>
        <Footer />
    </div>
</template>

<script>
import { reactive } from "vue";
import HelloWorld from './components/HelloWorld';
import Header from './components/Header.vue';
import Footer from './components/Footer.vue';


export default {
    name: 'App',
    components:{
        HelloWorld,
        Header,
        Footer
    },
    setup(){
        const data = reactive({
            message :'Hello Docker!'
        })
        return {
            data
        }
    }
};
</script>