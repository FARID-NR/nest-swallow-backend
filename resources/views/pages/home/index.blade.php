@extends('template.app')

@section('content')
      <!-- start slider section -->
      <div class=" banner_main">
         <div class="container-fluid">
            <div class="row">
               <div class="col-md-5">
                  <div class="bluid">
                     <h1> <a class="coming" >APPS</a> <br><span class="black">Nest <br> Swallow</span></h1>
                     <p>Welcome<br> Your Online Guide To Birds And Bird Watching</p>
                     <a class="read_more" href="birds.html">Coming Soon </a>
                  </div>
               </div>
               <div class="col-md-7">
                  <div id="myCarousel" class="carousel slide" data-ride="carousel">
                     <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                     </ol>
                     <div class="carousel-inner">
                        <div class="carousel-item active">
                           <div class="container">
                              <div class="carousel-caption relative">
                                 <div class="banner_img">
                                    <figure><img src="assets/images/proto.png" alt="#"/></figure>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <div class="container">
                              <div class="carousel-caption relative">
                                 <div class="banner_img">
                                    <figure><img src="assets/images/proto.png" alt="#"/></figure>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <div class="container">
                              <div class="carousel-caption relative">
                                 <div class="banner_img">
                                    <figure><img src="assets/images/proto.png" alt="#"/></figure>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                     <i class="fa fa-angle-left" aria-hidden="true"></i>
                     <span class="sr-only">Previous</span>
                     </a>
                     <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                     <i class="fa fa-angle-right" aria-hidden="true"></i>
                     <span class="sr-only">Next</span>
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end slider section -->
@endsection

@section('content1')
      <!-- about -->
      <div id="about" class="about">
         <div class="container">
            <div class="row">
               <div class="col-md-6 offset-md-6">
                  <div class="titlepage text_align_center">
                     <h2>About Us Nest Swallow</h2>
                     <div class="titlepage text_align_right">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit  </p>
                     </div>
                     <a class="read_more" href="about.html">Read More</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
@endsection

@section('content2')
      <div id="contact" class="contact">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
               </div>
            </div>
            <div class="row">
               <div class="col-md-12 no_ld">
                  <div class="titlepage text_align_right">
                     <h2>Contact Us</h2>
                  </div>
               </div>
               <div class="col-md-5 ">
                  <div class="contact_img">
                     <figure><img src="assets/images/coimg.png" alt="#"/></figure>
                  </div>
               </div>
               <div class=" col-md-6 offset-md-1">
                  <form id="request" class="main_form">
                     <div class="row">
                        <div class="col-md-12 no_mo">
                           <div class="titlepage text_align_right">
                              <h2>Contact Us</h2>
                           </div>
                        </div>
                        <div class="col-md-12 ">
                           <input class="contactus" placeholder="Your Name" type="type" name="Your Name">
                        </div>
                        <div class="col-md-6">
                           <input class="contactus" placeholder="Phone number" type="type" name="Phone number">
                        </div>
                        <div class="col-md-6">
                           <input class="contactus" placeholder="Email" type="type" name="Email">
                        </div>
                        <div class="col-md-12">
                           <textarea class="textarea" placeholder="Message" type="type" Message="Name">Message</textarea>
                        </div>
                        <div class="col-md-12">
                           <button class="send_btn">Send</button>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
      <!-- end contact -->
@endsection
