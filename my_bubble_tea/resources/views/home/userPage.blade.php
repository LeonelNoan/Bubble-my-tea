<!DOCTYPE html>
<html lang="en">

<head>
   <!-- basic -->
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- mobile metas -->
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="viewport" content="initial-scale=1, maximum-scale=1">
   <!-- site metas -->
   <title>Bubble My Tea</title>
   <meta name="keywords" content="">
   <meta name="description" content="">
   <meta name="author" content="">
   <!-- bootstrap css -->
   <link rel="stylesheet" type="text/css" href="home/css/bootstrap.min.css">
   <!-- style css -->
   <link rel="stylesheet" type="text/css" href="home/css/style.css">
   <!-- Responsive-->
   <link rel="stylesheet" href="home/css/responsive.css">
   <!-- fevicon -->
   <link rel="icon" href="home/images/fevicon.png" type="image/gif" />
   <!-- Scrollbar Custom CSS -->
   <link rel="stylesheet" href="home/css/jquery.mCustomScrollbar.min.css">
   <!-- Tweaks for older IEs-->
   <link rel="stylesheet" href="home/https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
   <!-- owl stylesheets -->
   <link rel="stylesheet" href="home/css/owl.carousel.min.css">
   <link rel="stylesoeet" href="home/css/owl.theme.default.min.css">
   <link rel="stylesheet" href="home/https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
      media="screen">
</head>

