<div class="col-md-9">
    		<h3>Daftar Anggota</h3><hr>

	    	<table  class="table table-hover  table-bordered">
          <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Angkatan</th>
            <th>E-mail</th>
            <th>Telepon</th>
            <th>Action</th>
          </tr>
          <?php
          $no=1;
          foreach ($anggota->result() as $data) {
          ?>
          
          <tr>
            <td><?php echo $no ; ?></td>
            <td><?php echo ucwords($data->nama_lengkap) ; ?></td>
            <td><?php echo "@ ".$data->angkatan ; ?></td>
            <td><?php echo $data->email ; ?></td>
            <td><?php echo $data->telepon; ?></td>
            <td>
              <a class="btn btn-default btn-sm" href="<?php echo  base_url("admin/editanggota/".$data->id_anggota); ?>" class="btn "><span class="glyphicon glyphicon-pencil"></span></a>
              <a class="btn btn-default btn-sm" href="<?php echo  base_url("admin/hapusanggota/".$data->id_anggota); ?>" class="btn " onClick="return confirm('Hapus data ini ?')"><span class="glyphicon glyphicon-trash"></span></a>
              <a class="btn btn-default btn-sm" data-toggle="modal" data-target="#data<?php echo $data->id_anggota ?>"><span class="glyphicon glyphicon-list"></span></a>
              <!-- Modal -->
              <div class="modal fade" id="data<?php echo $data->id_anggota ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      <h4 class="modal-title" id="myModalLabel"><span class="glyphicon glyphicon-tags"> Detail Data </h4>
                    </div>
                    <div class="modal-body">
                     <img src="<?php echo base_url('uploads/anggota/'.$data->foto); ?>" class="img-thumbnail" width="180" height="200" ><br><br><br>
                     <strong>Nama :</strong><br><?php echo ucwords($data->nama_lengkap) ; ?><br>
                     <strong>Angkatan :</strong><br>@ <?php echo $data->angkatan; ?><br>
                     <strong>E-mail :</strong><br><?php echo $data->email ; ?><br>
                     <strong>Alamat :</strong><br><?php echo $data->alamat ; ?><br>
                     <strong>No Telepon :</strong><br><?php echo $data->telepon ; ?><br>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      <!--<button type="button" class="btn btn-primary">Save changes</button>-->
                    </div>
                  </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
              </div><!-- /.modal -->
            </td>
           </tr>
          <?php 
          $no++;
          }
          ?>
        </table>
	  
	  	<!--<div class="panel-footer panel-primary"><?php echo $anggota->num_rows() ; ?> Data Anggota </div>-->
	</div>
