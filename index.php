<!DOCTYPE html>
<html>
<div w3-include-html="header/meta.html"></div>
<style>
body,h1 {font-family: "Raleway", sans-serif}
body, html {height: 100%}
.bgimg {
  background-image: url('img/deep_field_lowsat.jpg');
  min-height: 100%;
  background-position: center;
  background-size: cover;
}
</style>
<body>

<div class="bgimg w3-display-container w3-animate-opacity w3-text-white">
  <!-- <div class="w3-display-topleft w3-padding-large w3-xlarge">
    Logo
  </div> -->
  <div class="w3-display-middle" style="min-width:300px">
    <h1 class="w3-jumbo w3-animate-top">el sentit.</h1>
    <hr class="w3-border-grey" style="margin:auto;width:40%">
    <div class="w3-padding-32">
         <?php include('header/menu.html'); ?>
     <!-- <div w3-include-html="header/menu.html"></div> -->
    </div>
    <!-- <p class="w3-large w3-center">35 days left</p> -->
  </div>
  <!-- <div class="w3-display-bottomleft w3-padding-large">
    Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a>
  </div> -->
</div>

</body>
</html>

<script src="js/importHtml.js"></script>
<script>
includeHTML();
</script>
