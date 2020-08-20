 <?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>


 <!-- ======= Hero Section ======= -->
 <section id="hero" class="d-flex justify-cntent-center align-items-center">
     <div id="heroCarousel" class="container carousel carousel-fade" data-ride="carousel">

         <!-- Slide 1 -->
         <div class="carousel-item active">
             <div class="carousel-container">
                 <h2 class="animate__animated animate__fadeInDown">Welcome to <span>Prytus</span></h2>
                 <p class="animate__animated animate__fadeInUp">
                     <b>Prytus</b>, a IT based company, welcomes
                     new customers with a promise that they will be the first to know about the latest technology
                     from
                     the Prytus.
                 </p>
                 <a href="<?php echo site_url('Main_controller/Readmore_controller');?>"
                     class="btn-get-started animate__animated animate__fadeInUp">Read More</a>
             </div>
         </div>

         <!-- Slide 2 -->
         <div class="carousel-item">
             <div class="carousel-container">
                 <h2 class="animate__animated animate__fadeInDown">who we are?</h2>
                 <p class="animate__animated animate__fadeInUp">Prytus IT based company in Gurgaon, India, established
                     in 2020, with a team of 10+ consulting & engineering professionals. We are a specialist
                     IT Consulting Firm, Focused on generating exceptional value for our clients.
                     Our clients are in Dubai and India.
                 </p>
                 <a href="<?php echo site_url('Main_controller/Readmore_controller');?>"
                     class="btn-get-started animate__animated animate__fadeInUp">Read More</a>
             </div>
         </div>

         <!-- Slide 3 -->


         <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
             <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
             <span class="sr-only">Previous</span>
         </a>

         <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
             <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
             <span class="sr-only">Next</span>
         </a>

     </div>
 </section><!-- End Hero -->

 <main id="main">

     <!-- ======= Services Section ======= 
     <section class="services">

         <div class="section-title">
             <h2>Services</h2>
             <div class="container">

                 <div class="row">
                     <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up">
                         <div class="icon-box icon-box-pink">
                             <img src="<?php echo base_url('assets/img/Digital_marketing.jpg');?>"
                                 style="height:150px; width:180px">
                             <h4 class="title"><a href="">Digital Marketing</a></h4>
                             <a href="<?php echo site_url('Main_controller/Services_view_controller');?>"
                                 class="btn-get-started animate__animated animate__fadeInUp">Read More</a>
                         </div>
                     </div>

                     <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                         <div class="icon-box icon-box-cyan">
                             <img src="<?php echo base_url('assets/img/web_designing.jpg');?>"
                                 style="height:150px;width:180px">
                             <h4 class="title"><a href="">Web Designing</a></h4>
                             <a href="<?php echo site_url('Main_controller/Services_view_controller');?>"
                                 class="btn-get-started animate__animated animate__fadeInUp">Read More</a>
                         </div>
                     </div>

                     <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                         <div class="icon-box icon-box-green">
                             <img src="<?php echo base_url('assets/img/web_development.jpg');?>"
                                 style="height:150px;width:180px">
                             <h4 class="title"><a href="">Web Development</a></h4>
                             <a href="<?php echo site_url('Main_controller/Services_view_controller');?>"
                                 class="btn-get-started animate__animated animate__fadeInUp">Read More</a>
                         </div>
                     </div>

                     <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                         <div class="icon-box icon-box-blue">
                             <img src="<?php echo base_url('assets/img/Mobile_app.jpg');?>"
                                 style="height:150px;width:180px">
                             <h4 class="title"><a href="">Mobile Application</a></h4>
                             <a href="<?php echo site_url('Main_controller/Services_view_controller');?>"
                                 class="btn-get-started animate__animated animate__fadeInUp">Read More</a>
                         </div>
                     </div>

                 </div>

             </div>
     </section> -->


     <!-- ======= Service Details Section ======= -->
     <section class="service-details">
         <div class="container">

             <div class="row">
                 <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-up">
                     <div class="card">
                         <div class="card-img">
                             <img src="<?php echo base_url('assets/img/service-details-1.jpg');?>" class="img-fluid"
                                 alt="">

                             <!-- <img src="assets/img/service-details-1.jpg" alt="..."> -->
                         </div>
                         <div class="card-body">
                             <h5 class="card-title"><a href="#">Our Mission</a></h5>
                             <p class="card-text">Our mission is to enhance business growth of our customers with
                                 creative design, development and to deliver market defining high quality solutions that
                                 create value and reliable competitive advantage to customers around the globe.</p>
                             <!-- <div class="read-more"><a href="#"><i class="icofont-arrow-right"></i> Read More</a></div> -->
                         </div>
                     </div>
                 </div>
                 <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-up">
                     <div class="card">
                         <div class="card-img">
                             <img src="<?php echo base_url('assets/img/service-details-2.jpg');?>" class="img-fluid"
                                 alt="">
                             <!-- <img src="assets/img/service-details-2.jpg" alt="..."> -->
                         </div>
                         <div class="card-body">
                             <h5 class="card-title"><a href="#">Our Plan</a></h5>
                             <p class="card-text">It's actually aimed at consultants and advisors looking to help
                                 build business plans for their clients. Because of this focus, you'll find a lot of
                                 planning and guidance tools for consultants helping third-parties, but relatively
                                 few advanced features when it comes to actually building the business plan.</p>
                             <!-- <div class="read-more"><a href="#"><i class="icofont-arrow-right"></i> Read More</a></div> -->
                         </div>
                     </div>

                 </div>
             </div>
         </div>
     </section>



     <!-- ======= Why Us Section ======= -->
     <section class="why-us section-bg" data-aos="fade-up" date-aos-delay="200">
         <div class="container">

             <div class="row">
                 <div class="col-lg-6 video-box">
                     <img src="<?php echo base_url('assets/img/jaspersoftimg.png');?>" class="img-fluid" alt="">
                     <a href="https://www.youtube.com/watch?v=yRLvJgz9Dxk" class="venobox play-btn mb-4"
                         data-vbtype="video" data-autoplay="true"></a>
                 </div>

                 <div class="col-lg-6 d-flex flex-column justify-content-center p-5">

                     <div class="icon-box">
                         <div class="icon"><i class="bx bx-detail"></i></div>
                         <h4 class="title"><a href="">Reporting Tools</a></h4>
                         <p class="description">Using the reporting tools means lower the efficiency of development,
                             developers have to build a lot of data schemas to adapt to the data source of
                             reporting tools. 1.JasperReport<br>2.BirtReport</p>


                     </div>

                     <div class="icon-box">
                         <div class="icon"><i class="bx bx-bot"></i></div>
                         <h4 class="title"><a href="">ChatBots</a></h4>
                         <p class="description">You may be filled with questions,
                             chatbots respond to pre-written keywords or commands programmed by a developer.
                             These bots are simple and limited when it comes to communication..</p>
                     </div>

                 </div>
             </div>

         </div>
     </section><!-- End Why Us Section -->




     <!-- ======= Services Section ======= -->
     <section class="services">
         <div class="container">

             <div class="row">
                 <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up">
                     <div class="icon-box icon-box-pink">
                         <div class="icon"><i class="bx bx-chalkboard"></i></div>
                         <h4 class="title"><a href="">Digital Marketing</a></h4>
                         <p class="description">Digital Marketing is the main thing which will behind the success of
                             each online marketing.</p>
                     </div>
                 </div>

                 <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                     <div class="icon-box icon-box-cyan">
                         <div class="icon"><i class="bx bx-file"></i></div>
                         <h4 class="title"><a href="">Website Designing</a></h4>
                         <p class="description">We make use of our creative abilities,
                             trend awareness and combine all of it with our technical skills and professional
                             efficiency.</p>
                     </div>
                 </div>

                 <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                     <div class="icon-box icon-box-green">
                         <div class="icon"><i class="bx bx-mobile"></i></div>
                         <h4 class="title"><a href="">Mobile Application</a></h4>
                         <p class="description">Prytus is a reliable & cost effective mobile application development
                             company.
                             <!-- We offer you end-to-end mobility solutions to transform the business
                             process the way you do the business.</p> -->
                     </div>
                 </div>

                 <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                     <div class="icon-box icon-box-blue">
                         <div class="icon"><i class="bx bx-desktop"></i></div>
                         <h4 class="title"><a href="">Web Development </a></h4>
                         <p class="description">Prytus is Web development based company who offer effective and
                             conclusive.</p>
                     </div>
                 </div>

             </div>

         </div>
     </section><!-- End Services Section -->


     <section class="facts section-bg" data-aos="fade-up">
         <div class="container">

             <div class="row counters">

                 <div class="col-lg-3 col-6 text-center">
                     <span data-toggle="counter-up">2 </span>
                     <p>Clients</p>
                 </div>

                 <div class="col-lg-3 col-6 text-center">
                     <span data-toggle="counter-up">2 </span>
                     <p>Projects</p>
                 </div>

                 <div class="col-lg-3 col-6 text-center">
                     <span data-toggle="counter-up">24</span>
                     <p>Hours Of Support</p>
                 </div>

                 <div class="col-lg-3 col-6 text-center">
                     <span data-toggle="counter-up">10</span>
                     <p>Hard Workers</p>
                 </div>

             </div>

         </div>
     </section><!-- End Facts Section -->






     <!-- ======= Features Section ======= -->
     <section class="features">
         <div class="container">

             <div class="section-title">
                 <h2>Why Prytus?</h2>
                 <p>We have demonstrated capability in delivering high quality products and services, timeliness in
                     meeting deadlines and strong business ethics consistently in all our engagements. This solid track
                     record has enabled us to establish long-standing relationships with clients and engage with them
                     across multiple assignments.</p>
             </div>

             <div class="row" data-aos="fade-up">
                 <div class="col-md-5">
                     <img src="<?php echo base_url('assets/img/features-1.svg');?>" class="img-fluid" alt="">
                 </div>
                 <div class="col-md-7 pt-4">
                     <h3>Customized Solutions.</h3>
                     <p class="font-italic">
                         We take the time to truly understand the details of your current architecture.We take the time
                         to truly understand the details of your current architecture. Custom software development
                         is the process of designing, building, integrating, scaling, and upgrading software solutions
                         to address the pressing needs or achieve objectives of your specific business.
                     </p>
                     <!-- <ul>
                         <li><i class="icofont-check"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                         <li><i class="icofont-check"></i> Duis aute irure dolor in reprehenderit in voluptate velit.
                         </li>
                     </ul> -->
                 </div>
             </div>

             <div class="row" data-aos="fade-up">
                 <div class="col-md-5 order-1 order-md-2">
                     <img src="<?php echo base_url('assets/img/features-2.svg');?>" class="img-fluid" alt="">
                 </div>
                 <div class="col-md-7 pt-5 order-2 order-md-1">
                     <h3>High-Value Insights</h3>
                     <p class="font-italic">
                         The road to successfully achieving goals in IT is littered with risks. Our insights help you
                         make the most informed decision possible. Let us bring you peace of mind!
                     </p>
                     <ul>
                         <li><i class="icofont-check"></i>Startup.</li>
                         <li><i class="icofont-check"></i>Early growth.
                         </li>
                         <li><i class="icofont-check"></i>Rapid growth.
                         </li>
                     </ul>
                 </div>
             </div>

             <div class="row" data-aos="fade-up">
                 <div class="col-md-5">
                     <img src="<?php echo base_url('assets/img/features-3.svg');?>" class="img-fluid" alt="">
                 </div>
                 <div class="col-md-7 pt-5">
                     <h3>Knowledge Base</h3>
                     <p>We are committed to the continual training and development of our consultants and technical
                         resources. They are certified, seasoned professionals that understand past and current systems
                         and trends.</p>
                     <ul>
                         <li><i class="icofont-check"></i> Deep-learning technology.</li>
                         <li><i class="icofont-check"></i>Depth knowledge about architecture.
                         </li>
                         <li><i class="icofont-check"></i>Strategic management.
                         </li>
                     </ul>
                 </div>
             </div>

             <div class="row" data-aos="fade-up">
                 <div class="col-md-5 order-1 order-md-2">
                     <img src="<?php echo base_url('assets/img/features-4.svg');?>" class="img-fluid" alt="">
                 </div>
                 <div class="col-md-7 pt-5 order-2 order-md-1">
                     <h3>Customer First</h3>
                     <p class="font-italic">
                         We know the formula to success lies in our priorities. We always put the needs of the clients
                         first by treating their environments as if they were our own. Next, we understand that the
                         quality and performance of delivery of your objectives depends on our happy employees.
                     </p>
                     <p>
                         "It's through vulnerability that human beings create connections. The more vulnerable
                         we can be with one another, the more that we'll trust one another and the more we'll be
                         able to collaborate effectively.
                     </p>
                 </div>
             </div>

         </div>
     </section><!-- End Features Section -->





     <!-- ======= Client Section ======= -->
     <section class="portfolio">
         <div class="container">

             <div class="row">
                 <div class="col-lg-12">
                     <ul id="portfolio-flters">
                         <li data-filter="*" class="filter-active">Our Client</li>
                         <!-- <li data-filter=".filter-app">App</li>
                         <li data-filter=".filter-card">Card</li>
                         <li data-filter=".filter-web">Web</li> -->
                     </ul>
                 </div>
             </div>

             <div class="row portfolio-container" data-aos="fade-up" data-aos-easing="ease-in-out"
                 data-aos-duration="500">

                 <div class="col-lg-4 col-md-6 filter-app">
                     <div class="portfolio-item">
                         <!-- <img src="assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt=""> -->
                         <img src="<?php echo base_url('assets/img/techdigi.png');?>" class="img-fluid">

                         <div class="portfolio-info">
                             <h3><a href="<?php echo base_url('assets/img/techdigi.png');?>"
                                     data-gall="techdigisolution" class="venobox" title="Techdigi">Techdigisolution</a>
                             </h3>
                             <div>
                                 <a href="<?php echo base_url('assets/img/techdigi.png');?>"
                                     data-gall="techdigisolution" class="venobox" title="techdigi"><i
                                         class="bx bx-plus"></i></a>

                                 <a href="#" title="Techdigisolution Details"> <i
                                         class="bx bx-link"></i>Techdigisolution</a>
                             </div>
                         </div>
                     </div>
                 </div>

                 <div class="col-lg-4 col-md-6 filter-web">
                     <div class="portfolio-item">
                         <img src="<?php echo base_url('assets/img/royalrichs.png');?>" class="img-fluid" alt="">
                         <div class="portfolio-info">
                             <h3><a href="<?php echo base_url('assets/img/royalrichs.png');?>" data-gall="RoyalRichs"
                                     class="venobox" title="RoyalRichs">RoyalRichs </a>
                             </h3>
                             <div>
                                 <a href="<?php echo base_url('assets/img/royalrichs.png');?>" data-gall="RoyalRichs"
                                     class="venobox" title="RoyalRichs"><i class="bx bx-plus"></i></a>

                                 <a href="#" title="RoyalRichs Details"><i class="bx bx-link"></i></a>
                             </div>
                         </div>
                     </div>
                 </div>

                 <div class="col-lg-4 col-md-6 filter-app">
                     <div class="portfolio-item">
                         <img src="#" class="img-fluid" alt="">
                         <div class="portfolio-info">
                             <h3><a href="#" data-gall="portfolioGallery" class="venobox" title="client3">Client 3</a>
                             </h3>
                             <div>
                                 <a href="#" data-gall="portfolioGallery" class="venobox" title="ccclient3"><i
                                         class="bx bx-plus"></i></a>
                                 <a href="#" title="Client3 Details"><i class="bx bx-link"></i></a>
                             </div>
                         </div>
                     </div>
                 </div>

                 <!-- <div class="col-lg-4 col-md-6 filter-card">
                     <div class="portfolio-item">
                         <img src="assets/img/portfolio/portfolio-4.jpg" class="img-fluid" alt="">
                         <div class="portfolio-info">
                             <h3><a href="assets/img/portfolio/portfolio-4.jpg" data-gall="portfolioGallery"
                                     class="venobox" title="Card 2">Card 2</a></h3>
                             <div>
                                 <a href="assets/img/portfolio/portfolio-4.jpg" data-gall="portfolioGallery"
                                     class="venobox" title="Card 2"><i class="bx bx-plus"></i></a>
                                 <a href="portfolio-details.html" title="Portfolio Details"><i
                                         class="bx bx-link"></i></a>
                             </div>
                         </div>
                     </div>
                 </div>

                 <div class="col-lg-4 col-md-6 filter-web">
                     <div class="portfolio-item">
                         <img src="assets/img/portfolio/portfolio-5.jpg" class="img-fluid" alt="">
                         <div class="portfolio-info">
                             <h3><a href="assets/img/portfolio/portfolio-5.jpg" data-gall="portfolioGallery"
                                     class="venobox" title="Web 2">Web 2</a></h3>
                             <div>
                                 <a href="assets/img/portfolio/portfolio-5.jpg" data-gall="portfolioGallery"
                                     class="venobox" title="Web 2"><i class="bx bx-plus"></i></a>
                                 <a href="portfolio-details.html" title="Portfolio Details"><i
                                         class="bx bx-link"></i></a>
                             </div>
                         </div>
                     </div>
                 </div>

                 <div class="col-lg-4 col-md-6 filter-app">
                     <div class="portfolio-item">
                         <img src="assets/img/portfolio/portfolio-6.jpg" class="img-fluid" alt="">
                         <div class="portfolio-info">
                             <h3><a href="assets/img/portfolio/portfolio-6.jpg" data-gall="portfolioGallery"
                                     class="venobox" title="App 3">App 3</a></h3>
                             <div>
                                 <a href="assets/img/portfolio/portfolio-6.jpg" data-gall="portfolioGallery"
                                     class="venobox" title="App 3"><i class="bx bx-plus"></i></a>
                                 <a href="portfolio-details.html" title="Portfolio Details"><i
                                         class="bx bx-link"></i></a>
                             </div>
                         </div>
                     </div>
                 </div>

                 <div class="col-lg-4 col-md-6 filter-card">
                     <div class="portfolio-item">
                         <img src="assets/img/portfolio/portfolio-7.jpg" class="img-fluid" alt="">
                         <div class="portfolio-info">
                             <h3><a href="assets/img/portfolio/portfolio-7.jpg" data-gall="portfolioGallery"
                                     class="venobox" title="Card 1">Card 1</a></h3>
                             <div>
                                 <a href="assets/img/portfolio/portfolio-7.jpg" data-gall="portfolioGallery"
                                     class="venobox" title="Card 1"><i class="bx bx-plus"></i></a>
                                 <a href="portfolio-details.html" title="Portfolio Details"><i
                                         class="bx bx-link"></i></a>
                             </div>
                         </div>
                     </div>
                 </div>

                 <div class="col-lg-4 col-md-6 filter-card">
                     <div class="portfolio-item">
                         <img src="assets/img/portfolio/portfolio-8.jpg" class="img-fluid" alt="">
                         <div class="portfolio-info">
                             <h3><a href="assets/img/portfolio/portfolio-8.jpg" data-gall="portfolioGallery"
                                     class="venobox" title="Card 3">Card 3</a></h3>
                             <div>
                                 <a href="assets/img/portfolio/portfolio-8.jpg" data-gall="portfolioGallery"
                                     class="venobox" title="Card 3"><i class="bx bx-plus"></i></a>
                                 <a href="portfolio-details.html" title="Portfolio Details"><i
                                         class="bx bx-link"></i></a>
                             </div>
                         </div>
                     </div>
                 </div>

                 <div class="col-lg-4 col-md-6 filter-web">
                     <div class="portfolio-item">
                         <img src="assets/img/portfolio/portfolio-9.jpg" class="img-fluid" alt="">
                         <div class="portfolio-info">
                             <h3><a href="assets/img/portfolio/portfolio-9.jpg" data-gall="portfolioGallery"
                                     class="venobox" title="Web 1">Web 1</a></h3>
                             <div>
                                 <a href="assets/img/portfolio/portfolio-9.jpg" data-gall="portfolioGallery"
                                     class="venobox" title="Web 1"><i class="bx bx-plus"></i></a>
                                 <a href="portfolio-details.html" title="Portfolio Details"><i
                                         class="bx bx-link"></i></a>
                             </div>
                         </div>
                     </div>
                 </div>

             </div> -->

             </div>
     </section><!-- End Client Section -->




 </main><!-- End #main -->