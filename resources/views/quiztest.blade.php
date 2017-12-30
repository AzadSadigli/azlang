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
						Question Test
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

					<form name="form1" id="form1" action="/checkresult" method="POST">
						{{ csrf_field() }}

						<input type="hidden" name="user_id" value="{{Auth::user()->id}}">

						@php
						$ques = App\Question::orderBy('id','asc')->take(1)->where('id','1')->get()
						@endphp
						@foreach($ques as $ques)
							<h2>{{$ques->id}}. {{$ques-> question_body}}</h2>
							<!-- <p></p> -->
							@if(!count($ques->ans_1)==0)
							  <input type="radio" name="givenans_1" value="a"> {{$ques->ans_1}} <br>
							@endif
							@if(!count($ques->ans_2)==0)
							  <input type="radio" name="givenans_1" value="b"> {{$ques->ans_2}}<br>
							@endif
							@if(!count($ques->ans_3)==0)
							  <input type="radio" name="givenans_1" value="c"> {{$ques->ans_3}}<br>
							@endif
							@if(!count($ques->ans_4)==0)
							  <input type="radio" name="givenans_1" value="d"> {{$ques->ans_4}}<br>
							@endif
							@if(!count($ques->ans_5)==0)
							  <input type="radio" name="givenans_1" value="e"> {{$ques->ans_5}}<br>
							@endif
							<input type="hidden" name="rightans_1" value="{{$ques->rightanswer}}">
							<br>
						@endforeach

						@php
						$ques = App\Question::orderBy('id','asc')->take(1)->where('id','2')->get()
						@endphp
						@foreach($ques as $ques)
							<h2>{{$ques->id}}. {{$ques-> question_body}}</h2>
							<!-- <p></p> -->
							@if(!count($ques->ans_1)==0)
							  <input type="radio" name="givenans_2" value="a"> {{$ques->ans_1}} <br>
							@endif
							@if(!count($ques->ans_2)==0)
							  <input type="radio" name="givenans_2" value="b"> {{$ques->ans_2}}<br>
							@endif
							@if(!count($ques->ans_3)==0)
							  <input type="radio" name="givenans_2" value="c"> {{$ques->ans_3}}<br>
							@endif
							@if(!count($ques->ans_4)==0)
							  <input type="radio" name="givenans_2" value="d"> {{$ques->ans_4}}<br>
							@endif
							@if(!count($ques->ans_5)==0)
							  <input type="radio" name="givenans_2" value="e"> {{$ques->ans_5}}<br>
							@endif
							<input type="hidden" name="rightans_2" value="{{$ques->rightanswer}}">
							<br>
						@endforeach

						@php
						$ques = App\Question::orderBy('id','asc')->take(1)->where('id','3')->get()
						@endphp
						@foreach($ques as $ques)
							<h2>{{$ques->id}}. {{$ques-> question_body}}</h2>
							@if(!count($ques->ans_1)==0)
							  <input type="radio" name="givenans_3" value="a"> {{$ques->ans_1}} <br>
							@endif
							@if(!count($ques->ans_2)==0)
							  <input type="radio" name="givenans_3" value="b"> {{$ques->ans_2}}<br>
							@endif
							@if(!count($ques->ans_3)==0)
							  <input type="radio" name="givenans_3" value="c"> {{$ques->ans_3}}<br>
							@endif
							@if(!count($ques->ans_4)==0)
							  <input type="radio" name="givenans_3" value="d"> {{$ques->ans_4}}<br>
							@endif
							@if(!count($ques->ans_5)==0)
							  <input type="radio" name="givenans_3" value="e"> {{$ques->ans_5}}<br>
							@endif
							<input type="hidden" name="rightans_3" value="{{$ques->rightanswer}}">
							<br>
						@endforeach

						@php
						$ques = App\Question::orderBy('id','asc')->take(1)->where('id','4')->get()
						@endphp
						@foreach($ques as $ques)
							<h2>{{$ques->id}}. {{$ques-> question_body}}</h2>
							@if(!count($ques->ans_1)==0)
							  <input type="radio" name="givenans_4" value="a"> {{$ques->ans_1}} <br>
							@endif
							@if(!count($ques->ans_2)==0)
							  <input type="radio" name="givenans_4" value="b"> {{$ques->ans_2}}<br>
							@endif
							@if(!count($ques->ans_3)==0)
							  <input type="radio" name="givenans_4" value="c"> {{$ques->ans_3}}<br>
							@endif
							@if(!count($ques->ans_4)==0)
							  <input type="radio" name="givenans_4" value="d"> {{$ques->ans_4}}<br>
							@endif
							@if(!count($ques->ans_5)==0)
							  <input type="radio" name="givenans_4" value="e"> {{$ques->ans_5}}<br>
							@endif
							<input type="hidden" name="rightans_4" value="{{$ques->rightanswer}}">
							<br>
						@endforeach

						@php
						$ques = App\Question::orderBy('id','asc')->take(1)->where('id','5')->get()
						@endphp
						@foreach($ques as $ques)
							<h2>{{$ques->id}}. {{$ques-> question_body}}</h2>
							<!-- <p></p> -->
							@if(!count($ques->ans_1)==0)
							  <input type="radio" name="givenans_5" value="a"> {{$ques->ans_1}} <br>
							@endif
							@if(!count($ques->ans_2)==0)
							  <input type="radio" name="givenans_5" value="b"> {{$ques->ans_2}}<br>
							@endif
							@if(!count($ques->ans_3)==0)
							  <input type="radio" name="givenans_5" value="c"> {{$ques->ans_3}}<br>
							@endif
							@if(!count($ques->ans_4)==0)
							  <input type="radio" name="givenans_5" value="d"> {{$ques->ans_4}}<br>
							@endif
							@if(!count($ques->ans_5)==0)
							  <input type="radio" name="givenans_5" value="e"> {{$ques->ans_5}}<br>
							@endif
							<input type="hidden" name="rightans_5" value="{{$ques->rightanswer}}">
							<br>
						@endforeach

						<button class="btn btn-primary" type="submit" name="submit">Submit it</button>

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
