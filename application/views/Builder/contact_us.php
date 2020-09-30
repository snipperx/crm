<?php
defined('BASEPATH') or exit('No direct script access allowed');
$this->load->view('layouts/header');
?>
<body>
<!--====================  header area ====================-->
<?php
$this->load->view('layouts/top-menu');
?>
<!--====================  End of header area  ====================-->
<!--====================  mobile header ====================-->
<div
	class="mobile-header header-sticky bg-img space__inner--y30 background-repeat--x background-color--dark d-block d-lg-none"
	data-bg="assets/img/icons/ruler.png">
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
<div class="page-breadcrumb bg-img space__bottom--r120" data-bg="assets/img/backgrounds/header-top.jpeg">
	<div class="container">
		<div class="row">
			<div class="col">
				<div class="page-breadcrumb-content text-center">
					<h1>Contact</h1>
					<ul class="page-breadcrumb-links">
						<li><a href="index.html">Home</a></li>
						<li>Contact</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<!---->
<div class="conact-section space__bottom--r120">
	<div class="container">
		<div class="row">
			<div class="col space__bottom--40">
				<div class="contact-map">
					<iframe
						src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3306.22268960882!2d-118.69511008446011!3d34.0381583259191!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80e81fcf6add4e6b%3A0x2e40b4a05c4cc7a0!2sThe%20Business%20Agency!5e0!3m2!1sen!2sbd!4v1571570206192!5m2!1sen!2sbd"></iframe>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-4 col-12">
				<div class="contact-information">
					<h4 class="space__bottom--30">Contact Information</h4>
					<ul>
						<li>
							<span class="icon"><i class="fa fa-map-marker"></i></span>
							<span class="text"><span>38 Ibis Street Tedstoneville , Germiston 1428</span></span>
						</li>
						<li>
							<span class="icon"><i class="fa fa-phone"></i></span>
							<span class="text"><a href="#">(0027) 68 088 4954)</a><a href="#">(0027) 74 761 6587)</a></span>
						</li>
						<li>
							<span class="icon"><i class="fa fa-envelope-open"></i></span>
							<span class="text"><a href="#">dynamicmultiinvestments@outlook.com</a><a href="#">www.example.com</a></span>
						</li>
					</ul>
				</div>
			</div>
			<div class="col-lg-8 col-12">
				<div class="contact-form">
					<h4 class="space__bottom--30">Leave Your Message</h4>
					<form id="contact-form" action="<?php echo base_url('email')?>" method="post">
						<div class="row row-10">
							<div class="col-md-6 col-12 space__bottom--20"><input name="con_name" type="text"
																				  placeholder="Your Name"></div>
							<div class="col-md-6 col-12 space__bottom--20"><input name="con_email" type="email"
																				  placeholder="Your Email"></div>
							<div class="col-12"><textarea name="con_message" placeholder="Your Message"></textarea>
							</div>
							<div class="col-12">
								<button>Send Message</button>
							</div>
						</div>
					</form>
					<p class="form-message"></p>
				</div>
			</div>
		</div>
	</div>
</div>
<!--====================  End of contact area  ====================-->
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
					<p class="footer-widget__text space__bottom--20">Publishing packages and web page editors now use
						Lorem Ipsum as their default model text, and a search</p>
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
				<h5 class="footer-widget__title space__top--15 space__bottom--20 space__top__md--40 space__top__lm--40">
					Contact us</h5>
				<div class="footer-contact-wrapper">
					<div class="single-footer-contact">
						<div class="single-footer-contact__icon"><i class="fa fa-map-marker"></i></div>
						<div class="single-footer-contact__text">245 Distrealy Road, Central Park, New York</div>
					</div>
					<div class="single-footer-contact">
						<div class="single-footer-contact__icon"><i class="fa fa-phone"></i></div>
						<div class="single-footer-contact__text"><a href="tel:98548658125">+98548 658 125</a> <br> <a
								href="tel:65487235457">+65487 235 457</a></div>
					</div>
					<div class="single-footer-contact">
						<div class="single-footer-contact__icon"><i class="fa fa-globe"></i></div>
						<div class="single-footer-contact__text"><a href="mailto:info@example.com">info@example.com</a>
							<br> <a href="#">www.example.com</a></div>
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
