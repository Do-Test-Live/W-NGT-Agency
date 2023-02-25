<!DOCTYPE html>
<html lang="en">


<head>
    <?php include('includes/css.php'); ?>
</head>

<body data-spy="scroll" data-offset="170" data-target=".navigation-area">

<div class="page-wrapper">
    <!-- Header -->
    <?php include('includes/header.php'); ?>
    <!-- End Site Header -->
    <!-- Sticky Header -->
    <?php include('includes/sticky.php'); ?>
    <!-- End Sticky Header ~-->

        <!-- Start Frontpage Banner Section -->
        <div class="frontpage-banner-section frontpage-banner-style-three page-inner-block pd-b-200">
            <div class="element-group">
                <div class="element one"></div>
                <div class="element two"></div>
            </div>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-10 col-md-10">
                        <div class="frontpage-banner-content">
                            <h2 class="hero-title w-200 aos-item mrb-0" data-aos="fade-left" data-aos-duration="100" data-aos-once="true">Contact Us</h2>
                            <!-- /.hero-title -->
                        </div><!-- /.hero-content-area -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Frontpage Banner Section -->

        <!-- Start Contact Block -->
        <div class="contact-form-block style-two style-three ptb-130">
            <ul class="particle-shapes">
				<li class="dot-shape shape-one"></li>
				<li class="dot-shape shape-two"></li>
				<li class="dot-shape shape-three"></li>
				<li class="dot-shape shape-four"></li>
				<li class="dot-shape shape-five"></li>
			</ul>
			<div class="container ml-b-40">
				<div class="row align-items-center">
					<div class="col-lg-8 col-md-8">
						<div class="contact-form-area">
							<form id="contact_form" class="contact-form" action="http://www.incognitothemes.com/jura/html/assets/php/contact.php">
								<div class="row">
									<div class="col-lg-12 col-md-12">
										<div class="form-group">
											<label for="name">Your Name </label>
											<input class="form-controller" id="name" name="name" type="text">
										</div>
									</div>
									<!--./ col-lg-6-->
									<div class="col-lg-12 col-md-12">
										<div class="form-group">
											<label for="phone">Your Phone</label>
											<input class="form-controller" id="number" name="phone" type="number">
										</div>
									</div>
                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <label for="email">Your Email </label>
                                            <input class="form-controller" id="email" name="email" type="email">
                                        </div>
                                    </div>
									<!--./ col-lg-6 -->
									<div class="col-12">
										<div class="form-group">
											<label for="name">Your Message </label>
											<textarea id="message" name="message" class="form-controller" rows="4"
												cols="50"></textarea>
										</div>
									</div><!-- /.col-12 -->
									<div class="col-12 mrt-15">
										<button type="submit" class="btn btn-primary rounded-pill btn-gradient-three">Submit</button>
									</div>
									<!--./ col-lg-6 -->
								</div><!-- /.row -->
							</form><!-- /.contact-form -->
						</div><!-- /.contact-form-area -->
					</div><!-- /.col-lg-8 -->
                    <div class="col-lg-3 offset-lg-1 col-md-3">
                        <div class="single-contact-info">
                            <h3 class="title">Contacts</h3>
                            <div class="card-info">
                                <ul class="info-list">
                                    <li><i class="icofont-phone"></i> +852 3895 5666</li>
									<li><i class="icofont-send-mail"></i> <a href="#">info@example.com</a></li>
                                </ul>
                            </div><!-- /.card-info -->
                        </div><!-- /.single-contact-info -->
                        <div class="single-contact-info">
                            <h3 class="title">Address</h3>
                            <div class="card-info">
                                <h5>North Point</h5>
                                <p>Room 19A, Shangrun Centre, 367-373 King's Road, North Point, Hong Kong</p>
                                <P>Located on King's Road, in the heart of North Point</P>
                                <P>Only a 5-minute walk from MTR North Point Station</P>
                                <P>Adjacent to bus stops and tram stops, it takes half an hour to reach various districts in Hong Kong, Kowloon and the New Territories</P>
                                <P>Complete banking network, most banks are within a few steps</P>
                            </div><!-- /.card-info -->
                        </div><!-- /.single-contact-info -->
                    </div>
				</div><!-- /.row -->
			</div><!-- /.container -->
		</div>
        <!--~~./ End Contact Block ~~-->

    <!-- Start Site Footer -->
    <?php include('includes/footer.php'); ?>
    <!--~./ End Site Footer ~-->
</div>
<!--~~./ End Page Wrapper ~~-->

<!-- All The JS Files  -->
<?php include('includes/js.php'); ?>
</body>

</html>