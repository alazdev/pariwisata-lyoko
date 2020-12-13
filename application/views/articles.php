<head>
  <title>Artikel</title>
  <link rel="stylesheet" href="<?php echo base_url()?>css/styles-merged.css">
  <link rel="stylesheet" href="<?php echo base_url()?>css/style.min.css">
  <link rel="stylesheet" href="<?php echo base_url()?>fonts/icomoon/style.css">
</head>
<section class="probootstrap-section probootstrap-bg-light" data-section="comment">
  <div class="container">
    <div class="row">
      <div align="center">
        <div class="probootstrap-testimonial" align="center">
          <form align="center" action="add_articles" method="POST" class="probootstrap-form" enctype="multipart/form-data">
            <h2 class="text-black mt0">Tambah Artikel</h2>
            <div class="form-group">
              <p class="mb0"><input type="text" class="form-control" name="judul" placeholder="Judul" required></p>
            </div>
            <div class="form-group">
              <p class="mb0"><input type="text" class="form-control" name="oleh" placeholder="Nama Kamu" required></p>
            </div>
            <div class="form-group">
              <blockquote><p><textarea class="form-control" cols="30" rows="10" name="isi" placeholder="Isi Artikel" required></textarea></p></blockquote>
            </div>
            <div class="form-group">
              <input type="submit" class="btn btn-primary" value="Tambah">
              <a href="<?php echo base_url()?>index.php/admin" class="btn btn-default smoothscroll">Batalkan</a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>