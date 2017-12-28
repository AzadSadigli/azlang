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
					
					<form action="" method="POST">
						<h2>{{$ques->id}}. {{$ques-> question_body}}</h2>
						<p></p>
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
					<div class="fh5co-spacer fh5co-spacer-xxs"></div>

				</div>

				@include('layouts.leftside')
			</div>
		</div>
	</div>
	<div class="fh5co-spacer fh5co-spacer-lg"></div>
	@include('layouts.footer')
	</body>
</html>
