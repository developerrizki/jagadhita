<div class="col-md-9">
  <h3>Edit Program</h3><hr>
<div class="row">
      <form class="form-horizontal" role="form" method="POST" action="<?php echo base_url('admin/updateprogram'); ?>">
    
          <input type="hidden" name="id_program" value="<?php echo $edit->id_program; ?>">
          <div class="form-group">
              <label class="col-sm-3 control-label">Nama Program</label>
              <div class="col-sm-4">
                <input type="text" class="form-control" name="nama_program" placeholder="Nama Program" value="<?php echo $edit->nama_program; ?>">
              </div>
          </div>
          <div class="form-group">
              <label class="col-sm-3 control-label">Deskripsi</label>
              <div class="col-sm-4">
                <textarea class="form-control"  style="height:325px;" name="deskripsi" placeholder="Deksripsi" noresize="noresize"><?php echo $edit->deskripsi; ?></textarea>
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