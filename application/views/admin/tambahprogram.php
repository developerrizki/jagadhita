<div class="col-md-9">
  <h3>Tambah Program</h3><hr>
<div class="row">
      <form class="form-horizontal" role="form" method="POST" action="<?php echo base_url('admin/inputprogram'); ?>">
    
     
           <div class="form-group">
              <label class="col-sm-3 control-label">Nama Program</label>
              <div class="col-sm-4">
                <input type="text" class="form-control" name="nama_program" placeholder="Nama Program">
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
