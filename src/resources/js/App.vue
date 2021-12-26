<template>
  <div>
    {{ data.message }}
    <HelloWorld />
  </div>
</template>

<script>
import { reactive } from "vue";
import HelloWorld from './components/HelloWorld'

export default {
    name: 'App',
    components:{
        HelloWorld
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