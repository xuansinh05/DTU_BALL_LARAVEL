@extends('frontend.layouts.content')

@section('content')
<div class="super_container">
    <!-- Home -->

    <div class="home">
        <div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="source/images/index.jpg"
             data-speed="0.8"></div>
        <div class="home_container">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="home_content text-center">
                            <div class="home_title"><h1>DTUBALL</h1></div>
                            <div class="home_text">Website chuyên cung cấp thông tin sân củng như giúp các bạn tìm sân trống và đặt sân nhanh chóng nhất
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Search Box -->

{{--    <div class="search_box">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col">--}}
{{--                    <div class="search_box_container d-flex flex-row align-items-center justify-content-start">--}}
{{--                        <div class="search_form_container">--}}
{{--                            <form action="#" id="search_form" class="search_form">--}}
{{--                                <div class="d-flex flex-lg-row flex-column align-items-center justify-content-start">--}}
{{--                                    <ul class="search_form_list d-flex flex-row align-items-center justify-content-start flex-wrap">--}}
{{--                                        <li class="search_dropdown d-flex flex-row align-items-center justify-content-start">--}}
{{--                                            <span>Check in</span>--}}
{{--                                            <i class="fa fa-chevron-down ml-auto" aria-hidden="true"></i>--}}
{{--                                            <ul>--}}
{{--                                                <li>Check in item 1</li>--}}
{{--                                                <li>Check in item 2</li>--}}
{{--                                                <li>Check in item 3</li>--}}
{{--                                                <li>Check in item 4</li>--}}
{{--                                                <li>Check in item 5</li>--}}
{{--                                            </ul>--}}
{{--                                        </li>--}}
{{--                                        <li class="search_dropdown d-flex flex-row align-items-center justify-content-start">--}}
{{--                                            <span>Check out</span>--}}
{{--                                            <i class="fa fa-chevron-down ml-auto" aria-hidden="true"></i>--}}
{{--                                            <ul>--}}
{{--                                                <li>Check out item 1</li>--}}
{{--                                                <li>Check out item 2</li>--}}
{{--                                                <li>Check out item 3</li>--}}
{{--                                                <li>Check out item 4</li>--}}
{{--                                                <li>Check out item 5</li>--}}
{{--                                            </ul>--}}
{{--                                        </li>--}}
{{--                                        <li class="search_dropdown d-flex flex-row align-items-center justify-content-start">--}}
{{--                                            <span>Guests</span>--}}
{{--                                            <i class="fa fa-chevron-down ml-auto" aria-hidden="true"></i>--}}
{{--                                            <ul>--}}
{{--                                                <li>1</li>--}}
{{--                                                <li>2</li>--}}
{{--                                                <li>3</li>--}}
{{--                                                <li>4</li>--}}
{{--                                                <li>5</li>--}}
{{--                                            </ul>--}}
{{--                                        </li>--}}
{{--                                        <li class="search_dropdown d-flex flex-row align-items-center justify-content-start">--}}
{{--                                            <span>Children</span>--}}
{{--                                            <i class="fa fa-chevron-down ml-auto" aria-hidden="true"></i>--}}
{{--                                            <ul>--}}
{{--                                                <li>1</li>--}}
{{--                                                <li>2</li>--}}
{{--                                                <li>3</li>--}}
{{--                                                <li>4</li>--}}
{{--                                                <li>5</li>--}}
{{--                                            </ul>--}}
{{--                                        </li>--}}
{{--                                        <li class="search_dropdown d-flex flex-row align-items-center justify-content-start">--}}
{{--                                            <span>Rooms</span>--}}
{{--                                            <i class="fa fa-chevron-down ml-auto" aria-hidden="true"></i>--}}
{{--                                            <ul>--}}
{{--                                                <li>1</li>--}}
{{--                                                <li>2</li>--}}
{{--                                                <li>3</li>--}}
{{--                                                <li>4</li>--}}
{{--                                                <li>5</li>--}}
{{--                                            </ul>--}}
{{--                                        </li>--}}
{{--                                    </ul>--}}
{{--                                    <button class="search_button">search</button>--}}
{{--                                </div>--}}
{{--                            </form>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

    <!-- Intro -->

    <div class="intro">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="section_title_container text-center">
                        <div class="section_title"><h1>DTUBALL- Nơi cung cấp thông tin sân bóng khu vực Đà Nẵng</h1></div>
                        <div class="section_text">Là 1 trang web uy tín hàng đầu về cung cấp thông tin sân củng như địa chỉ số điện thoại hỗ trợ người dùng
                            đặt sân bóng đá ở khu vực đà nẵng

                        </div>
                    </div>
                </div>
            </div>
            <div class="row intro_row">

                <!-- Intro Image -->
                <div class="col-lg-6">
                    <div class="intro_image"><img src="source/images/intro.jpg" alt=""></div>
                </div>

                <!-- Intro Content -->
                <div class="col-lg-6 intro_col">
                    <div class="intro_content">
                        <div class="quote"><img src="source/images/quote.png" alt=""></div>
                        <div class="intro_text">
                            <p>Sân Trang Hoàng là nơi thường xuyên đội của tôi đá bóng vào hàng tuần</p>
                        </div>
                        <div class="intro_author d-flex flex-row align-items-center justify-content-start">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Room -->

    <div class="room d-flex flex-lg-row flex-column align-items-start justify-content-start">
        <div class="room_content">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="room_title">
                            <div class="section_title_container_2">
                                <div class="section_title"><h1>Sân Trang Hoàng</h1></div>
                            </div>
                            <div class="room_price">From <span>200k</span>/giờ</div>
                        </div>
                        <div class="room_list">
                            <ul>
                                <li class="d-flex flex-row align-items-start justify-content-start">
                                    <div>
                                        <div>Loại sân</div>
                                    </div>
                                    <div>Sân 5</div>
                                </li>
                                <li class="d-flex flex-row align-items-start justify-content-start">
                                    <div>
                                        <div>Độ rộng sân</div>
                                    </div>
                                    <div>55m²</div>
                                </li>
                                <li class="d-flex flex-row align-items-start justify-content-start">
                                    <div>
                                        <div>Khu vực</div>
                                    </div>
                                    <div>Quận Hải Châu</div>
                                </li>
                            </ul>
                        </div>
                        <div class="button room_button trans_200"><a href="#">Đặt sân ngay</a></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="room_image">
            <div class="background_image" style="background-image:url(source/images/room_1.jpg)"></div>
        </div>
    </div>

    <!-- Facilities -->

    <div class="facilities">
        <div class="container">
            <div class="section_title_container text-center">
                <div class="section_title" ></div> <h1 style="margin-bottom: 100px" >Tại sao phải chọn DTUBALL</h1>
            </div>
            <div class="row icon_box_row">


                <!-- Icon Box -->
                <div class="col-lg-4">
                    <div class="icon_box text-center">
                        <div class="icon_box_icon"><img src="source/images/icon_1.svg"
                                                        alt="https://www.flaticon.com/authors/monkik"></div>
                        <div class="icon_box_title"><h2>Chất lượng</h2></div>
                        <div class="icon_box_text">
                            <p>Cung cấp thông tin các sân chất lượng nhất khu vực đà nẵng</p>
                        </div>
                    </div>
                </div>

                <!-- Icon Box -->
                <div class="col-lg-4">
                    <div class="icon_box text-center">
                        <div class="icon_box_icon"><img src="source/images/icon_2.svg"
                                                        alt="https://www.flaticon.com/authors/monkik"></div>
                        <div class="icon_box_title"><h2>Uy tín</h2></div>
                        <div class="icon_box_text">
                            <p>Cung cấp thông tin các sân chất lượng nhất khu vực đà nẵng</p>
                        </div>
                    </div>
                </div>

                <!-- Icon Box -->
                <div class="col-lg-4">
                    <div class="icon_box text-center">
                        <div class="icon_box_icon"><img src="source/images/icon_3.svg"
                                                        alt="https://www.flaticon.com/authors/monkik"></div>
                        <div class="icon_box_title"><h2>Quản lý dễ dàng</h2></div>
                        <div class="icon_box_text">
                            <p>Cung cấp thông tin các sân chất lượng nhất khu vực đà nẵng</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Gallery -->

    <div class="gallery" style="margin-bottom: 100px">
        <div class="gallery_slider_container">

            <!-- Gallery Slider -->
            <div class="owl-carousel owl-theme gallery_slider">

                <!-- Slide -->
                <div class="owl-item gallery_item">
                    <a class="colorbox" href="source/images/gallery_1.jpg">
                        <div class="background_image" style="background-image:url(source/images/gallery_1.jpg)"></div>
                    </a>
                    <div class="gallery_overlay trans_200 d-flex flex-column align-items-center justify-content-center">
                        <div>+</div>
                    </div>
                </div>

                <!-- Slide -->
                <div class="owl-item gallery_item">
                    <a class="colorbox" href="source/images/gallery_2.jpg">
                        <div class="background_image" style="background-image:url(source/images/gallery_2.jpg)"></div>
                    </a>
                    <div class="gallery_overlay trans_200 d-flex flex-column align-items-center justify-content-center">
                        <div>+</div>
                    </div>
                </div>

                <!-- Slide -->
                <div class="owl-item gallery_item">
                    <a class="colorbox" href="source/images/gallery_3.jpg">
                        <div class="background_image" style="background-image:url(source/images/gallery_3.jpg)"></div>
                    </a>
                    <div class="gallery_overlay trans_200 d-flex flex-column align-items-center justify-content-center">
                        <div>+</div>
                    </div>
                </div>

{{--                <!-- Slide -->--}}
{{--                <div class="owl-item gallery_item">--}}
{{--                    <a class="colorbox" href="source/images/gallery_4.jpg">--}}
{{--                        <div class="background_image" style="background-image:url(source/images/gallery_4.jpg)"></div>--}}
{{--                    </a>--}}
{{--                    <div class="gallery_overlay trans_200 d-flex flex-column align-items-center justify-content-center">--}}
{{--                        <div>+</div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <!-- Slide -->--}}
{{--                <div class="owl-item gallery_item">--}}
{{--                    <a class="colorbox" href="source/images/gallery_5.jpg">--}}
{{--                        <div class="background_image" style="background-image:url(source/images/gallery_5.jpg)"></div>--}}
{{--                    </a>--}}
{{--                    <div class="gallery_overlay trans_200 d-flex flex-column align-items-center justify-content-center">--}}
{{--                        <div>+</div>--}}
{{--                    </div>--}}
{{--                </div>--}}

            </div>
        </div>
    </div>

    <!-- Newsletter -->

{{--    <div class="newsletter">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col">--}}
{{--                    <div class="section_title_container_2">--}}
{{--                        <div class="section_title"><h1>Our Newsletter</h1></div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="row newsletter_row">--}}

{{--                <!-- Newsletter Content -->--}}
{{--                <div class="col-lg-6">--}}
{{--                    <div class="newsletter_content">--}}
{{--                        <div class="newsletter_text">--}}
{{--                            <p>In vitae nisi aliquam, scelerisque leo a, volutpat sem. Vivamus rutrum dui fermentum eros--}}
{{--                                hendrerit, id lobortis leo volutpat. Maecenas sollicitudin est in libero pretium--}}
{{--                                interdum.</p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <!-- Newsletter Form -->--}}
{{--                <div class="col-lg-6 newsletter_col">--}}
{{--                    <form action="#" class="newsletter_form" id="newsletter_form">--}}
{{--                        <input type="email" class="newsletter_input" placeholder="Your email" required="required">--}}
{{--                        <button class="newsletter_button">subscribe</button>--}}
{{--                    </form>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

    <!-- Contact -->

{{--    <div class="contact">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}

{{--                <!-- Contact Map -->--}}
{{--                <div class="col-xl-6">--}}
{{--                    <div class="contact_map_container">--}}

{{--                        <!-- Contact Map -->--}}
{{--                        <div class="contact_map">--}}

{{--                            <!-- Google Map -->--}}
{{--                            <div class="map">--}}
{{--                                <div id="google_map" class="google_map">--}}
{{--                                    <div class="map_container">--}}
{{--                                        <div id="map"></div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                        </div>--}}

{{--                        <!-- Contact Info Box -->--}}
{{--                        <div class="contact_info_box d-flex flex-column align-items-center justify-content-center">--}}
{{--                            <ul class="contact_info_list">--}}
{{--                                <li class="d-flex flex-row align-items-start justify-content-start">--}}
{{--                                    <div>--}}
{{--                                        <div--}}
{{--                                            class="contact_info_icon d-flex flex-column align-items-center justify-content-center">--}}
{{--                                            <img src="source/images/placeholder.png" alt=""></div>--}}
{{--                                    </div>--}}
{{--                                    <div class="contact_info_text">1481 Creekside Lane Avila Beach, CA 931</div>--}}
{{--                                </li>--}}
{{--                                <li class="d-flex flex-row align-items-center justify-content-start">--}}
{{--                                    <div>--}}
{{--                                        <div--}}
{{--                                            class="contact_info_icon d-flex flex-column align-items-center justify-content-center">--}}
{{--                                            <img src="source/images/smartphone.png" alt=""></div>--}}
{{--                                    </div>--}}
{{--                                    <div class="contact_info_text">+53 345 7953 32453</div>--}}
{{--                                </li>--}}
{{--                                <li class="d-flex flex-row align-items-center justify-content-start">--}}
{{--                                    <div>--}}
{{--                                        <div--}}
{{--                                            class="contact_info_icon d-flex flex-column align-items-center justify-content-center">--}}
{{--                                            <img src="source/images/mail.png" alt=""></div>--}}
{{--                                    </div>--}}
{{--                                    <div class="contact_info_text">yourmail@gmail.com</div>--}}
{{--                                </li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}

{{--                    </div>--}}
{{--                </div>--}}

                <!-- Contact Form -->

            </div>
        </div>

    </div>
</div>
    @stop
