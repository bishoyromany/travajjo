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

        <div class="copyright d-none d-md-block text-center mb-3">
            Copyright &copy;2021 by www.tavajjo.com <span class="mx-2">|</span> All rights reserved.
        </div>
    </div>
    <form class="col-md-6 col-12 bg-main right-side justify-content-around d-flex flex-column" id="landingPageForm" method="POST">
        @csrf
        <div class="title text-center mt-4">
            <h1 class="font-weight-bold">
                Unveil your own magnificence
            </h1>
            <p class="lead light-text mb-0">Buy products that create grandeur in your life</p>
        </div>

        <div class="cats-container">
            @include("components.alerts")

            <div class="alert alert-danger alert-dismissible fade show mt-3 max-cats-width mx-auto" id="selectCategoryAlert" role="alert">
                Please select any <strong>category</strong> to get the catalog
                <button type="button" class="close">
                  <span>&times;</span>
                </button>
            </div>
            @foreach($cats as $cat)
                <div class="{{$cat['class']}} w-100 max-cats-width mx-auto">
                    <div class="title text-center">
                        <h5 class="pretty-subtitle font-weight-bold">
                            <img src="{{asset("images/pretty-line.png")}}" class="left mr-2" alt="Pretty Line">
                            {{$cat['title']}}
                            <img src="{{asset("images/pretty-line.png")}}" class="right ml-2" alt="Pretty Line">
                        </h5>

                        <div class="cats mt-2">
                            @foreach($cat['cats'] as $c)
                                <div class="cat shadow py-3 px-4 border-transparent bg-white rounded">
                                    <div class="icon text-center">
                                        <img src="{{asset("images/".$c['icon'])}}" alt="{{$c['name']}}">
                                    </div>
                                    <div class="text text-purple lead mt-2">
                                        {{$c['name']}}
                                    </div>
                                    <input class="category-checkbox" type="checkbox" name="cats[]" value="{{$c['name']}}">
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
        
        <div class="confirm text-center w-100 max-cats-width mx-auto">
            <div class="w-100">
                <p class="lead light-text mx-auto">
                    Enter the email address or mobile number below to get the catalogue for selected products
                </p>
    
                <div class="input-group w-100 mb-3">
                    <input name="email" type="text" class="form-control" id="email" placeholder="Email address or Mobile number" aria-describedby="inputGroupPrepend2" required>
                    <button class="input-group-prepend btn border-0 bg-purple">
                        <span class="text-white">Get Catalogue</span>
                    </button>
                </div>
            </div>
        </div>

        <div class="copyright d-block d-md-none d-lg-none text-center mb-3">
            Copyright &copy;2021 by www.tavajjo.com <span class="mx-2">|</span> All rights reserved.
        </div>
    </form>
</div>
@endsection
