@extends('layouts.master')
@section('content')
<section class="feature-style-three">
    <div class="container">			
        <div class="item-list">
            <div class="row">
                <div class="item">
                    <div class="column col-md-4 col-sm-6 col-xs-12">
                        <div class="inner-box">
                            <div class="icon-box"><span class="icon flaticon-pin-1"></span></div>
                            <h3>Địa chỉ</h3>
                            <div class="text"><p>32/187 Thạch Seven, Hà Nội </p></div>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="column col-md-4 col-sm-6 col-xs-12">
                        <div class="inner-box">
                            <div class="icon-box"><span class="icon flaticon-cell-phone"></span></div>
                            <h3>Liên Hệ</h3>
                            <div class="text"><p>(+84) 384131298 <br>(+84)362137755</p></div>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="column col-md-4 col-sm-6 col-xs-12">
                        <div class="inner-box">
                            <div class="icon-box"><span class="icon flaticon-message"></span></div>
                            <h3>E-Mail</h3>
                            <div class="text"><p>mitomcagoi@gmail.com <br>kieuvanhanh98@gmail.com</p></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="contact_us">
    <div class="container">   
        <div class="sec-title text-center">
            <h2>Thông tin  <span>Liên Lạc</span></h2>
            <p>Mọi đóng góp và câu hỏi của quý vị đều là sự cái thiện của trung tâm chúng tôi.</p>
        </div>
        <div class="default-form-area">
            <form id="contact-form" name="contact_form" class="default-form" action="http://wp.hostlin.com/senior-safety/inc/sendmail.php" method="post">
                <div class="row clearfix">
                    <div class="col-md-6 col-sm-6 col-xs-12">

                        <div class="form-group style-two">
                            <input type="text" name="form_name" class="form-control" value="" placeholder="Tên" required="">
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group style-two">
                            <input type="email" name="form_email" class="form-control required email" value="" placeholder="Email" required="">
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="form-group style-two">
                            <input type="text" name="form_phone" class="form-control" value="" placeholder="Số Điện Thoại">
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="form-group style-two">
                            <input type="text" name="form_Date" class="form-control" value="" placeholder="Ngày ">
                        </div>
                    </div>	
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group style-two">
                            <textarea name="form_message" class="form-control textarea required" placeholder="Lời Góp Ý"></textarea>
                        </div>
                    </div>   											  
                </div>
                <div class="contact-section-btn text-center">
                    <div class="form-group style-two">
                        <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="">
                        <button class="thm-btn thm-color" type="submit" data-loading-text="Please wait...">Gửi Phản Hồi</button>
                    </div>
                </div> 
            </form>
        </div>          
    </div>
</section>
@endsection
