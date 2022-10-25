<div class="sidebar min-vh-100" >

    <ul>
        <li class="my-3">
            <div class="d-flex justify-content-between">
                <a href="{{route('home')}}" >
                    <img src="{{asset('images/logos/logo.PNG')}}" class="brand-logo" height="50" alt="">
                </a>
                <button class="btn btn-light d-block d-lg-none" id="hideSidebar">
                    <i class="fas fa-times"></i>
                </button>
            </div>
        </li>
        <li class="sidebar-spacer"></li>
        <li>
            <x-side-bar-link name="Home" link="{{route('home')}}" icon="fa-home"/>
        </li>
        <li>
            <x-side-bar-link name="Frame" link="{{route('frame')}}"/>
        </li>

        <li class="sidebar-spacer"></li>
        <li>
            <x-side-bar-title title="Sample Menu Title"/>
        </li>
        <li>
            <x-side-bar-link icon="fa-plus-circle" />
        </li>
        <li>
            <x-side-bar-link icon="fa-list" />
        </li>
        <li class="sidebar-spacer"></li>
        <li>
            <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" class="btn btn-outline-primary w-100">
                <i class="fas fa-unlock"></i> Log Out
            </a>
        </li>

    </ul>
</div>
