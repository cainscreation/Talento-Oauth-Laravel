

    <div id="app">
        <nav class="navbar navbar-expand-md navbar-primary bg-dark shadow-sm">
          <div class="sidebar-toggle-box">
            <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
          </div>
            <div class="container">
              
                <h4>
                <a class="navbar-brand text-white" style="font-weight: bold;" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a></h4>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
               

                <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                   
                    <ul class="navbar-nav ml-auto ">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="btn btn-dark" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="btn btn-dark" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="">
                                

                                    <a class="btn btn-danger" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>      
    </div>
        <aside>
          <div id="sidebar" class="nav-collapse">
            <!-- sidebar menu start-->
            <ul class="sidebar-menu" id="nav-accordion">
              <p class="centered"><a href="profile.html"><img src="img/ui-sam.jpg" class="img-circle" width="80"></a></p>
              @guest
                <h5 class="centered text-white">Guest Login</h5>
              @endguest
              @auth
                <h5 class="centered text-white">{{ Auth::user()->name }}</h5>
              @endauth
              <li class="mt">
                <a class="active" href="/">
                  <i class="fa fa-dashboard fa-2x"></i>
                  <span>Home</span>
                  </a>
              </li>
              @role('superAdmin')
              <li class="sub-menu">
                <a href="javascript:;">
                  <i class="fa fa-desktop"></i>
                  <span>Organization</span>
                  </a>
                <ul class="sub">
                  <li><a href="/organizes">All Organization</a></li>
                  <li><a href="/organizes/create">Add New Organization</a></li>
                </ul>
              </li>
              @endrole
              @role('superAdmin|Manager')
              <li class="sub-menu">
                <a href="/all_users">
                  <i class="fa fa-cogs"></i>
                  <span>All Users</span>
                  </a>
                <ul class="sub">
                  <li><a href="/all_users">All Users</a></li>
                  {{-- <li><a href="calendar.html">Calendar</a></li> --}}
                </ul>
              </li>
              @endrole
              @role('Teacher|superAdmin')
              <li class="sub-menu">
                <a href="javascript:;">
                  <i class="fa fa-book"></i>
                  <span>Courses</span>
                  </a>
                <ul class="sub">
                  <li><a href="/courses">All Courses</a></li>
                  <li><a href="/courses/create">Create New Course</a></li>
                  <li><a href="/topics/create">Create Topics</a></li>
                </ul>
                @endrole
              </li>
              @role('superAdmin')
              <li class="sub-menu">
                <a href="/permissions">
                  <i class="fa fa-book"></i>
                  <span>Permissions</span>
                  </a>
                <ul class="sub">
                  <li><a href="/permissions">All Permissions</a></li>
                  <li><a href="/permissions/create">Create Permissions</a></li>
                </ul>
              </li>
              
              <li class="sub-menu">
                <a href="/roles">
                  <i class="fa fa-tasks"></i>
                  <span>Roles</span>
                  </a>
                <ul class="sub">
                  <li><a href="/roles">All Roles</a></li>
                  <li><a href="/roles/create">Create Roles</a></li>
                </ul>
              </li>
              @endrole
            <!-- sidebar menu end-->
          </div>
        </aside>

