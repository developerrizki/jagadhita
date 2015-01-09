<div class="col-md-9">
  <h3>Tambah Album</h3><hr>
<?php echo form_open_multipart('admin/inputfoto'); ?>
    
     
          <div class="input-group col-md-4">
            <span class="input-group-addon "><span class="glyphicon glyphicon-tag"></span></span>
            <select name="id_album" required class="form-control">
            <?php foreach ($album as $row) {
             ?>
             <option value="<?php echo $row->id_album; ?>"><?php echo $row->nama_album; ?></option>
             <?php
            }?>
            </select>
          </div>
          <div class="bot"></div>
          <div class="input-group col-md-4">
            <span class="input-group-addon "><span class="glyphicon glyphicon-picture"></span></span>
            <input class="form-control" type="file" name="userfile[]" multiple/>
          </div>
          <div class="bot"></div>
          <div class="input-group col-md-4">
          <input type="submit" class="btn btn-danger" value="Simpan">
          </div>
     
    </form> 
</div>