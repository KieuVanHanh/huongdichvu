<link rel="stylesheet" href="css/style1.css" type="text/css" media="all" /> <!-- Style-CSS --> 
<link rel="stylesheet" href="css/font-awesome.css"> <!-- Font-Awesome-Icons-CSS -->
<!-- //css files -->
<!-- online-fonts -->
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Dosis:200,300,400,500,600,700,800&amp;subset=latin-ext" rel="stylesheet">
@extends('layouts.master')

@section('content')
<div class="ahihi">
    <div class="center-container">
        <!--header-->
        <div class="header-w3l">
            <h1>Online Login Form</h1>
        </div>
        <!--//header-->
        <div class="main-content-agile" >
            <div class="sub-main-w3">	
                <div class="wthree-pro">
                    <h2>Login Quick</h2>
                </div>
                <form action="#" method="post">
                    <div class="pom-agile">
                        <input placeholder="E-mail" name="Name" class="user" type="text" required="">
                        <span class="icon1"><i class="fa fa-user" aria-hidden="true"></i></span>
                    </div>
                    <div class="pom-agile">
                        <input  placeholder="Password" name="Password" class="pass" type="password" required="">
                        <span class="icon2"><i class="fa fa-unlock" aria-hidden="true"></i></span>
                    </div>
                    <div class="sub-w3l">
                        <h6><a href="#">Forgot Password?</a></h6>
                        <div class="right-w3l">
                            <input type="submit" value="Login">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
    function hideURLbar(){ window.scrollTo(0,1); } </script>