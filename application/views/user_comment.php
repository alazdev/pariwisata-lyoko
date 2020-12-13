<section class="probootstrap-section probootstrap-bg-light" data-section="comment">
  <div class="container">
    <div class="row text-center mb100">
      <div class="col-md-8 col-md-offset-2 probootstrap-section-heading">
        <h2 class="mb30 text-black probootstrap-heading">Alasan Orang-Orang Suka Dengan Website Pariwisata Lyoko</h2>
      </div>
    </div>
    <!-- END row -->
    <div class="row">
      <?php foreach($comment as $data){ ?>
      <div class="col-md-4 col-sm-6 col-xs-12">
        <div class="probootstrap-testimonial">
          <p><img src="<?php if ($data['foto']){echo base_url().'img/'.$data['foto'];}else{echo base_url().'img/laptop_1.jpg';}?>" class="img-responsive img-circle probootstrap-author-photo" alt="Foto Profile"></p>
          <p class="mb10 probootstrap-rate">
            <?php if($data['star']==5){ ?>
            <i class="icon-star"></i>
            <i class="icon-star"></i>
            <i class="icon-star"></i>
            <i class="icon-star"></i>
            <i class="icon-star"></i>
            <?php } else if($data['star']==4){ ?>
            <i class="icon-star"></i>
            <i class="icon-star"></i>
            <i class="icon-star"></i>
            <i class="icon-star"></i>
            <i class="icon-star-outlined"></i>
            <?php } else if($data['star']==3){ ?>
            <i class="icon-star"></i>
            <i class="icon-star"></i>
            <i class="icon-star"></i>
            <i class="icon-star-outlined"></i>
            <i class="icon-star-outlined"></i>
            <?php } else if($data['star']==2){ ?>
            <i class="icon-star"></i>
            <i class="icon-star"></i>
            <i class="icon-star-outlined"></i>
            <i class="icon-star-outlined"></i>
            <i class="icon-star-outlined"></i>
            <?php } else { ?>
            <i class="icon-star"></i>
            <i class="icon-star-outlined"></i>
            <i class="icon-star-outlined"></i>
            <i class="icon-star-outlined"></i>
            <i class="icon-star-outlined"></i>
            <?php } ?>
          </p>
          <blockquote>
            <p><?php echo $data['comment']; ?>.</p>
          </blockquote>
          <p class="mb0">&mdash; <?php echo $data['by']; ?></p>
        </div>
      </div>
      <?php if ($data['id']%2){ ?>
      <?php } else if ($data['id']%3){ ?>
      <?php } else if ($data['id']%4){ ?>
      <div class="clearfix visible-sm-block"></div>
      <?php } else { ?>
      <div class="clearfix visible-sm-block"></div>
      <?php } } ?>
    </div>
    <div class="col-md-6 col-sm-6 col-xs-12">
      <div class="probootstrap-testimonial">
        <form action="user/add_comment" method="POST" class="probootstrap-form" enctype="multipart/form-data">
          <h2 class="text-black mt0">Komentarmu</h2>
          <div class="form-group">
          <div class="custom-file">
            <input type="file" class="custom-file-input" id="customFile" name="foto">
            <label class="custom-file-label" for="customFile"></label>
          </div>
          </div>
          <div class="form-group">
            <p class="mb10 probootstrap-rate">
              <select name="star" class="custom-select" require>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
              </select> Bintang?
            </p>
          </div>
          <div class="form-group">
            <blockquote><p><textarea class="form-control" cols="30" rows="10" name="comment" placeholder="Masukkan Komentar" required></textarea></p></blockquote>
          </div>
          <div class="form-group">
            <p class="mb0"><input type="text" class="form-control" name="by" placeholder="Nama Kamu" required></p>
          </div>
          <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Add">
          </div>
        </form>
      </div>
    </div>
  </div>
</section>