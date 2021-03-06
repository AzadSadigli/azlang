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

	@include('admin.header')
	<!-- /navbar -->



	<div class="wrapper">
		<div class="container">
			<div class="row">
				@include('admin.adminsidebar')
				<!--/.span3-->


				<div class="span9">
					<div class="content">

					
						<div class="module">
							<div class="module-head">
								<h3>DataTables</h3>
							</div>
							<div class="module-body table">
								<table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display" width="100%">
									<thead>
										<tr>
											<th>Question</th>
											<!-- <th>A</th> -->
											<!-- <th>B</th> -->
											<!-- <th>C</th> -->
											<!-- <th>D</th> -->
											<!-- <th>E</th> -->
											<th>Correct Answers</th>
										</tr>
									</thead>
									<tbody width="100%">
										@foreach($ques as $ques)
										<tr class="odd gradeX">
											<td><a href="/answers/{{$ques->id}}">{{$ques -> question_body}}</a></td>
											<!-- <td>{{$ques -> ans_1}}</td> -->
											<!-- <td>{{$ques -> ans_2}}</td> -->
											<!-- <td class="center"> {{$ques -> ans_3}}</td> -->
											<!-- <td class="center">{{$ques-> ans_4}}</td> -->
											<!-- <td class="center">{{$ques-> ans_5}}</td> -->
											<td>
												@if($ques->correct_ans_1 == 1)
												A
												@endif
												@if($ques->correct_ans_2 == 1)
												B
												@endif
												@if($ques->correct_ans_3 == 1)
												C
												@endif
												@if($ques->correct_ans_4 == 1)
												D
												@endif
												@if($ques->correct_ans_5 == 1)
												E
												@endif
											</td>
										</tr>
										@endforeach
									</tbody>
									<tfoot>
										<tr>
											<th>Question</th>
											<!-- <th>A</th> -->
											<!-- <th>B</th> -->
											<!-- <th>C</th> -->
											<!-- <th>D</th> -->
											<!-- <th>E</th> -->
											<th>Correct Answers</th>
										</tr>
									</tfoot>
								</table>
							</div>
						</div><!--/.module-->

					<br />
						
					</div><!--/.content-->
				</div><!--/.span9-->
			</div>
		</div><!--/.container-->
	</div><!--/.wrapper-->

	<div class="footer">
		<div class="container">
			 

			<b class="copyright">&copy; 2014 All rights reserved.</b>
		</div>
	</div>

	<script src="{{ asset('admindesign/scripts/jquery-1.9.1.min.js')}}"></script>
	<script src="{{ asset('admindesign/scripts/jquery-ui-1.10.1.custom.min.js')}}"></script>
	<script src="{{ asset('admindesign/bootstrap/js/bootstrap.min.js')}}"></script>
	<script src="{{ asset('admindesign/scripts/datatables/jquery.dataTables.js')}}"></script>
	<script>
		$(document).ready(function() {
			$('.datatable-1').dataTable();
			$('.dataTables_paginate').addClass("btn-group datatable-pagination");
			$('.dataTables_paginate > a').wrapInner('<span />');
			$('.dataTables_paginate > a:first-child').append('<i class="icon-chevron-left shaded"></i>');
			$('.dataTables_paginate > a:last-child').append('<i class="icon-chevron-right shaded"></i>');
		} );
	</script>
</body>