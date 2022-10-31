<nav class="header-navbar navbar navbar-expand-lg align-items-center floating-nav navbar-light navbar-shadow">
    <div class="navbar-container d-flex content">
        <div class="bookmark-wrapper d-flex align-items-center">
            <ul class="nav navbar-nav d-xl-none">

                <li class="nav-item"><a class="nav-link menu-toggle" href="javascript:void(0);"><i class="ficon" data-feather="menu"></i></a></li>
            </ul>

        </div>
        <ul class="nav navbar-nav align-items-center ml-auto">
            <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-style"><i class="ficon" data-feather="moon"></i></a></li>


            <li class="nav-item dropdown dropdown-language">

                @if (App::getLocale() == 'ar')
                    <a class="dropdown-item" href="{{ route('language', 'en') }}" data-language="en"><i
                            class="flag-icon flag-icon-us"></i></a>
                @else

                <a class="dropdown-item" href="{{ route('language', 'ar') }}" data-language="ar"><i
                    class="flag-icon flag-icon-sa"></i></a>
                @endif

            </li>
            <li class="nav-item dropdown dropdown-user"><a class="nav-link dropdown-toggle dropdown-user-link" id="dropdown-user" href="javascript:void(0);" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="user-nav d-sm-flex d-none"><span class="user-name font-weight-bolder">{{ auth()->user()->name }}</span><span class="user-status">{{ __('models.admin') }}</span></div>
                     <span class="avatar">

                        @if (auth()->user()->img)
                         <img class="round" src="{{ asset('storage/' . auth()->user()->img) }}" alt="avatar" height="40" width="40">
                        @else
                          <img class="round" src="{{ asset('storage/admins/1.png') }}" alt="avatar" height="40" width="40">
                        @endif

                    <span class="avatar-status-online"></span></span>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-user">

                    <a class="dropdown-item" href="{{ route('admin.profile') }}">
                        <i class="mr-50" data-feather="settings"></i> {{ __('models.profile') }}
                    </a>

                    <a class="dropdown-item" href="{{ route('admin.logout') }}">
                        <i class="mr-50" data-feather="power"></i> {{ __('models.logout') }}
                    </a>
                </div>
            </li>
        </ul>
    </div>
</nav>
