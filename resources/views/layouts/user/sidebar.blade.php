<div class="sidebar">
    <a class="brand-logo" href="index.html">
        <img src="{{asset('/images/logo.png')}}" alt="">
        <span>Pay Pooler </span></a>
    <div class="menu">
        <ul>
            <li>
                <a href="/home">
                    <span><i class="mdi mdi-view-dashboard"></i></span>
                    <span class="nav-text">Home</span>
                </a>
            </li>
            <li><a href="{{ route('user.order.index') }}">
                    <span><i class="mdi mdi-repeat"></i></span>
                    <span class="nav-text">My Orders</span>
                </a>
            </li>
            <li><a href="{{ route('user.offer.index') }}">
                    <span><i class="mdi mdi-repeat"></i></span>
                    <span class="nav-text">My Offers</span>
                </a>
            </li>
            <li><a href="accounts.html">
                    <span><i class="mdi mdi-account"></i></span>
                    <span class="nav-text">Account</span>
                </a>
            </li>
            <li><a href="settings.html">
                    <span><i class="mdi mdi-settings"></i></span>
                    <span class="nav-text">Setting</span>
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
