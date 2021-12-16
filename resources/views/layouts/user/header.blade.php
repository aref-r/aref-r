<div class="header">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">

                @if (Auth::user()->lang == 'en')
                    <nav class="navbar">

                        <div class="header-search d-flex align-items-center">
                            {{-- <a class="brand-logo me-3" href="index.html">
                                <img src="{{ asset('/images/logo.png') }}" alt="" width="30">
                            </a>
                            <form action="#">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search">
                                    <div class="input-group-append">
                                        <span class="input-group-text" id="basic-addon2"><i
                                                class="fa fa-search"></i></span>
                                    </div>
                                </div>
                            </form> --}}
                        </div>


                        <div class="dashboard_log">
                            <div class="d-flex align-items-center">
                                <div class="profile_log dropdown">
                                    <div class="user" data-toggle="dropdown">
                                        <span class="thumb"><i class="mdi mdi-account"></i></span>
                                        <span class="name">{{ auth()->user()->name }}</span>
                                        <span class="arrow"><i class="la la-angle-down"></i></span>
                                    </div>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a href="accounts.html" class="dropdown-item">
                                            <i class="mdi mdi-account"></i> Account
                                        </a>
                                        <a href="history.html" class="dropdown-item">
                                            <i class="la la-book"></i> History
                                        </a>
                                        <a href="settings.html" class="dropdown-item">
                                            <i class="la la-cog"></i> Setting
                                        </a>
                                        <a href="lock.html" class="dropdown-item">
                                            <i class="la la-lock"></i> Lock
                                        </a>
                                        <a onclick="logoutForm()" class="dropdown-item logout">
                                            <i class="la la-sign-out"></i> Logout
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            style="display: none;">
                                            @csrf
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </nav>
                @elseif (Auth::user()->lang == 'fa')
                    <nav class="navbar">
                        <div class="header-search d-flex align-items-center">
                            <a class="brand-logo ms-3" href="index.html">
                                <img src="./images/logo.png" alt="" width="30">
                            </a>
                            <form action="#">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="جستجو...">
                                    <div class="input-group-append">
                                        <span class="input-group-text" id="basic-addon2">
                                            <i class="fa fa-search"></i></span>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="dashboard_log">
                            <div class="d-flex align-items-center">
                                <div class="profile_log dropdown">
                                    <div class="user" data-toggle="dropdown">
                                        <span class="thumb"><i class="mdi mdi-account"></i></span>
                                        <span class="name">پی پولر</span>
                                        <span class="arrow"><i class="la la-angle-down"></i></span>
                                    </div>
                                    <div class="dropdown-menu dropdown-menu-left">
                                        <a href="accounts.html" class="dropdown-item">
                                            <i class="mdi mdi-account"></i> حساب من
                                        </a>
                                        <a href="history.html" class="dropdown-item">
                                            <i class="la la-book"></i> تاریخچه تراکنش ها
                                        </a>
                                        <a href="settings.html" class="dropdown-item">
                                            <i class="la la-cog"></i> پشتیبانی
                                        </a>
                                        <a href="lock.html" class="dropdown-item">
                                            <i class="la la-lock"></i> تنظیمات
                                        </a>
                                        <a onclick="logoutForm()" class="dropdown-item logout">
                                            <i class="la la-sign-out"></i> خروج از حساب
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            style="display: none;">
                                            @csrf
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </nav>
                @endif
            </div>
        </div>
    </div>
</div>

@if (Auth::user()->lang == 'en')
<div class="page_title">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="page_title-content">
                    <p>Welcome Back,
                        <span>
                            @isset(Auth::user()->name)
                            {{Auth::user()->name}}
                            @else
                                {{Auth::user()->email}}
                            @endisset
                        </span>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@elseif (Auth::user()->lang == 'fa')
<div class="page_title">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="page_title-content">
                    <p>خوش آمدید
                        <span> 
                            @isset(Auth::user()->name)
                            {{Auth::user()->name}}
                            @else
                                {{Auth::user()->email}}
                            @endisset
                        </span>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endif
<script>
    function logoutForm() {
        event.preventDefault();
        document.getElementById('logout-form').submit();
    }
</script>
