
 	<div class="col-md-6">
 	</div>
 	<div class="bot"></div>
 	<fieldset>
      	<legend><span class="glyphicon glyphicon-tags"> Registrasi </legend>
 	
 		
 		<form class="form-horizontal" role="form">
 		
	    <div class="col-md-6">
	    	<div class="input-group col-md-8">
		        <span class="input-group-addon "><span class="glyphicon glyphicon-align-justify"></span></span>
		        <input type="text" class="form-control" placeholder="Nama Lengkap">
	      	</div>
	      	<div class="bot"></div>
	      	<div class="input-group col-md-6">
		        <span class="input-group-addon ">@</span></span>
		        <select class="form-control">
		        	<option>=== Pilih Angkatan ===</option>
		        	<?php 
		        	$no=1;
		        	while ( $no <= 24) {
		        		echo "<option value='".$no."'> Angkatan ".$no."</option>";
		        		$no++;
		        	}
		        	?>
		        </select>
	      	</div>
	      	<div class="bot"></div>
	      	<div class="input-group col-md-11">
		        <span class="input-group-addon "><span class="glyphicon glyphicon-user"></span></span>
		        <input type="text" class="form-control" placeholder="Username">
	      	</div>
	      	<div class="bot"></div>
	      	<div class="input-group col-md-11">
		        <span class="input-group-addon "><span class="glyphicon glyphicon-fire"></span></span>
		        <input type="password" class="form-control" placeholder="Password">
	      	</div>
	      	<div class="bot"></div>
	      	<div class="input-group col-md-8">
		        <span class="input-group-addon "><span class="glyphicon glyphicon-envelope"></span></span>
		        <input type="text" class="form-control" placeholder="E-mail">
	      	</div>
	      	<div class="bot"></div>
	      	<div class="input-group col-md-8">
		        <span class="input-group-addon "><span class="glyphicon glyphicon-earphone"></span></span>
		        <input type="text" class="form-control" placeholder="No Telepon">
	      	</div>
	      	<div class="bot"></div>
	      	<div class="input-group col-md-12">
		        <span class="input-group-addon "><span class="glyphicon glyphicon-home"></span></span>
		       	<textarea class="form-control" rows="5" placeholder="Alamat" noresize="noresize"></textarea>
	      	</div>
	      	<div class="bot"></div>
	      	<div class="input-group col-md-8">
		      <button type="submit" class="btn btn-danger">Submit</button>
		  	</div>
	    </div>
	  </form>
	  
	
	</fieldset>
	
	<div style="clear:both;"> </div>
	
