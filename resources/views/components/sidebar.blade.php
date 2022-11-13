<div class="dlabnav">
    <div class="dlabnav-scroll">
        <ul class="metismenu" id="menu">
            <li class="dropdown header-profile">
                <a class="nav-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown">
                    <img src="{{ asset('images/profile/pic1.jpg') }}" width="20" alt="" />
                    <div class="header-info ms-3">
                        <span class="font-w600 ">Hi, <b>{{$user->name}}</b></span>
                        <small class="text-end font-w400">{{ $user->email }}</small>
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="profile_dropdown">
                    <a href="{{ route('profile') }}" class="dropdown-item ai-icon">
                        {{-- <svg id="icon-user1" xmlns="http://www.w3.org/2000/svg" class="text-primary" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                            <circle cx="12" cy="7" r="4"></circle>
                        </svg> --}}
                        <i class="fa-solid fa-user"></i>
                        <span class="ms-2">Profile </span>
                    </a>
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <a class="dropdown-item ai-icon" href="#!" onclick="event.preventDefault();this.closest('form').submit();">
                            <i class="fa-solid fa-arrow-right-from-bracket"></i>
                            <span class="ms-2">Logout </span>
                        </a>
                    </form>
                    {{-- <a href="{{ route('logout') }}" class="dropdown-item ai-icon">
                    <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                        <polyline points="16 17 21 12 16 7"></polyline>
                        <line x1="21" y1="12" x2="9" y2="12"></line>
                    </svg>

                    </a> --}}
                </div>
            </li>
            <li>
                <a href="{{ route('dashboard') }}" class="ai-icon" aria-expanded="false">
                    <i class="flaticon-025-dashboard"></i>
                    <span class="nav-text">Dashboard</span>
                </a>
            </li>
            <li>
                <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="bi-signpost-2-fill"></i>
                    <span class="nav-text">Swing BB</span>
                </a>
                <ul id="swing_strategy" aria-expanded="false">
                    <li><a href="{{ route('breakout-strategy') }}"><i class="las la-heartbeat scale5 me-3"></i> Live Trade</a></li>
                    <li><a href="{{ route('history-analysis') }}"><i class="las la-history scale5 me-3"></i> Historical Analysis</a></li>
                    <!-- <li><a href="{{ route('symbol-settings') }}"><i class="las la-cogs scale5 me-3"></i> Symbol Settings</a></li> -->
                </ul>

            </li>
            <li>
                <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="bi-signpost-2-fill"></i>
                    <span class="nav-text">BreakOut Strategy</span>
                </a>
                <ul id="breakout_strategy" aria-expanded="false">
                    <li><a href="{{ route('bos-breakout-strategy') }}"><i class="las la-heartbeat scale5 me-3"></i> Live Trade</a></li>
                    <li><a href="{{ route('bos-history-analysis') }}"><i class="las la-history scale5 me-3"></i> Historical Analysis</a></li>
                    <li><a href="{{ route('symbol-settings') }}"><i class="las la-cogs scale5 me-3"></i> Symbol Settings</a></li>
                </ul>

            </li>
        </ul>
        <div class="copyright">
            <p><strong>Code3 Admin Dashboard</strong> © 2022 All Rights Reserved</p>
            <p class="fs-12">Made with by Code3 Team</p>
        </div>
    </div>
</div>