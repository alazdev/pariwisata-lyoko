<section class="probootstrap-section" data-section="articles">
  <div class="container">
     <div class="row text-center mb100">
      <div class="col-md-8 col-md-offset-2 probootstrap-section-heading">
        <h2 class="mb30 text-black probootstrap-heading">Artikel</h2>
        <p>Temukan artikel yang menarik</p>
        <p>
          <a href="admin/admin_add_articles"><img width="100px" height="100px" src="<?php echo base_url().'img/add.png';?>"></br>Klik disini untuk menambahkan artikel</a>
        </p>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="row">
          <?php foreach($articles as $data){ ?>
          <?php if($data['id']%2){ ?>
          <div class="col-md-6">
            <h4 class="text-black probootstrap-check-2">
              <a href="<?php echo base_url().'index.php/admin/add_edit_articles/'.$data['id'];?>"><img width="20px" height="20px" src="<?php echo base_url().'img/edit.png';?>"></a>
              <a href="<?php echo base_url().'index.php/admin/delete_articles/'.$data['id'];?>"><img width="20px" height="20px" src="<?php echo base_url().'img/delete.png';?>"></a> <?php echo $data['judul'];?> By <?php echo $data['oleh'];?>
            </h4>
              <p>
                <?php echo $data['isi']; ?>
              </p>
          </div>
          <?php } else { ?>
          <div class="col-md-6">
            <h4 class="text-black probootstrap-check-2">
              <a href="<?php echo base_url().'index.php/admin/add_edit_articles/'.$data['id'];?>"><img width="20px" height="20px" src="<?php echo base_url().'img/edit.png';?>"></a>
              <a href="<?php echo base_url().'index.php/admin/delete_articles/'.$data['id'];?>"><img width="20px" height="20px" src="<?php echo base_url().'img/delete.png';?>"></a> <?php echo $data['judul'];?> By <?php echo $data['oleh'];?>
            </h4>
            <p>
              <?php echo $data['isi'];?>
          </p>
          </div>
          <?php } } ?>
        </div>
      </div>
    </div>
  </div>
</section>