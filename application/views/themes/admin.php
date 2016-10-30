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
   <script src="<?php echo base_url() ?>/public/js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url() ?>/public/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.3.0/jquery.min.js"></script>
</head>

  <body>
<div class="admin-nav">

    <nav>
      <ul>
        <h1><a href="<?php echo base_url(); ?>">Admin Home</a></h1>
        <li><a href="<?php echo base_url(); ?>logout">Logout</a></li>
        <li><a href="<?php echo base_url(); ?>users">Users</a></li>  
        <li><a href="<?php echo base_url(); ?>code">Code</a></li>
        <li><a href="<?php echo base_url(); ?>faculty">Faculty</a></li>
        <li><a href="<?php echo base_url(); ?>course">Course</a></li>
        <li><a href="<?php echo base_url(); ?>section">Section</a></li>
        <li><a href="<?php echo base_url(); ?>subject">Subject</a></li>
      </ul>
    </nav>

 <?php echo $output;?>
</div><!--ends admin nav-->





</body>

</html>


