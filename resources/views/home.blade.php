@extends('layouts.landing')

@section('content')
<div class="row landing-page m-0 bg-white">
    <div class="col-md-6 col-12 left-side d-flex justify-content-between flex-column">
        <div class="contact justify-content-center w-100 d-none d-md-flex">
            <div class="email">
                <div class="icon">
                    <img src="{{asset("images/ic-email.svg")}}" alt="email" class="img-fluid">
                    <span class="text ml-2">
                        <a href="mailto:info@tavajjo.com" class="text-dcoration-none text-dark">info@tavajjo.com</a>
                    </span>
                </div>
            </div>
            <div class="sep mx-4 social-separate">
                <div></div>
            </div>
            <div class="whatsapp">
                <div class="icon">
                    <img src="{{asset("images/ic-whatsapp.svg")}}" alt="whatsapp" class="img-fluid">
                    <span class="text text-dcoration-none text-dark ml-2">
                        +91 844 8907 844
                    </span>
                </div>
            </div>
        </div>

        <div class="logo text-center my-4 text-center">
            <img src="{{asset("images/tavajjo-logo-final.svg")}}" alt="logo" class="img-fluid">
        </div>

        <div class="copyright d-none d-md-block text-center mb-3">
            Copyright &copy;2021 by www.tavajjo.com <span class="mx-2">|</span> All rights reserved.
        </div>
    </div>
    <form class="col-md-6 col-12 bg-main right-side justify-content-around d-flex flex-column" id="landingPageForm" method="POST">
        @csrf
        <div class="title text-center mt-4">
            <h1>
                Unveil your own magnificence now!
            </h1>
            <p>Select single or multiple product category</p>
        </div>

        <div class="cats-container">
            @include("components.alerts")

            <div class="alert alert-danger alert-dismissible fade show mt-3 max-cats-width mx-auto" id="selectCategoryAlert" role="alert">
                Please choose at least one <strong>category</strong> to request for catalogue
                <button type="button" class="close">
                  <span>&times;</span>
                </button>
            </div>

            <div class="alert alert-warning alert-dismissible fade show mt-3 max-cats-width mx-auto" id="emailPhoneAlert" role="alert">
                Please enter a valid <strong>email address</strong> or <strong>phone number</strong>
                <button type="button" class="close">
                  <span>&times;</span>
                </button>
            </div>

            @foreach($cats as $cat)
                <div class="{{$cat['class']}} w-100 max-cats-width mx-auto">
                    <div class="title text-center">
                        <h5 class="pretty-subtitle">
                            <img src="{{asset("images/pretty-line.png")}}" class="left mr-2" alt="Pretty Line">
                            {{$cat['title']}}
                            <img src="{{asset("images/pretty-line.png")}}" class="right ml-2" alt="Pretty Line">
                        </h5>

                        <div class="cats">
                            @foreach($cat['cats'] as $c)
                                <div class="cat px-2 border-transparent bg-white">
                                    <div class="icon text-center">
                                        <img src="{{asset("images/".$c['icon'])}}" alt="{{$c['name']}}">
                                    </div>
                                    <div class="text text-purple">
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
                <p class="mx-auto">
                    Hurry Up! to enter email address or mobile number below to get exclusive catalogue for selected products.
                </p>
    
                <div class="input-group w-100 mb-3">
                    <input name="email" type="text" class="form-control" id="email" placeholder="Email address or Mobile number" aria-describedby="inputGroupPrepend2" required>
                    <button class="input-group-prepend btn border-0 bg-purple">
                        <span>Get Catalogue</span>
                    </button>
                </div>
            </div>
        </div>

        <div class="contact d-flex justify-content-center w-100 d-md-none d-lg-none">
            <div class="email py-3">
                <div class="icon">
                    <img src="{{asset("images/ic-email.svg")}}" alt="email" class="img-fluid">
                    <span class="text ml-2">
                        <a href="mailto:info@tavajjo.com" class="text-dcoration-none text-dark font-weight-bold">info@tavajjo.com</a>
                    </span>
                </div>
            </div>
            <div class="sep my-3 mx-4 social-separate">
                <div></div>
            </div>
            <div class="whatsapp py-3">
                <div class="icon">
                    <img src="{{asset("images/ic-whatsapp.svg")}}" alt="whatsapp" class="img-fluid">
                    <span class="text text-dcoration-none text-dark font-weight-bold ml-2">
                        +91 844 8907 844
                    </span>
                </div>
            </div>
        </div>

        <div class="copyright d-block d-md-none d-lg-none text-center mb-3">
            Copyright &copy;2021 by www.tavajjo.com <span class="mx-2">|</span> All rights reserved.
        </div>
    </form>
</div>
@endsection
