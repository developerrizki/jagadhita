<div class="col-md-9">
        <h3>Edit Materi</h3><hr>
  <div class="row">
    <form class="form-horizontal" role="form" method="POST" action="<?php echo base_url('admin/updatemateri'); ?>">
    
          <input type="hidden" name="id_materi" value="<?php echo $edit->id_materi; ?>">
          <div class="form-group">
              <label class="col-sm-2 control-label">Judul Materi</label>
              <div class="col-sm-4">
               <input type="text" class="form-control" name="judul" placeholder="Judul Materi" value="<?php echo $edit->judul; ?>">
              </div>
          </div>
           <div class="form-group">
              <label class="col-sm-2 control-label">Judul Materi</label>
              <div class="col-sm-4">
                <textarea class="form-control"  style="height:325px;" name="isi" placeholder="Isi Materi" noresize="noresize"><?php echo $edit->isi; ?></textarea>
              </div>
            </div>
         
          <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
              <input type="submit" name="submit" value="Simpan" class="btn btn-primary btn-sm">
              </div>
          </div>
              
    </form>
  </div> 
</div>