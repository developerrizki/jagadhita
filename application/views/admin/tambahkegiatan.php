<div class="col-md-9">
  <h3>Tambah Kegiatan</h3><hr>
<div class="row">
    <form class="form-horizontal" role="form" method="POST" action="<?php echo base_url('admin/inputkegiatan'); ?>">
    
     <div class="form-group">
              <label class="col-sm-3 control-label">Nama Kegiatan</label>
              <div class="col-sm-4">
                <input type="text" class="form-control" name="nama_kegiatan" placeholder="Nama Kegiatan">
              </div>
          </div>
          <div class="form-group">
              <label class="col-sm-3 control-label">Waktu Kegiatan</label>
              <div class="col-sm-4">
                <input type="text" class="form-control" name="waktu" placeholder="Waktu Kegiatan">
              </div>
          </div>
          <div class="form-group">
              <label class="col-sm-3 control-label">Deskripsi</label>
              <div class="col-sm-4">
                <textarea class="form-control"  style="height:325px;" name="deskripsi" placeholder="Deksripsi" noresize="noresize"></textarea>
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
