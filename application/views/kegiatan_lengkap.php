
<div class="container ada">
<div class="col-md-9">
      <p><h2><?php echo $kegiatan->nama_kegiatan ; ?></h2></p>
      <p style="color:#ccc;font-size:9pt;">
                Kegiatan <span class="glyphicon glyphicon-time"></span> <?php echo $kegiatan->waktu ; ?> 
            &nbsp;|&nbsp;<span class="glyphicon glyphicon-user"></span> <?php echo ucwords($kegiatan->nama) ; ?> 
            &nbsp;|&nbsp;<span class="glyphicon glyphicon-tag"> </span> Post <?php echo date('d F Y',strtotime($kegiatan->tgl_post)); ?>
            </p>
      <p style="text-align:justify"><?php echo $kegiatan->deskripsi ; ?></p>
      
      </div>