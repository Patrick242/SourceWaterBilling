@extends('Layouts.homelayout')

@section('header-main')
    <div class="row p-4" id="header-main-center">
        <div class="col-md-6">
            <h2 class="text-weight font-weight-bolder">PAY YOUR WATER BILL AT YOUR COMFORTABLE TIME</h2>
            <span>We bring to you the best way to calcualte your water bill, our service has been confirmed by many customer and top water company in th world as the best, they discrip it has acurate and fast to use. Signup to get started, you can also use our mobile platform, click the image for your mobile operating download below.</span>
            <aside>
                <a><img class="img-fluid btn" id="google-play-store" src="{{URL::to('images/google-play-badge-128x128.png')}}" alt="google-playstore-badge"></a>
            <a><img class="img-fluid btn" id="apple-play-store" src="{{URL::to('images/apple-store-badge-128x128.png')}}" alt="apple-store-badge"></a>
            </aside>
        </div>
        <div class="col-md-6" id="main-header-svg-bg">
            <img src="{{URL::to('images/pipeline.svg')}}">
        </div>
    </div>
@endsection


@section('about')
<h4 class="text-center font-weight-bolder">ABOUT</h4>
    <div class="row py-3">
        <div class="col-md-6">
            <img src="{{URL::to('images/production.svg')}}" alt="about-badge-image"/>
        </div>
        <div class="col-md-6" data-aos="fade-left" data-aos-duration="600" data-aos-delay="500" data-aos-once="true">
            @foreach($about as $abouts)
                <aside class="pl-3 py-2">
                    <p>{{$abouts->content}}</p>
                </aside>
            @endforeach
        </div>
    </div>
@endsection

@section('our commitment')
<h4 class="text-center font-weight-bolder">Our Commitment</h4>
    <div class="row py-3">
        @foreach($ourcommitment as $commitment)
            <div class="col-md-4" data-aos="fade-right" data-aos-duration="500" data-aos-delay="500" data-aos-once="true">
                <div class="card">
                    <div class="card-body">

                        <aside>
                            <p class="p-2 w-40 text-light font-weight-bold" style="background-color: rgb(89, 207, 234);">{{$commitment->title}}</p>
                            <p>{{$commitment->content}}</p>
                        </aside>

                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection

@section('submit-contact-popup')
    <div class="row">
        <div class="col-md-12">
            <div class="pop-up-header">
                <p class="alert alert-secondary">form submitted successfully</p>
            </div>
            <div class="pop-up-body">
                <p>{{Session::get('info')}}</p>
            </div>
        </div>
    </div>
@endsection
