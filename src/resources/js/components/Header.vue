<template>
    <div>
        <header>
            <!-- route-link　でrouterにあるリンクを使用してページを切り替える -->
            <router-link to="/" id="top_header">Todays Recipe</router-link>
            <h2 id="guest">ようこそゲストさん</h2>
            <nav>
            <router-link to="/hello">hello</router-link>
            <router-link to="/bye">bye</router-link>
            </nav>
        </header>
        <hr>

    </div>

</template>
 
<script>
  export default {
    data(){

    }
  }
</script>
 
<style>
header{
  width: 80%;
  margin: 0 auto;
  max-width: 1480px;
}
/* ヘッダーサイトロゴ */
#top_header{
  display: flex;
  justify-content: space-between;
  background: white;
  color: red;
  font-size: 35px;
}

/* ヘッダー全体 */
header {
  display: flex;
  justify-content: space-between;
  background: white;
}

/* ウェルカムロゴ */
.guest{
    color: black;
}

/* リンクナビ */
nav a{
  display:inline-block;
  padding: 10px;
  font-size: 30px;
  color: red;
}

hr {
    border-width: 2px;
    max-width: 1480px;
}
</style>