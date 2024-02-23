@extends('layouts.app')

@php
    $page= 'Disease';
@endphp

@section('mainSection')

    
    <section class="section" style="margin-top:80px">
        <div class="container">



            




            <div class="row justify-content-center">
                <div class=" col-lg-8   mb-5 mb-lg-0">

                    <article class="card  mb-4" style="height: 300px;">
                        <!-- Display the post content -->
        
                        <!-- Display the post content -->
                        <div style="width: 100%">
                           
                                    <div class="card-body card_body_project">
                                        <div class="grid_item_1" >
                                         
                                        </div>   
        
                                        <div class="grid_item_2">
                                                
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
                        <h3 class="mb-4">Leave a Reply</h3>
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
    
@endsection