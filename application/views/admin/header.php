 <!DOCTYPE html>
 <html lang="en">
<!-- BEGIN HEAD -->
<head>
    <meta charset="UTF-8" />
    <title>Admin Panel </title>
     <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <meta content="" name="description" />
  <meta content="" name="author" />
    <!-- GLOBAL STYLES -->
    <link rel="stylesheet" href="<?php echo base_url("assets_admin/plugins/bootstrap/css/bootstrap.css"); ?>" />
    <link rel="stylesheet" href="<?php echo base_url("assets_admin/css/main.css");?>" />
    <link rel="stylesheet" href="<?php echo base_url("assets_admin/css/theme.css");?>" />
    <link rel="stylesheet" href="<?php echo base_url("assets_admin/css/MoneAdmin.css");?>" />
    <link rel="stylesheet" href="<?php echo base_url("assets_admin/plugins/Font-Awesome/css/font-awesome.css");?>" />
    <!--END GLOBAL STYLES -->

    <!-- PAGE LEVEL STYLES -->
    <link href="<?php echo base_url("assets_admin/css/layout2.css");?>" rel="stylesheet" />
    <link href="<?php echo base_url("assets_admin/plugins/flot/examples/examples.css");?>" rel="stylesheet" />
    <link rel="stylesheet" href="<?php echo base_url("assets_admin/plugins/timeline/timeline.css");?>" />

    <!-- TinyMCE -->
    <script type="text/javascript" src="<?php echo  base_url("asset/lib/tinymce/tiny_mce.js"); ?>"> </script>
    <script type="text/javascript">
        tinyMCE.init({
      // General options
      mode : "textareas",
      theme : "advanced",
      plugins : "autolink,lists,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template,wordcount,advlist,autosave",
    
      // Theme options
      theme_advanced_buttons1             : "save,newdocument,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,styleselect,formatselect,fontselect,fontsizeselect",
      theme_advanced_toolbar_location     : "top",
      theme_advanced_toolbar_align        : "left",
      theme_advanced_statusbar_location   : "bottom",
      theme_advanced_resizing             : false,
    
      // Example content CSS (should be your site CSS)
      content_css : "css/content.css",
    
      // Drop lists for link/image/media/template dialogs
      template_external_list_url  : "lists/template_list.js",
      external_link_list_url      : "lists/link_list.js",
      external_image_list_url     : "lists/image_list.js",
      media_external_list_url     : "lists/media_list.js",
    
      // Style formats
      style_formats : [
          {title : 'Bold text', inline      : 'b'},
          {title : 'Red text', inline       : 'span', styles : {color : '#ff0000'}},
          {title : 'Red header', block      : 'h1', styles : {color : '#ff0000'}},
          {title : 'Example 1', inline      : 'span', classes : 'example1'},
          {title : 'Example 2', inline      : 'span', classes : 'example2'},
          {title : 'Table styles'},
          {title : 'Table row 1', selector  : 'tr', classes : 'tablerow1'}
      ],
    
      // Replace values for the template plugin
      template_replace_values : {
          username    : "Some User",
          staffid     : "991234"
      }
        });
    </script>
    <!-- /TinyMCE -->
</head>
<!-- END HEAD -->

