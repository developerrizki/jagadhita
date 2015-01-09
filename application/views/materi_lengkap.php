
<div class="container ada">
<div class="col-md-9">
      <p><h2><?php echo $materi->judul ; ?></h2></p>
      
     <p style="color:#ccc;font-size:9pt;">
            <span class="glyphicon glyphicon-user"></span> <?php echo ucwords($materi->nama) ; ?> &nbsp;
            <span class="glyphicon glyphicon-tag"> </span> <?php echo date('d F Y',strtotime($materi->tgl_post)); ?>
            </p>
      <p style="text-align:justify"><?php echo $materi->isi ; ?></p>
<br>


<hr>      
</div>
