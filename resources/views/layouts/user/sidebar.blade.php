@if (Auth::user()->lang == 'en')
    <div class="sidebar">
        <a class="brand-logo" href="index.html">
            <img src="{{ asset('/images/logo.png') }}" alt="">
        </a>
        <div class="menu">
            <ul>
                <li>
                    <a href="/home">
                        <span><i class="mdi mdi-view-dashboard"></i></span>
                        <span class="nav-text">Home</span>
                    </a>
                </li>
                <li><a href="{{ route('user.order.index') }}">
                        <span><i class="mdi mdi-arrange-bring-forward"></i></span>
                        <span class="nav-text">Orders</span>
                    </a>
                </li>
                <li><a href="{{ route('user.offer.index') }}">
                        <span><i class="mdi mdi-arrange-send-backward"></i></span>
                        <span class="nav-text">Offers</span>
                    </a>
                </li>
                <li><a href="{{ route('user.account') }}">
                        <span><i class="mdi mdi-account"></i></span>
                        <span class="nav-text">Account</span>
                    </a>
                </li>
                <li><a href="{{ route('user.account.show') }}">
                        <span><i class="mdi mdi-settings"></i></span>
                        <span class="nav-text">Setting</span>
                    </a>
                </li>
                <li><a href="{{ route('user.ticket.index') }}">
                        <span><i class="mdi mdi-headset"></i></span>
                        <span class="nav-text">support</span>
                        @if (Auth::user()->unreadnotifications->count() > 0)
                            <span class="bubble">
                                {{ Auth::user()->unreadnotifications->count() }}
                            </span>
                        @endif
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
            <img src="{{ asset('/images/logo.png') }}" alt="">
           </a>
        <div class="menu">
            <ul>
                <li>
                    <a href="/home">
                        <span><i class="mdi mdi-view-dashboard"></i></span>
                        <span class="nav-text">داشبورد</span>
                    </a>
                </li>
                <li><a href="{{ route('user.order.index') }}">
                        <span><i class="mdi mdi-arrange-bring-forward"></i></span>
                        <span class="nav-text">سفارشات من</span>
                    </a>
                </li>
                <li><a href="{{ route('user.offer.index') }}">
                        <span><i class="mdi mdi-arrange-send-backward"></i></span>
                        <span class="nav-text">پیشنهادات من</span>
                    </a>
                </li>
                <li><a href="{{ route('user.account') }}">
                        <span><i class="mdi mdi-account"></i></span>
                        <span class="nav-text">حساب من</span>
                    </a>
                </li>
                <li><a href="{{ route('user.account.show') }}">
                        <span><i class="mdi mdi-settings"></i></span>
                        <span class="nav-text">تنظیمات</span>
                    </a>
                </li>
                <li><a href="{{ route('user.ticket.index') }}">
                        <span><i class="mdi mdi-headset"></i></span>
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
