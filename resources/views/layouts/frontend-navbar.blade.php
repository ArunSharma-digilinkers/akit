<nav class="navbar navbar-expand-lg navbar-light bg-light dd-nav fixed-top">
    <div class="container">
        <a class="navbar-brand" href="">
            <img src="img/logo.png" alt="" class="img-fluid logo-img">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url("about-us")}}">About Us</a>
                </li>
                <!-- Services Dropdown -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Our Services
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{url('cloud-solution')}}">Cloud Solution</a></li>
                        <li><a class="dropdown-item" href="{{url('cyber-security')}}">Cyber Security</a></li>
                        <li><a class="dropdown-item" href="{{url('data-center')}}">Data center Solution</a></li>
                        <li><a class="dropdown-item" href="{{url('infrastructure')}}">Infrastructure Modernization</a></li>
                        <li><a class="dropdown-item" href="{{url('ups-power')}}">UPS & Power Solution</a></li>
                        <li><a class="dropdown-item" href="{{url('integration-deployment')}}">Integration Deployment</a></li>
                        <!-- Add more services if needed -->
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url("contact-us")}}">Contact us</a>
                </li>
                @if (Auth::check())
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">{{ Auth::user()->name }}</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('profile.edit') }}">{{ __('Profile') }}</a></li>
                            <li>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                        {{ __('Log Out') }}
                                    </a>
                                </form>
                            </li>
                        </ul>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>
