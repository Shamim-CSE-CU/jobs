@extends('layouts.app')

@php
    $page= 'প্রজেক্ট';
@endphp

@section('mainSection')
 

    <section class="section-sm">
        <div class="py-4"></div>
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-12 mt-5  mb-5 mb-lg-0">
                <h2 class="h5 section-title">সাম্প্রতিক প্রোজেক্ট সমূহ</h2>
              
                <div id="posts-container" class="swiper-container">
                    
                    @foreach ($services as $service)
                        <article class="card card_project mb-4" style="">
                            <!-- Display the post content -->
            
                            <!-- Display the post content -->
                            <div style="width: 100%">
                                
            
                                
                                        <div class="card-body card_body_project">
                                            <div class="grid_item_1" >
                                                
                                                        <a class="" href="#" role="button">
                                                            
                                                                {{-- @auth --}}
                                                                    @if ($service->user_photo)
                                                                        <img src="{{ asset('images/user_photos/' . $service->user_photo) }}" alt="" class="rounded-circle" style="height: 60px">
                                                                    @else
                                                                        <img src="{{ asset('images/user_photos/user.png') }}" alt="" class="rounded-circle" style="height: 60px">
                                                                    @endif
                                                                {{-- @else
                                                                    <i class="fas fa-user-circle" style="font-size:20px"></i>
                                                                @endauth --}}
                                                            
            
                
                                                                                                                                                                           
                                                        </a>                                       
                                                                                                                                            
                                                    
                                                    {{-- <li class="list-inline-item">
                                                        Starting at:<b class="text-primary" ><span class="woocommerce-Price-currencySymbol">৳&nbsp;</span>{{ $service->payment }}</b>
                                                        
                                                    </li> --}}
                                                  
                                            </div>   
            
                                            <div class="grid_item_2">
            
                                                <div class="reaction" style="position: absolute;
                                            width:30px;
                                            height:30px;
                                            top: 10px; 
                                            right: 10px; 
                                            background-color: rgb(255, 255, 255); 
                                            border-radius: 50%; 
                                            border:1px solid rgb(222 231 222);
                                            padding: 5px;">
                                                <i class="fas fa-heart" style="color: #ccafaf;padding-left: 2px; cursor: pointer; "></i>
                                                {{-- <i class="fa-regular fa-heart" style="color: #ccafaf;padding-left: 2px; "></i> --}}
                                                {{-- <i class="fa-thin fa-heart" style="color: #302f2f;padding-left: 2px;"></i> --}}
                                                {{-- <i class="fa-sharp fa-thin fa-heart" style="color: #302f2f;padding-left: 2px;"></i> --}}
                                            </div>
                                                   
                                                
                                                    <a href="{{route('single_post_view', $service->id) }}">
                                                    <h5 class="post-subject" >{{$service->title}}</h4>
                                                    </a>
                                                    <h5 class="mb-3" ><a class="post-title" style="background: white;
                                                    color:rgb(142, 145, 145);
                                                    font-size:20px;
                                                        border-radius: 7px;
                                                        padding: 5px;" >{{ $service->user_name }}</a></h5>
                                                        <div class="grid_item_2_bottom">
                                                            <div class="grid_item_2_bottom_item_1">                     
                                                                <li class="list-inline-item" style="font-size: 13px;">
                                                                    <i class="ti-calendar" style="margin-right: 5px;"></i>{{date('d M Y', strtotime($service->created_at))}}
                                                                </li>
                                                            </div>
                                                            <div class="grid_item_2_bottom_item_2">
                                                                <li class="list-inline-item">
                                                                    <div style="overflow: hidden; text-overflow: ellipsis; ">
                                                                        <b class="" style="font-size: 10px;"><i class="fas fa-map-marker-alt location-icon" style="font-size: 16px; margin-right:5px; color:rgb(194 199 215);"></i>{{ $service->Location }}</b>
                                                                    </div>
                                                                </li>
                                                            </div>
                                                            <div class="grid_item_2_bottom_item_3">
                                                                <li class="list-inline-item">
                                                                    <div class="project-proposals-count with-icon"><i class="flaticon-rocket-1"></i> 5 Proposals</div>
                                                                </li>
                                                            </div>
                                                        </div>
                                                    
                                            </div>
                                                                                                      
                                        </div>
                            </div>
            
                            
                        </article>
                    @endforeach
                
                    
            
                
            </div>
              {{-- rightbar  --}}
              {{-- @include('layouts.rightbar') --}}
          </div>
        </div>
      </section>
    
@endsection