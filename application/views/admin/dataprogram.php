<div class="col-md-9">
  <h3>Daftar Program</h3><hr>
<table class="table table-hover  table-bordered">
  <tr>
    <th>No</th>
    <th>Nama Program</th>
    <th>Tanggal Post</th>
    <th>Aksi</th>
  </tr>
  <?php
  $no=1;
  foreach ($program as $row) {  
  ?>
  <tr>
    <td><?php echo $no;?></td>
    <td><?php echo $row->nama_program; ?></td>
    <td><?php echo $row->tgl_post; ?></td>
    <td>
      <a class="btn btn-default btn-sm" href="<?php echo  base_url("admin/editprogram/".$row->id_program); ?>" class="btn "><span class="glyphicon glyphicon-pencil"></span></a>
              <a class="btn btn-default btn-sm" href="<?php echo  base_url("admin/hapusprogram/".$row->id_program); ?>" class="btn " onClick="return confirm('Hapus data ini ?')"><span class="glyphicon glyphicon-trash"></span></a>
    </td>
  </tr>
  <?php
  $no++;
  }
  
  ?>
</table>

</div>
