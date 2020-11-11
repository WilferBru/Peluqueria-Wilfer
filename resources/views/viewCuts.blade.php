@extends('layouts-guest')
<title>Barber shop | Cortes</title>
@section('content')
<section class="service_part section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7 col-lg-6 col-sm-10">
                    <div class="section_tittle">
                        <img src="img/section_tittle_icon.png" alt="icon">
                        <h2>Service Expectation</h2>
                        <p>Good morning forth gathering doesn't god gathering man and had moveth there dry sixth
                            dominion
                            rule divided behold after had he did not move .</p>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($cuts as $cut)
                <div class="col-md-6 col-lg-4">
                    <div class="single_service_part">
                        <div class="single_blog_img">
                            <img src="{{ Storage::url($cut->file) }}" alt="artist">
                        </div>
                        <div class="single_service_text">
                            <h4>Stylish Hair Cut</h4>
                            <p>Good morning forth gathering does god gathering man and had moveth there
                                dry so dominion rule divided had</p>
                            <a href="#" class="btn_3">Read More</a>
                        </div>
                    </div>
                </div>
                @endforeach
        </div>
    </section>

@endsection
