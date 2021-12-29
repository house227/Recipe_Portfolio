<template>
    <div id="footer-div">
        <footer>
            <!-- route-link　でrouterにあるリンクを使用してページを切り替える -->
            <p id="copy">&copy; 2021 Todays Recipe.</p>
            <nav>
              <p class="footer_link">トップ</p>
              <p class="footer_link">サイト概要</p>
              <p class="footer_link">お問い合わせ</p>
            </nav>
            <router-link to="/" id="top_footer">Todays Recipe</router-link>
        </footer>

    </div>

</template>
 
<script>
export default {
  data(){

  }
}
</script>
 
<style>

footer{
  display: flex;
  justify-content: space-between;
  width: 80%;
  margin: 0 auto;
  padding:0 100px;
  max-width: 1480px;
  background: rgb(46, 46, 46);
}
/* ヘッダーサイトロゴ */
#top_footer{
  display: flex;
  justify-content: space-between;
  color:dimgray;
  font-size: 30px;
}


/* リンクナビ */
.footer_link {
  display:inline-block;
  padding: 30px 5px 10px 15px;
  margin-bottom: 0px;
  font-size: 15px;
  color: dimgray;
}

/* コピーライト */
#copy{
  justify-content: space-between;
  font-size: 10px;
  padding: 40px 0px 0px 0px;
  margin-bottom: 0px;
  color:dimgray;
}
</style>