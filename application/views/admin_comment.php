<section class="probootstrap-section probootstrap-bg-light" data-section="comment">
  <div class="container">
    <div class="row text-center mb100">
      <div class="col-md-8 col-md-offset-2 probootstrap-section-heading">
        <h2 class="mb30 text-black probootstrap-heading">Alasan Orang-Orang Suka Dengan Website Pariwisata Lyoko</h2>
        <p>Kenapa Pariwisata Kami Diminati.</p>
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
          <p><a href="<?php echo base_url().'index.php/admin/delete_comment/'.$data['id'].'/'.$data['foto'];?>"><img width="20px" height="20px" src="<?php echo base_url().'img/delete.png';?>"> Hapus</a></p>
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
  </div>
</section>