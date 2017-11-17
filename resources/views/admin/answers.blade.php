<!DOCTYPE html>
<html lang="en">


<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Admin Panel</title>
	<link type="text/css" href="{{ asset('admindesign/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
	<link type="text/css" href="{{ asset('admindesign/bootstrap/css/bootstrap-responsive.min.css')}}" rel="stylesheet">
	<link type="text/css" href="{{ asset('admindesign/css/theme.css')}}" rel="stylesheet">
	<link type="text/css" href="{{ asset('admindesign/images/icons/css/font-awesome.css')}}" rel="stylesheet">
	<link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>
</head>
<body>

@include('admin.header')


	<div class="wrapper">
		<div class="container">
			<div class="row">
				@include('admin.adminsidebar')
				<!--/.span3-->


				<div class="span9">
					<div class="content">

						<div class="module">
							<div class="module-head">
								<h3>Forms</h3>
							</div>
							<div class="module-body">

								<br>
								@if(Session::has('succ4'))
										<center>
											<div class="col-md-4" style="width:90%;">
												<div class="alert alert-success">
													{{Session::get('succ4')}}
												</div>
											</div>
										</center>
								@endif

									<br />

									<form class="form-horizontal row-fluid" method="POST" action="/getanswers/{{$ques->id}}">
										 {{ csrf_field() }}

										<div class="control-group">
											<label class="control-label" for="basicinput">Question</label>
											<div class="controls">
												<textarea class="span8" name="question_body" placeholder="Question..." rows="5">{{$ques->question_body}}</textarea>
											</div> 
										</div>
										<!-- <span class="help-inline"><i></i></span> <br> -->


										<div class="control-group">
											<label class="control-label" for="basicinput"> A)</label>
											<div class="controls">
												{{$ques->ans_1}} <br><br>
											<select tabindex="1" name="correct_ans_1" data-placeholder="Select here.." class="span8">
												@if(count($ques->correct_ans_1)==0)
													<option value="" selected="" disabled="">Answer...</option>
												@else
													<option value="" selected="" disabled="">
														@if($ques->correct_ans_1==0)
														<i>Incorrect</i>
														@else
														<i>Correct</i>
														@endif
													</option>
												@endif
													<option name="correct_ans_1"  value="0">Incorrect</option>
													<option name="correct_ans_1"  value="1">Correct</option>
											</select>
											</div>
										</div>												
										<div class="control-group">
											<label class="control-label" for="basicinput">B)</label>
											<div class="controls">
												{{$ques->ans_2}} <br><br>
											<select tabindex="1" name="correct_ans_2"  data-placeholder="Select here.." class="span8">
												@if(count($ques->correct_ans_2)==0)
													<option value="" selected="" disabled="">Answer...</option>
												@else
													<option value="" selected="" disabled="">
														@if($ques->correct_ans_2==0)
														<i>Incorrect</i>
														@else
														<i>Correct</i>
														@endif
													</option>
												@endif
													<option name="correct_ans_2"  value="0">Incorrect</option>
													<option name="correct_ans_2"  value="1">Correct</option>
											</select>
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="basicinput">C)</label>
											<div class="controls">
												{{$ques->ans_3}} <br><br>
											<select tabindex="1" name="correct_ans_3"  data-placeholder="Select here.." class="span8">
												@if(count($ques->correct_ans_3)==0)
													<option value="" selected="" disabled="">Answer...</option>
												@else
													<option value="" selected="" disabled="">
														@if($ques->correct_ans_3==0)
														<i>Incorrect</i>
														@else
														<i>Correct</i>
														@endif
													</option>
												@endif													<option name="correct_ans_3"  value="0">Incorrect</option>
													<option name="correct_ans_3"  value="1">Correct</option>
											</select>
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="basicinput">D)</label>
											<div class="controls">
												{{$ques->ans_4}} <br><br>
											<select tabindex="1" name="correct_ans_4"  data-placeholder="Select here.." class="span8">
													@if(count($ques->correct_ans_4)==0)
														<option value="" selected="" disabled="">Answer...</option>
													@else
														<option value="" selected="" disabled="">
															@if($ques->correct_ans_4==0)
															<i>Iorrect</i>
															@else
															<i>Correct</i>
															@endif
														</option>
													@endif
													<option name="correct_ans_4"  value="0">Incorrect</option>
													<option name="correct_ans_4"  value="1">Correct</option>
											</select>
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="basicinput">E)</label>
											<div class="controls">
												{{$ques->ans_5}} <br><br>
											<select tabindex="1" name="correct_ans_5"  data-placeholder="Select here.." class="span8">
													@if(count($ques->correct_ans_5)==0)
														<option value="" selected="" disabled="">Answer...</option>
													@else
														<option value="" selected="" disabled="">
															@if($ques->correct_ans_5	==0)
															<i>Incorrect</i>
															@else
															<i>Correct</i>
															@endif
														</option>
													@endif
													<option name="correct_ans_5"  value="0">Incorrect</option>
													<option name="correct_ans_5"  value="1">Correct</option>
											</select>
											</div>
										</div>
										<div class="control-group">
											<div class="controls">
												<button type="submit" name="submit" class="btn btn-primary">Submit Form</button>
											</div>
										</div>
									</form>
							</div>
						</div>
					</div><!--/.content-->
				</div><!--/.span9-->
			</div>
		</div><!--/.container-->
	</div><!--/.wrapper-->

	<div class="footer">
		<div class="container">
			 

			<b class="copyright">&copy; 2017 </b> All rights reserved.
		</div>
	</div>

	<script src="{{ asset('admindesign/scripts/jquery-1.9.1.min.js')}}" type="text/javascript"></script>
	<script src="{{ asset('admindesign/scripts/jquery-ui-1.10.1.custom.min.js')}}" type="text/javascript"></script>
	<script src="{{ asset('admindesign/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>
	<script src="{{ asset('admindesign/scripts/flot/jquery.flot.js')}}" type="text/javascript"></script>
</body>