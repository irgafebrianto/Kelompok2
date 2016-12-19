<!-- start: header -->
            <header class="header">
                <div class="logo-container">
                    <a href="../" class="logo">
                        <img src="{{asset('assets/admin/images/logo.png')}}" height="35" alt="Porto Admin" />
                    </a>
                    <div class="visible-xs toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html" data-fire-event="sidebar-left-opened">
                        <i class="fa fa-bars" aria-label="Toggle sidebar"></i>
                    </div>
                </div>
            
                <!-- start: search & user box -->
                <div class="header-right">
            
                    <form action="pages-search-results.html" class="search nav-form">
                        <div class="input-group input-search">
                            <input type="text" class="form-control" name="q" id="q" placeholder="Search...">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
                            </span>
                        </div>
                    </form>
                
                    <span class="separator"></span>
            
                    <div id="userbox" class="userbox">
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>
                    @else

                        <a href="#" data-toggle="dropdown">
                            <figure class="profile-picture">
                                <img src="{{asset('assets/admin/images/user.jpg')}}" alt="" class="img-circle" data-lock-picture="{{asset('assets/admin/images/user.jpg')}}" />
                            </figure>
                            <div class="profile-info" data-lock-name="{{ Auth::user()->name }}" data-lock-email={{ Auth::user()->email }}>
                                <span class="name">{{ Auth::user()->name }}</span>
                            </div>
            
                            <i class="fa custom-caret"></i>
                        </a>
            
                        <div class="dropdown-menu">
                            <ul class="list-unstyled">
                                <li class="divider"></li>
                                <li>
                                    <a role="menuitem" tabindex="-1" href="#"><i class="fa fa-user"></i>{{ Auth::user()->email }}</a>
                                </li>
                                <li>
                                    <a role="menuitem" tabindex="-1" href="#" data-lock-screen="true"><i class="fa fa-lock"></i> Lock Screen</a>
                                </li>
                                <li>

                                    <a role="menuitem" tabindex="-1" href="{{ url('/logout') }}"
                                        onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();"><i class="fa fa-power-off"></i>
                                        Logout
                                    </a>
                                     <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>

                                </li>
                            </ul>
                        </div>
                        @endif
                    </div>
                </div>
                <!-- end: search & user box -->
            </header>
            <!-- end: header -->
