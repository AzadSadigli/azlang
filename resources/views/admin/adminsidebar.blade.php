<div class="span3">
					<div class="sidebar">

						<ul class="widget widget-menu unstyled">
							<li class="active">
								<a href="/">
									<i class="menu-icon icon-dashboard"></i>
									Home <b class="label green pull-right">11</b>   <b class="label orange pull-right">19</b>
								</a>
							</li>
							<li class="active">
								<a href="/questions">
									<i class="menu-icon icon-dashboard"></i>
									Questions 
									<!-- <b class="label green pull-right">11</b>   -->
									 <b class="label green pull-right">
									 @php
										$quis = App\Question::all()
									 @endphp
									{{count($quis)}}</b>
								</a>
							</li>
						</ul><!--/.widget-nav-->


						<ul class="widget widget-menu unstyled">
							<li>
								<a class="collapsed" data-toggle="collapse" href="#togglePages">
									<i class="menu-icon icon-cog"></i>
									<i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right"></i>
									Add data
								</a>
								<ul id="togglePages" class="collapse unstyled">
									<li>
										<a href="/gramma">
											<i class="icon-inbox"></i>
											Add Gramma
										</a>
									</li>
									<li>
										<a href="/question">
											<i class="icon-inbox"></i>
											Add Question
										</a>
									</li>
									<li>
										<a href="/topic">
											<i class="icon-inbox"></i>
											Add Topic
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
										<a href="/topic">
											<i class="icon-inbox"></i>
											Add Topic
										</a>
									</li>
									<li>
										<a href="/gramma">
											<i class="icon-inbox"></i>
											Add Gramma
										</a>
									</li>
									<li>
										<a href="/grammalist">
											<i class="icon-inbox"></i>
											Gramma List
											 <b class="label green pull-right">
												 @php
													$gr = App\Gramma::all()
												 @endphp
												{{count($gr)}}
											</b>
										</a>
									</li>
									<li>
										<a href="/admin">
											<i class="icon-inbox"></i>
											Add Question
										</a>
									</li>
									
									<li>
							<li>
								<a href="#">
									<i class="menu-icon icon-signout"></i>
									Logout
								</a>
							</li>
						</ul>

					</div><!--/.sidebar-->
				</div>