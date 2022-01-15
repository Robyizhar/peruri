<!-- Top Bar Start -->
<div class="topbar">

    <!-- LOGO -->
    <div class="topbar-left">
        <div class="text-center">
            <a href="index.html" class="logo"><i class="icon-magnet icon-c-logo"></i><span></span></a>
            <!-- Image Logo here -->
             <a href="{{url('/home')}}" class="logo">
            {{-- <i class="icon-c-logo"> <img src="assets/images/feruri.png" height="42"/> </i> --}}
            <span><img src="{{asset('assets/images/logo1.png')}}" height="50px"/></span>
            </a>
          
        </div>
    </div>

    <!-- Button mobile view to collapse sidebar menu -->
    <nav class="navbar-custom">
        
        <ul class="list-inline float-right mb-0">
            
            <li class="list-inline-item notification-list">
                <a class="nav-link waves-light waves-effect" href="#" id="btn-fullscreen">
                    <i class="dripicons-expand noti-icon"></i>
                </a>
                 
            </li>

          

            <li class="list-inline-item dropdown notification-list">
                <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown" href="#" role="button"
                   aria-haspopup="false" aria-expanded="false">
                <img src="{{ url('/assets/images/users/avatar-1.jpg') }}" alt="user" class="rounded-circle">
                </a>
                <div class="dropdown-menu dropdown-menu-right profile-dropdown " aria-labelledby="Preview">
                    <!-- item-->
                    <div class="">
                        <h5 class="text-overflow"><small>{{ Auth::user()->name }}</small> </h5>
                    </div>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="md md-account-circle"></i> <span>Profile</span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="md md-settings"></i> <span>Settings</span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="zmdi zmdi-lock-open"></i> <span>Lock Screen</span>
                    </a>

                    <!-- item-->
                    <a class="dropdown-item notify-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>

                </div>
            </li>

        </ul>

        <ul class="list-inline menu-left mb-0">
            <li class="float-left">
                <button class="button-menu-mobile open-left waves-light waves-effect">
                    <i class="dripicons-menu"></i>
                </button>
            </li>
            <div class="row">
                <div class="col">
                    <h1 class="d-flex justify-content-center" style="color: #174581">WEB INFORMATION GAP</h1>

                </div>
            </div>
        </ul>
         
    </nav>

</div>
<!-- Top Bar End -->