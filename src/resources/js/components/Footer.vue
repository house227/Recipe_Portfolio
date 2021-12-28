<template>
  <div>
      <footer>
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
/* サイトロゴ */
#top_footer{
  display: flex;
  justify-content: space-between;
  color:dimgray;
  font-size: 30px;
  margin-bottom: 5px;
}

/* コピーライト */
#copy{
  justify-content: space-between;
  font-size: 10px;
  padding: 40px 0px 0px 10px;
  margin-bottom: 0px;
  color:dimgray;

}

/* フッター全体 */
footer {
  display: flex;
  justify-content: space-between;
  background: rgb(46, 46, 46);
}

/* フッター中央のリンク */
.footer_link{
  display:inline-block;
  padding: 30px 5px 10px 5px;
  margin-bottom: 0px;
  font-size: 15px;
  color: dimgray;
}

</style>