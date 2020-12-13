<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pariwisata Lyoko</title>
    <meta name="description" content="Free Bootstrap Theme by uicookies.com">
    <meta name="keywords" content="Free website templates, Free bootstrap themes, Free template, Free bootstrap, Free website template">
    <link rel="stylesheet" href="<?php echo base_url()?>css/styles-merged.css">
    <link rel="stylesheet" href="<?php echo base_url()?>css/style.min.css">
    <link rel="stylesheet" href="<?php echo base_url()?>fonts/icomoon/style.css">
  </head>
  <body>
<nav class="navbar navbar-default probootstrap-navbar">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo base_url()?>" title="uiCookies:Frame">Pariwisata Lyoko</a>
    </div>
    <div class="navbar-collapse collapse">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="<?php echo base_url()?>" data-nav-section="home">Home</a></li>
        <li><link><a href="<?php echo base_url()?>index.php/user_articles" data-nav-section="articles">Artikel</a></li>
        <li><a href="<?php echo base_url()?>index.php/user_articles" data-nav-section="travelling">Objek Wisata</a></li>
        <li><a href="<?php echo base_url()?>index.php/user_articles" data-nav-section="comment">Komentar</a></li>
        <li><a href="<?php echo base_url()?>index.php/user_articles" data-nav-section="contact">Kontak</a></li>
        <li><a href="<?php echo base_url().'index.php/login/login';?>" onclick="leave()">Login</a></li>
      </ul>
    </div>
  </div>
</nav>
<section class="probootstrap-hero prohttp://localhost/probootstrap/frame/#featuresbootstrap-slant" style="background-image: url(<?php echo base_url()?>img/image_1.jpg);" data-section="home" data-stellar-background-ratio="0.5">
  <div class="container">
    <div class="row intro-text">
      <div class="col-md-8 col-md-offset-2 text-center">
        <h1 class="probootstrap-heading probootstrap-animate">Hai Selamat Datang di Website Pariwisata Lyoko, Tempat Dimana Anda Bisa Menemukan Artikel dan Objek Wisata.</h1>
        <div class="probootstrap-subheading center">
          <p class="probootstrap-animate"><a href="#travelling" class="btn btn-default smoothscroll" role="button">Lihat</a></p>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
<script>
function leave() {
  window.location.href="<?php echo base_url().'index.php/login/login';?>";
}
</script>
</html>