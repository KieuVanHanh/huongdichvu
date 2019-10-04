@extends('layouts.master')

@section('content')
<section class="know-about-area">
    <div class="container">
        <div class="sec-title">
            <h2>Giới thiệu chung </h2>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <div class="img-holder">
                    <div class="row">
                        <!--Start single item-->
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="singel-item">
                                <img src="images/resources/a1.jpg" alt="Awesome Image">
                            </div>
                        </div>
                        <!--End single item-->
                        <!--Start single item-->
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="singel-item">
                                <img src="images/resources/a2.jpg" alt="Awesome Image">
                            </div>
                        </div>
                        <!--End single item-->
                    </div>
                    <div class="row">
                        <!--Start single item-->
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="singel-item">
                                <img src="images/resources/a3.jpg" alt="Awesome Image">
                            </div>
                        </div>
                        <!--End single item-->
                        <!--Start single item-->
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="singel-item">
                                <img src="images/resources/a4.jpg" alt="Awesome Image">
                            </div>
                        </div>
                        <!--End single item-->
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="text-holder">
                    <div class="top-text">
                        <h3>Viện Dưỡng Lão Senior Safety</h3>
                        <p>Khi bố mẹ già yếu đi kèm theo bệnh tật, tính tình thay đổi hay có những thú vui riêng
                            mà con cháu không đáp ứng được, người nhà đôi khi rất lúng túng. Họ bận rộn với công
                            việc mà bản thân cũng không có kinh nghiệm trong chăm sóc người bệnh. Trung tâm
                            dưỡng lão Senior Safety được lập ra với mong muốn chia sẻ trách nhiệm với các gia
                            đình, là giải pháp tối ưu để con cháu vẫn có điều kiện quan tâm, vẫn duy trì công
                            việc, học tập trong khi bố mẹ, ông bà được vui sống bên những người bạn cùng lứa
                            tuổi, được chăm sóc sức khoẻ cả về thể chất và tinh thần.</p>
                    </div>
                    <ul class="benifit-list">
                        <li><i class="fa fa-angle-right"></i>Chúng tôi đặt khách hàng lên hàng đầu </li>
                        <li><i class="fa fa-angle-right"></i>Đặt và hẹn chuyên gia bất cứ lúc nào </li>
                        <li><i class="fa fa-angle-right"></i>Chúng tôi cung cấp nhiều dịch vụ với giá tốt nhất
                        </li>
                        <li><i class="fa fa-angle-right"></i>Hệ thống thanh toán trực tiếp với nhiều hình thức
                            khác nhau </li>
                    </ul>

                    <div class="link_btn">
                        <a href="about.html" class="thm-btn style-2">Đọc Thêm</a>

                    </div>
                </div>
            </div>
        </div>

    </div>
</section>           
<!--End know about area-->  

<!--Paralax Style One-->
<section class="parallax-style-one" style="background-image:url(images/background/bg-4.jpg);">
    <div class="container">
        <div class="overlay">
            <!--Fact Counter-->
            <div class="fact-counter">
                <div class="row">
                    <div class="counter-outer">
                        <!--Column-->
                        <article class="column counter-column col-md-2 col-sm-6 col-xs-12 wow fadeIn"
                                 data-wow-duration="600ms">
                            <div class="item">
                                <div class="inner-box">
                                    <div class="icon-box">
                                        <i class="icon fa fa-trophy"></i>
                                    </div>
                                    <div class="count-outer">
                                        <span class="count-text" data-speed="3000" data-stop="950">0</span>
                                        <p>Giải thưởng giành được </p>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <!--Column-->
                        <article class="column counter-column col-md-2 col-sm-6 col-xs-12 wow fadeIn"
                                 data-wow-duration="900ms">
                            <div class="item">
                                <div class="inner-box">
                                    <div class="icon-box">
                                        <i class="icon fa fa-user"></i>
                                    </div>
                                    <div class="count-outer">
                                        <span class="count-text" data-speed="3000" data-stop="350">0</span>
                                        <p>Bác sỹ </p>
                                    </div>
                                </div>
                            </div>
                        </article>

                        <!--Column-->
                        <article class="column counter-column col-md-2 col-sm-6 col-xs-12 wow fadeIn"
                                 data-wow-duration="300ms">
                            <div class="item">
                                <div class="inner-box">
                                    <div class="icon-box">
                                        <i class="fa fa-stethoscope "></i>
                                    </div>
                                    <div class="count-outer">
                                        <span class="count-text" data-speed="3000" data-stop="1200">0</span>
                                        <p>Chăm sóc cá nhân</p>
                                    </div>
                                </div>
                            </div>
                        </article>

                        <!--Column-->
                        <article class="column counter-column col-md-2 col-sm-6 col-xs-12 wow fadeIn"
                                 data-wow-duration="900ms">
                            <div class="item">
                                <div class="inner-box">
                                    <div class="icon-box">
                                        <i class="fa fa-heartbeat"></i>
                                    </div>
                                    <div class="count-outer">
                                        <span class="count-text" data-speed="3000" data-stop="1500">0</span>
                                        <p>Cuộc sống mới</p>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <!--Column-->
                        <article class="column counter-column col-md-2 col-sm-6 col-xs-12 wow fadeIn"
                                 data-wow-duration="900ms">
                            <div class="item">
                                <div class="inner-box">
                                    <div class="icon-box">
                                        <i class="fa fa-car"></i>
                                    </div>
                                    <div class="count-outer">
                                        <span class="count-text" data-speed="3000" data-stop="1500">0</span>
                                        <p>Điều Trị thành công </p>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <!--Column-->
                        <article class="column counter-column col-md-2 col-sm-6 col-xs-12 wow fadeIn"
                                 data-wow-duration="900ms">
                            <div class="item">
                                <div class="inner-box">
                                    <div class="icon-box">
                                        <i class="fa fa-users"></i>
                                    </div>
                                    <div class="count-outer">
                                        <span class="count-text" data-speed="3000" data-stop="1500">0</span>
                                        <p>Cộng đồng </p>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>	

