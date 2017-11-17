<!DOCTYPE html>
<html class="no-js"> 
<head>
	@include('layouts.master')
</head>
	<body>
	@include('layouts.header')
	<aside class="fh5co-page-heading">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1 class="fh5co-page-heading-lead">
						Question 1
						<span class="fh5co-border"></span>
					</h1>
				</div>
			</div>
		</div>
	</aside>
	<div id="fh5co-main">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-push-4">
					<h2>{{$ques->id}}. {{$ques-> question_body}}</h2>
					<p></p>
					<form action="">
						@if(!count($ques->ans_1)==0)
						  <input type="radio" name="gender" value="male"> {{$ques->ans_1}} <br>
						@endif
						@if(!count($ques->ans_2)==0)
						  <input type="radio" name="gender" value="male"> {{$ques->ans_2}}<br>
						@endif
						@if(!count($ques->ans_3)==0)
						  <input type="radio" name="gender" value="male"> {{$ques->ans_3}}<br>
						@endif
						@if(!count($ques->ans_4)==0)
						  <input type="radio" name="gender" value="male"> {{$ques->ans_4}}<br>
						@endif
						@if(!count($ques->ans_5)==0)
						  <input type="radio" name="gender" value="male"> {{$ques->ans_5}}<br>
						@endif
					</form>
					<!-- <div class="row">
						<div class="col-md-6">
							<p><a href="images/slide_1.jpg" class="image-popup"><img src="images/slide_1.jpg" class="img-responsive img-rounded"></a></p>
						</div>
						<div class="col-md-6">
							<p><a href="images/slide_2.jpg" class="image-popup"><img src="images/slide_2.jpg" class="img-responsive img-rounded"></a></p>
						</div>
					</div> -->
					<div class="fh5co-spacer fh5co-spacer-xxs"></div>
					<!-- <div class="row">
						<div class="col-md-6">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore accusantium, totam earum amet dolorum ut fuga, tempora veniam numquam dicta.</p>
							<ul class="fh5co-list-check">
								<li>Lorem ipsum dolor sit.</li>
								<li>Nostrum eveniet animi sint.</li>
								<li>Dolore eligendi, porro ipsam.</li>
								<li>Repudiandae voluptate dolorem voluptas.</li>
								<li>Voluptate cupiditate, est laborum?</li>
							</ul>
						</div>
						<div class="col-md-6">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore accusantium, totam earum amet dolorum ut fuga, tempora veniam numquam dicta.</p>
							<ul class="fh5co-list-check">
								<li>Lorem ipsum dolor sit amet, consectetur.</li>
								<li>Architecto eius aut culpa nihil quibusdam!</li>
								<li>Quasi sit, error vitae unde ipsa.</li>
								<li>Nobis voluptas, explicabo reiciendis voluptatum cum.</li>
								<li>Dicta magnam dignissimos, facilis? Cumque, repellendus.</li>
								<li>Sapiente expedita repellendus debitis culpa modi!</li>
								<li>Aliquid cupiditate ad, fugit qui quo.</li>
							</ul>
						</div>
					</div> -->
				</div>
				@include('layouts.leftside')
			</div>
		</div>
	</div>
	<div class="fh5co-spacer fh5co-spacer-lg"></div>
	@include('layouts.footer')
	</body>
</html>
