<section class="probootstrap-section probootstrap-cta">
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2 text-center">
        <h2 class="probootstrap-heading">Login Sebagai Admin</h2>
        <p class="probootstrap-sub-heading">Kamu bisa menambah, mengedit, dan menghapus data.</p>
        <p><a href="<?php echo base_url().'index.php/admin'?>" class="btn btn-black">Login</a></p>
      </div>
    </div>
  </div>
</section>
<section class="probootstrap-section probootstrap-bg-light" data-section="contact">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <form action="user/report" method="POST" class="probootstrap-form">
          <h2 class="text-black mt0">Laporkan</h2>
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Nama Kamu" name="name" required>
          </div>
          <div class="form-group">
            <input type="email" class="form-control" placeholder="Email Kamu" name="email" required>
          </div>
          <div class="form-group">
            <input type="phone" class="form-control" placeholder="Telepon @12 Digit Angka" name="phone" required>
          </div>
          <div class="form-group">
            <textarea class="form-control" cols="30" rows="10" placeholder="Tuliskan Pesan" name="message" required></textarea>
          </div>
          <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Kirim">
          </div>
        </form>
      </div>
      <div class="col-md-3 col-md-push-1">
        <ul class="probootstrap-contact-details">
          <li>
            <span class="text-uppercase">Email</span>
            pariwisata_lyoko_justexample@gmail.com
          </li>
          <li>
            <span class="text-uppercase">Phone</span>
            +(62) 851 5605 5275
          </li>
          <li>
            <span class="text-uppercase">Address</span>
            Padang, Indonesia <br>
            Mungka street, Lima Puluh Kota
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>