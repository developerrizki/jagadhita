<div class="col-md-9">
  <h3>Tambah Album</h3><hr>
<div class="row">
<form class="form-horizontal" role="form" method="POST" action="<?php echo base_url('admin/inputalbum'); ?>">
           <div class="form-group">
              <label class="col-sm-3 control-label">Nama Album</label>
              <div class="col-sm-4">
                <input type="text" class="form-control" name="nama_album" placeholder="Nama Album">
              </div>
          </div>
          <div class="form-group">
              <label class="col-sm-3 control-label">Keterangan</label>
              <div class="col-sm-4">
                <textarea class="form-control"  style="height:325px;" name="keterangan" placeholder="Keterangan" noresize="noresize"></textarea>
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