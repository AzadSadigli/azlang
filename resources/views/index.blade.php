
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
@include('layouts.master')
	</head>
	<body>
@include('layouts.header')
	<!-- END .header -->

@include('layouts.slider')
	<div id="fh5co-main">
		<!-- Features -->

		<div id="fh5co-features">
			<div class="container">
				<div class="row text-center">
					<div class="col-md-8 col-md-offset-2">
						<h2 class="fh5co-section-lead">Our goal</h2>
						<h3 class="fh5co-section-sub-lead">To help foreign people to easily learn Azerbaijani language</h3>
					</div>
					<div class="fh5co-spacer fh5co-spacer-md"></div>
				</div>
				<div class="row">
					<div class="col-md-6 col-sm-6 fh5co-feature-border">
						<div class="fh5co-feature">
							<div class="fh5co-feature-icon to-animate">
								<i class="icon-bag"></i>
							</div>
							<div class="fh5co-feature-text">
								<h3>Learn Gramma</h3>
								<p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
								<p>
									@guest
									<a href="/register">Read more</a>
									@else
									<a href="/home">Read more</a>
									@endguest
								</p>
							</div>
						</div>
						<div class="fh5co-feature no-border">
							<div class="fh5co-feature-icon to-animate">
								<i class="icon-head"></i>
							</div>
							<div class="fh5co-feature-text">
								<h3>Test Yourself! </h3>
								<p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
								<p><a href="quiztest">Read more</a></p>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-sm-6">
						<div class="fh5co-feature">
							<div class="fh5co-feature-icon to-animate">
								<i class="icon-microphone"></i>
							</div>
							<div class="fh5co-feature-text">
								<h3>What is your level?</h3>
								<p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
								<p><a href="/quiztest">Read more</a></p>
							</div>
						</div>
						<div class="fh5co-feature no-border">
							<div class="fh5co-feature-icon to-animate">
								<i class="icon-clock2"></i>
							</div>
							<div class="fh5co-feature-text">
								<h3>24/7 Support</h3>
								<p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
								<p>
									<a type="button" style="cursor: pointer;" data-toggle="modal" data-target="#myModal">Read more</a>
									<!-- Modal -->
									<div id="myModal" class="modal fade" role="dialog">
									  <div class="modal-dialog">
									    <!-- Modal content-->
									    <div class="modal-content">
									      <div class="modal-header">
									        <button type="button" class="close" data-dismiss="modal">&times;</button>
									        <h4 class="modal-title">Not Working</h4>
									      </div>
									      <div class="modal-body">
									        <p>This function has not started to work, yet.</p>
									      </div>
									      <div class="modal-footer">
									        <a type="button" class="btn btn-danger" data-dismiss="modal">Close</a>
									      </div>
									    </div>
									  </div>
									</div>
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Features -->


		<!-- <div class="fh5co-spacer fh5co-spacer-lg"></div> -->
		<!-- Products -->
		<!-- <div class="container" id="fh5co-products">
			<div class="row text-left">
				<div class="col-md-8">
					<h2 class="fh5co-section-lead">Products</h2>
					<h3 class="fh5co-section-sub-lead">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</h3>
				</div>
				<div class="fh5co-spacer fh5co-spacer-md"></div>
			</div>
			<div class="row">
				<div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 fh5co-mb30">
					<div class="fh5co-product">
						<img src="images/slide_1.jpg" alt="FREEHTML5.co Free HTML5 Template Bootstrap" class="img-responsive img-rounded to-animate">
						<h4>Lorem ipsum</h4>
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
						<p><a href="#">Read more</a></p>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 fh5co-mb30">
					<div class="fh5co-product">
						<img src="images/slide_2.jpg" alt="FREEHTML5.co Free HTML5 Template Bootstrap" class="img-responsive img-rounded to-animate">
						<h4>Architecto nihil</h4>
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
						<p><a href="#">Read more</a></p>
					</div>
				</div>
				<div class="visible-sm-block visible-xs-block clearfix"></div>
				<div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 fh5co-mb30">
					<div class="fh5co-product">
						<img src="images/slide_3.jpg" alt="FREEHTML5.co Free HTML5 Template Bootstrap" class="img-responsive img-rounded to-animate">
						<h4>Animi earum</h4>
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
						<p><a href="#">Read more</a></p>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 fh5co-mb30">
					<div class="fh5co-product">
						<img src="images/slide_4.jpg" alt="FREEHTML5.co Free HTML5 Template Bootstrap" class="img-responsive img-rounded to-animate">
						<h4>Recusandae iste</h4>
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
						<p><a href="#">Read more</a></p>
					</div>
				</div>

			</div>
		</div> -->
		<!-- Products -->
		<!-- <div class="fh5co-spacer fh5co-spacer-lg"></div> -->

		<!-- <div id="fh5co-clients">
			<div class="container">
				<div class="row">
					<div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 fh5co-client-logo text-center to-animate"><img src="images/client_1.png" class="img-responsive"></div>
					<div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 fh5co-client-logo text-center to-animate"><img src="images/client_2.png" class="img-responsive"></div>
					<div class="visible-sm-block visible-xs-block clearfix"></div>
					<div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 fh5co-client-logo text-center to-animate"><img src="images/client_3.png" class="img-responsive"></div>
					<div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 fh5co-client-logo text-center to-animate"><img src="images/client_4.png" class="img-responsive"></div>
				</div>
			</div>
		</div> -->

		<div class="fh5co-bg-section" style="background-image: url(images/slider_2.jpg); background-attachment: fixed;">
			<div class="fh5co-overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<div class="fh5co-hero-wrap">
							<div class="fh5co-hero-intro text-center">
								<h1 class="fh5co-lead"><span class="quo">&ldquo;</span>Learn everything you can, anytime you can, from anyone you can; there will always come a time when you will be grateful you did. <span class="quo">&rdquo;</span></h1>
								<p class="author">&mdash; <cite>Sarah Caldwell</cite></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>
@include('layouts.footer')

	</body>
</html>
