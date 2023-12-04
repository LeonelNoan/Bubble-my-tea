<div class="header_section">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
       <div class="logo"><a href="{{url('/')}}"><img src="home/images/logo.png"></a></div>
       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
          aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
       </button>
       <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
             <a class="nav-item nav-link" href="{{url('/')}}">Home</a>
             <a class="nav-item nav-link" href="about.html">About</a>
             <a class="nav-item nav-link" href="{{'/Teashop'}}">Teashop</a>
             <a class="nav-item nav-link" href="pricing.html">Pricing</a>
             <a class="nav-item nav-link" href="testimonies.html">Testimonies</a>
             <a class="nav-item nav-link" href="contact.html">Contact</a>
          </div>
       </div>
       <div class="login_menu"><a href="#"><img src="home/images/search-icon.png"></a></div>
       <div class="login_menu">
         @if (Route::has('login'))

         @auth
            <li class="">
               <x-app-layout>
                  
               </x-app-layout>

            </li>
          
         
         @else
          <a class="nav-item nav-link" id="logincss" href="{{ route('login') }}">Login</a>
          <a class="nav-item nav-link" id="registercss" href="{{ route('register') }}">Register</a>
         
         @endauth

         @endif
       </div>
    </nav>
    <!-- banner section end -->
    <div class="banner_section layout_padding">
       <div id="main_slider" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
             <div class="carousel-item active">
                <div class="container">
                   <div class="row">
                      <div class="col-md-6">
                         <h1 class="banner_taital">Taste of <span style="color: #f3801f;">Bubble Tea</span></h1>
                      </div>
                      <div class="col-md-6">
                         <div><img src="home/images/milk_tea.png" class="image_1"></div>
                      </div>
                   </div>
                </div>
             </div>
             <div class="carousel-item">
                <div class="container">
                   <div class="row">
                      <div class="col-md-6">
                         <h1 class="banner_taital">Taste of <span style="color: #f3801f;">Bubble Tea</span></h1>
                      </div>
                      <div class="col-md-6">
                         <div><img src="home/images/oolong_tea.png" class="image_1"></div>
                      </div>
                   </div>
                </div>
             </div>
             <div class="carousel-item">
                <div class="container">
                   <div class="row">
                      <div class="col-md-6">
                         <h1 class="banner_taital">Taste of <span style="color: #f3801f;">Bubble Tea</span></h1>
                      </div>
                      <div class="col-md-6">
                         <div><img src="home/images/taro_smoothie.png" class="image_1"></div>
                      </div>
                   </div>
                </div>
             </div>
          </div>
          <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="next">
             <i class="fa fa-angle-left"></i>
          </a>
          <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
             <i class="fa fa-angle-right"></i>
          </a>
       </div>
    </div>
    <div class="container">
       <div class="play_icon"><a href="#"><img src="home/images/play-icon.png"></a></div>
    </div>
    <!-- banner section end -->
 </div>