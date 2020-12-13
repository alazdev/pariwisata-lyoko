<section class="probootstrap-section probootstrap-bg-light" data-section="contact">
  <h1 align="center" class="text-black mt0">Laporan dari Pengguna</h1>
</section>
<section class="probootstrap-section probootstrap-bg-light" data-section="contact">
  <div class="container">
    <div class="row">
      <div class="col-md-3 col-md-push-1">
        <table class="table probootstrap-contact-details" align="center">
          <tr>
            <th><span class="text-uppercase">Email</span></th>
            <th><span class="text-uppercase">Telepon</span></th>
            <th><span class="text-uppercase">Nama</span></th>
            <th><span class="text-uppercase">Pesan</span></th>
          </tr>
          <?php foreach($contact as $data){ ?>
          <tr>
            <td><?php echo $data['email']; ?></td>
            <td><?php echo $data['phone']; ?></td>
            <td><?php echo $data['name']; ?></td>
            <td><p><?php echo $data['message']; ?></p></td>
          </tr>
          <?php } ?>
        </table>
      </div>
    </div>
  </div>
  </div>
</section>