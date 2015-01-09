<div class="col-md-9">
    		<h3>Daftar Materi</h3><hr>
  		
	 
	    	<table class="table table-hover table-bordered">
          <tr>
            <th>No</th>
            <th>Judul Materi</th>
            <th>Poster</th>
            <th>Tanggal Post</th>
            <th>Action</th>
          </tr>
          <?php
          $no=1;
          foreach ($materikepramukaan->result() as $data) {
          ?>
          <tr>
            <td><?php echo $no ; ?></td>
            <td><?php echo $data->judul ; ?></td>
            <td><?php echo ucwords($data->nama) ; ?></td>
            <td><?php echo date('d F Y',strtotime($data->tgl_post)); ?></td>
            <td>
              <a class="btn btn-default btn-sm" href="<?php echo  base_url("admin/editmateri/".$data->id_materi); ?>" class="btn "><span class="glyphicon glyphicon-pencil"></span></a>
              <a class="btn btn-default btn-sm" href="<?php echo  base_url("admin/hapusmateri/".$data->id_materi); ?>" class="btn " onClick="return confirm('Hapus data ini ?')"><span class="glyphicon glyphicon-trash"></span></a></td>
          </tr>
          <?php 
          $no++;
          }
          ?>
        </table>

	  	<!--<div class="panel-footer panel-primary"><?php echo $materikepramukaan->num_rows() ; ?> Data Kegiatan </div>-->
	</div>
