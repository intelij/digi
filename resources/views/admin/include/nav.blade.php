			<div class="site-sidebar">
				<div class="custom-scroll custom-scroll-light">
					<ul class="sidebar-menu">
						<li class="menu-title">Main</li>
						<li>
							<a href="{{route('admin.dashboard')}}" class="waves-effect  waves-light">
								<span class="s-icon"><i class="ti-anchor"></i></span>
								<span class="s-text">Dashboard</span>
							</a>
						</li>
						
						<li class="menu-title">Members</li>
						<li class="with-sub">
							<a href="#" class="waves-effect  waves-light">
								<span class="s-caret"><i class="fa fa-angle-down"></i></span>
								<span class="s-icon"><i class="ti-package"></i></span>
								<span class="s-text">Users</span>
							</a>
							<ul>
								<li><a href="{{route('admin.user.index')}}">List Users</a></li>
								<li><a href="{{route('admin.user.create')}}">Add New User</a></li>
							</ul>
						</li>
						<li class="with-sub">
							<a href="#" class="waves-effect  waves-light">
								<span class="s-caret"><i class="fa fa-angle-down"></i></span>
								<span class="s-icon"><i class="ti-paint-bucket"></i></span>
								<span class="s-text">Providers</span>
							</a>
							<ul>
								<li><a href="{{route('admin.provider.index')}}">List Providers</a></li>
								<li><a href="{{route('admin.provider.create')}}">Add New Provider</a></li>
							</ul>
						</li>
						<li class="menu-title">Details</li>
						<li class="with-sub">
							<a href="#" class="waves-effect  waves-light">
								<span class="s-caret"><i class="fa fa-angle-down"></i></span>
								<span class="s-icon"><i class="ti-pencil-alt"></i></span>
								<span class="s-text">Map</span>
							</a>
							<ul>
								<li><a href="{{route('admin.user.map')}}">User Locations</a></li>
								<li><a href="{{route('admin.provider.map')}}">Provider Locations</a></li>
							</ul>
						</li>
						<li class="with-sub">
							<a href="#" class="waves-effect  waves-light">
								<span class="s-caret"><i class="fa fa-angle-down"></i></span>
								<span class="s-icon"><i class="ti-view-grid"></i></span>
								<span class="s-text">Ratings & Reviews</span>
							</a>
							<ul>
								<li><a href="{{route('admin.user-review.index')}}">User Ratings</a></li>
								<li><a href="{{route('admin.provider-review.index')}}">Provider Ratings</a></li>
							</ul>
						</li>
						<li class="menu-title">Requests</li>
						<li>
							<a href="{{route('admin.request.history')}}" class="waves-effect  waves-light">
								<span class="s-icon"><i class="ti-palette"></i></span>
								<span class="s-text">Request History</span>
							</a>
						</li>
						<li>
							<a href="{{route('admin.scheduled.request')}}" class="waves-effect  waves-light">
								<span class="s-icon"><i class="ti-palette"></i></span>
								<span class="s-text">Scheduled Requests</span>
							</a>
						</li>
						<li class="menu-title">General</li>
						<li class="with-sub">
							<a href="#" class="waves-effect  waves-light">
								<span class="s-caret"><i class="fa fa-angle-down"></i></span>
								<span class="s-icon"><i class="ti-menu-alt"></i></span>
								<span class="s-text">Service Types</span>
							</a>
							<ul>
								<li><a href="{{route('admin.service.index')}}">List Service Types</a></li>
								<li><a href="{{route('admin.service.create')}}">Add New Service Type</a></li>
							</ul>
						</li>
						<li class="with-sub">
							<a href="#" class="waves-effect  waves-light">
								<span class="s-caret"><i class="fa fa-angle-down"></i></span>
								<span class="s-icon"><i class="ti-gallery"></i></span>
								<span class="s-text">Documents</span>
							</a>
							<ul>
								<li><a href="{{route('admin.document.index')}}">List Documents</a></li>
								<li><a href="{{route('admin.document.create')}}">Add New Document</a></li>
							</ul>
						</li>
						
						<li class="menu-title">Payment Details</li>
						<li>
							<a href="{{route('admin.payment')}}" class="waves-effect  waves-light">
								<span class="s-icon"><i class="ti-layout-tab"></i></span>
								<span class="s-text">Payment History</span>
							</a>
						</li>
						<li>
							<a href="{{route('admin.payment.setting')}}" class="waves-effect  waves-light">
								<span class="s-icon"><i class="ti-palette"></i></span>
								<span class="s-text">Payment Settings</span>
							</a>
						</li>
						<li class="menu-title">Settings</li>
						<li>
							<a href="{{route('admin.setting')}}" class="waves-effect  waves-light">
								<span class="s-icon"><i class="ti-palette"></i></span>
								<span class="s-text">Site Settings</span>
							</a>
						</li>
						
						<li class="menu-title">Others</li>
						<li>
							<a href="{{route('admin.help')}}" class="waves-effect  waves-light">
								<span class="s-icon"><i class="ti-palette"></i></span>
								<span class="s-text">Help</span>
							</a>
						</li>
						<li class="menu-title">Account</li>
						<li>
							<a href="{{route('admin.profile')}}" class="waves-effect  waves-light">
								<span class="s-icon"><i class="ti-palette"></i></span>
								<span class="s-text">Account Settings</span>
							</a>
						</li>
						<li>
							<a href="{{route('admin.password')}}" class="waves-effect  waves-light">
								<span class="s-icon"><i class="ti-palette"></i></span>
								<span class="s-text">Change Password</span>
							</a>
						</li>
						<li class="compact-hide">
							<a href="{{ url('/admin/logout') }}"
                                        onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
								<span class="s-icon"><i class="ti-palette"></i></span>
								<span class="s-text">Logout</span>
                            </a>

                            <form id="logout-form" action="{{ url('/admin/logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
						</li>
						
						<li class="menu-title compact-hide">System usage</li>
						<li class="compact-hide">
							<div class="progress-widget progress-widget-light">
								<div class="mb-0-5">
									SSD
									<span class="float-xs-right">5 GB</span>
								</div>
								<progress class="progress progress-rounded progress-success progress-sm" value="60" max="100">100%</progress>
								<div class="mb-0-5">
									CPU
									<span class="float-xs-right">80%</span>
								</div>
								<progress class="progress progress-rounded progress-danger progress-sm mb-0-5" value="80" max="100">100%</progress>
							</div>
						</li>
						
					</ul>
				</div>
			</div>