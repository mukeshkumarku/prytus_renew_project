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
                <h2>successfull</h2>
                <ol>
                    <li><a href="<?php echo site_url('Main_controller/index');?>">Home</a></li>
                    <li>successful</li>
                </ol>
            </div>

        </div>
    </section><!-- End Contact Section -->

    <div class="alert alert-dismissible alert-success">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <!--strong>Well done!</strong> You successfully Send <a href="#" class="alert-link">this important alert
            message</a-->

             <?php if($this->session->flashdata('success')){?>
                
                    <p><?php echo $this->session->flashdata('success');?></p>
                  
                  <?php }?>
    </div>
    <div class="alert alert-dismissible alert-success">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <h4 class="alert-heading">Well done!!</h4>
        <p class="mb-0">Best check your self, you're successfully Send message too good. We will Contact
            You.</p>
    </div>