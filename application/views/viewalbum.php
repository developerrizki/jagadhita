
<div class="container ada">
  <h2><span class="glyphicon glyphicon-picture"></span> Gallery </h2><hr>
  <p>
      <ul class="thumbnails" style="list-style:none;">
      <?php foreach($row_foto->result() as $foto) {
        $url_gambar = base_url('uploads/gallery/'.$foto->foto.'&w=210&h=180&q=100');
        $img = base_url('asset/js/timthumb.php?src='.$url_gambar);
      ?>
              <li class="col-md-3 gambar">
                <a class="fancybox" href="<?php echo base_url('uploads/gallery/'.$foto->foto);?>" data-fancybox-group="gallery" title="Are you the next? Show Me!!!"><img src="<?php echo $img;?>" alt="260x180" style="width: 260px; height: 180px; padding:3px; background:#f5f5f5" ></a>
              </li>
            <?php } ?>
            </ul>
        </p>
<div class="bot"></div>
<?php echo $this->pagination->create_links(); // cetak halaman ?>