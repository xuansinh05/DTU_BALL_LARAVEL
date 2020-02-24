
<!-- Header -->
<header class="header">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="header_content d-flex flex-row align-items-center justify-content-start">
                    <div class="logo" style="font-size: 35px; color: #ffffff">
                        DTUBALL
                    </div>

                    <div class="header_extra d-flex flex-row align-items-center justify-content-start ml-auto">
                        @if(Auth::check())
                            <div class="book_button trans_200" style="width: 200px;"><a href="#">Chào {{Auth::user()->name}}</a></div>
                            <div class="book_button trans_200"><a href="#">Lịch đặt của tôi</a></div>
                            <div class="book_button trans_200"><a href="{{ route('logout') }}">Đăng xuất</a></div>
                        @else
                        <div class="book_button trans_200"><a href="{{ route('login') }}">Đăng nhập</a></div>
                        <div class="book_button trans_200"><a href="{{ route('register') }}">Đăng kí</a></div>
                            @endif
                    </div>
                    <div class="hamburger ml-auto"><i class="fa fa-bars" aria-hidden="true"></i></div>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="clearfix"></div>
