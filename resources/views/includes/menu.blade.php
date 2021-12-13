
<body>
    <!-- ============================  Navigation Start =========================== -->
     <div class="navbar navbar-inverse-blue navbar">
        <!--<div class="navbar navbar-inverse-blue navbar-fixed-top">-->
          <div class="navbar-inner">
            <div class="container">
               {{-- <div class="navigation">
                 <nav id="colorNav">
                   <ul>
                    <li class="green">
                        <a href="#" class="icon-home"></a>
                        <ul>
                            <li><a href="login.html">Login</a></li>
                            <li><a href="register.html">Register</a></li>
                            <li><a href="index.html">Logout</a></li>
                        </ul>
                    </li>
                   </ul>
                 </nav>
               </div> --}}
               <a class="brand" href="{{route('home')}}"><img src="{{url('theme/images/logo.png')}}" alt="logo"></a>
               <div class="pull-right">
                  <nav class="navbar nav_bottom" role="navigation">
                <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header nav_2">
                  <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">{{ Auth::user()->name }}
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand" href="#"></a>
               </div>
               <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
                  @if( Auth::user()->user_type=='User')
                  

                    <ul class="nav navbar-nav nav_1">
                        <li><a href="{{route('home')}}">Home</a></li>
                        <li><a href="#">About</a></li>
                       
                        <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Matches<span class="caret"></span></a>
                          <ul class="dropdown-menu" role="menu">
                            <li><a href="{{url('matches-new')}}">New Matches</a></li>
                            {{-- <li><a href="{{url('matches-who-viewed-me')}}">Who Viewed my Profile</a></li>
                            <li><a href="{{url('matches-viewed-not-contacted')}}">Viewed & not Contacted</a></li>
                            <li><a href="{{url('matches-premium')}}">Premium Members</a></li>
                            <li><a href="{{url('matches-shortlisted')}}">Shortlisted Profile</a></li> --}}
                          </ul>
                        </li>
                        <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Search<span class="caret"></span></a>
                          <ul class="dropdown-menu" role="menu">
                            <li><a href="{{url('matche-preference')}}">Set Partner Preference</a></li>
                            {{-- <li><a href="search.html">Regular Search</a></li>
                            <li><a href="profile.html">Recently Viewed Profiles</a></li>
                            <li><a href="search-id.html">Search By Profile ID</a></li>
                            <li><a href="faq.html">Faq</a></li>
                            <li><a href="shortcodes.html">Shortcodes</a></li> --}}
                          </ul>
                        </li>
                        <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Messages<span class="caret"></span></a>
                          <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Inbox</a></li>
                            <li><a href="#">New</a></li>
                            <li><a href="#">Accepted</a></li>
                            <li><a href="#">Sent</a></li>
                            <li><a href="#">Upgrade</a></li>
                          </ul>
                        </li>
                        <li class="last"><a href="contact.html">Contacts </a></li>
                        @guest
                        <li class="last"><a href="{{ route('login') }}">{{ __('Login') }}</a></li>
                        @if (Route::has('register'))
                        <li class="last"><a href="{{ route('register') }}">{{ __('Register') }}</a></li>
                        @endif
                        @else

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                @if ( Auth::user()->avatar!='')
                                <img src="{{url('theme/images')}}/{{ Auth::user()->avatar }}" alt="{{ Auth::user()->name }}"
                                style="border: 1px solid #cccccc; border-radius: 5px; width: 39px; height: auto;float:left; margin-right: 7px;">
                                @else
                                <img src="{{ url('https://upload.wikimedia.org/wikipedia/commons/9/99/Sample_User_Icon.png') }}" alt="{{ Auth::user()->name }}"
                                style="border: 1px solid #cccccc; border-radius: 5px; width: 39px; height: auto;float:left; margin-right: 7px;">
                                @endif
                                {{ Auth::user()->name }} <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                              <li>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                  document.getElementById('logout-form').submit();">
                                 {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                              </li>
                            </ul>
                        </li>
                        @endguest
                    </ul>
                  @else
                  <ul class="nav navbar-nav nav_1">
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="{{url('userlist')}}">Users List</a></li>
                    <li><a href="#">Messages</a></li>

                    @guest
                        <li class="last"><a href="{{ route('login') }}">{{ __('Login') }}</a></li>
                        @if (Route::has('register'))
                        <li class="last"><a href="{{ route('register') }}">{{ __('Register') }}</a></li>
                        @endif
                        @else

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                @if ( Auth::user()->avatar!='')
                                <img src="{{url('theme/images')}}/{{ Auth::user()->avatar }}" alt="{{ Auth::user()->name }}"
                                style="border: 1px solid #cccccc; border-radius: 5px; width: 39px; height: auto;float:left; margin-right: 7px;">
                                @else
                                <img src="{{ url('https://upload.wikimedia.org/wikipedia/commons/9/99/Sample_User_Icon.png') }}" alt="{{ Auth::user()->name }}"
                                style="border: 1px solid #cccccc; border-radius: 5px; width: 39px; height: auto;float:left; margin-right: 7px;">
                                @endif
                                {{ Auth::user()->name }} <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                              <li>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                  document.getElementById('logout-form').submit();">
                                 {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                              </li>
                            </ul>
                        </li>
                        @endguest
                    </ul>

                  @endif

                 </div><!-- /.navbar-collapse -->
                </nav>
               </div> <!-- end pull-right -->
              <div class="clearfix"> </div>
            </div> <!-- end container -->
          </div> <!-- end navbar-inner -->
        </div> <!-- end navbar-inverse-blue -->
    <!-- ============================  Navigation End ============================ -->
