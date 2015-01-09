<!DOCTYPE html>
<?php  
    if($this->session->userdata('logged_in'))
    {
      $session_data = $this->session->userdata('logged_in');
      $data['nama'] = $session_data['nama'];      
      $this->load->view('member/home', $data); 
    }
else{
?>
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
    <link href="<?php echo base_url('asset/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('asset/bootstrap/css/bootstrap-theme.css') ?>" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url('asset/bootstrap/css/jumbotron.css') ?>" rel="stylesheet">
  </head>
  <body>
     <div class="container">
              <div class="login-form">
               <center><h2><img src="<?php echo base_url('asset/image/iconpramuka.png')  ?>" width="70" height="70">Login Admin</h2></center>
                     <?php echo form_open('adminlogin'); ?>
                     <?php echo validation_errors('<div class="alert alert-error">', '</div>'); ?>
                     
                          <div class="input-group col-md-12">
                            <span class="input-group-addon "><span class="glyphicon glyphicon-user"></span></span>
                            <input type="text" class="form-control" name="username" placeholder="Username">
                          </div>
                          <div class="bot"></div>
                          <div class="input-group col-md-12">
                            <span class="input-group-addon "><span class="glyphicon glyphicon-lock"></span></span>
                            <input type="password" class="form-control" name="password" placeholder="Password">
                          </div>
                          <div class="bot"></div>
            						 	<div class="input-group col-md-12">
                            <input type="submit" class="btn btn-primary col-md-12" value="Login">
                          </div>
            						  </td></tr>  
                            
                     
                  </form>
              </div>

  <!--- JQuery -->
  <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script type="text/javascript" language="javascript"  src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" language="javascript"  src="<?php echo base_url('asset/bootstrap/js/bootstrap.min.js'); ?>"></script>
    <script type="text/javascript" language="javascript"  src="<?php echo base_url('asset/bootstrap/js/bootstrap-button.js'); ?>"></script>
    <script type="text/javascript" language="javascript"  src="<?php echo base_url('asset/bootstrap/js/bootstrap-collapse.js'); ?>"></script>
   
    
  </body>
</html>

<?php }  ?>