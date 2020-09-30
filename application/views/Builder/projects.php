<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('layouts/header');
?>
<body>
<!--====================  header area ====================-->
<?php
$this->load->view('layouts/top-menu');
?>
<!--====================  End of header area  ====================-->
<!--====================  mobile header ====================-->
<div class="mobile-header header-sticky bg-img space__inner--y30 background-repeat--x background-color--dark d-block d-lg-none" data-bg="assets/img/icons/ruler.png">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-6">
				<div class="brand-logo">
					<a href="index.html">
						<img src="assets/img/logo-white.png" class="img-fluid" alt="">
					</a>
				</div>
			</div>
			<div class="col-6">
				<div class="mobile-menu-trigger-wrapper text-right" id="mobile-menu-trigger">
					<span class="mobile-menu-trigger"></span>
				</div>
			</div>
		</div>
	</div>
</div>
<!--====================  End of mobile header  ====================-->
<div class="page-breadcrumb bg-img space__bottom--r120" data-bg="assets/img/backgrounds/bc-bg.jpg">
	<div class="container">
		<div class="row">
			<div class="col">
				<div class="page-breadcrumb-content text-center">
					<h1>Project</h1>
					<ul class="page-breadcrumb-links">
						<li><a href="index.html">Home</a></li>
						<li>Project</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<!---->
<div class="project-section space__bottom--r120">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="project-item-wrapper space__bottom--m40">
					<div class="row">
						<div class="col-lg-4 col-md-6 col-12 space__bottom--40">
							<div class="single-project-wrapper single-project-wrapper--reduced-abs">
								<a class="single-project-item p-0" href="project-details.html">
									<img src="assets/img/projects/project1-m.jpg" class="img-fluid" alt="">
									<span class="single-project-title">Western Shopping Mall</span>
								</a>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 col-12 space__bottom--40">
							<div class="single-project-wrapper single-project-wrapper--reduced-abs">
								<a class="single-project-item p-0" href="project-details.html">
									<img src="assets/img/projects/project2-m.jpg" class="img-fluid" alt="">
									<span class="single-project-title">City Flyover</span>
								</a>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 col-12 space__bottom--40">
							<div class="single-project-wrapper single-project-wrapper--reduced-abs">
								<a class="single-project-item p-0" href="project-details.html">
									<img src="assets/img/projects/project3-m.jpg" class="img-fluid" alt="">
									<span class="single-project-title">Highway Carpeting</span>
								</a>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 col-12 space__bottom--40">
							<div class="single-project-wrapper single-project-wrapper--reduced-abs">
								<a class="single-project-item p-0" href="project-details.html">
									<img src="assets/img/projects/project4-m.jpg" class="img-fluid" alt="">
									<span class="single-project-title">House Infrustructure Making</span>
								</a>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 col-12 space__bottom--40">
							<div class="single-project-wrapper single-project-wrapper--reduced-abs">
								<a class="single-project-item p-0" href="project-details.html">
									<img src="assets/img/projects/project5-m.jpg" class="img-fluid" alt="">
									<span class="single-project-title">Wooden House</span>
								</a>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 col-12 space__bottom--40">
							<div class="single-project-wrapper single-project-wrapper--reduced-abs">
								<a class="single-project-item p-0" href="project-details.html">
									<img src="assets/img/projects/project6-m.jpg" class="img-fluid" alt="">
									<span class="single-project-title">Bridge Construction</span>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row space__top--50">
			<div class="col">
				<ul class="page-pagination">
					<li><a href="#"><i class="fa fa-angle-left"></i> Prev</a></li>
					<li class="active"><a href="#">01</a></li>
					<li><a href="#">02</a></li>
					<li><a href="#">03</a></li>
					<li><a href="#"><i class="fa fa-angle-right"></i> Next</a></li>
				</ul>
			</div>
		</div>
	</div>
</div>
<!--====================  brand logo area ====================-->
<div class="brand-logo-area space__bottom--r120">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<!-- brand logo slider -->
				<div class="brand-logo-wrapper">
					<div class="single-brand-logo">
						<a href="#"><img src="assets/img/brand-logo/logo1.png" class="img-fluid" alt=""></a>
					</div>
					<div class="single-brand-logo">
						<a href="#"><img src="assets/img/brand-logo/logo2.png" class="img-fluid" alt=""></a>
					</div>
					<div class="single-brand-logo">
						<a href="#"><img src="assets/img/brand-logo/logo3.png" class="img-fluid" alt=""></a>
					</div>
					<div class="single-brand-logo">
						<a href="#"><img src="assets/img/brand-logo/logo4.png" class="img-fluid" alt=""></a>
					</div>
					<div class="single-brand-logo">
						<a href="#"><img src="assets/img/brand-logo/logo5.png" class="img-fluid" alt=""></a>
					</div>
					<div class="single-brand-logo">
						<a href="#"><img src="assets/img/brand-logo/logo4.png" class="img-fluid" alt=""></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!--====================  End of brand logo area  ====================-->
