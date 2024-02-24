@extends('layouts.app')


@php
    $page= 'Home';
@endphp

@section('mainSection')

    @include('layouts.banner') 
    {{-- @include('layouts.trending')  --}}

    <section class="section-sm">
        <div class="container">
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
        
      
        <div id="posts-container" class="">

           
            @foreach ($services as $service)
            @if($service->status==1)
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
            @endif
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
        
        
        
      </div>
              
          </div>
        </div>
 </section>



      



<!-- service_create add Modal-->
<div class="modal" id="AddpostModel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Create Service</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <form action="{{route('service_create')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        
                            <div class="form-group">
                                <label for="post_name">Service Title</label>
                                <input type="text" class="form-control @error('title') is-invalid @enderror " name="title" value="{{ old('title')}}" >
                                @error('title')

                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message}}</strong>
                                    </span>
                                    
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="post_name">Location</label>
                                <input type="text" class="form-control @error('Location') is-invalid @enderror " name="Location" value="{{ old('Location')}}" >
                                @error('Location')

                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message}}</strong>
                                    </span>
                                    
                                @enderror
                            </div>


                            <div class="form-group">
                                <label for="post_name">Starting payment</label>
                                <input type="text" class="form-control @error('title') is-invalid @enderror " name="payment" value="{{ old('payment')}}" >
                                @error('payment')

                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message}}</strong>
                                    </span>
                                    
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="post_name">Service Category</label>
                                <select name="category_id" class="form-control">
                                    <option selected disabled>Select Category</option>
                                    @foreach ($categories as $category)

                                        <option value="{{ $category->id }}">{{ $category->name}}</option>
                                        
                                    @endforeach
                                </select>
                                
                            
                            </div>

                            <div class="form-group">
                                <label for="post_name">Service Description</label>
                                <textarea class="summernote form-control @error('description') is-invalid @enderror " name="description" rows="7">{{ old('description')}}</textarea>
                                @error('description')

                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message}}</strong>
                                    </span>
                                
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="post_name">Service Thumbnail</label>
                                <input type="file" class="form-control-file" name="thumbnail"  >
                            
                            </div>

                        
                                
                            
                        
                    </div>
                    <div class="modal-footer">
                        <a class="btn btn-light" type="button" data-dismiss="modal">Cancel</a>
                        <button class="btn btn-primary" type="submit">Add Service </button>
                    </div>
                </form>
            </div>
        </div>
</div>


    
@endsection

