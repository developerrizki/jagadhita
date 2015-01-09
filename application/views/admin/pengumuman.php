<div class="col-md-9">
  <h3>Pengumuman</h3><hr>
<div class="row">

<form class="form-horizontal" role="form" method="POST" action="<?php echo base_url('admin/actpengumuman'); ?>">
<input type="hidden" name="id" value="<?php echo $pengumuman->id_pengumuman; ?>">
           <div class="form-group">
              <label class="col-sm-3 control-label">Hal</label>
              <div class="col-sm-4">
                <input type="text" class="form-control" name="hal" placeholder="Perihal" value="<?php echo $pengumuman->hal; ?>">
              </div>
          </div>
          <div class="form-group">
              <label class="col-sm-3 control-label">Pengumuman</label>
              <div class="col-sm-4">
                <textarea class="form-control"  style="height:325px;" name="pengumuman" placeholder="Pengumuman" noresize="noresize"><?php echo $pengumuman->pengumuman; ?></textarea>
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