@extends('layouts.app')

@php
    $page= 'Answer';
@endphp

@section('mainSection')


        <!-- Answer section -->
      <div style="padding-top: 100px"></div>
      <section class="section">
        <div class="container">
          <div class="row justify-content-center">
            <div class=" col-lg-9   mb-5 mb-lg-0">
              <article>

                <h1 class="h2">{{$question->question}}</h1>
                <ul class="card-meta list-inline mt-4">
                    <li class="list-inline-item">
                      <a href="#" class="card-meta-author">
                        @if ($question->user_photo)
                            <img src="{{ asset('images/user_photos/'.$question->user_photo)}}">
                        @else
                            <img src="{{ asset('images/user_photos/user.png')}}">
                        @endif
                        
                        <span>{{ $question->user_mane}}</span>
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <i class="ti-calendar"></i>{{ date('d M Y', strtotime($question->created_at))}}
                    </li>
                    <li class="list-inline-item text-primary">
                      <i class="ti-bookmark"></i>{{ $question->category_name}}
                    </li>
                    
                  </ul>

              </article>

            </div>

            <div class="col-lg-9 col-md-12">
              <div class="mb-5 border-top mt-4 pt-5">
                  <h3 class="mb-4">Answers</h3>
          
                  @if ($answers->count()>0)
                      @foreach ($answers as $answer)
                          <div class="card card-body mt-4">
                              <div class="media d-block d-sm-flex">
                                  <a class="d-inline-block mr-2 mb-3 mb-md-0" href="#">
                                      @if ($answer->user_photo)
                                          <img src="{{ asset('images/user_photos/'.$answer->user_photo)}}" class="mr-3 avater">
                                      @else
                                          <img src="{{ asset('images/user_photos/user.png')}}" class="mr-3 avater">
                                      @endif
                                  </a>
                                  <div class="media-body">
                                      <div class="d-flex justify-content-between align-items-center mb-4">
                                          <span>
                                              <a href="#!" class="h4 d-inline-block mb-3">{{$answer->user_name}}</a>
                                              <small class="text-black-800 ml-2 font-weight-600">{{ date('d M Y', strtotime($answer->created_at))}}</small>
                                          </span>
          
                                          @if ($answer->user_id == auth()->user()->id)
                                              <form action="{{ route('question_answer_delete', $answer->id)}}" method="POST">
                                                  @csrf
                                                  @method('DELETE')
                                                  <button class="text-danger border-0 bg-white delete"> <i class="fas fa-trash"></i> </button>
                                              </form>
                                          @endif
                                      </div>
          
                                      <p>
                                          @php
                                              echo $answer->answer;
                                          @endphp
                                      </p>
                                      <hr class="my-3">
          
                                      {{-- real time like dislike div start --}}
                                      <div>
                                          @php

                                              $like = App\Models\QuestionAnswerLike::where('answer_id', $answer->id)->where('user_id', auth()->user()->id)->exists();
                                              $dislike = App\Models\QuestionAnswerDislike::where('answer_id', $answer->id)->where('user_id', auth()->user()->id)->exists();

                                              $likeCount = App\Models\QuestionAnswerLike::where('answer_id', $answer->id)->count();
                                              $dislikeCount = App\Models\QuestionAnswerDislike::where('answer_id', $answer->id)->count();
                                          @endphp
                                          <a class="like_button" style=" font-size: 20px;" href="#" data-answer-id="{{ $answer->id }}" data-action="like">
                                              <i class="thumbs_up_icon far fa-thumbs-up"></i>
                                          </a>
                                          <span class="like_count">like({{ $likeCount }})</span>
                                        
                                          <a class="dislike_button" style="margin-left: 20px; color: red; font-size: 20px;" href="#" data-answer-id="{{ $answer->id }}" data-action="dislike">
                                              <i class="thumbs_down_icon far fa-thumbs-down"></i>
                                          </a>
                                          <span class="dislike_count">dislike({{ $dislikeCount }})</span>
                                      </div>
                                      {{-- real time like dislike div end --}}
                                  </div>
                              </div>
                          </div>
                      @endforeach
                  @else
                      <p>No answer found</p>
                  @endif
              </div>
          </div>

          <div>
            <h3 class="mb-4 pt-4">Answer</h3>

            <form action="{{route('question_answer_store', $question->id)}}" method="POST">

                @csrf

              <div class="form-group">
                <textarea class="summernote form-control shadow-none" name="answer" rows="7" required></textarea>
              </div>

              <button class="btn btn-primary" type="submit">Submit Answer</button>
            </form>
          </div>
        </div>

      </div>
    </div>
  </section>
    
@endsection