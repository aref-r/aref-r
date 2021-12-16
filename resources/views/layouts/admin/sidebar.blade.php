<div class="sidebar">
    <a class="brand-logo" href="index.html">
        <img src="./images/logo.png" alt="">
        </a>
    <div class="menu">
        <ul>
            <li>
                <a href="index.html">
                    <span><i class="mdi mdi-view-dashboard"></i></span>
                    <span class="nav-text">Home</span>
                </a>
            </li>
            <li><a href="buy-sell.html">
                    <span><i class="mdi mdi-repeat"></i></span>
                    <span class="nav-text">Exchange</span>
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
            <li><a href="{{ route('admin.ticket.index') }}">
                    <span><i class="mdi mdi-message-bulleted"></i></span>
                    <span class="nav-text">messages</span>
                    @isset($openTickets)
                    @if ($openTickets > 0)
                            <span class="bubble">
                                {{ $openTickets }}
                            </span>
                    @endif
                    @endisset
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
