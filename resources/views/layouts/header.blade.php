
	<header id="fh5co-header" role="banner">
		<nav class="navbar navbar-default" role="navigation">
			<div class="container-fluid">
				<div class="navbar-header">
					<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle" data-toggle="collapse" data-target="#fh5co-navbar" aria-expanded="false" aria-controls="navbar"><i></i></a>
					<a class="navbar-brand" href="/"><img src="{{ asset('images/azlanglogo.PNG')}}" height="40px"></a>
				</div>
				<div id="fh5co-navbar" class="navbar-collapse collapse">
					<ul class="nav navbar-nav navbar-right">
						<li class="active"><a href="/"><span>Home <span class="border"></span></span></a></li>
						<!-- <li><a href="/left-sidebar"><span>Left Sidebar <span class="border"></span></span></a></li> -->
						   @guest
						   <li class="dropdown">
						   		<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    Sign <span class="caret"></span>
                                </a>
								<ul class="dropdown-menu" role="menu">
									<li><a href="/register"><span>SignUp <span class="border"></span></span></a></li>
									<li><a href="/login"><span>Login <span class="border"></span></span></a></li>		
                                </ul>
						   </li>
						  		
							@else
							 <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="text-transform: capitalize;" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                	<li><a href="/home"><span style="text-transform: capitalize;">Profile <span class="border"></span></span></a></li>
                                	<li><a href="/admin"><span style="text-transform: capitalize;">Admin Panel <span class="border"></span></span></a></li>

                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                           <span style="text-transform: capitalize;"> Logout  <span class="border"></span> <span>
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                            @endguest
					</ul>
				</div>
			</div>
		</nav>
	</header>
