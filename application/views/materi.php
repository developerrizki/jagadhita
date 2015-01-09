<div class="container ada">
  <div class="col-md-3">
    <div class="panel-group" id="accordion">
      <div class="panel" style="border:1px solid #f3be08;">
        <div class="panel-heading" style="background:#f3be08;">
          <h4 class="panel-title">
            <center style="font-weight:bold;color:black;font-size:11pt;"><a style="text-decoration:none" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
              Pengumuman
            </a></center>
          </h4>
        </div>
        <div id="collapseOne" class="panel-collapse collapse in">
          <div class="panel-body">
            <h4>Hal : <?php echo $pengumuman->hal; ?></h4>
            <p style="text-align:justify"><?php echo $pengumuman->pengumuman; ?></p>
          </div>
        </div>
      </div>
     
    </div>
  </div>
  <div class="col-md-9">
	 <?php
          $no=1;
          foreach ($materi->result() as $data) {
          ?>
         <div class="col-md-4">
          <div class="col-md-12 thumbnail">
              
                  <h5 style="font-weight:bold"><?php echo $data->judul ; ?></h5>
                  <p style="color:#666;font-size:9pt;">
                  <span class="glyphicon glyphicon-user"></span> <?php echo ucwords($data->nama) ; ?> &nbsp;
                  <span class="glyphicon glyphicon-tag"> </span> <?php echo date('d F Y',strtotime($data->tgl_post)); ?>
                  </p>
              
                  <center><p><img src="<?php echo base_url('asset/image/baden-powell-3.jpg')  ?>" class="img-thumbnail" width="100%" height="100"></p>
                  <p><a class="btn btn-primary btn-sm col-sm-12" href="<?php echo base_url("home/materi_lengkap/".$data->id_materi); ?>" > <?php //echo strlen($data->isi) ; ?> Selengkapnya &raquo;</a></p></center>
                
            </div>          
          </div>
  
          <?php 
          $no++;
          }
          ?>
  </div>
  
<div class="bot"></div>
<?php echo $this->pagination->create_links(); // cetak halaman ?>
