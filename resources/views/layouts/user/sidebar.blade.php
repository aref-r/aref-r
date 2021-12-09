@if (Auth::user()->lang == 'en')
    <div class="sidebar">
        <a class="brand-logo" href="index.html">
            <img src="{{ asset('/images/logo.png') }}" alt="">
            <span>Pay Pooler </span></a>
        <div class="menu">
            <ul>
                <li>
                    <a href="{{ route('user.dashboard') }}">
                        <span><i class="mdi mdi-view-dashboard"></i></span>
                        <span class="nav-text">Home</span>
                    </a>
                </li>
                <li><a href="{{ route('user.order.create') }}">
                        <span><i class="mdi mdi-repeat"></i></span>
                        <span class="nav-text">Exchange</span>
                    </a>
                </li>
                <li><a href="{{ route('user.history') }}">
                        <span><i class="mdi mdi-history"></i></span>
                        <span class="nav-text">History</span>
                    </a>
                </li>
                <li><a href="{{ route('user.account') }}">
                        <span><i class="mdi mdi-account"></i></span>
                        <span class="nav-text">Account</span>
                    </a>
                </li>
                <li><a href="{{ route('user.setting.index') }}">
                        <span><i class="mdi mdi-settings"></i></span>
                        <span class="nav-text">Setting</span>
                    </a>
                </li>
                <li><a href="{{ route('user.ticket.index') }}">
                        <span><i class="mdi mdi-ticket"></i></span>
                        <span class="nav-text">support</span>
                    </a>
                </li>
            </ul>
        </div>

        <div class="sidebar-footer">
            <div class="social">
                <a href="#"><i class="fa fa-youtube-play"></i></a>
                <a href="#"><i class="fa fa-instagram"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-facebook"></i></a>
            </div>
            <div class="copy_right">
                ©
                <script>
                    var CurrentYear = new Date().getFullYear()
                    document.write(CurrentYear)
                </script> Quixlab
            </div>
        </div>

    </div>
@elseif(Auth::user()->lang == 'fa')
    {{-- persian lang --}}


    <div class="sidebar">
        <a class="brand-logo" href="index.html">
            <img src="./images/logo.png" alt="">
            <span>PayPooler</span></a>
        <div class="menu">
            <ul>
                <li>
                    <a href="{{ route('user.dashboard') }}">
                        <span><i class="mdi mdi-view-dashboard"></i></span>
                        <span class="nav-text">داشبورد</span>
                    </a>
                </li>
                <li><a href="{{ route('user.order.create') }}">
                        <span><i class="mdi mdi-repeat"></i></span>
                        <span class="nav-text">تبادل</span>
                    </a>
                </li>
                <li><a href="{{ route('user.history') }}">
                        <span><i class="mdi mdi-history"></i></span>
                        <span class="nav-text">تاریخچه تراکنش ها</span>
                    </a>
                </li>
                <li><a href="{{ route('user.account') }}">
                        <span><i class="mdi mdi-account"></i></span>
                        <span class="nav-text">حساب من</span>
                    </a>
                </li>
                <li><a href="{{ route('user.setting.index') }}">
                        <span><i class="mdi mdi-settings"></i></span>
                        <span class="nav-text">تنظیمات</span>
                    </a>
                </li>
                <li><a href="{{ route('user.ticket.index') }}">
                        <span><i class="mdi mdi-ticket"></i></span>
                        <span class="nav-text">پشتیبانی</span>
                    </a>
                </li>

            </ul>
        </div>

        <div class="sidebar-footer">
            <div class="social">
                <a href="#"><i class="fa fa-youtube-play"></i></a>
                <a href="#"><i class="fa fa-instagram"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-facebook"></i></a>
            </div>
            <div class="copy_right">
                © همه حقوق سایت
                <script>
                    var CurrentYear = new Date().getFullYear()
                    document.write(CurrentYear)
                </script> محفوظ است
            </div>
        </div>

    </div>
@endif
