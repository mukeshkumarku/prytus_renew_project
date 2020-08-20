<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>


<!-- ======= Header ======= -->
<header id="header" class="fixed-top ">

</header><!-- End Header -->


<main id="main">

    <!-- ======= Contact Section ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Contact</h2>
                <ol>
                    <li><a href="<?php echo site_url('Main_controller/index');?>">Home</a></li>
                    <li>Contact</li>
                </ol>
            </div>

        </div>
    </section><!-- End Contact Section -->

    <!-- ======= Contact Section ======= -->
    <section class="contact" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
        <div class="container">

            <div class="row">

                <div class="col-lg-6">

                    <div class="row">
                        <div class="col-md-12">
                            <div class="info-box">
                                <i class="bx bx-map"></i>
                                <h3>Our Address</h3>
                                <p>Plot No. 52,Sector 32, Gurgaon - 122003</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-box">
                                <i class="bx bx-envelope"></i>
                                <h3>Email Us</h3>
                                <p>sales@prytus.com</p>
                                <p>support@prytus.com</p>

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-box">
                                <i class="bx bx-phone-call"></i>
                                <h3>Call Us</h3>
                                <p>9650477482</p>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-lg-6">

                    <!-- Success Flash message available here .............. -->

                    <?php if($error = $this->session->flashdata('msg')){ ?>
                    <p style="color: green;"><strong>Success!</strong> <?php echo  $error; ?><p>
                            <?php } ?>

                            <!-- //End Flash message available here .............. -->


                            <form action="<?php echo base_url(); ?>Main_controller/send" method="post">

                                <input type="text" name="name" class="form-control" placeholder="Enter name"
                                    required><br>
                                <input type="email" name="from" class="form-control" placeholder="Enter Email"
                                    required><br>

                                <input type="text" name="phone_no" class="form-control" placeholder="Mobile"
                                    required><br>
                                <textarea name="message" class="form-control" placeholder="Enter message here"
                                    required></textarea><br>

                                <button type="submit" class="btn btn-primary">Send Message</button>
                            </form>
                </div>

    </section><!-- End Contact Section -->
    <!-- ======= Map Section ======= -->
    <!--section class="map mt-2">
      <div class="container-fluid p-0">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3024.2219901290355!2d-74.00369368400567!3d40.71312937933185!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a23e28c1191%3A0x49f75d3281df052a!2s150%20Park%20Row%2C%20New%20York%2C%20NY%2010007%2C%20USA!5e0!3m2!1sen!2sbg!4v1579767901424!5m2!1sen!2sbg" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
      </div>
    </section-->
    <!-- End Map Section -->

</main><!-- End #main -->