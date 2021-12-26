<template>
  <div>
    {{ data.message }}
  </div>
</template>

<script>
import { reactive } from "vue";
export default {
    name:'HelloWorld',
    setup(){
        const data = reactive({
            message :'Bye Laravel Docker!'
        })
        return {
            data
        }
    }
};
</script>