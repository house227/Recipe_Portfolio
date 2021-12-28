<template>
    <!-- ベースの作成 -->
    <div>
        <!-- ヘッダー -->
        <Header />
        {{ data.message }}

        <router-view></router-view>
    </div>
</template>

<script>
import { reactive } from "vue";
import HelloWorld from './components/HelloWorld';
import Header from './components/Header.vue';


export default {
    name: 'App',
    components:{
        HelloWorld,
        Header
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