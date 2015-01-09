
<div class="col-md-9">
  <h3>Daftar Album</h3><hr>
<table width="100%" class="table table-hover  table-bordered">
  <tr>
    <th>No</th>
    <th>Nama Album</th>
    <th>Keterangan</th>
    <th>Aksi</th>
  </tr>
  <?php
  $no=1;
  foreach ($album as $row) {  
  ?>
  <tr>
    <td><?php echo $no;?></td>
    <td><?php echo $row->nama_album; ?></td>
    <td><?php echo $row->keterangan; ?></td>
    <td></td>
  </tr>
  <?php
  $no++;
  }
  
  ?>
</table>

</div>