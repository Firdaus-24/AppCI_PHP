<div class="container-sub">
  
<?php echo form_open(base_url().'portal/Upd_data/simpan'); 
  foreach ($getIt as $key => $value){ ?>

  <div class="input-group mb-3">
    <input type="text" class="form-control" name="nim" value="<?php echo $value->nim; ?>" aria-label="Recipient's username" aria-describedby="basic-addon2" readonly>
    <div class="input-group-append"></div>
  </div>
  <div class="input-group">
    <div class="input-group-prepend">
      <span class="input-group-text" id="">First and last name</span>
    </div>
    <input type="text" name="nama1" class="form-control" value="<?php echo $value->nama1; ?>" required>
    <input type="text" name="nama2" class="form-control" value="<?php echo $value->nama2; ?>" required>
  </div>
  <br>
  <div class="input-group">
    <div class="input-group-prepend"><span class="input-group-text">Kelas</span></div>
    <select>
      <?php foreach ($level as $key => $value) { ?>
      <option value="<?php echo $value->level; ?>"><?php echo $value->level; ?></option>
      <?php } ?>
    </select> 
  </div>
  <button class="btn btn-primary" type="submit">Simpan</button>

  <?php } ?>

<?php echo form_close();?>

</div>    