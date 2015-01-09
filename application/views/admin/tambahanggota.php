<div class="col-md-9">
        <h3>Tambah Anggota</h3><hr>
<div class="row">    
    <form class="form-horizontal" role="form" method="POST" action="<?php echo base_url('admin/inputanggota'); ?>" enctype="multipart/form-data">
    
     
          <div class="form-group">
              <label class="col-sm-3 control-label">Nama Lengkap</label>
              <div class="col-sm-4">
                  <input type="text" class="form-control" name="nama_lengkap" placeholder="Nama Lengkap">
              </div>
          </div>
          <div class="form-group">
              <label class="col-sm-3 control-label">Angkatan</label>
              <div class="col-sm-4">
                  <select class="form-control" name="angkatan">
                    <option>=== Pilih Angkatan ===</option>
                    <?php 
                    $no=1;
                    while ( $no <= 24) {
                      echo "<option value='".$no."'> Angkatan ".$no."</option>";
                      $no++;
                    }
                    ?>
                  </select>
              </div>
          </div>
          <div class="form-group">
              <label class="col-sm-3 control-label">E-mail</label>
              <div class="col-sm-4">
                <input type="text" class="form-control" name="email" placeholder="E-mail">
              </div>
          </div>
         <div class="form-group">
              <label class="col-sm-3 control-label">No Telepon</label>
              <div class="col-sm-4">
                <input type="text" class="form-control" name="telepon" placeholder="No Telepon">
              </div>
          </div>
          <div class="form-group">
              <label class="col-sm-3 control-label">Alamat</label>
              <div class="col-sm-4">
                <textarea class="form-control"  style="height:325px;" name="alamat" placeholder="Alamat" noresize="noresize"></textarea>
              </div>
          </div>
          <div class="form-group">
              <label class="col-sm-3 control-label">Foto</label>
              <div class="col-sm-4">
                <input type="file" class="form-control" name="userfile" >
              </div>
          </div>
          <div class="form-group">
              <div class="col-sm-offset-3 col-sm-10">
              <input type="submit" name="submit" value="Simpan" class="btn btn-primary btn-sm">
              </div>
          </div>
     
    </form> 
 </div>
 </div>