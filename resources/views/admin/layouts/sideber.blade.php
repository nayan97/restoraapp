<div class="sidebar" id="sidebar">
                <div class="sidebar-inner slimscroll">
					<div id="sidebar-menu" class="sidebar-menu">
						<ul>
							<li class="menu-title"> 
								<span>Main</span>
							</li>
							<li class="active"> 
								<a href="{{ url('/')}}"><i class="fe fe-home"></i> <span>FrontEnd</span></a>
							</li>
							<li> 
								<a href=""><i class="fe fe-home"></i> <span>Dashboard</span></a>
							</li>
							<li> 
								<a href=""><i class="fe fe-user-plus"></i> <span>Themes</span></a>
							</li>
					
						
							<li class="submenu">
								<a href="#"><i class="fe fe-document"></i> <span>Auth </span> <span class="menu-arrow"></span></a>
								<ul style="">

								
										<x-dropdown-link :href="route('profile.edit')">
											{{ __('Profile') }}
										</x-dropdown-link>
				
										<!-- Authentication -->
										<form method="POST" action="{{ route('logout') }}">
											@csrf
				
											<x-dropdown-link :href="route('logout')"
													onclick="event.preventDefault();
																this.closest('form').submit();">
												{{ __('Log Out') }}
											</x-dropdown-link>
										</form>
									
									{{-- <li><a href="{{ route('skills.index')}}">Skills</a></li> --}}
									<li><a href=""></a></li>
								</ul>
							</li>

						</ul>
					</div>
                </div>
            </div>