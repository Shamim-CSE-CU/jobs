@extends('layouts.app')

@php
    $page= 'সার্ভিস';
@endphp

@section('mainSection')
<section class="section-sm">
    <div class="container" style="margin-top: 70px">
      <div class="row justify-content-center">
  <div class="col-lg-12  mb-5 mb-lg-0">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h2 class="h5 section-title">রিসেন্ট সার্ভিস সমূহ</h2>

        @auth
        <a href="" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" data-toggle="modal" data-target="#AddpostModel"><i class="fas fa-plus text-white-50 mr-1"></i>সেবা তৈরি করি</a>
        @else
        <a class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" href="{{route('login')}}"><i class="fas fa-plus text-white-50 mr-1"></i>সেবা তৈরি করি</a>
        @endauth
        
    </div>
    
  
    <div id="posts-container" class="swiper-container">
        
            @foreach ($services as $service)
                <article class="card card_service mb-4" style="">
                    <!-- Display the post content -->

                    <!-- Display the post content -->
                    <div style="width: 100%">
                        <div class="post-slider">
                            <div class="image-container" style="position: relative; display: inline-block;">
                                <img src="{{asset('post_thumbnails/'.$service->thumbnail)}}" class="card-img-top " style="width: 100%" alt="post-thumb">
                                <div class="reaction" style="position: absolute;
                                width:30px;
                                height:30px;
                                top: 10px; 
                                right: 10px; 
                                background-color: rgb(255, 255, 255); 
                                border-radius: 50%; 
                                padding: 5px;">
                                    <i class="fas fa-heart" style="color: #ccafaf;padding-left: 2px; cursor: pointer; "></i>
                                    {{-- <i class="fa-regular fa-heart" style="color: #ccafaf;padding-left: 2px; "></i> --}}
                                    {{-- <i class="fa-thin fa-heart" style="color: #302f2f;padding-left: 2px;"></i> --}}
                                    {{-- <i class="fa-sharp fa-thin fa-heart" style="color: #302f2f;padding-left: 2px;"></i> --}}
                                </div>
                            </div>
                            
                        </div>
                                <div class="card-body">
                                    <h5 class="mb-3" ><a class="post-title" style="background: white;
                                        border-radius: 7px;
                                        padding: 5px;" >{{ $service->category_name }}</a></h5>
                                    
                                        <a href="{{route('single_post_view', $service->id) }}">
                                        <h5 class="post-subject" >{{$service->title}}</h4>
                                        </a>
                                        <ul class="card-meta list-inline">                         
                                            <li class="list-inline-item">
                                                <i class="ti-calendar"></i>{{date('d M Y', strtotime($service->created_at))}}
                                            </li>
                                            <li class="list-inline-item">
                                                <div style="width: 200px; overflow: hidden; text-overflow: ellipsis; ">
                                                    <b class="" style="font-size: 10px;"><i class="fas fa-map-marker-alt location-icon" style="font-size: 16px; margin-right:5px; mcolor:rgb(194 199 215);"></i>{{ $service->Location }}</b>
                                                </div>
                                            </li>
                                        </ul>
                                        <ul class="card-meta list-inline">                         
                                            <li class="list-inline-item">
                                                <a class="" href="#" role="button">
                                                    
                                                        {{-- @auth --}}
                                                            @if ($service->user_photo)
                                                                <img src="{{ asset('images/user_photos/' . $service->user_photo) }}" alt="" class="rounded-circle" style="height: 30px">
                                                            @else
                                                                <img src="{{ asset('images/user_photos/user.png') }}" alt="" class="rounded-circle" style="height: 30px">
                                                            @endif
                                                        {{-- @else
                                                            <i class="fas fa-user-circle" style="font-size:20px"></i>
                                                        @endauth --}}
                                                    

        
                                                    <b class="text-primary" >{{ $service->user_name }}</b>                                                                                                                      
                                                </a>                                       
                                                                                                                                    
                                            </li>
                                            <li class="list-inline-item">
                                                Starting at:<b class="text-primary" ><span class="woocommerce-Price-currencySymbol">৳&nbsp;</span>{{ $service->payment }}</b>
                                                
                                            </li>
                                        </ul>  
                                                                                                 
                                </div>
                    </div>
                </article>
            @endforeach
        
            <!-- Navigation buttons -->
        <div class="swiper-button-prev" style="width: 50px;
        height: 50px;
        border-radius: 50%;
        background: rgb(248, 245, 245);"></div>
        <div class="swiper-button-next" style="width: 50px;
        height: 50px;
        border-radius: 50%;
        background: rgb(248, 245, 245);"></div>
    
        
    </div>
    
    
    
  </div>



 
    
    
    
  </div>
          
      </div>
    </div>
</section>


    
        
@endsection