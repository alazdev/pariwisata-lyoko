<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
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
  </div>
</nav>
<section class="probootstrap-hero prohttp://localhost/probootstrap/frame/#featuresbootstrap-slant" style="background-image: url(<?php echo base_url()?>img/image_1.jpg);" data-section="home" data-stellar-background-ratio="0.5">
  <div class="container">
    <div class="row intro-text">
      <div class="col-md-8 col-md-offset-2 text-center">
        <div class="probootstrap-testimonial" align="center">
          <form align="center" action="proses_login" method="POST" class="probootstrap-form" enctype="multipart/form-data">
            <h2 class="text-black mt0">Login</h2>
            <div class="form-group">
              <p class="mb0"><input type="text" class="form-control" name="username" placeholder="Username" required></p>
            </div>
            <div class="form-group">
              <p class="mb0"><input type="password" class="form-control" name="password" placeholder="Password" required></p>
            </div>
            <div class="form-group">
              <input type="submit" class="btn btn-primary" value="Login">
              <a href="<?php echo base_url()?>index.php/login/register" class="btn btn-default smoothscroll">Register</a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>