<body>
   <!-- header section start -->
   @include('home.header')
   <!-- header section end -->
   <!-- about section start -->
  @include('home.about')
   <!-- about section end -->
   <!-- booking section start -->
   <div class="booking_section">
      <div class="container">
         <div class="row">
            <div class="col-md-6">
               <h1 class="booking_taital">Book Now Table</h1>
               <p class="booking_text">It is a long established fact that a reader will be </p>
            </div>
            <div class="col-md-6">
               <div class="booking_bt"><a href="#">Book Table For Tea</a></div>
            </div>
         </div>
      </div>
   </div>
   <!-- booking section end -->
   <!-- services section start -->
   @include('home.services')
   <!-- services section end -->
   <!-- choose section start -->
   <div class="choose_section">
      <div class="container">
         <h1 class="choose_taital">Why Choose Us</h1>
         <p class="choose_text">It is a long established fact that a reader will beIt is a long established fact that a
            reader will be</p>
         <div class="choose_section_2">
            <div class="choose_left">
               <div class="choose_left_main">
                  <div class="icon_1"><img src="home/images/icon-1.png"></div>
               </div>
               <div class="choose_right_main">
                  <h1 class="satisfied_text">99%<br><span class="satisfied_text_1">SATISFIED Customer</span></h1>
               </div>
            </div>
            <div class="choose_middle">
               <div class="choose_left_main">
                  <div class="icon_1"><img src="home/images/icon-2.png"></div>
               </div>
               <div class="choose_right_main">
                  <h1 class="satisfied_text">40+<br><span class="satisfied_text_1">AWESOME TEA</span></h1>
               </div>
            </div>
            <div class="choose_middle_1">
               <div class="choose_left_main">
                  <div class="icon_1"><img src="home/images/icon-3.png"></div>
               </div>
               <div class="choose_right_main">
                  <h1 class="satisfied_text">4500+<br><span class="satisfied_text_1">Customer</span></h1>
               </div>
            </div>
            <div class="choose_right">
               <div class="choose_left_main">
                  <div class="icon_1"><img src="home/images/icon-4.png"></div>
               </div>
               <div class="choose_right_main">
                  <h1 class="satisfied_text">190+<br><span class="satisfied_text_1">DAILY VISITORS</span></h1>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- choose section end -->
   <!-- shop section start -->
   <div class="shop_section layout_padding">
      <div id="my_slider" class="carousel slide" data-ride="carousel">
         <div class="carousel-inner">
            <div class="carousel-item active">
               <div class="container">
                  <h1 class="shop_taital">Our Tea Shop</h1>
                  <p class="shop_text">It is a long established fact that a reader will beIt is a long established fact
                     that a reader will be</p>
                  <div><img src="home/images/img-3.png" class="image_3"></div>
               </div>
            </div>
            <div class="carousel-item">
               <div class="container">
                  <h1 class="shop_taital">Our Tea Shop</h1>
                  <p class="shop_text">It is a long established fact that a reader will beIt is a long established fact
                     that a reader will be</p>
                  <div><img src="home/images/img-3.png" class="image_3"></div>
               </div>
            </div>
            <div class="carousel-item">
               <div class="container">
                  <h1 class="shop_taital">Our Tea Shop</h1>
                  <p class="shop_text">It is a long established fact that a reader will beIt is a long established fact
                     that a reader will be</p>
                  <div><img src="home/images/img-3.png" class="image_3"></div>
               </div>
            </div>
         </div>
         <a class="carousel-control-prev" href="#my_slider" role="button" data-slide="next">
            <i class="fa fa-arrow-left"></i>
         </a>
         <a class="carousel-control-next" href="#my_slider" role="button" data-slide="next">
            <i class="fa fa-arrow-right" style="text-align: left;"></i>
         </a>
      </div>
   </div>
   <!-- shop section end -->
   <!-- frequently section start -->
   <div class="frequently_section layout_padding">
      <div class="container">
         <h1 class="frequently_taital">Frequently Asked Questions</h1>
         <p class="frequently_text">It is a long established fact that a reader will beIt is a long established fact
            that a reader will be </p>
         <div class="frequently_section_2 layout_padding">
            <div class="bs-example">
               <div class="accordion" id="accordionExample">
                  <div class="card">
                     <div class="card-header" id="headingOne">
                        <h2 class="mb-0">
                           <button type="button" class="btn btn-link w-100" data-toggle="collapse"
                              data-target="#collapseOne"><i class="fa fa-plus"></i>Where can I get some?</button>
                        </h2>
                     </div>
                     <div id="collapseOne" class="collapse" aria-labelledby="headingOne"
                        data-parent="#accordionExample">
                        <div class="card-body">
                           <p>HTML stands for HyperText Markup Language. HTML is the standard markup language for
                              describing the structure of web pages. <a
                                 href="https://www.tutorialrepublic.com/html-tutorial/" target="_blank">Learn more.</a>
                           </p>
                        </div>
                     </div>
                  </div>
                  <div class="card">
                     <div class="card-header" id="headingTwo">
                        <h2 class="mb-0">
                           <button type="button" class="btn btn-link collapsed w-100" data-toggle="collapse"
                              data-target="#collapseTwo"><i class="fa fa-plus"></i> Why do we use it?</button>
                        </h2>
                     </div>
                     <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo"
                        data-parent="#accordionExample">
                        <div class="card-body">
                           <p>It is a long established fact that a reader will be distracted by the readable content of
                              a page when looking at its layout. The point of using Lorem Ipsum is that it <a
                                 href="https://www.tutorialrepublic.com/twitter-bootstrap-tutorial/"
                                 target="_blank">Learn more.</a></p>
                        </div>
                     </div>
                  </div>
                  <div class="card">
                     <div class="card-header" id="headingThree">
                        <h2 class="mb-0">
                           <button type="button" class="btn btn-link collapsed w-100" data-toggle="collapse"
                              data-target="#collapseThree"><i class="fa fa-plus"></i>Where does it come from?</button>
                        </h2>
                     </div>
                     <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                        data-parent="#accordionExample">
                        <div class="card-body">
                           <p>CSS stands for Cascading Style Sheet. CSS allows you to specify various style properties
                              for a given HTML element such as colors, backgrounds, fonts etc. <a
                                 href="https://www.tutorialrepublic.com/css-tutorial/" target="_blank">Learn more.</a>
                           </p>
                        </div>
                     </div>
                  </div>
                  <div class="card">
                     <div class="card-header" id="headingThree">
                        <h2 class="mb-0">
                           <button type="button" class="btn btn-link collapsed w-100" data-toggle="collapse"
                              data-target="#collapseThree"><i class="fa fa-plus"></i>What is Lorem Ipsum?</button>
                        </h2>
                     </div>
                     <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                        data-parent="#accordionExample">
                        <div class="card-body">
                           <p>CSS stands for Cascading Style Sheet. CSS allows you to specify various style properties
                              for a given HTML element such as colors, backgrounds, fonts etc. <a
                                 href="https://www.tutorialrepublic.com/css-tutorial/" target="_blank">Learn more.</a>
                           </p>
                        </div>
                     </div>
                  </div>
                  <div class="card">
                     <div class="card-header" id="headingThree">
                        <h2 class="mb-0">
                           <button type="button" class="btn btn-link collapsed w-100" data-toggle="collapse"
                              data-target="#collapseThree"><i class="fa fa-plus"></i>Why do we use it?</button>
                        </h2>
                     </div>
                     <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                        data-parent="#accordionExample">
                        <div class="card-body">
                           <p>CSS stands for Cascading Style Sheet. CSS allows you to specify various style properties
                              for a given HTML element such as colors, backgrounds, fonts etc. <a
                                 href="https://www.tutorialrepublic.com/css-tutorial/" target="_blank">Learn more.</a>
                           </p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- frequently section end -->
   <!-- clients section start -->
   <div class="clients_section layout_padding">
      <div id="custum_slider" class="carousel slide" data-ride="carousel">
         <div class="carousel-inner">
            <div class="carousel-item active">
               <div class="container">
                  <h1 class="clients_taital">Client's Testimonial</h1>
                  <p class="clients_text">Potential Clients are pouring our website on a daily basis after we use
                     Organic Visit, really recommended their great job!</p>
                  <div class="client_img"><img src="home/images/client-img.png"></div>
                  <h1 class="louis_text">Louis Gilyard</h1>
                  <h1 class="smyth_text">SMYTH</h1>
                  <div class="border"></div>
               </div>
            </div>
            <div class="carousel-item">
               <div class="container">
                  <h1 class="clients_taital">Client's Testimonial</h1>
                  <p class="clients_text">Potential Clients are pouring our website on a daily basis after we use
                     Organic Visit, really recommended their great job!</p>
                  <div class="client_img"><img src="home/images/client-img.png"></div>
                  <h1 class="louis_text">Louis Gilyard</h1>
                  <h1 class="smyth_text">SMYTH</h1>
                  <div class="border"></div>
               </div>
            </div>
            <div class="carousel-item">
               <div class="container">
                  <h1 class="clients_taital">Client's Testimonial</h1>
                  <p class="clients_text">Potential Clients are pouring our website on a daily basis after we use
                     Organic Visit, really recommended their great job!</p>
                  <div class="client_img"><img src="home/images/client-img.png"></div>
                  <h1 class="louis_text">Louis Gilyard</h1>
                  <h1 class="smyth_text">SMYTH</h1>
                  <div class="border"></div>
               </div>
            </div>
         </div>
         <a class="carousel-control-prev" href="#custum_slider" role="button" data-slide="next">
            <i class="fa fa-angle-left"></i>
         </a>
         <a class="carousel-control-next" href="#custum_slider" role="button" data-slide="next">
            <i class="fa fa-angle-right"></i>
         </a>
      </div>
   </div>
   <!-- clients section end -->
   <!-- contact section start -->
   <div class="contact_section layout_padding">
      <div class="container-fluid">
         <div class="row">
            <div class="col-md-6">
               <div class="mail_main">
                  <h1 class="contact_taital">Contact us</h1>
                  <form action="/action_page.php">
                     <div class="form-group">
                        <input type="text" class="email-bt" placeholder="Name" name="Name">
                     </div>
                     <div class="form-group">
                        <input type="text" class="email-bt" placeholder="Email" name="Email">
                     </div>
                     <div class="form-group">
                        <input type="text" class="email-bt" placeholder="Subject" name="Email">
                     </div>
                     <div class="form-group">
                        <textarea class="massage-bt" placeholder="Massage" rows="5" id="comment" name="text"></textarea>
                     </div>
                  </form>
                  <div class="send_btn">
                     <div class="main_bt"><a href="#">Send</a></div>
                  </div>
               </div>
            </div>
            <div class="col-md-6">
               <div class="map_main">
                  <div class="map-responsive">
                     <iframe
                        src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&amp;q=Eiffel+Tower+Paris+France"
                        width="600" height="600" frameborder="0" style="border:0; width: 100%;"
                        allowfullscreen=""></iframe>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- contact section end -->
   <!-- footer section start -->
   <div class="footer_section layout_padding">
      <div class="container">
         <div class="newsletter_section">
            <div class="newsletter_left">
               <div class="footer_logo"><img src="home/images/footer-logo.png"></div>
            </div>
            <div class="newsletter_right">
               <h5 class="newsletter_taital">Subscribe Newsletter</h5>
               <div class="subscribe_main">
                  <input type="text" class="mail_text" placeholder="Enter your email" name="text">
                  <div class="subscribe_bt"><a href="#">Subscribe</a></div>
               </div>
            </div>
         </div>
         <div class="footer_taital_main">
            <div class="row">
               <div class="col-lg-3 col-sm-6">
                  <h2 class="useful_text">About</h2>
                  <p class="ipsum_text">consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                     dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation u</p>
               </div>
               <div class="col-lg-3 col-sm-6">
                  <h2 class="useful_text">Menus</h2>
                  <div class="footer_links">
                     <ul>
                        <li><a href="{{url('/')}}">Home</a></li>
                        <li><a href="about.html">About</a></li>
                        <li><a href="services.html">Services</a></li>
                        <li><a href="pricing.html">Pricing</a></li>
                        <li><a href="contact.html">Contact us</a></li>
                     </ul>
                  </div>
               </div>
               <div class="col-lg-3 col-sm-6">
                  <h2 class="useful_text">Useful Link</h2>
                  <div class="footer_links">
                     <ul>
                        <li><a href="#">Adipiscing</a></li>
                        <li><a href="#">Elit, sed do</a></li>
                        <li><a href="#">Eiusmod </a></li>
                        <li><a href="#">Tempor </a></li>
                        <li><a href="#">incididunt</a></li>
                     </ul>
                  </div>
               </div>
               <div class="col-lg-3 col-sm-6">
                  <h2 class="useful_text">Contact us</h2>
                  <div class="addres_link">
                     <ul>
                        <li><a href="#"><img src="home/images/map-icon.png"><span class="padding_left_10">No.123 Chalingt
                                 Gates</span></a></li>
                        <li><a href="#"><img src="home/images/call-icon.png"><span class="padding_left_10">+01
                                 1234567890</span></a></li>
                        <li><a href="#"><img src="home/images/mail-icon.png"><span
                                 class="padding_left_10">demo@gmail.com</span></a></li>
                     </ul>
                  </div>
               </div>
            </div>
            <h1 class="follow_text">Follow Us</h1>
            <div class="social_icon">
               <ul>
                  <li><a href="#"><img src="home/images/fb-icon.png"></a></li>
                  <li><a href="#"><img src="home/images/twitter-icon.png"></a></li>
                  <li><a href="#"><img src="home/images/linkedin-icon.png"></a></li>
                  <li><a href="#"><img src="home/images/instagram-icon.png"></a></li>
               </ul>
            </div>
         </div>
      </div>
   </div>
   <!-- footer section end -->
   <!-- copyright section start -->
   <div class="copyright_section">
      <div class="container">
         <p class="copyright_text">Team Project.<a href="https://html.design"> Study
               Project.</a> Distributed by: <a href="https://themewagon.com">Yann DIPITA</a> </p>
         </p>
      </div>
   </div>
   <!-- copyright section end -->
   <!-- Javascript files-->
   <script src="home/js/jquery.min.js"></script>
   <script src="home/js/popper.min.js"></script>
   <script src="home/js/bootstrap.bundle.min.js"></script>
   <script src="home/js/jquery-3.0.0.min.js"></script>
   <script src="js/plugin.js"></script>
   <!-- sidebar -->
   <script src="home/js/jquery.mCustomScrollbar.concat.min.js"></script>
   <script src="home/js/custom.js"></script>
   <!-- javascript -->
   <script src="home/js/owl.carousel.js"></script>
   <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
   <script>
      $(document).ready(function () {
         $(".fancybox").fancybox({
            openEffect: "none",
            closeEffect: "none"
         });

   </script>
   <script>
            $(document).ready(function () {
               // Add minus icon for collapse element which is open by default
               $(".collapse.show").each(function () {
                  $(this).prev(".card-header").find(".fa").addClass("fa-minus").removeClass("fa-plus");
               });

               // Toggle plus minus icon on show hide of collapse element
               $(".collapse").on('show.bs.collapse', function () {
                  $(this).prev(".card-header").find(".fa").removeClass("fa-plus").addClass("fa-minus");
               }).on('hide.bs.collapse', function () {
                  $(this).prev(".card-header").find(".fa").removeClass("fa-minus").addClass("fa-plus");
               });
            });
   </script>
</body>

</html>