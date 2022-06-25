<div class="container-sub">
  
<?php echo form_open(base_url().'portal/portal/simpan'); ?>
  <div class="input-group mb-3">
    <input type="text" class="form-control" name="nim" placeholder="NIM Anda" aria-label="Recipient's username" aria-describedby="basic-addon2" required>
    <div class="input-group-append"></div>
  </div>

  <div class="input-group">
    <div class="input-group-prepend">
      <span class="input-group-text" id="">First and last name</span>
    </div>
    <input type="text" name="nama1" class="form-control" placeholder="first name" required>
    <input type="text" name="nama2" class="form-control" placeholder="last name" required>
  </div>
  <br>
  <div class="input-group">
    <div class="input-group-prepend"><span class="input-group-text">Kelas</span></div>
    <input type="text" class="form-control" name="kelas" placeholder="Isi Lengkap Kelas" aria-label="Recipient's username" aria-describedby="basic-addon2" required>
  </div>
  <button class="btn btn-primary" type="submit">Simpan</button>
<?php echo form_close();?>

</div>    