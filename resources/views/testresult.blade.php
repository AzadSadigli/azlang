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
						Result of Test
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

					<div class="col-md-12">
					<h1 class="fh5co-page-heading-lead">
					@php 
					$res = App\Results::where('user_id',[Auth::user()->id])->OrderBy('created_at','desc')->take(1)->get()
					@endphp
					@foreach($res as $result)
					
					@if(($result->givenans_5 == $result->rightans_5) && ($result->givenans_1 == $result->rightans_1) && ($result->givenans_2 == $result->rightans_2) && ($result->givenans_3 == $result->rightans_3) && ($result->givenans_4 == $result->rightans_4))
										<br>Your test result is 100%
									
					@endif
					@if(!($result->givenans_5 == $result->rightans_5) && ($result->givenans_1 == $result->rightans_1) && ($result->givenans_2 == $result->rightans_2) && ($result->givenans_3 == $result->rightans_3) && ($result->givenans_4 == $result->rightans_4))
										<br>Your test result is 80%
									
					@endif
					@if(($result->givenans_5 == $result->rightans_5) && !($result->givenans_1 == $result->rightans_1) && ($result->givenans_2 == $result->rightans_2) && ($result->givenans_3 == $result->rightans_3) && ($result->givenans_4 == $result->rightans_4))
										<br>Your test result is 80%
									
					@endif
					@if(($result->givenans_5 == $result->rightans_5) && ($result->givenans_1 == $result->rightans_1) && !($result->givenans_2 == $result->rightans_2) && ($result->givenans_3 == $result->rightans_3) && ($result->givenans_4 == $result->rightans_4))
										<br>Your test result is 80%
									
					@endif
					@if(($result->givenans_5 == $result->rightans_5) && ($result->givenans_1 == $result->rightans_1) && ($result->givenans_2 == $result->rightans_2) && !($result->givenans_3 == $result->rightans_3) && ($result->givenans_4 == $result->rightans_4))
										<br>Your test result is 80%
									
					@endif
					@if(($result->givenans_5 == $result->rightans_5) && ($result->givenans_1 == $result->rightans_1) && ($result->givenans_2 == $result->rightans_2) && ($result->givenans_3 == $result->rightans_3) && !($result->givenans_4 == $result->rightans_4))
										<br>Your test result is 80%
									
					@endif



					@if(!($result->givenans_5 == $result->rightans_5) && !($result->givenans_1 == $result->rightans_1) && ($result->givenans_2 == $result->rightans_2) && ($result->givenans_3 == $result->rightans_3) && ($result->givenans_4 == $result->rightans_4))
										<br>Your test result is 60%
									
					@endif
					@if(!($result->givenans_5 == $result->rightans_5) && ($result->givenans_1 == $result->rightans_1) && !($result->givenans_2 == $result->rightans_2) && ($result->givenans_3 == $result->rightans_3) && ($result->givenans_4 == $result->rightans_4))
										<br>Your test result is 60%
									
					@endif
					@if(!($result->givenans_5 == $result->rightans_5) && ($result->givenans_1 == $result->rightans_1) && ($result->givenans_2 == $result->rightans_2) && !($result->givenans_3 == $result->rightans_3) && ($result->givenans_4 == $result->rightans_4))
										<br>Your test result is 60%
									
					@endif
					@if(!($result->givenans_5 == $result->rightans_5) && ($result->givenans_1 == $result->rightans_1) && ($result->givenans_2 == $result->rightans_2) && ($result->givenans_3 == $result->rightans_3) && !($result->givenans_4 == $result->rightans_4))
										<br>Your test result is 60%
									
					@endif

					
					@if(($result->givenans_5 == $result->rightans_5) && !($result->givenans_1 == $result->rightans_1) && !($result->givenans_2 == $result->rightans_2) && ($result->givenans_3 == $result->rightans_3) && ($result->givenans_4 == $result->rightans_4))
										<br>Your test result is 60%
									
					@endif
					@if(($result->givenans_5 == $result->rightans_5) && !($result->givenans_1 == $result->rightans_1) && ($result->givenans_2 == $result->rightans_2) && !($result->givenans_3 == $result->rightans_3) && ($result->givenans_4 == $result->rightans_4))
										<br>Your test result is 60%
									
					@endif
					@if(($result->givenans_5 == $result->rightans_5) && !($result->givenans_1 == $result->rightans_1) && ($result->givenans_2 == $result->rightans_2) && ($result->givenans_3 == $result->rightans_3) && !($result->givenans_4 == $result->rightans_4))
										<br>Your test result is 60%
									
					@endif
					@if(($result->givenans_5 == $result->rightans_5) && ($result->givenans_1 == $result->rightans_1) && !($result->givenans_2 == $result->rightans_2) && !($result->givenans_3 == $result->rightans_3) && ($result->givenans_4 == $result->rightans_4))
										<br>Your test result is 60%
									
					@endif
					@if(($result->givenans_5 == $result->rightans_5) && ($result->givenans_1 == $result->rightans_1) && !($result->givenans_2 == $result->rightans_2) && ($result->givenans_3 == $result->rightans_3) && !($result->givenans_4 == $result->rightans_4))
										<br>Your test result is 60%
									
					@endif
					@if(($result->givenans_5 == $result->rightans_5) && ($result->givenans_1 == $result->rightans_1) && ($result->givenans_2 == $result->rightans_2) && !($result->givenans_3 == $result->rightans_3) && !($result->givenans_4 == $result->rightans_4))
										<br>Your test result is 60%
									
					@endif



					@if(!($result->givenans_5 == $result->rightans_5) && !($result->givenans_1 == $result->rightans_1) && !($result->givenans_2 == $result->rightans_2) && ($result->givenans_3 == $result->rightans_3) && ($result->givenans_4 == $result->rightans_4))
										<br>Your test result is 40%
									
					@endif
					@if(!($result->givenans_5 == $result->rightans_5) && !($result->givenans_1 == $result->rightans_1) && ($result->givenans_2 == $result->rightans_2) && !($result->givenans_3 == $result->rightans_3) && ($result->givenans_4 == $result->rightans_4))
										<br>Your test result is 40%
									
					@endif
					@if(!($result->givenans_5 == $result->rightans_5) && !($result->givenans_1 == $result->rightans_1) && ($result->givenans_2 == $result->rightans_2) && ($result->givenans_3 == $result->rightans_3) && !($result->givenans_4 == $result->rightans_4))
										<br>Your test result is 40%
									
					@endif
					@if(!($result->givenans_5 == $result->rightans_5) && ($result->givenans_1 == $result->rightans_1) && !($result->givenans_2 == $result->rightans_2) && !($result->givenans_3 == $result->rightans_3) && ($result->givenans_4 == $result->rightans_4))
										<br>Your test result is 40%
									
					@endif
					@if(!($result->givenans_5 == $result->rightans_5) && ($result->givenans_1 == $result->rightans_1) && !($result->givenans_2 == $result->rightans_2) && ($result->givenans_3 == $result->rightans_3) && !($result->givenans_4 == $result->rightans_4))
										<br>Your test result is 40%
									
					@endif
					@if(!($result->givenans_5 == $result->rightans_5) && ($result->givenans_1 == $result->rightans_1) && ($result->givenans_2 == $result->rightans_2) && !($result->givenans_3 == $result->rightans_3) && !($result->givenans_4 == $result->rightans_4))
										<br>Your test result is 40%
									
					@endif
					@if(($result->givenans_5 == $result->rightans_5) && !($result->givenans_1 == $result->rightans_1) && !($result->givenans_2 == $result->rightans_2) && !($result->givenans_3 == $result->rightans_3) && ($result->givenans_4 == $result->rightans_4))
										<br>Your test result is 40%
									
					@endif
					@if(($result->givenans_5 == $result->rightans_5) && !($result->givenans_1 == $result->rightans_1) && ($result->givenans_2 == $result->rightans_2) && !($result->givenans_3 == $result->rightans_3) && !($result->givenans_4 == $result->rightans_4))
										<br>Your test result is 40%
									
					@endif
					@if(($result->givenans_5 == $result->rightans_5) && ($result->givenans_1 == $result->rightans_1) && !($result->givenans_2 == $result->rightans_2) && !($result->givenans_3 == $result->rightans_3) && !($result->givenans_4 == $result->rightans_4))
										<br>Your test result is 40%
									
					@endif




					@if(($result->givenans_5 == $result->rightans_5) && !($result->givenans_1 == $result->rightans_1) && !($result->givenans_2 == $result->rightans_2) && !($result->givenans_3 == $result->rightans_3) && !($result->givenans_4 == $result->rightans_4))
										<br>Your test result is 20%
									
					@endif
					@if(!($result->givenans_5 == $result->rightans_5) && ($result->givenans_1 == $result->rightans_1) && !($result->givenans_2 == $result->rightans_2) && !($result->givenans_3 == $result->rightans_3) && !($result->givenans_4 == $result->rightans_4))
										<br>Your test result is 20%
									
					@endif
					@if(!($result->givenans_5 == $result->rightans_5) && !($result->givenans_1 == $result->rightans_1) && ($result->givenans_2 == $result->rightans_2) && !($result->givenans_3 == $result->rightans_3) && !($result->givenans_4 == $result->rightans_4))
										<br>Your test result is 20%
									
					@endif
					@if(!($result->givenans_5 == $result->rightans_5) && !($result->givenans_1 == $result->rightans_1) && !($result->givenans_2 == $result->rightans_2) && !($result->givenans_3 == $result->rightans_3) && ($result->givenans_4 == $result->rightans_4))
										<br>Your test result is 20%
									
					@endif
					@if(!($result->givenans_5 == $result->rightans_5) && !($result->givenans_1 == $result->rightans_1) && !($result->givenans_2 == $result->rightans_2) && ($result->givenans_3 == $result->rightans_3) && !($result->givenans_4 == $result->rightans_4))
										<br>Your test result is 20%
									
					@endif








					@if(!($result->givenans_5 == $result->rightans_5) && !($result->givenans_1 == $result->rightans_1) && !($result->givenans_2 == $result->rightans_2) && !($result->givenans_3 == $result->rightans_3) && !($result->givenans_4 == $result->rightans_4))
										<br>Your test result is 0%
									
					@endif


					@endforeach
				</h1>
			</div>

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
