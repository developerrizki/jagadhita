
  <div class="col-sm-9">
    <a class="btn btn-warning btn-sm" style="margin-bottom:20px;" href="<?php echo base_url("forum/add"); ?>">Add New Forum</a>
    <?php if($this->uri->segment(2)=="add"){?>
     <h3>New Forum</h3><hr>
      <form class="form-horizontal" role="form" method="POST" action="<?php echo base_url('forum/inputforum'); ?>">
      <input type="hidden" name="creator" value="<?php echo $this->session->userdata("id_anggota"); ?>">
                 <div class="form-group">
                    <label class="col-sm-1 control-label">Topic</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="topik" placeholder="Forum Topic">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-1 control-label">Isi</label>
                    <div class="col-sm-9">
                      <textarea class="form-control"  style="height:100px;" name="mine" placeholder="Isi" noresize="noresize"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-1 col-sm-10">
                    <input type="submit" name="submit" value="Add" class="btn btn-primary btn-sm">
                    </div>
                </div>      
          </form>
    <?php } ?>

    <?php if(!empty($r_forum)){?>
    <div class="row">
      <div class="col-sm-12">
      <?php foreach ($r_forum as $data){ ?>
      <div class="thumbnail">
        <h4><?php echo $data->topik; ?></h4>
        <br>
         <span class="right"><a class="btn btn-warning btn-sm" href="<?php echo base_url("forum/detail/".$data->id_forum); ?>">View Detail</a></span>
      </div>
      <?php } ?>
      </div>
    </div>
	 <?php }//end if r_forum ?>

  </div>
  

