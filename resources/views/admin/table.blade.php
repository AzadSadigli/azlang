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
											<th>Options</th>
											<th>Correct Answers</th>
											<th>Change</th>
										</tr>
									</thead>
									<tbody width="100%">
										@foreach($ques as $ques)
										<tr class="odd gradeX">
											<td><a href="/answers/{{$ques->id}}">{{$ques -> question_body}}</a></td>
											<td>
												<b style="color: blue;"> A.</b> {{$ques -> ans_1}}</br>
												<b style="color: blue;"> B.</b> {{$ques -> ans_2}}</br>
												<b style="color: blue;"> C.</b> {{$ques -> ans_3}}</br>
												<b style="color: blue;"> D.</b> {{$ques-> ans_4}}</br>
												<b style="color: blue;"> E.</b> {{$ques-> ans_5}}</td>
											<td>
											{{$ques->rightanswer}}
											</td>
											<td>
												<a type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal-{{$ques->id}}">Change</a>
												<!-- Modal -->
												<div id="myModal-{{$ques->id}}" class="modal fade" role="dialog">
												  <div class="modal-dialog">
												    <!-- Modal content-->
												    <div class="modal-content">
												      <div class="modal-header">
												        <button type="button" class="close" data-dismiss="modal">&times;</button>
												        <h4 class="modal-title">Correct Answer</h4>
												      </div>
												      <form method="POST" action="/changeanswer/{{$ques->id}}">
												      <div class="modal-body">
												        <p>
												        {{ csrf_field() }}
															  <input type="radio" name="rightanswer" value="a"> A<br>
															  <input type="radio" name="rightanswer" value="b"> B<br>
															  <input type="radio" name="rightanswer" value="c"> C <br>
															  <input type="radio" name="rightanswer" value="d"> D<br>
															  <input type="radio" name="rightanswer" value="e"> E<br>
												        </p>
												      </div>
												      <div class="modal-footer">
												      	<button class="btn btn-primary" type="submit" name="submit">Change it</button>
												        <a type="button" class="btn btn-danger" data-dismiss="modal">Close</a>
												      </div>
												      </form>
												    </div>
												  </div>
												</div>
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
											<th>Options</th>
											<th>Correct Answers</th>
											<th>Change</th>
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