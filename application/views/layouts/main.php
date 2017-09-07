<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Startmin - Bootstrap Admin Theme</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url(); ?>/assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?php echo base_url(); ?>/assets/css/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="<?php echo base_url(); ?>/assets/css/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url(); ?>/assets/css/startmin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="<?php echo base_url(); ?>/assets/css/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url(); ?>/assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap-theme.min.css') ?>">
    <style type="text/css">
          .modal-content
    {
        width: 50%;
        margin-left: 350px;
       
    }
    select { 
        margin-left: 0px;
        margin-top: 10px;
        
    }
    select.selectList { width: 150px; }
    .form-control
    {
        width: 350px;
    }
    .btn-size
    {
        margin-left: 300px;
    }
    .modal-body {
       max-height: 100%;
        overflow-y: auto;
    
}
    .margin3
    {
        margin-left: 680px;
    }
     .margin4
    {
        margin-left: 750px;
    }

    .row1
    {
        margin-left: -60px;
        margin-top: 10px;
    }

     .row2
    {
        margin-left: 20px;
    }

     .right_row
    {
        margin-left: 580px;
        margin-top: -500px;
       
    }

    .right_row1
    {
        margin-left: 580px;
        margin-top: -460px;
       
    }

    .right_row2
    {
        margin-left: 580px;
        margin-top: -420px;
       
    }

    .right_row3
    {
        margin-left: 580px;
        margin-top: -380px;
       
    }

     .right_row4
    {
        margin-left: 580px;
        margin-top: -340px;
       
    }

     .right_row5
    {
        margin-left: 560px;
        margin-top: -180px;
         
    }

     .right_row6
    {
        margin-left: 560px;
        margin-top: -160px;
         
    }
      
    form
    {
        margin-top: 50px;
    }

    .btn-size1
    {
        margin-left: 500px;
        padding-bottom: 70px;
        padding-top: 20px;
    }

    </style>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

 <?php
  
    $this->load->view($main_content);
    
  ?>




</body>
</html>