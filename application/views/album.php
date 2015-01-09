<div class="container ada">
	<?php if ($album->num_rows() > 0) { ?>
      <p>
        <ul class="thumbnails galeri" style="list-style:none;">
        <?php
        foreach($album->result() as $album){
          $dilarang = array(" ", "\"", "(", ")", "'","@",":","#","?","”","“",",",".");
            $pretty_url = strtolower(str_replace ($dilarang, "-", $album->nama_album)); 
       ?>
        <?php
        $album->nama_album = str_replace('"', '', $album->nama_album);
        $url_gambar = base_url("asset/image/jagadhita.jpg");
        $img = base_url("asset/js/timthumb.php?src=".$url_gambar);
        ?>
                <li class="col-md-3">
                  <div class="thumbnail">
                    <img src="<?php echo $img; ?>" style="width: 300px; height: 200px;">
                    <div class="caption">
                      <?php echo anchor('home/view_gallery/'.$album->id_album.'/'.$pretty_url, "<h4>".substr($album->nama_album, 0,20)."..</h4>"); ?>
                    </div>
                  </div> 
                </li>
              <?php } ?>
              </ul>
          </p>
         
        <?php } ?>   
<div class="bot"></div>
<?php echo $this->pagination->create_links(); // cetak halaman ?>