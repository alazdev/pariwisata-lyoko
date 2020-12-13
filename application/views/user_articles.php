<section class="probootstrap-section" data-section="articles">
  <div class="container">
     <div class="row text-center mb100">
      <div class="col-md-8 col-md-offset-2 probootstrap-section-heading">
        <h2 class="mb30 text-black probootstrap-heading">Artikel</h2>
        <p>Temukan artikel yang menarik</p>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="row">
        </div>
        <div class="row">
          <?php foreach($articles as $data){ ?>
          <?php if($data['id']%2){ ?>
          <div class="col-md-6">
            <h4 class="text-black probootstrap-check-2"><?php echo $data['judul'];?> By <?php echo $data['oleh'];?></h4>
              <p><?php echo $data['isi']; ?></p>
          </div>
          <?php } else { ?>
          <div class="col-md-6">
            <h4 class="text-black probootstrap-check-2"><?php echo $data['judul'];?> By <?php echo $data['oleh'];?></h4>
            <p><?php echo $data['isi'];?></p>
          </div>
          <?php } } ?>
        </div>
      </div>
    </div>
  </div>
</section>