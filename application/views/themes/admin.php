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
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.rawgit.com/google/code-prettify/master/loader/run_prettify.js"></script>

    <script type="text/javascript" src="<?php echo base_url() ?>/public/js/jquery.profanityfilter.js"></script>
    
</head>

  <body>
<div class="admin-nav">

    <nav class="creativenav_3D">
      <ul>
        <h1><a href="<?php echo base_url(); ?>">Admin Home</a></h1>
        <li><a href="<?php echo base_url(); ?>logout"><span data-title="Logout">Logout</span></a></li>
        <li><a href="<?php echo base_url(); ?>users"><span data-title="Users">Users</span></a></li>  
        <li><a href="<?php echo base_url(); ?>code"><span data-title="Code">Code</span></a></li>
        <li><a href="<?php echo base_url(); ?>faculty"><span data-title="Faculty">Faculty</span></a></li>
        <!--<li><a href="<?php echo base_url(); ?>course"><span data-title="Course">Course</span></a></li>-->
        <li><a href="<?php echo base_url(); ?>section"><span data-title="Section">Section</span></a></li>
        <li><a href="<?php echo base_url(); ?>subject"><span data-title="Subject">Subject</span></a></li>
      </ul>
    </nav>

 <?php echo $output;?>
</div><!--ends admin nav-->

            
</body>

</html>