<!--====================  newsletter area ====================-->
<div class="newsletter-area newsletter-area-bg bg-img" data-bg="assets/img/backgrounds/newsletter-bg.jpg">
	<div class="newsletter-wrapper background-color--default-overlay space__inner--y60">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-xl-10 mx-auto">
					<div class="row align-items-center">
						<div class="col-lg-4 mb-3 mb-lg-0">
							<!-- newsletter title -->
							<h3 class="newsletter-title"><span>Newsletter</span> Subscribe now</h3>
						</div>
						<div class="col-lg-8">
							<div class="newsletter-form">
								<form id="mc-form" class="mc-form">
									<input type="email" placeholder="To get update, enter your email">
									<button class="theme-button" type="submit">Subscribe</button>
								</form>
								<!-- mailchimp-alerts Start -->
								<div class="mailchimp-alerts">
									<div class="mailchimp-submitting"></div><!-- mailchimp-submitting end -->
									<div class="mailchimp-success"></div><!-- mailchimp-success end -->
									<div class="mailchimp-error"></div><!-- mailchimp-error end -->
								</div>
								<!-- mailchimp-alerts end -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!--====================  End of newsletter area  ====================-->
<!--====================  footer area ====================-->
<div class="footer-area bg-img space__inner--ry120" data-bg="assets/img/backgrounds/footer-bg.jpg">
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-6">
				<div class="footer-widget">
					<div class="footer-widget__logo space__bottom--40">
						<a href="index.html">
							<img src="assets/img/logo-white.png" class="img-fluid" alt="">
						</a>
					</div>
					<p class="footer-widget__text space__bottom--20">Publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search</p>
					<ul class="social-icons">
						<li><a href="//www.facebook.com"><i class="fa fa-facebook"></i></a></li>
						<li><a href="//www.twitter.com"><i class="fa fa-twitter"></i></a></li>
						<li><a href="//www.instagram.com"><i class="fa fa-instagram"></i></a></li>
						<li><a href="//plus.google.com"><i class="fa fa-google-plus"></i></a></li>
					</ul>
				</div>
			</div>
			<div class="col-lg-2 col-md-6">
				<div class="footer-widget space__top--15 space__top__md--40 space__top__lm--40">
					<h5 class="footer-widget__title space__bottom--20">Information</h5>
					<ul class="footer-widget__menu">
						<li><a href="#">About Brenda</a></li>
						<li><a href="#">Our Services</a></li>
						<li><a href="#">Our Projects</a></li>
						<li><a href="#">Features</a></li>
						<li><a href="#">Blog Post</a></li>
					</ul>
				</div>
			</div>
			<div class="col-lg-3 col-md-6">
				<div class="footer-widget space__top--15 space__top__md--40 space__top__lm--40">
					<h5 class="footer-widget__title space__bottom--20">Support</h5>
					<ul class="footer-widget__menu">
						<li><a href="#">About Brenda</a></li>
						<li><a href="#">Our Services</a></li>
						<li><a href="#">Our Projects</a></li>
						<li><a href="#">Features</a></li>
						<li><a href="#">Blog Post</a></li>
					</ul>
				</div>
			</div>
			<div class="col-lg-3 col-md-6">
				<h5 class="footer-widget__title space__top--15 space__bottom--20 space__top__md--40 space__top__lm--40">Contact us</h5>
				<div class="footer-contact-wrapper">
					<div class="single-footer-contact">
						<div class="single-footer-contact__icon"><i class="fa fa-map-marker"></i></div>
						<div class="single-footer-contact__text">245 Distrealy Road, Central Park, New York</div>
					</div>
					<div class="single-footer-contact">
						<div class="single-footer-contact__icon"><i class="fa fa-phone"></i></div>
						<div class="single-footer-contact__text"> <a href="tel:98548658125">+98548 658 125</a> <br> <a href="tel:65487235457">+65487 235 457</a> </div>
					</div>
					<div class="single-footer-contact">
						<div class="single-footer-contact__icon"><i class="fa fa-globe"></i></div>
						<div class="single-footer-contact__text"><a href="mailto:info@example.com">info@example.com</a> <br> <a href="#">www.example.com</a> </div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!---->

<?php
$this->load->view('layouts/mobile-menu');
?>
<!--====================  End of offcanvas mobile menu  ======


<?php
// Load footer_view
$this->load->view('layouts/footer');
?>


<?php
$this->load->view('layouts/page-js');
?>

</body>
</html>
