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
    <!--<link href="<?php echo base_url('asset/bootstrap/css/bootstrap-theme.css') ?>" rel="stylesheet">-->
    <link href="<?php echo base_url('asset/css/bootstrap-image-gallery.min.css') ?>" rel="stylesheet">
     <link rel="stylesheet" type="text/css" href="<?php echo base_url("asset/css/colorbox.css"); ?>" />

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url('asset/bootstrap/css/jumbotron.css') ?>" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../docs-assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
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
          <ul class="nav navbar-nav pull-right">
            <?php if($this->uri->segment(1)=="home" && $this->uri->segment(2)==""){?>
            <li class="active">
            <?php }else{ ?>
            <li>
            <?php } ?>
              <a href="<?php echo base_url('home'); ?>">Beranda</a></li>
            
            
            <?php if($this->uri->segment(1)=="forum"){?>
            <li class="active">
            <?php }else{ ?>
            <li>
            <?php } ?>
              <a href="<?php echo base_url('forum'); ?>">Forum</a></li>
            
            
            <li>
              <a href="<?php echo base_url('login/logout'); ?>">Log Out</a></li>
            
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
  <?php if($this->uri->segment(1)=="forum"){?>
  <div class="container ada">
  <div class="col-md-3">
    <div class="panel-group" id="accordion">
      <div class="panel" style="border:1px solid #f3be08;">
        <div class="panel-heading" style="background:#f3be08;">
          <h4 class="panel-title">
            <center style="font-weight:bold;color:black;font-size:11pt;"><a style="text-decoration:none" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
              Profil
            </a></center>
          </h4>
        </div>
        <div id="collapseOne" class="panel-collapse collapse in">
          <div class="panel-body">
             <center><img src="<?php echo base_url("uploads/anggota/".$this->session->userdata("foto"));?>" class="img-responsive thumbnail"></center>
            <h5><b>Nama :</b> <?php echo $this->session->userdata("nama"); ?></h5>
            

          </div>
        </div>
      </div>
  <?php } ?>
     
    </div>
  </div>
