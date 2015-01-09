<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="<?php echo base_url('asset/image/iconpramuka.png')  ?>">

    <title>Ganesha-Simha Jagadhita</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url('asset/bootstrap/css/bootstrap.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('asset/css/style.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('asset/css/bootstrap-image-gallery.min.css') ?>" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("asset/css/colorbox.css"); ?>" />

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url('asset/bootstrap/css/jumbotron.css') ?>" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,600,300,200&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation" style="font-family: 'Titillium Web', sans-serif;">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo base_url('home'); ?>">-Jagadhita's Crew-</a>
        </div>
        <div class="navbar-collapse collapse">
          
          <ul class="nav navbar-nav pull-left">
            
            <?php if($this->uri->segment(2)==""){?>
            <li class="active">
            <?php }else{ ?>
            <li>
            <?php } ?>
              <a href="<?php echo base_url('home'); ?>">Beranda</a></li>
            
            <?php if($this->uri->segment(2)=="tentang_kami"){?>
            <li class="active">
            <?php }else{ ?>
            <li>
            <?php } ?>
              <a href="<?php echo base_url('home/tentang_kami'); ?>">Tentang Kami</a></li>

              <?php if($this->uri->segment(2)=="materikepramukaan"){?>
            <li class="active">
            <?php }else{ ?>
            <li>
            <?php } ?>
              <a href="<?php echo base_url('home/materikepramukaan');?>">Tekpram</a></li>

            <?php if($this->uri->segment(2)=="gallery"){?>
            <li class="active">
            <?php }else{ ?>
            <li>
            <?php } ?>
              <a href="<?php echo base_url('home/gallery'); ?>">Gallery</a></li>

             <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Informasi<b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="<?php echo base_url('home/kegiatan'); ?>">Kegiatan</a></li>
                <li><a href="#">Keuangan</a></li>
              </ul>
            </li>
            
            <?php if($this->uri->segment(2)=="kontak"){?>
            <li class="active">
            <?php }else{ ?>
            <li>
            <?php } ?>
              <a href="<?php echo base_url('home/kontak'); ?>">Kontak</a></li>
            
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Sign In<b class="caret"></b></a>
              <ul class="dropdown-menu">
               <li>
                 <form method="POST" action="<?php echo base_url("login/validate"); ?>">
                    <div class="form-group">
                      <label>Username</label>
                      <input class="form-control" type="text" name="username" required>
                    </div>
                    <div class="form-group">
                      <label>Password</label>
                      <input class="form-control" type="password" name="password" required>
                    </div>
                    <div class="form-group">
                      <input type="submit" name="submit" class="btn btn-danger btn-sm btn-block">
                    </div>
                 </form>
               </li>
              </ul>
            </li>
            
          </ul>
        </div><!--/.nav-collapse -->
       
         
      </div>
    </div>
   
   <?php function potong($kata)
      {
        $filter = explode('<!-- pagebreak -->', $kata);
        return $filter[0];
      }
  ?>
