@extends('layouts-guest')

@section('content')
 <!-- Service part start-->
 <section class="artist_part">
     <div class="container">
         <div class="row justify-content-center">
             <div class="col-lg-7 col-lg-6 col-sm-10">
                 <div class="section_tittle">
                     <img src="img/section_tittle_icon.png" alt="icon">
                     <h2>Barberos</h2>
                     <p>Barberos disponibles</p>
                 </div>
             </div>
         </div>
         <div class="row">
             @foreach($barber as $fact)
             <div class="col-sm-6 col-lg-4">
                 <div class="single_blog_item">
                     <div class="single_blog_img">
                         <img src="{{ Storage::url($fact->photo) }}" alt="artist">
                     </div>
                     <div class="single_text">
                         <div class="single_blog_text text-center">
                             <h3>{{ $fact->name }}</h3>
                             <p>Barbero</p>
                             <div class="social_icon">
                                 <a href="#"> <i class="ti-facebook"></i> </a>
{{--                                 <a href="#"> <i class="ti-twitter-alt"></i> </a>--}}
                                 <a href="#"> <i class="ti-instagram"></i> </a>
{{--                                 <a href="#"> <i class="ti-skype"></i> </a>--}}
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
             @endforeach
         </div>
     </div>
 </section>
{{-- <div class="row justify-content-center">
     <div class="col-lg-7 col-lg-6 col-sm-10">
         <div class="section_tittle">
             <img src="img/section_tittle_icon.png" alt="icon">
             <h2>Service Expectation</h2>
             <p>Good morning forth gathering doesn't god gathering man and had moveth there dry sixth
                 dominion
                 rule divided behold after had he did not move .</p>
         </div>
     </div>
 </div>--}}
    <section class="priceing_part">
        <div class="container">
            <div class="row align-items-center">
                @foreach($paginator as $date)
                <div class="col-md-6 col-lg-6">
                    <div class="single_pricing_item">
                        <img class="bd-placeholder-img rounded-circle" src="{{ Storage::url($date->file) }}" width="100" height="100" alt="">
                        <div class="single_pricing_text">
                            <h5>{{ $date->name }}</h5>
                            <h6>${{ number_format($date->price) }}</h6>
                            <p>{{ $date->bodyCorte }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <div class="container">
            <div class="flex justify-between flex-1 sm:hidden">
                @if ($paginator->onFirstPage())

                @else
                    <a href="{{ $paginator->previousPageUrl() }}" class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 leading-5 rounded-md hover:text-gray-500 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150">
                        Ver cortes Anteriores
                    </a>
                @endif

                @if ($paginator->hasMorePages())
                    <a href="{{ $paginator->nextPageUrl() }}" class="relative inline-flex items-center px-4 py-2 ml-3 text-sm font-medium text-gray-700 bg-white border border-gray-300 leading-5 rounded-md hover:text-gray-500 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150">
                        Ver mas Cortes
                    </a>
                @else
                    <span class="relative inline-flex items-center px-4 py-2 ml-3 text-sm font-medium text-gray-500 bg-white border border-gray-300 cursor-default leading-5 rounded-md">
                    Ver Mas
                </span>
                @endif
            </div>
        </div>
    </section>


@endsection
