 
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="<?php echo base_url("uploads/slider/slider.PNG"); ?>" alt="...">
    </div>
    <div class="item">
      <img src="<?php echo base_url("uploads/slider/slider.PNG"); ?>" alt="...">
    </div>
    <div class="item">
      <img src="<?php echo base_url("uploads/slider/slider.PNG"); ?>" alt="...">
    </div>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a>
</div>

    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-4">
          <h2>Forum</h2>
          <img src="<?php echo base_url('asset/image/pesawat.jpg') ?>" width="100%" height="150"  class="img-rounded">
          <p></p>
          <p><a class="btn btn-warning" href="#" data-toggle="modal" data-target="#forum">Selengkapnya &raquo;</a></p>
        </div>
        <div class="col-md-4">
          <h2>Informasi Kegiatan</h2>
           <img src="<?php echo base_url('asset/image/corporate.jpg') ?>" width="100%" height="150" class="img-rounded">
          <p></p>
          <p><a class="btn btn-warning" href="#" data-toggle="modal" data-target="#info">Selengkapnya &raquo;</a></p>
       </div>
        <div class="col-md-4">
          <h2>Gallery</h2>
           <img src="<?php echo base_url('asset/image/corporate2.jpg') ?>" width="100%" height="150"  class="img-rounded">
          <p></p>
          <p><a class="btn btn-warning" href="#" data-toggle="modal" data-target="#gallery">Selengkapnya &raquo;</a></p>
        </div>
      </div>

 <!--
 =======================================
 Form Daftar
 =======================================
-->   

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel"><span class="glyphicon glyphicon-tags"> Registrasi</h4>
      </div>
      <div class="modal-body">
       <fieldset>  
    
    <form class="form-horizontal" role="form">
    
     
          <div class="input-group col-md-8">
            <span class="input-group-addon "><span class="glyphicon glyphicon-align-justify"></span></span>
            <input type="text" class="form-control" placeholder="Nama Lengkap">
          </div>
          <div class="bot"></div>
          <div class="input-group col-md-6">
            <span class="input-group-addon ">@</span></span>
            <select class="form-control">
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
          <div class="bot"></div>
          <div class="input-group col-md-11">
            <span class="input-group-addon "><span class="glyphicon glyphicon-user"></span></span>
            <input type="text" class="form-control" placeholder="Username">
          </div>
          <div class="bot"></div>
          <div class="input-group col-md-11">
            <span class="input-group-addon "><span class="glyphicon glyphicon-fire"></span></span>
            <input type="password" class="form-control" placeholder="Password">
          </div>
          <div class="bot"></div>
          <div class="input-group col-md-8">
            <span class="input-group-addon "><span class="glyphicon glyphicon-envelope"></span></span>
            <input type="text" class="form-control" placeholder="E-mail">
          </div>
          <div class="bot"></div>
          <div class="input-group col-md-8">
            <span class="input-group-addon "><span class="glyphicon glyphicon-earphone"></span></span>
            <input type="text" class="form-control" placeholder="No Telepon">
          </div>
          <div class="bot"></div>
          <div class="input-group col-md-12">
            <span class="input-group-addon "><span class="glyphicon glyphicon-home"></span></span>
            <textarea class="form-control" rows="5" placeholder="Alamat" noresize="noresize"></textarea>
          </div>
          <div class="bot"></div>
          <div class="input-group col-md-8">
          <button type="submit" class="btn btn-danger">Daftar</button>
          </div>
     
    </form> 
  </fieldset>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <!--<button type="button" class="btn btn-primary">Save changes</button>-->
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div class="modal fade" id="forum" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel"><span class="glyphicon glyphicon-tags"> Forum Alumni</h4>
      </div>
      <div class="modal-body">
        ..
        </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <!--<button type="button" class="btn btn-primary">Save changes</button>-->
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div class="modal fade" id="info" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel"><span class="glyphicon glyphicon-tags"> Informasi Kegiatan</h4>
      </div>
      <div class="modal-body">
        ..
        </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <!--<button type="button" class="btn btn-primary">Save changes</button>-->
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div class="modal fade" id="gallery" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel"><span class="glyphicon glyphicon-tags"> Gallery</h4>
      </div>
      <div class="modal-body">
       ..
        </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <!--<button type="button" class="btn btn-primary">Save changes</button>-->
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->