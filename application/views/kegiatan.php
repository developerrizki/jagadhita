
<div class="container ada">
	<h2><span class="glyphicon glyphicon-time"></span> Kegiatan </h2><hr>
	 <?php
          $no=1;
          foreach ($kegiatan->result() as $data) {
          ?>
         <div class="col-md-9">
           <div style="min-height:300px;">
            <p><h3 ><?php echo $data->nama_kegiatan ; ?></h3></p>
            <p style="color:#ccc;font-size:9pt;">
                Kegiatan <span class="glyphicon glyphicon-time"></span> <?php echo $data->waktu ; ?> 
            &nbsp;|&nbsp;<span class="glyphicon glyphicon-user"></span> <?php echo ucwords($data->nama) ; ?> 
            &nbsp;|&nbsp;<span class="glyphicon glyphicon-tag"> </span> Post <?php echo date('d F Y',strtotime($data->tgl_post)); ?>
            </p>
            <p style="text-align:justify"><img src="<?php echo base_url('asset/image/jagadhita.jpg')  ?>" class="img-thumbnail" style="margin:5px;" align="left" width="150" height="180"><?php echo potong($data->deskripsi).".." ; ?></p>
            </div>
            <a class="btn btn-default tbn-sm" href="<?php echo base_url("home/kegiatan_lengkap/".$data->id_kegiatan); ?>" > <?php //echo strlen($data->deskripsi) ; ?> Selengkapnya &raquo;</a><hr>
          </div>
          <br>
          <?php 
          $no++;
          }
          ?>
<div class="bot"></div>
<?php echo $this->pagination->create_links(); // cetak halaman ?>