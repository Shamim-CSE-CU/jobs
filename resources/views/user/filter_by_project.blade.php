@extends('layouts.app')

@php
    $page= 'প্রজেক্ট';
@endphp

@section('mainSection')
 

    <section class="section-sm">
        <div class="py-4"></div>
        <div class="container">
          <div class="row justify-content-center">
      <div class="col-lg-12  mb-5 mb-lg-0">
        <h1 class="h2 mb-4">Showing items from <mark>{{$posts->first()->category_name}}</mark></h1>

        <div id="posts-container" class="swiper-container">
      
            @foreach ($posts as $post)

                <article class="card mb-4">
                    <div>
                        <div class="post-slider">
                            <img src="{{asset('post_thumbnails/'.$post->thumbnail)}}" class="card-img-top" alt="post-thumb">
                        </div>
                        <div class="card-body">
                            <h3 class="mb-3"><a class="post-title" href="{{route('single_post_view', $post->id) }}">{{$post->title}}</a></h3>
                            <ul class="card-meta list-inline">
                            
                            
                            <li class="list-inline-item">
                                <i class="ti-calendar"></i>{{date('d M Y', strtotime($post->created_at))}}
                            </li>
                            <li class="list-inline-item">
                                Category:<b class="text-primary" >{{ $post->category_name }}</b>
                                
                            </li>
                            </ul>
                            
                        <a href="{{route('single_post_view', $post->id) }}" class="btn btn-outline-primary">Read More</a>
                    </div>
                </div>
                </article>
                
            @endforeach
      
        </div>
        
        <ul class="pagination justify-content-center">
          <li class="page-item page-item active ">
              <a href="#!" class="page-link">1</a>
          </li>
          <li class="page-item">
              <a href="#!" class="page-link">2</a>
          </li>
          <li class="page-item">
              <a href="#!" class="page-link">&raquo;</a>
          </li>
        </ul>
      </div>
              {{-- rightbar  --}}
              @include('layouts.rightbar')
          </div>
        </div>
      </section>
    
@endsection