<!-- BEGIN BODY -->
<body class="padTop53 " >
    <!-- MAIN WRAPPER -->
    <div id="wrap" >    
        <!-- HEADER SECTION -->
        <div id="top">
            <nav class="navbar navbar-inverse navbar-fixed-top" style='background:#3e3e3e'>
                <!-- LOGO SECTION -->
                <header class="navbar-header">
                       Jagadhita's Admin
                </header>
                <!-- END LOGO SECTION -->
                <ul class="nav navbar-top-links navbar-right">            

                    <!--ADMIN SETTINGS SECTIONS -->
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="icon-user "></i>&nbsp; <?php echo ucwords($nama); ?> <i class="icon-chevron-down "></i>
                        </a>

                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="#"><i class="icon-user"></i> User Profile </a>
                            </li>
                            <li><a href="#"><i class="icon-gear"></i> Settings </a>
                            </li>
                            <li class="divider"></li>
                            <li><a href="<?php echo base_url('admin/logout');?>"><i class="icon-signout"></i> Logout </a>
                            </li>
                        </ul>

                    </li>
                    <!--END ADMIN SETTINGS -->
                </ul>

            </nav>

        </div>
        <!-- END HEADER SECTION -->
     <!-- MENU SECTION -->
       <div id="left" >
            <div class="media user-media well-small">
                
               
            </div>

            <ul id="menu" class="collapse">

                
              <?php if($this->uri->segment(2)=="home"){?>
              <li class="panel active">
              <?php }else{ ?>
              <li class="panel">
              <?php } ?>
              <a href="<?php echo base_url('admin/home'); ?>"><i class="icon-table"></i> Beranda</a></li>



              <?php if($this->uri->segment(2)=="anggota" || $this->uri->segment(2)=="tambahanggota"){?>
              <li class="panel active">
              <?php }else{ ?>
              <li class="panel">
              <?php } ?>
                    <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#component-nav">
                        <i class="icon-tasks"> </i> Anggota    
     
                        <span class="pull-right">
                          <i class="icon-angle-left"></i>
                        </span>
                    </a>
                    <ul class="collapse" id="component-nav">
                       
                        <li class=""><a href="<?php echo base_url("admin/tambahanggota");?>"><i class="icon-angle-right"></i> Tambah Anggota </a></li>
                         <li class=""><a href="<?php echo base_url("admin/anggota");?>"><i class="icon-angle-right"></i> Daftar Anggota </a></li>
                    </ul>
                </li>

              <?php if($this->uri->segment(2)=="tambahmateri" || $this->uri->segment(2)=="materikepramukaan"){?>
              <li class="panel active">
              <?php }else{ ?>
              <li class="panel">
              <?php } ?>
                    <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#component-nav2">
                        <i class="icon-tasks"> </i> Materi    
     
                        <span class="pull-right">
                          <i class="icon-angle-left"></i>
                        </span>
                    </a>
                    <ul class="collapse" id="component-nav2">
                       
                        <li class=""><a href="<?php echo base_url("admin/tambahmateri");?>"><i class="icon-angle-right"></i> Tambah Materi </a></li>
                         <li class=""><a href="<?php echo base_url("admin/materikepramukaan");?>"><i class="icon-angle-right"></i> Daftar Materi </a></li>
                    </ul>
                </li>


              <?php if($this->uri->segment(2)=="kegiatan"){?>
              <li class="panel active">
              <?php }else{ ?>
              <li class="panel">
              <?php } ?>
                    <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#component-nav3">
                        <i class="icon-tasks"> </i> Kegiatan    
     
                        <span class="pull-right">
                          <i class="icon-angle-left"></i>
                        </span>
                    </a>
                    <ul class="collapse" id="component-nav3">
                       
                        <li class=""><a href="<?php echo base_url("admin/tambahkegiatan");?>"><i class="icon-angle-right"></i> Tambah Kegiatan </a></li>
                         <li class=""><a href="<?php echo base_url("admin/kegiatan");?>"><i class="icon-angle-right"></i> Kegiatan </a></li>
                    </ul>
                </li>

              <?php if($this->uri->segment(2)=="program"){?>
              <li class="panel active">
              <?php }else{ ?>
              <li class="panel">
              <?php } ?>
                    <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#component-nav4">
                        <i class="icon-tasks"> </i> Program    
     
                        <span class="pull-right">
                          <i class="icon-angle-left"></i>
                        </span>
                    </a>
                    <ul class="collapse" id="component-nav4">
                       
                        <li class=""><a href="<?php echo base_url("admin/tambahprogram");?>"><i class="icon-angle-right"></i> Tambah Program </a></li>
                         <li class=""><a href="<?php echo base_url("admin/dataprogram");?>"><i class="icon-angle-right"></i> Daftar Program </a></li>
                    </ul>
                </li>

              <?php if($this->uri->segment(2)=="pengumuman"){?>
              <li class="panel active">
              <?php }else{ ?>
              <li class="panel">
              <?php } ?>
                    <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#component-nav6">
                        <i class="icon-tasks"> </i> Pengumuman    
     
                        <span class="pull-right">
                          <i class="icon-angle-left"></i>
                        </span>
                    </a>
                    <ul class="collapse" id="component-nav6">
                       
                        <li class=""><a href="<?php echo base_url("admin/pengumuman");?>"><i class="icon-angle-right"></i>Pengumuman</a></li>
                         
                    </ul>
                </li>

              <?php if($this->uri->segment(2)=="gallery"){?>
              <li class="panel active">
              <?php }else{ ?>
              <li class="panel">
              <?php } ?>
                    <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#component-nav5">
                        <i class="icon-film"> </i> Gallery    
     
                        <span class="pull-right">
                          <i class="icon-angle-left"></i>
                        </span>
                    </a>
                    <ul class="collapse" id="component-nav5">
                       
                        <li class=""><a href="<?php echo base_url("admin/tambahalbum");?>"><i class="icon-angle-right"></i> Tambah Album </a></li>
                         <li class=""><a href="<?php echo base_url("admin/gallery");?>"><i class="icon-angle-right"></i> Daftar Album </a></li>
                         <li class=""><a href="<?php echo base_url("admin/uploadfoto");?>"><i class="icon-angle-right"></i> Upload Foto </a></li>
                    </ul>
                </li>
                
               
            </ul>

        </div>
        <!--END MENU SECTION -->

<!--PAGE CONTENT -->
<div id="content">
