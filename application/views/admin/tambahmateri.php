<div class="col-md-9">
        <h3>Tambah Materi</h3><hr>
<div class="row">
    <form class="form-horizontal" role="form" method="POST" action="<?php echo base_url('admin/inputmaterikepramukaan'); ?>">
    
     
         <div class="form-group">
              <label class="col-sm-2 control-label">Judul Materi</label>
              <div class="col-sm-4">
               <input type="text" class="form-control" name="judul" placeholder="Judul Materi">
              </div>
          </div>
          <div class="form-group">
              <label class="col-sm-2 control-label">Judul Materi</label>
              <div class="col-sm-4">
                <textarea class="form-control"  style="height:325px;" name="isi" placeholder="Isi Materi" noresize="noresize"></textarea>
              </div>
          </div>         
          <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
              <input type="submit" name="submit" value="Simpan" class="btn btn-primary btn-sm">
              </div>
          </div>
    </form>
</div><!-- end div row -->
</div>