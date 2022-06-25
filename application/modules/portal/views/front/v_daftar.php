<div class="container-sub">
<table class="table table-striped table-bordered">
  <thead>
    <tr>
      <th scope="col"><h5>No</h5></th>
      <th scope="col"><h5>NIM</h5></th>
      <th scope="col"><h5>NAMA DEPAN</h5></th>
      <th scope="col"><h5>NAMA BELAKANG</h5></th>
      <th scope="col"><h5>Kelas</h5></th>
      <th scope="col"><h5>Action</h5></th>
    </tr>
  </thead>
  <tbody>
    <?php 
    $no=1;
    foreach ($getIt as $key => $value) {
    ?>
    <tr>
      <th scope="row"><h6><?php echo $no; ?></h6></th>
      <td><h6><?php echo  $value->nim; ?></h6></td>
      <td><h6><?php echo  $value->nama1; ?></h6></td>
      <td><h6><?php echo  $value->nama2; ?></h6></td>
      <td><h6><?php echo  $value->kelas; ?></h6></td>
      <td>
        <a href="<?php echo base_url().'portal/Upd_data_1/dock/'. $value->nim; ?>"><div class="btn btn-success">Update</div></a>
        <a href="<?php echo base_url().'portal/Dlt_data/dock/'. $value->nim; ?>"><div class="btn btn-danger">Delete</div></a>
        
      </td>
    </tr>
    <?php 
    $no++;
    } ?>


  </tbody>
</table>

</div>    