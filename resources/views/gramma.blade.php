
<!DOCTYPE html>
<html class="no-js"> 
	<head>
	@include('layouts.master')
	</head>
	<body>

@include('layouts.header')

	<!-- END .header -->

	<aside class="fh5co-page-heading">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1 class="fh5co-page-heading-lead">
						@php 
						$topic = App\Topic::all()
						@endphp
						@foreach($topic as $topic)
						@if($gramma->topic_id==$topic->id)
							{{$topic->name_topic}}
						@endif
						@endforeach
						<span class="fh5co-border"></span>
					</h1>

				</div>
			</div>
		</div>
	</aside>

	<div id="fh5co-main">

		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<h2>{{$gramma->title}}</h2>
					<p>
						{{$gramma->gramma}}
					</p>
					@if(!count($gramma->definition_1)==0)
					<div class="col-md-4" style="width:90%;">
						<div class="alert alert-success">
							{{$gramma->definition_1}}
						</div>
					</div>
					<br>
					@endif
					@if(!count($gramma->definition_2)==0)
					<div class="col-md-4" style="width:90%;">
						<div class="alert alert-success">
							{{$gramma->definition_2}}
						</div>
					</div>
					@endif
					<div class="fh5co-spacer fh5co-spacer-xxs"></div>
				

				</div>

				<div class="col-md-4">
					<div class="fh5co-sidebox">
						<h3 class="fh5co-sidebox-lead">SIMILAR CONTEXTS</h3>
						<ul class="fh5co-post">
							@php
							$gram = App\Gramma::inRandomOrder()->take(3)->where('topic_id',[$gramma->topic_id])->get()
							@endphp
							@foreach($gram as $gram)
							<li>
								<a href="/gramma/{{$gram->id}}" style="color: black;">
										{{$gram->title}}
										<span class="fh5co-post-meta">Topic: 
										@php
										$topic = App\Topic::all()
										@endphp
										@foreach($topic as $topic)
										@if($topic->id==$gram->topic_id)
											{{$topic->name_topic}}
										@endif
										@endforeach
										</span>
								</a>
							</li>
							@endforeach
						</ul>

					</div>

					<div class="fh5co-sidebox">
						<h3 class="fh5co-sidebox-lead">Quize about <i><b>{{$gramma->gramma}}</b></i></h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias, temporibus vitae. Dolores sequi, animi dolorem. Ullam minima laudantium culpa dolorem, nulla doloribus totam obcaecati reprehenderit quasi nam eius autem nihil.</p>
					</div>

					<!-- <div class="fh5co-sidebox">
						<h3 class="fh5co-sidebox-lead">Check list</h3>
						<ul class="fh5co-list-check">
							<li>Lorem ipsum dolor sit.</li>
							<li>Nostrum eveniet animi sint.</li>
							<li>Dolore eligendi, porro ipsam.</li>
							<li>Repudiandae voluptate dolorem voluptas.</li>
							<li>Voluptate cupiditate, est laborum?</li>
						</ul>
					</div> -->
				</div>

			</div>
		</div>
	</div>

	<div class="fh5co-spacer fh5co-spacer-lg"></div>

@include('layouts.footer')


	</body>
</html>
