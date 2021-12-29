<template>
    <div>
        <!-- getで送れる事が分かった。postだとcsrf対策しないとエラー -->
        <form action="/test" method="get">
            <input type="hidden" name="_token" v-bind:value="csrf">
            <input type="text" v-model="name1" name="text1">
            <input type="submit" value="クリック">
        </form>

    </div>
</template>

<script>
    export default {
        data(){

        }
    }
</script>
