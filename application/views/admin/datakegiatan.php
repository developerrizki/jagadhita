<div class="col-md-9">
  <h3>Daftar Kegiatan</h3><hr>
<table  class="table table-hover  table-bordered">
  <tr>
    <th>No</th>
    <th>Nama Kegiatan</th>
    <th>Waktu</th>
    <th>Posted by</th>
    <th>Tanggal Post</th>
    <th>Aksi</th>
  </tr>
  <?php
  $no=1;
  foreach ($kegiatan as $row) {  
  ?>
  <tr>
    <td><?php echo $no;?></td>
    <td><?php echo $row->nama_kegiatan; ?></td>
    <td><?php echo $row->waktu; ?></td>
    <td><?php echo $row->nama; ?></td>
    <td><?php echo $row->tgl_post; ?></td>
    <td>
      <a class="btn btn-default btn-sm" href="<?php echo  base_url("admin/editkegiatan/".$row->id_kegiatan); ?>" class="btn "><span class="glyphicon glyphicon-pencil"></span></a>
              <a class="btn btn-default btn-sm" href="<?php echo  base_url("admin/hapuskegiatan/".$row->id_kegiatan); ?>" class="btn " onClick="return confirm('Hapus data ini ?')"><span class="glyphicon glyphicon-trash"></span></a>
    </td>
  </tr>
  <?php
  $no++;
  }
  
  ?>
</table>

</div>
