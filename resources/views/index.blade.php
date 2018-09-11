<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8" />
<title>Bitxx Official Website</title>
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<link rel="shortcut icon" href="{{ url('/img/icon.png') }}" type="image/x-icon" />

<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet" />

<link href="{{ url('/front/css/package.min.css') }}" rel="stylesheet" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>
<body data-spy="scroll" data-target=".navbar">

	<!-- ======================================= 
    ==Start nav section==  
    =======================================-->
	<nav class="navbar navbar-expand-md navbar-dark fixed-top nav-base dark" id="minify_nav">
		<div class="container">
			<a class="navbar-brand" href="{{ url('/') }}">
				<img class="toggle-logo logo-white" src="{{ url('/img/logo2.png') }}" alt="" />
				<img class="toggle-logo logo-blue" src="{{ url('/img/icon.png') }}" alt="" />
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
				<i class="fa fa-bars"></i>
			</button>
			<div class="collapse navbar-collapse" id="navigation">
				<ul class="navbar-nav ml-auto">
					<li class="nav-ite"><a class="nav-link" href="#start">Get started<span class="sr-only"></span></a></li>
					<li class="nav-item"><a class="nav-link" href="#about">About<span class="sr-only"></span></a></li>
					<li class="nav-item"><a class="nav-link" href="#ico">ICO Distribution</a></li>
					<li class="nav-item"><a class="nav-link" href="#roadmap">Roadmap<span class="sr-only"></span></a></li>
					<li class="nav-item"><a class="nav-link" href="{{ url('/login') }}">Login</a></li>
					<li class="nav-item"><a class="nav-link special" href="{{ url('/account/register') }}">Signup</a></li>

				</ul>
				
			</div>
		</div>
	</nav>
	<!-- ======================================= 
    ==End nav section==  
    =======================================-->


	<!-- ======================================= 
    ==Start main header section==  
    =======================================-->
	<section class="main-header demo1" style="overflow:hidden" id="main">
		<div class="home-cont">
			<div class="container">
				<div class="row">
					<div class="col-xl-7 col-lg-6 col-md-12 ">
						<div class="main-header-sub sub text-left">
							<div class="content-text">
								<h1>BITXX</h1>
								<h3><i>New Technology of payment system</i></h3>
								<div class="current-ico-bouns">
									<a href="#" class="buy-now"><i class="fa fa-shopping-cart"></i></a>
									<div class="bouns-progress">
										<ul class="bouns-labels-list list-unstyled list-inline">
											<li>
												<h4>01 - 09 May</h4>
												<h4><small class="color1">15% Bonus</small></h4>
											</li>
											<li>
												<h4>10 - 18 May</h4>
												<h4><small class="color2">10% Bonus</small></h4>
											</li>
											<li>
												<h4>19 - 24 May</h4>
												<h4><small class="color3">5% Bonus</small></h4>
											</li>
											<li>
												<h4>25 - 30 May</h4>
												<h4><small class="color3">20% Bonus</small></h4>
											</li>
										</ul>
										<div class="progress">
											<div class="progress-bar bg-color1" role="progressbar" style="width: 19%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
											<div class="progress-bar bg-color2" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
											<div class="progress-bar bg-color3" role="progressbar" style="width: 25%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
									</div>
								</div>
								<div class="current-ico-bouns buttons">
									<div class="bouns-progress text-center">
										<a href="{{ url('/login') }}" class="special-btn text-center">Buy BTX Now</a>
										<a href="{{ url('/whitepaper.pdf') }}" target="_blank" class="special-btn text-center">Whitepaper</a>
									</div>
								</div>
								

							</div>
						</div>
					</div>
					<div class="col-xl-5 col-lg-6 col-md-12">
						<div class="counter-down">

							<div class="content">
								<div class="conuter-header">
									<h3 class="text-center">BTX ICO START AT</h3>
								</div>
								<div class="counterdown-content">
									<div class="clock-wrapper">
										<div class="clock"></div>
									</div>
									<br>
			                        <div class="buy-tokens-wrapper text-center mt30 o-hidden">
			                        	<a href="{{ url('/login') }}" class="buy-tokens has-gradient">Buy BTX Now</a>
			                        </div>
								</div>
								
							</div>
							
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="round-header-circle hidden-sm hidden-xs">
			<div class="round-animate">
				<div class="round-1">
					<span class="r-1"></span>
					<span class="r-2"></span>
					<span class="r-3"></span>
					<span class="r-4"></span>
				</div>
				<div class="round-2">
					<span class="r-1"></span>
					<span class="r-2"></span>
					<span class="r-3"></span>
					<span class="r-4"></span>
				</div>
				<div class="round-3">
					<span class="r-1"></span>
					<span class="r-2"></span>
					<span class="r-3"></span>
					<span class="r-4"></span>
				</div>
			</div>
		</div>
	</section>
	<!-- ======================================= 
    ==End main header section==  
    =======================================-->

    <!-- ======================================= 
    ==Start Our services section==  
    =======================================-->
	<section class="our-services" style="padding-bottom:70px" id="start">
		<div class="container">
			<div class="title-box">
				<h2 class="title-center">How to Get Started</h2>
			</div>
			<div class="row">
				<div class="col-lg-4 col-md-6 col-sm-12">
					<div class="single-service-item">
					
						<span class="top-border"></span>
	                    <span class="right-border"></span>
	                    <span class="bottom-border"></span>
						
						<div class="service-left-bg"></div>
						<div class="service-icon">
							<img class="icon center-block" src="{{ url('/front/images/icons/feature-1.svg') }}" alt="" />
						</div>
						<div class="service-text">
							<h4><a href="#">Create New Account</a></h4>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12">
					<div class="single-service-item">
					
						<span class="top-border"></span>
	                    <span class="right-border"></span>
	                    <span class="bottom-border"></span>
						
						<div class="service-left-bg"></div>
						<div class="service-icon">
							<img class="icon center-block" src="{{ url('/front/images/icons/feature-2.svg') }}" alt="" />
						</div>
						<div class="service-text">
							<h4><a href="#">FILL YOUR PROFILE</a></h4>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12">
					<div class="single-service-item">
					
						<span class="top-border"></span>
	                    <span class="right-border"></span>
	                    <span class="bottom-border"></span>
						
						<div class="service-left-bg"></div>
						<div class="service-icon">
							<img class="icon center-block" src="{{ url('/front/images/icons/feature-3.svg') }}" alt="" />
						</div>
						<div class="service-text">
							<h4><a href="#">START BUYING & Selling</a></h4>
						</div>
					</div>
				</div>
				
			</div>
		</div>	
	</section>
	<!-- ======================================= 
    ==End our sevices section==  
    =======================================-->

	<div class="clearfix"></div>

    <!-- ======================================= 
    ==Start money-exchange section==  
    =======================================-->
	<section class="money-exchange" id="about">

	<img class="bg-shape-bot" src="{{ url('/img/homepage_bg.png') }}" alt=" bg bottom" />
	    <div class="container">
	        <div class="row flex-md-row-reverse">
	            <div class="col-md-6">
	                <div class="money-exchange-right">
	                    <h2 data-aos="fade-up" class="">About Bitxx</h2>
	                    <p data-aos="fade-up" class="">BITXX Coin is a cryptocurrency coin that connecting the ecosystem of the Bitcoin community with ethereum, Litecoin, Ripple, Dash, Monero and other coins Community so the world will quickly accept and trust in the power of Cryptocurrency as a new technology of payment system. </p>
	                    <ul class="s-list list-unstyled mb-20">
							<li><span class="fa fa-check"></span>Name : Bitxx Coin</li>
							<li><span class="fa fa-check"></span>Transaction Code : BTX</li>
							<li><span class="fa fa-check"></span>Country : Belgium</li>
							<li><span class="fa fa-check"></span>Alghoritm : Script x11</li>
						</ul>
	                </div>
	                
	            </div>
	            <div class="col-md-6">
	                <div class="money-exchange-left">
	                	<img style="max-height: 798px" class="center-block" src="./images/phone.png" alt="Phone" />
	                </div>
	            </div>
	        </div>
	    </div>
	</section>
	<!-- ======================================= 
    ==End money-exchange section==  
    =======================================-->
	<br><br><br>
    <!-- ======================================= 
    ==Start ICO Distribution section==  
    =======================================-->
	<section class="ico-distribution" style="padding-bottom:70px" id="ico">
		<div class="container">
			<div class="title-box">
				<h2 class="title-center">BITXX ICO Distribution</h2>
			</div>
			<div class="row">
				<div class="col-lg-6 col-md-12 col-xs-12 ">
                    <!--<img src="images/chart.png" class="pie"-->
                    <div id="container"></div>
                    <div class="center-values">
                        <span class="phx trix">BITXX</span><br />
                        <h6 class="margin-btm">{{ Fungsi::count_supply() }} </h6>
                        <span class="phx">Total Supply</span>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-xs-12 progress-div">
                    @foreach($ico as $key=>$ico)
                    	<!-- Green -->
	                    <h6 class="angle-round">Round {{ $key+1 }} ($ {{ $ico->price }}) <span style="margin-left: 126px; color:#ccc;">{{ Fungsi::tanggal($ico->start_date) }} - {{ Fungsi::tanggal($ico->end_date) }}</span><span class="number">{{ $ico->qty }} BTX</span></h6>
	                    <div class="progress progress-cls">
	                    <div class="progress-bar background-two" style="background-color: #a9013f !important;width:{{ Fungsi::sold_persen($ico->id) }}% !important;">$ {{ $ico->price }}</div>
	                    </div>
                    @endforeach
                    

                </div>
			</div>
		</div>	
	</section>
	<!-- ======================================= 
    ==End ICO distribution section==  
    =======================================-->    

    <div class="clearfix"></div>
	
	<div class="two-wrapper" id="close" style="background-position-y: -100px;">
        <!-- ======================================= 
    	==Start Roadmap section==  
    	=======================================-->
		<section class="roadmap" style="padding-bottom:0" id="roadmap">
			<div class="title-box">
				<h2 class="title-center">Bitxx ICO Roadmap</h2>
			</div>
			<div class="container">
	        	<div class="row">
	            	<div class="timeline-split">
                    <div class="col-lg-10 col-lg-offset-1 col-md-12 col-sm-12">
                        <div class="timeline section-box-margin">
                            <div class="block block-left">
                               <h3>PRE ICO & ICO Crowdsale</h3>
                               <span>MAY 2018</span>
                            </div>

                            <div class="block block-right mt-30">
                               <h3>Listing External Exchange & Open Program Lending</h3>
                               <span>JULY 2018</span>
                            </div>

                            <div class="block block-left mt-30">
                               <h3>Listing on Marketcap & Android and IOS App Wallet</h3>
                               <span>AUGUST 2018</span>
                            </div>

                            <div class="block block-right mt-30">
                               <h3>Android Crypto Trading Platform & Official Mining Pool</h3>
                               <span>SEPTEMBER 2018 to OCTOBER 2018</span>
                            </div>

                            <div class="block block-left mt-30">
                               <h3>The first Bitxx Coin International Member Meeting</h3>
                               <span>NOVEMBER 2018</span>
                            </div>

                            <div class="block block-right mt-30">
                               <h3>Improve Website Features</h3>
                               <span>DECEMBER 2018</span>
                            </div>

                            <div class="block block-left mt-30">
                               <h3>Financing for International Blockchain Technology Event</h3>
                               <span>JANUARY 2019</span>
                            </div>

                            <div class="block block-right mt-30">
                               <h3>Investing in start-up researching and developing solution / ideas based on blockchain technology</h3>
                               <span>FEBRUARY 2019</span>
                            </div>

                            <div class="block block-left mt-30">
                               <h3>Development of debit card</h3>
                               <span>MARCH 2019</span>
                            </div>

                            <div class="block block-right mt-30">
                               <h3>Ecosystem (Merchant Partnership)</h3>
                               <span>APRIL 2019</span>
                            </div>

                            <div class="circle"></div>
                        </div>
                    </div>
                </div>
	            </div>
	        </div>
		</section>
		<!-- ======================================= 
    	==End Roadmap section==  
   	 	=======================================-->
		


	</div>

	<!-- ======================================= 
	==Start banner section==  
	=======================================-->
    <section class="intro o-hidden no-padding-top">
        <div class="container">
        	<div class="intro-wrapper has-gradient o-hidden">
        		<div class="single-info-item col-md-3 col-xs-12">        
                    <div class="info-icon">
                        <img src="./images/icons/1.png" class="center-block" alt="" />
                    </div>
                    <div class="info-text">
                        <h3><a href="#">Secure Wallet</a></h3>
                    </div>
                </div>
                <div class="single-info-item col-md-3 col-xs-12">        
                    <div class="info-icon">
                        <img src="./images/icons/2.png" class="center-block" alt="" />
                    </div>
                    <div class="info-text">
                        <h3><a href="#">Instant Exchange</a></h3>
                    </div>
                </div>
                <div class="single-info-item col-md-3 col-xs-12">        
                    <div class="info-icon">
                        <img src="./images/icons/3.png" class="center-block" alt="" />
                    </div>
                    <div class="info-text">
                        <h3><a href="#">Crypto Trading</a></h3>
                    </div>
                </div>
                <div class="single-info-item col-md-3 col-xs-12">        
                    <div class="info-icon">
                        <img src="./images/icons/4.png" class="center-block" alt="" />
                    </div>
                    <div class="info-text">
                        <h3><a href="#">Crypto Investment</a></h3>
                    </div>
                </div>
        	</div>
        </div>
    </section>
    <!-- ======================================= 
	==End banner section==  
	=======================================-->
	
	<div class="clearfix"></div>

	<!-- ======================================= 
    ==Start Testimonials section==  
    =======================================-->

  


	<!-- ======================================= 
    ==Start footer section==  
    =======================================-->
    <section class="main-footer footer-style-two text-center" id="contact">
        <!--Widgets Section-->
        <div class="widgets-section">
            <div class="container">
                 
                <div class="row clearfix">
                   <!--Footer Column-->
                   <div class="footer-column col-md-4 col-sm-6 col-xs-12">
                      <div class="footer-widget about-widget">
                         <h3 class="has-line-center">About Bitxx</h3>
                         <div class="widget-content">
                            <div class="text">
                            	New Technology of payment system
                            </div>
                               <ul class="social-links">
                                  <li><a href="#"><span class="fa fa-facebook-f"></span></a></li>
                                  <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                                  <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
                                  <li><a href="#"><span class="fa fa-linkedin"></span></a></li>
                                  <li><a href="#"><span class="fa fa-instagram"></span></a></li>
                               </ul>
                             </div>
                         </div>
                     </div><!--End Footer Column-->
                     
                     <!--Footer Column-->
                     <div class="footer-column col-md-4 col-sm-6 col-xs-12">
                         <div class="footer-widget contact-widget">
                             <h3 class="has-line-center">Contact Us</h3>
                             <div class="widget-content">
                                 <ul class="contact-info">
                                     <li><div class="icon"><span class="ui-computer-screen-2"></span></div></li>
                                     <li>10, Mc Donald Avenue, Sunset Park, Newyork</li>
                                     <li>+99 999 9999</li>
                                 </ul>
                             </div>
                         </div>
                     </div><!--End Footer Column-->
                     
                     <!--Footer Column-->
                     <div class="footer-column col-md-4 col-sm-12 col-xs-12">
                         <div class="footer-widget newsletter-widget">
                             <h3 class="has-line-center">Newsletter</h3>
                             <div class="widget-content">
                               <div class="text">Stay Updated with our latest news. We promise not to spam</div>
                                 <div class="newsletter-form">
                                     <form method='post' /><input type='hidden' name='form-name' value='form 1' />
                                         <div class="form-group">
                                             <input type="email" name="field-name" value="" placeholder="Your Email" required="" />
                                             <button type="submit" class="send-btn"><span class="fa fa-paper-plane-o"></span></button>
                                         </div>
                                     </form>
                                 </div>
                             </div>
                         </div>
                     </div><!--End Footer Column-->
                     
                 </div>
             </div>
         </div>
        
        </section>
        <!-- ======================================= 
        ==End footer section==  
        =======================================-->



		<div class="copyright">
		    <h4 class="text-center"> Copyright © 2018 Bitxx.co. All rights reserved.</h4>
		</div>

		<!-- pre loader  -->
		<div class="preloader"></div>

		<a class="btn-lg scrollup"><i class="fa fa-arrow-up"></i></a>
		<script src="{{ url('/front/js/plugins.js') }}"></script>
        {{-- <script src="{{ url('/front/js/create-highcarts.js') }}"></script> --}}
		{{-- <script src="{{ url('/front/js/custom.js') }}"></script> --}}
		<script type="text/javascript">
			$(document).ready(function() {
			    "use strict";
			    $("body").scrollspy({
			        target: "#minify_nav",
			        offset: 100
			    }), $('nav a[href^="#"]:not([href="#"]), .scroll').on("click", function(e) {
			        var o = $(this);
			        $("html, body").stop().animate({
			            scrollTop: $(o.attr("href")).offset().top - 60
			        }, 1500), e.preventDefault()
			    }), $(window).on("scroll touchmove", function() {
			        $("#minify_nav").toggleClass("mini-nav", $(document).scrollTop() > 60)
			    }), $(window).scroll(function() {
			        $(this).scrollTop() > 600 ? $(".scrollup").fadeIn() : $(".scrollup").fadeOut()
			    }), $(".scrollup").on("click", function() {
			        return $("html, body").animate({
			            scrollTop: 0
			        }, 600), !1
			    });
			    var date = new Date(2018, 4, 1);
    			var now = new Date();
			    var diff = (date.getTime()/1000) - (now.getTime()/1000);
			    
			    $(".clock").FlipClock(diff, {
			        clockFace: "DailyCounter",
			        countdown: true
			    });
			    $(".fade-left").waypoint(function() {
			        $(".fade-left").addClass("animated fadeInLeft")
			    }, {
			        offset: "50%"
			    }), $(".fade-right").waypoint(function() {
			        $(".fade-right").addClass("animated fadeInRight")
			    }, {
			        offset: "100%"
			    }), (new WOW).init()
			}), $(".team-images").eq(0).addClass("current_dot"), $(".team-images").on("click", function(e) {
			    $(".team-images").removeClass("current_dot"), $(this).addClass("current_dot"), $sync2.trigger("to.owl.carousel", [$(this).index(), duration, !0])
			}), $(".video-play").magnificPopup({
			    type: "iframe",
			    closeOnBgClick: !1,
			    iframe: {
			        markup: '<div class="mfp-iframe-scaler"><div class="mfp-close"></div><iframe class="mfp-iframe" frameborder="0" allowfullscreen></iframe><div class="mfp-title">Some caption</div></div>'
			    },
			    callbacks: {
			        markupParse: function(e, o, a) {
			            o.title = a.el.attr("title")
			        }
			    },
			    removalDelay: 300,
			    mainClass: "mfp-fade"
			}), $(window).on("load", function() {
			    $("body").css("overflow", "auto"), $(".preloader").fadeOut(1e3, function() {
			        $(this).remove()
			    })
			});
		</script>
	</body>

</html>
