<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="{{URL::asset('css/R1.css')}}" type="text/css" />
    </head>
    <body>
        <div id="wrapper">
        <div id="inner" >
            <nav id="inner-most">
                <h3>RESTAURANT INFORMATION SYSTEM</h3>
                <nav style="color:white">______________________________________________________________________________________________________________</nav><br>
                <div style="padding-top:0;">
                  @if(url()->current()=='http://localhost/RMS/public/home')
                      <a><strong>HOME</strong></A>
                    @else 
                    <a href="home">&nbspHOME&nbsp&nbsp&nbsp&nbsp|</a>
                  @endif
                  @if(url()->current()=='http://localhost/RMS/public/aboutus')
                      <a><strong>ABOUT US</strong></A>
                    @else 
                    <a href="aboutus">ABOUT US&nbsp&nbsp&nbsp&nbsp|</a>
                    @endif
                    @if(url()->current()=='http://localhost/RMS/public/all')
                      <a><strong>ALL RESTAURANTS</strong></A>
                    @else 
                    <a href="restaurant">ALL RESTAURANTS&nbsp&nbsp&nbsp&nbsp|</a>
                    @endif
                    @if(url()->current()=='http://localhost/RMS/public/login')
                      <a><strong>LOGIN</strong></A>
                    @elseif(url()->current()=='http://localhost/RMS/public/dashboard' || url()->current()=='http://localhost/RMS/public/add_restaurant'
                    || url()->current()=='http://localhost/RMS/public/restaurant')
                      <a href="logout">LOGOUT</a>
                    @else 
                    <a href="login">LOGIN&nbsp&nbsp&nbsp&nbsp|</a>
                    @endif
                    @if(url()->current()=='http://localhost/RMS/public/contact')
                      <a><strong>CONTACT</strong></A>
                    @else 
                    <a href="contact">CONTACT&nbsp&nbsp&nbsp&nbsp|</a>
                    @endif
                </div>
            </nav>

@section('home')
@show
@section('images')
@show
@section('restaurant1')
@show
@section('restaurant2')
@show
@section('restaurant3')
@show
@section('restaurant4')
@show
@section('restaurant5')
@show
@section('login')
@show
@section('dashboard')
@show
@section('add_restaurant')
@show
        </div>
    </div>
</body>
</html>