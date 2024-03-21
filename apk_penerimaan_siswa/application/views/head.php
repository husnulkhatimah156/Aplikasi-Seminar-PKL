<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>SMK NEGERI 1 MARABAHAN </title>
     <link rel="shorcut icon" type="text/css" href="<?php echo base_url().'assets/logosmk.png'?>">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/bootstrap.min.css'?>">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/font-awesome.min.css'?>">
    <!-- Simple Line Font -->
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/simple-line-icons.css'?>">
    <!-- Slider / Carousel -->
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/slick.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/slick-theme.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/owl.carousel.min.css'?>">
     <!-- Magnific Popup CSS -->
  <link rel="stylesheet" href="<?php echo base_url().'theme/css/magnific-popup.css'?>">
  <!-- Image Hover CSS -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url().'theme/css/normalize.css'?>" />
  <link rel="stylesheet" type="text/css" href="<?php echo base_url().'theme/css/set2.css'?>" />
    <!-- Main CSS -->
    <link href="<?php echo base_url().'theme/css/style.css'?>" rel="stylesheet">

     <link href="<?php echo base_url().'theme/css/dataTables.bootstrap4.min.css'?>" rel="stylesheet">
                   <link href="<?php echo base_url();?>assets/alert/sweetalert2.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/alert/sweetalert2.min.css" rel="stylesheet">
  <script src="<?php echo base_url();?>assets/alert/sweetalert2.min.js"></script>
 <script src="<?php echo base_url();?>assets/alert/sweetalert2.js"></script>
<script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>
    <?php
        function limit_words($string, $word_limit){
            $words = explode(" ",$string);
            return implode(" ",array_splice($words,0,$word_limit));
        }
    ?>
</head>

<body style="">
    <!--============================= HEADER =============================-->
    <div class="header-topbar" style="background-color: #6a99ba">
        <div class="container" >
            <div class="row" >
                <div class="col-xs-6 col-sm-8 col-md-9" >
                    <div class="header-top_address">
                    
                        
                        <div class="header-top_list" style="color: white; font-weight: bold;">
                            <span class="icon-location-pin" style="color: white;"></span>Jl. Jend. Sudirman No. 87, Marabahan, Barito Kuala, Kalimantan Selatan 70513

                        </div>
                    </div>
                    
                </div>
              
            </div>
        </div>
    </div>

    <div data-toggle="affix" style="background-color: #f9f9f9;">
        <div class="container nav-menu2">
            <div class="row">
                <div class="col-md-12" >
                    <nav class="navbar navbar2 navbar-toggleable-md navbar-light bg-faded" style="background-color: #f9f9f9;">
                        <button class="navbar-toggler navbar-toggler2 navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown">
                            <span class="icon-menu"></span>
                        </button>

                        <a href="<?php echo site_url('');?>" class="navbar-brand nav-brand2"><img class="img img-responsive" width="50px;" src="<?php echo base_url().'assets/logosmk.png'?>"></a>
                        <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="btn btn-success btn-sm" href="<?php echo site_url('');?>">Home</a>
                                </li>
                           
                           
                                <li class="nav-item">
                                    <a  class="btn btn-success btn-sm " href="<?php echo site_url('visimisi');?>">Visi & Misi</a>
                                </li>
                           
                                <li class="nav-item">
                                    <a  class="btn btn-success btn-sm " href="<?php echo site_url('pendaftaran');?>">Pendaftaran</a>
                                </li>

                        
                                <li class="nav-item">
                                    <a  class="btn btn-success btn-sm" href="<?php echo site_url('login');?>">Login</a>
                                </li>
                      
                             </ul>

                        </div>
                    </nav>
                </div>
            </div>
        </div>
      </div>