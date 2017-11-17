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
								@if(Session::has('succ_topic'))
										<center>
											<div class="col-md-4" style="width:90%;">
												<div class="alert alert-success">
													{{Session::get('succ_topic')}}
												</div>
											</div>
										</center>
								@endif

									<br />

									<form class="form-horizontal row-fluid" method="POST" action="/addtopic">
										 {{ csrf_field() }}
										 <div class="control-group">
										<div class="controls">
										<span class="help-inline">Minimum 5 Characters</span> 
										</div></div>
										<div class="control-group">
											<label class="control-label" for="basicinput">Topic name</label>
											<div class="controls">
												<input type="text" id="basicinput" name="topic_name" placeholder="Type something here..." class="span8">
											</div>
										</div>
										<div class="control-group">
											<div class="controls">
												<button type="submit" name="submit" class="btn btn-primary"> Add Topic</button>
											</div>
										</div>
									</form>
							</div>
						</div>
						<div class="module">
							<div class="module-head">
								<h3>Tables</h3>
							</div>
							<div class="module-body">
								<p>
									<strong>Topic</strong>
									-
									<small>Topic names in Azerbaijan</small>
								</p>
								<table class="table">

								@if(Session::has('topic_deleted'))
										<center>
											<div class="col-md-4" style="width:90%;">
												<div class="alert alert-danger">
													{{Session::get('topic_deleted')}}
												</div>
											</div>
										</center>
								@endif
								  <thead>
									<tr>
									  <th>#</th>
									  <th>Topic name</th>
									  <th>X</th>
									</tr>
								  </thead>
								  <tbody>
									@php
									$topic = App\Topic::orderBy('created_at','desc')->get()
									@endphp
									@foreach($topic as $topic)
									<tr>
									  <td>{{$topic->id}}</td>
									  <td>{{$topic->name_topic}}</td>
									  <td><a href="/deletetopic/{{$topic->id}}" class="btn btn-danger">X</a></td>
									</tr>
									@endforeach
								  </tbody>
								</table>

								
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