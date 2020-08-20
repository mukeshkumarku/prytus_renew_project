<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Prytus</title>

    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <meta name="title" content="Prytus is good software company in gurugram">
    <meta name="description" content="Do you want best IT Consulting Firm in India which is increase 
    you business 10x better, Get high quality services grow your business.">
    <meta name="keywords" content="software company,web development, report designing ">
    <meta name="robots" content="index, follow">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="English">

    <!-- Favicons -->
    <link href="<?php echo base_url('assets/img/favicon1.png');?>" rel="icon">
    <link href="<?php echo base_url('assets/img/apple-touch-icon1.png');?>" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?php echo base_url('assets/vendor/bootstrap/css/bootstrap.min.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/vendor/animate.css/animate.min.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/vendor/icofont/icofont.min.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/vendor/boxicons/css/boxicons.min.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/vendor/venobox/venobox.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/vendor/owl.carousel/assets/owl.carousel.min.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/vendor/aos/aos.css');?>" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?php echo base_url('assets/css/style.css');?>" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">




    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-171786586-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-171786586-1');
    </script>


</head>

<body>


    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top header-transparent">
        <div class="container">

            <div class="logo float-left">
                <h1 class="text-light">
                    <a href="<?php echo site_url('Main_controller/index');?>">
                        <span>
                            <img src="<?php echo base_url('assets/img/logo_prytus _final.jpg' );?>" width="130"
                                height="300" class="img-fluid">
                        </span></a>
                </h1>

                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a> -->
            </div>

            <nav class="nav-menu float-right d-none d-lg-block">
                <ul>
                    <li class="active"><a href="<?php echo site_url('Main_controller/index');?>">Home</a></li>
                    <li><a href="<?php echo site_url('Main_controller/About_us_controller');?>">About Us</a></li>
                    <li><a href="<?php echo site_url('Main_controller/Services_view_controller');?>">Services</a></li>
                    <!--li><a href="portfolio.html">Portfolio</a></li-->
                    <li><a href="<?php echo site_url('Main_controller/Team_view_controller');?>">Team</a></li>

                    <li><a href="tel:+919148544178" onclick="gtag('event','Call us',{event_category:'Click to Call',
                    event_action:'Call',event_label:'Phone Number'});"><i class="bx bx-phone">
                            </i> +91 9650477482</a></li>


                    <li>
                        <a  class="button" data-toggle="modal" data-target="#modalPoll-1"
                            id="myBtn" >Request A Quote</a>
                    </li>


                    <!-- <li>
                        <a href="<?php //echo site_url('Main_controller/Contact_view_controller');?>" class="button"
                            id="myBtn">Request A Quote</a>
                    </li> -->


                    
                    <!--button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalPoll-1">Request
                        A Quote</button-->

                </ul>

            </nav><!-- .nav-menu -->
        </div>



        <!-- Modal: modalPoll -->
        <div class="modal fade left" id="modalPoll-1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true" data-backdrop="false">
            <div class="modal-dialog modal-full-height  modal-notify modal-info" role="document">
                <div class="modal-content">
                    <!--Header-->
                    <div class="modal-header">
                        <p class="heading lead">Wanna Discuss Work?
                        </p>

                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" class="white-text">×</span>
                        </button>
                    </div>

                    <!--Body-->
                    <div class="modal-body">
                        <div class="text-center">
                            <i class="far fa-file-alt fa-4x mb-3 animated rotateIn"></i>
                            <p>
                                <strong>Tel: +91 9650477482 | sales@prytus.com</strong>
                            </p>
                        </div>

                        <hr>

                        <!-- Start Form part -->
                        <div class="modal-body" style="padding:40px 50px;">
                            <form role="form" action="<?php echo site_url('Main_controller/Request_view_model_controller');?>"
                                method="post" id="form1">

            
                                <div class="form-group">
                                    <label for="fname"><span class="glyphicon glyphicon-user"></span>
                                        Name</label>
                                    <input type="text" name="Fname" class="form-control" id="Fname"  
                                        placeholder="Enter Your Name" required>
                                </div>

                                <div class="form-group">
                                    <label for="email"><span class="glyphicon glyphicon-email" required></span>
                                        Email</label>
                                    <input type="email" name="email" class="form-control" id="email"
                                        placeholder="Enter email" required>
                                </div>

                                <div class="form-group">
                                    <label for="phone"><span class="glyphicon glyphicon-user"></span>
                                        Phone</label>
                                    <input type="text" name="phone" class="form-control" id="phone"
                                        placeholder="Enter phone" required>
                                </div>

                                <div class="form-group">
                                    <label for="services"><span class="glyphicon glyphicon-user"></span>
                                        Services</label>
                                    <select class="custom-select" required name="services" id="services" >
                                        <option selected="">Open this select menu</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                                <div class="md-form">
                                       <label for="message">Your message</label>
                                    <textarea type="text" id="message" name="message"
                                        class="md-textarea form-control" rows="3"></textarea>
                                
                                </div><br>

                                <button type="submit" class="btn btn-primary waves-effect waves-light" form="form1"
                                    value="Submit">Submit</button>

                                <a type="button" class="btn btn-outline-primary waves-effect"
                                    data-dismiss="modal">Cancel</a>
                                <!-- </div> -->
                            </form>
                        </div>
                        <!-- End Form part -->

                    </div>
                </div>
            </div>
        </div>
        <!-- Modal: modalPoll -->




    </header><!-- End Header -->