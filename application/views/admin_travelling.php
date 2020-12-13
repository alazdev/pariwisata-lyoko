<section class="probootstrap-section probootstrap-bg-light" id="travelling" data-section="travelling">
  <div class="container">
    <div class="row text-center mb100">
      <div class="col-md-8 col-md-offset-2 probootstrap-section-heading">
        <h2 class="mb30 text-black probootstrap-heading">Objek Pariwisata</h2>
        <p>Temukan destinasi wisata yang bagus di sini</p>
        <p>
          <a href="admin/admin_add_travelling"><img width="100px" height="100px" src="<?php echo base_url().'img/add.png';?>"> </br> Klik disini untuk menambahkan destinasi</a>
        </p>
      </div>
    </div>
    <?php
      $no = 0;
      foreach($travelling as $data){
        if ($no % 2) { ?>
    <div class="row mb100">
      <div class="col-md-8 col-md-pull-2 probootstrap-animate">
        <p><img src="<?php echo base_url().'img/'.$data['gambar'];?>" class="img-responsive probootstrap-shadow"></p>
      </div>
      <div class="col-md-4 col-md-pull-1 probootstrap-section-heading">
      <h3 class="text-primary probootstrap-heading-2"><?php echo $data['nama'];?></h3>
        <p><p><?php echo $data['ket'];?>.</p></p>
        <ul class="probootstrap-list">
          <li class="probootstrap-check">
            <a href="<?php echo base_url().'index.php/admin/add_edit_travelling/'.$data['id']; ?>"><img width="20px" height="20px" src="<?php echo base_url().'img/edit.png';?>"> Edit</a>
          </li>
          <li class="probootstrap-check">
            <a href="<?php echo base_url().'index.php/admin/delete_travelling/'.$data['id']; ?>"><img width="20px" height="20px" src="<?php echo base_url().'img/delete.png';?>"> Hapus</a>
          </li>
        </ul>
      </div>
    </div>
    <?php } else { ?>
    <div class="row mb100">
      <div class="col-md-8 col-md-push-5 probootstrap-animate">
        <p><img src="<?php echo base_url().'img/'.$data['gambar'];?>" class="img-responsive probootstrap-shadow"></p>
      </div>
      <div class="col-md-4 col-md-pull-8 probootstrap-section-heading">
        <h3 class="text-primary probootstrap-heading-2"><?php echo $data['nama'];?></h3>
        <p><p><?php echo $data['ket'];?>.</p></p>
        <ul class="probootstrap-list">
          <li class="probootstrap-check">
            <a href="<?php echo base_url().'index.php/admin/add_edit_travelling/'.$data['id']; ?>"><img width="20px" height="20px" src="<?php echo base_url().'img/edit.png';?>"> Edit</a>
          </li>
          <li class="probootstrap-check">
            <a href="<?php echo base_url().'index.php/admin/delete_travelling/'.$data['id']; ?>"><img width="20px" height="20px" src="<?php echo base_url().'img/delete.png';?>"> Hapus</a>
          </li>
        </ul>
      </div>
    </div>
    <?php } $no++;} ?>
  </div>
</section>