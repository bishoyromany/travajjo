@extends('layouts.landing')

@section('content')
<div class="row landing-page m-0 bg-white">
    <div class="col-md-6 col-12 left-side d-flex justify-content-between flex-column">
        <div class="contact d-flex justify-content-center w-100">
            <div class="email py-3">
                <div class="icon">
                    <img src="{{asset("images/email.png")}}" alt="email" class="img-fluid">
                    <span class="text ml-2">
                        <a href="mailto:support@tavejjo.com" class="text-dcoration-none text-dark font-weight-bold">support@tavejjo.com</a>
                    </span>
                </div>
            </div>
            <div class="sep my-3 mx-4 social-separate">
                <div></div>
            </div>
            <div class="whatsapp py-3">
                <div class="icon">
                    <img src="{{asset("images/whatsapp.png")}}" alt="whatsapp" class="img-fluid">
                    <span class="text text-dcoration-none text-dark font-weight-bold ml-2">
                        +91 987 654 3210
                    </span>
                </div>
            </div>
        </div>

        <div class="logo text-center my-4">
            <img src="{{asset("images/logo.png")}}" alt="logo" class="img-fluid">
        </div>

        <div class="copyright .d-sm-none .d-md-block text-center mb-3">
            Copyright &copy;2021 by www.tavajjo.com <span class="mx-2">|</span> All rights reserved.
        </div>
    </div>
    <div class="col-md-6 col-12 bg-main right-side">
        <div class="title text-center mt-4">
            <h1 class="font-weight-bold">
                Unveil your own magnificence
            </h1>
            <p class="lead light-text">Buy products that create grandeur in your life</p>
        </div>

        <div class="to-you">
            <div class="title text-center">
                <h5 class="pretty-subtitle font-weight-bold">
                    <img src="{{asset("images/pretty-line.png")}}" class="left mr-2" alt="Pretty Line">
                    To You
                    <img src="{{asset("images/pretty-line.png")}}" class="right ml-2" alt="Pretty Line">
                </h5>
            </div>
        </div>

    </div>
</div>
@endsection
