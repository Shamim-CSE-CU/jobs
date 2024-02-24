@extends('layouts.app')

@php
    $page= 'Service';
@endphp

@section('mainSection')




    <div class="container" style="margin-top: 120px;display: grid;
    grid-template-columns: 75% 22% 3%;">
        <div style="">
            <a href="{{url('/')}}" style="display: inherit;">
                <h6 style="color: rgb(48 102 37); font-size:17px;" >{{$services->category_name}}/Service/{{$services->title}}</h6>  
            </a>
        </div>
        <div style="display: flex;justify-content:space-between">
            <div style="display: flex;">
                <div  style="width:30px;
                height:30px;
                background-color: rgb(255, 255, 255); 
                border-radius: 50%; 
                border:1px solid rgb(222 231 222);
                padding: 5px;">
                
                    <i class="fas fa-heart" style="color: #ccafaf;padding-left: 2px; cursor: pointer;"></i>
   
                </div>  
                <div style="margin-left: 5px;
                padding-top: 2px;">
                    <span>Save</span> 
                </div>
            </div>
            <div style="display: flex;" id="social-icons-container">
                <div class="icon-container">


                    <a data-toggle="modal" data-target="#social_media_Model"><b><i class="fas fa-share"></i></b></a>


                    
                    <div class="social-icons">
                        <i class="fab fa-facebook" ></i>
                        <i class="fab fa-instagram" ></i>
                        <i class="fab fa-twitter" ></i>
                    </div>
                </div>
            </div>
            
              
                <div style="margin-left: 5px;
                padding-top: 2px;">
                    <span>Share</span> 
                </div>
            </div>
            <div style="display: flex;">
                <div  style="width:30px;
                height:30px;
                background-color: rgb(255, 255, 255); 
                border-radius: 50%; 
                border:1px solid rgb(222 231 222);
                padding: 5px;">
                
                    {{-- <i class="fas fa-heart" style="color: #ccafaf;padding-left: 2px; cursor: pointer; "></i> --}}
                    <i class="fas fa-exclamation-triangle"></i>

   
                </div>  
                
            </div>
            
            
              
        </div>
    </div>
  


  




    
    <section class="section">
        <div class="container">

            <div class="row justify-content-center">
                <div class=" col-lg-8   mb-5 mb-lg-0">

                    <article class="card  mb-4" style="height: 300px; width:700px;">
                        <!-- Display the post content -->
        
                        <!-- Display the post content -->
                        <div style="width: 100%">
                           
                                    <div class="card-body card_body_project">
                                        <div class="grid_item_1" >
                                        
                                            <a class="" href="#" role="button">
                                                
                                                    {{-- @auth --}}
                                                        @if ($services->user_photo)
                                                            <img src="{{ asset('images/user_photos/' . $services->user_photo) }}" alt="" class="rounded-circle" style="height: 60px">
                                                        @else
                                                            <img src="{{ asset('images/user_photos/user.png') }}" alt="" class="rounded-circle" style="height: 60px">
                                                        @endif
                                                                                                                         
                                            </a>                                       
                                      
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
                                            
                                         </div>
                                               
                                            
                                                <a href="{{route('single_post_view', $services->id) }}">
                                                <h5 class="post-subject" >{{$services->title}}</h4>
                                                </a>
                                                <h5 class="mb-3" ><a class="post-title" style="background: white;
                                                color:rgb(142, 145, 145);
                                                font-size:20px;
                                                    border-radius: 7px;
                                                    padding: 5px;" >{{ $services->user_name }}</a></h5>
                                                    <div class="grid_item_2_bottom">
                                                        <div class="grid_item_2_bottom_item_1">                     
                                                            <li class="list-inline-item" style="font-size: 13px;">
                                                                <i class="ti-calendar" style="margin-right: 5px;"></i>{{date('d M Y', strtotime($services->created_at))}}
                                                            </li>
                                                        </div>
                                                        <div class="grid_item_2_bottom_item_2">
                                                            <li class="list-inline-item">
                                                                <div style="overflow: hidden; text-overflow: ellipsis; ">
                                                                    <b class="" style="font-size: 10px;"><i class="fas fa-map-marker-alt location-icon" style="font-size: 16px; margin-right:5px; color:rgb(194 199 215);"></i>{{ $services->Location }}</b>
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


                    <article style="margin-left: 15px;
                    margin-right: 15px;">
                    <div class="post-slider mb-4">
                        <img src="{{asset('post_thumbnails/'.$services->thumbnail)}}" class="card-img" alt="post-thumb">
                    </div>
                    
                    <h1 class="h2">{{$services->title}}</h1>
                    <ul class="card-meta my-3 list-inline">
                        <li class="list-inline-item">
                            <i class="ti-calendar"></i>{{date('d M Y', strtotime($services->created_at))}}
                        </li>
                        <li class="list-inline-item">
                            Category:<b class="text-primary" >{{ $services->category_name }}</b>
                            
                        </li>
                    </ul>
                    <div class="content">
                        <p>
                            @php
                            echo $services->description;
                        @endphp
                        </p>
                    </div>
                    </article>

                
                    
                </div>

                 {{-- rightbar  --}}
            @include('layouts.rightbar')

                <div class="col-lg-9 col-md-12">
                    <div class="mb-5 border-top mt-4 pt-5">
                        <h3 class="mb-4">Comments</h3>

                        @foreach ($comments as $comment)

                            <div class="media d-block d-sm-flex mb-4 pb-4">
                                <a class="d-inline-block mr-2 mb-3 mb-md-0" href="#">
                                    @if ($comment->user_photo)
                                        <img src="{{asset('images/user_photos/'.$comment->user_photo)}}" alt="" class="rounded-circle" style="height: 30px">
                                    @else
                                        <img src="{{asset('images/user_photos/user.png')}}" alt="" class="rounded-circle" style="height: 30px">
                                    @endif
                                </a>
                                <div class="media-body">
                                    <a href="#!" class="h4 d-inline-block mb-3">{{$comment->user_name}}</a>

                                    <p>
                                        @php
                                            echo $comment->comment;
                                        @endphp
                                    </p>
                                    
                                    <small class="text-black-800 mr-3 font-weight-600">{{ date('d M Y', strtotime($comment->created_at))}}
                                    </small>
                                    {{-- <a class="text-primary font-weight-600" href="#!">Reply</a> --}}
                                </div>
                            </div>
                            
                        @endforeach

                            {{$comments->links('pagination::bootstrap-4')}}
                        
                    </div>

                    <div>
                        <h3 class="mb-4">Comment</h3>
                        <form action="{{route('comment_store', $services->id)}}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="form-group">
                                <textarea name="comment" class="summernote shadow-none form-control" rows="7" required></textarea>
                                </div>
                            </div>
                            <button class="btn btn-primary" type="submit">Comment Now</button>
                        </form>
                    </div>
                </div>
           
            </div>
        </div>
    </section>


{{-- share model in social media start --}}

    <div class="modal" id="social_media_Model" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content" style="width: 450px;
            height: 150px; padding: 20px;
    margin: auto;">
                <div style="display:flex; justify-content:space-between;  padding-top: 23px;">
                    <div>
                        <a href="https://www.facebook.com/?_rdc=2&_rdr"><i class="fab fa-facebook" style="font-size:55px; color:#5e95c5"></i></a>
                        <span>Facebook</span>
                    </div>
                    <div >
                        <a href="https://www.facebook.com/?_rdc=2&_rdr"><i class="fab fa-instagram " style="font-size:55px" ></i></a>
                        <span>Instagram</span>
                    </div>
                    <div>
                        <a href="https://www.facebook.com/?_rdc=2&_rdr"><i class="fab fa-twitter" style="font-size:55px" ></i></a>
                        <span>Twitter</span>
                    </div>
                </div>
                
                    
                    
                    
                
                
                
            </div>
        </div>
</div>

{{-- share model in social media end --}}






    @include('user.questions_on_single_post_view') 
    
@endsection


 