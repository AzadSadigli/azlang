﻿<!DOCTYPE html>
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

@include('layouts.header')


	<div class="wrapper">
		<div class="container">
			<div class="row">
				<div class="span3">
					<div class="sidebar">

						<ul class="widget widget-menu unstyled">
							<li class="active">
								<a href="index.html">
									<i class="menu-icon icon-dashboard"></i>
									Dashboard 									<b class="label green pull-right">11</b>

								</a>
							</li>
						</ul><!--/.widget-nav-->

						<ul class="widget widget-menu unstyled">
                                <li><a href="ui-button-icon.html"><i class="menu-icon icon-bold"></i> Buttons </a></li>
                        </ul><!--/.widget-nav-->

						<ul class="widget widget-menu unstyled">
							<li>
								<a class="collapsed" data-toggle="collapse" href="#togglePages">
									<i class="menu-icon icon-cog"></i>
									<i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right"></i>
									More Pages
								</a>
								<ul id="togglePages" class="collapse unstyled">
									<li>
										<a href="other-login.html">
											<i class="icon-inbox"></i>
											Login
										</a>
									</li>
									<li>
										<a href="other-user-profile.html">
											<i class="icon-inbox"></i>
											Profile
										</a>
									</li>
									<li>
										<a href="other-user-listing.html">
											<i class="icon-inbox"></i>
											All Users
										</a>
									</li>
								</ul>
							</li>
							
							<li>
								<a href="#">
									<i class="menu-icon icon-signout"></i>
									Logout
								</a>
							</li>
						</ul>

					</div><!--/.sidebar-->
				</div><!--/.span3-->


				<div class="span9">
					<div class="content">

						<div class="module">
							<div class="module-head">
								<h3>Forms</h3>
							</div>
							<div class="module-body">

									<div class="alert">
										<button type="button" class="close" data-dismiss="alert">×</button>
										<strong>Warning!</strong> Something fishy here!
									</div>
									<div class="alert alert-error">
										<button type="button" class="close" data-dismiss="alert">×</button>
										<strong>Oh snap!</strong> Whats wrong with you? 
									</div>
									<div class="alert alert-success">
										<button type="button" class="close" data-dismiss="alert">×</button>
										<strong>Well done!</strong> Now you are listening me :) 
									</div>

									<br />

									<form class="form-horizontal row-fluid">
										<div class="control-group">
											<label class="control-label" for="basicinput">Basic Input</label>
											<div class="controls">
												<input type="text" id="basicinput" placeholder="Type something here..." class="span8">
												<span class="help-inline">Minimum 5 Characters</span>
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">Disabled Input</label>
											<div class="controls">
												<input type="text" id="basicinput" placeholder="You can't type something here..." class="span8" disabled>
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">Tooltip Input</label>
											<div class="controls">
												<input data-title="A tooltip for the input" type="text" placeholder="Hover to view the tooltip…" data-original-title="" class="span8 tip">
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">Prepended Input</label>
											<div class="controls">
												<div class="input-prepend">
													<span class="add-on">#</span><input class="span8" type="text" placeholder="prepend">       
												</div>
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">Appended Input</label>
											<div class="controls">
												<div class="input-append">
													<input type="text" placeholder="5.000" class="span8"><span class="add-on">$</span>
												</div>
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">Dropdown Button</label>
											<div class="controls">
												<div class="dropdown">
													<a class="dropdown-toggle btn" data-toggle="dropdown" href="#">Dropdown Button <i class="icon-caret-down"></i></a>
													<ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
														<li><a href="#">First Row</a></li>
														<li><a href="#">Second Row</a></li>
														<li><a href="#">Third Row</a></li>
														<li><a href="#">Fourth Row</a></li>
													</ul>
												</div>
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">Dropdown</label>
											<div class="controls">
												<select tabindex="1" data-placeholder="Select here.." class="span8">
													<option value="">Select here..</option>
													<option value="Category 1">First Row</option>
													<option value="Category 2">Second Row</option>
													<option value="Category 3">Third Row</option>
													<option value="Category 4">Fourth Row</option>
												</select>
											</div>
										</div>

										<div class="control-group">
											<label class="control-label">Radiobuttons</label>
											<div class="controls">
												<label class="radio">
													<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
													Option one
												</label> 
												<label class="radio">
													<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
													Option two
												</label> 
												<label class="radio">
													<input type="radio" name="optionsRadios" id="optionsRadios3" value="option3">
													Option three
												</label>
											</div>
										</div>

										<div class="control-group">
											<label class="control-label">Inline Radiobuttons</label>
											<div class="controls">
												<label class="radio inline">
													<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
													Option one
												</label> 
												<label class="radio inline">
													<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
													Option two
												</label> 
												<label class="radio inline">
													<input type="radio" name="optionsRadios" id="optionsRadios3" value="option3">
													Option three
												</label>
											</div>
										</div>

										<div class="control-group">
											<label class="control-label">Checkboxes</label>
											<div class="controls">
												<label class="checkbox">
													<input type="checkbox" value="">
													Option one
												</label>
												<label class="checkbox">
													<input type="checkbox" value="">
													Option two
												</label>
												<label class="checkbox">
													<input type="checkbox" value="">
													Option three
												</label>
											</div>
										</div>

										<div class="control-group">
											<label class="control-label">Inline Checkboxes</label>
											<div class="controls">
												<label class="checkbox inline">
													<input type="checkbox" value="">
													Option one
												</label>
												<label class="checkbox inline">
													<input type="checkbox" value="">
													Option two
												</label>
												<label class="checkbox inline">
													<input type="checkbox" value="">
													Option three
												</label>
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">Textarea</label>
											<div class="controls">
												<textarea class="span8" rows="5"></textarea>
											</div>
										</div>

										<div class="control-group">
											<div class="controls">
												<button type="submit" class="btn">Submit Form</button>
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