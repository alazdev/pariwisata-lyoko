<head>
  <title>Edit Artikel</title>
  <link rel="stylesheet" href="<?php echo base_url()?>css/styles-merged.css">
  <link rel="stylesheet" href="<?php echo base_url()?>css/style.min.css">
  <link rel="stylesheet" href="<?php echo base_url()?>fonts/icomoon/style.css">
</head>
<section class="probootstrap-section probootstrap-bg-light" data-section="comment">
  <div class="container">
    <div class="row">
      <div align="center">
        <div class="probootstrap-testimonial" align="center">
          <form align="center" action="../edit_articles" method="POST" class="probootstrap-form" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php echo $articles['id']; ?>">
            <h2 class="text-black mt0">Edit Artikel</h2>
            <div class="form-group">
              <p class="mb0"><input type="text" class="form-control" name="judul" placeholder="Judul" value="<?php echo $articles['judul'];?>" required></p>
            </div>
            <div class="form-group">
              <p class="mb0"><input type="text" class="form-control" name="oleh" placeholder="Nama Kamu" value="<?php echo $articles['oleh'];?>" required></p>
            </div>
            <div class="form-group">
              <blockquote><p><textarea class="form-control" cols="30" rows="10" name="isi" placeholder="Isi Artikel" value="" required><?php echo $articles['isi'];?></textarea></p></blockquote>
            </div>
            <div class="form-group">
              <input type="submit" class="btn btn-primary" value="Edit">
              <a href="<?php echo base_url()?>index.php/admin" class="btn btn-default smoothscroll">Batalkan</a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>