<!--team section-->
<section class="our-team">
    <div class="container">
        <div class="sec-title">
            <h2>Ban Điều Hành <span>của chúng tôi</span></h2>

        </div>
        <div class="team-carousel">
            <div class="single-team-member">
                <figure class="img-box">
                    <a href="#"><img src="images/team/team-1.jpg" alt=""></a>
                    <div class="overlay">
                        <div class="inner-box">
                            <ul class="social">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-skype"></i></a></li>
                            </ul>
                        </div>

                    </div>
                </figure>
                <div class="author-info">
                    <a href="expart-details.html">
                        <h4>Kiều Văn Hanh</h4>
                    </a>
                    <p>Người Sáng Lập </p>
                    <ul>
                        <li><i class="fa fa-phone"></i>Điện Thoại: +098767865</li>
                        <li><i class="fa fa-envelope"></i><a href="#">KieuVanHanh98@gmail.com</a></li>
                    </ul>
                </div>

            </div>

            <div class="single-team-member">
                <figure class="img-box">
                    <a href="#"><img src="images/team/team-3.jpg" alt=""></a>
                    <div class="overlay">
                        <div class="inner-box">
                            <ul class="social">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-skype"></i></a></li>
                            </ul>
                        </div>

                    </div>
                </figure>
                <div class="author-info">
                    <a href="expart-details.html">
                        <h4>Thương Thương</h4>
                    </a>
                    <p>Đồng sáng lập</p>
                    <ul>
                        <li><i class="fa fa-phone"></i>Điện Thoại:0989878968</li>
                        <li><i class="fa fa-envelope"></i><a href="#">NgocMeo@gmail.com</a></li>
                    </ul>
                </div>

            </div>
            <div class="single-team-member">
                <figure class="img-box">
                    <a href="#"><img src="images/team/team-2.jpg" alt=""></a>
                    <div class="overlay">
                        <div class="inner-box">
                            <ul class="social">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-skype"></i></a></li>
                            </ul>
                        </div>

                    </div>
                </figure>
                <div class="author-info">
                    <a href="expart-details.html">
                        <h4>Vũ Ngọc Hà</h4>
                    </a>
                    <p>Giám Đốc Điều Hành</p>
                    <ul>
                        <li><i class="fa fa-phone"></i>Điện thoại: 0987897897</li>
                        <li><i class="fa fa-envelope"></i><a href="#">Hocho247y@gmail.com</a></li>
                    </ul>
                </div>

            </div>
            <div class="single-team-member">
                <figure class="img-box">
                    <a href="#"><img src="images/team/team-4.jpg" alt=""></a>
                    <div class="overlay">
                        <div class="inner-box">
                            <ul class="social">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-skype"></i></a></li>
                            </ul>
                        </div>

                    </div>
                </figure>
                <div class="author-info">
                    <a href="expart-details.html">
                        <h4>Hoàng Thị Huyền Trang </h4>
                    </a>
                    <p>Tổng Biên Tập </p>
                    <ul>
                        <li><i class="fa fa-phone"></i>Điện Thoại:08977897</li>
                        <li><i class="fa fa-envelope"></i><a href="#">beocogisai@gmail.com</a></li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
</section>

<!--call-to-action section-->
<section class="call-to-action subscribe-intro">
    <div class="container">
        <div class="row">	
            <div class="col-md-9">
                <<h3>Hãy Liên lạc Ngay Với Chúng Tôi </h3>
                <p>Hãy nhấc máy lên và gọi cho chúng tôi để hưởng chế độ ưu đãi nhất. </p>
            </div>
            <div class="col-md-3">
                <a href="contact.html" class="thm-btn inverse pull-right">Liên Lạc Ngay</a>
            </div>
        </div>
    </div>
</section>
@endsection