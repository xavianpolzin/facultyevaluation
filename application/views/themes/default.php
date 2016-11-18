<!DOCTYPE html>
<html lang="en">
	<head>
		<title><?php echo $title; ?></title>
		 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1,  maximum-scale=1, user-scalable=0">
    
	
    <!--  styles -->
    <link href="<?php echo base_url(); ?>/public/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="<?php echo base_url(); ?>/public/css/mob-st.css" rel="stylesheet" media="screen">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/public/css/print-style.css" type="text/css" media="print" />
	 <script src="<?php echo base_url() ?>/public/js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url() ?>/public/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.3.0/jquery.min.js"></script>
</head>

  <body>

  		 
   		
     	 <div class="container">
    	  <?php echo $output;?>
   		</div> <!--ends container-->
    
   
</body>

</html>
