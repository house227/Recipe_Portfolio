<template>
    <div>
        <header>
        <router-link to="/" id="top">Todays Recipe</router-link>
        <nav>
        <router-link
            v-for="list in navList" :key="list.to"
            :to="list.to" 
        >
            {{list.title}}
        </router-link>
        </nav>
    </header>
    <hr id="header">

</div>

</template>
 
<script>
export default {
  data(){
    return{
      navList:[
        {title:"hello", to:"/hello"},
        {title:"bye", to:"/bye"},
      ],
    }
  }
}
</script>
 
<style>
#top{
    display: flex;
  justify-content: space-between;
  background: white;
  color: red;
  font-size: 35px;
}
header {
  display: flex;
  justify-content: space-between;
  background: white;
  color: red;
  
}
h1 {
  padding: 0px;
  text-decoration-line: underline;
}
nav a{
  display:inline-block;
  padding: 10px;
  font-size: 30px;
  color: red;
}
hr {
    border-width: 2px;
}
</style>