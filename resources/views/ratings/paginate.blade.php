@if ($ratings->count() > 0)
    @foreach ($ratings as $rating)
        <div class="card">
            <!-- Display the rating content -->

            <div class="row d-flex">
                <div class="">
                  @auth
                    @if ($rating->user_photo)
                      <img src="{{asset('images/user_photos/'.$rating->user_photo)}}" alt="" class="profile-pic" >                                         
                    @else
                      <img src="{{asset('images/user_photos/user.png')}}" alt="" class="profile-pic" >                                   
                    @endif                  
                  @endauth                                   
                </div>
                <div class="d-flex flex-column">
                    <h3 class="mt-2 mb-0">{{$rating->user_name}}</h3>
                    <div>
                        <p class="text-left">
                          <span class="text-muted">{{$rating->rating}}</span> 
                          @for ($i = 1; $i <= 5; $i++)
                            @if ($i <= $rating->rating)
                                <span class="fa fa-star star-active mx-1"></span>
                            @else
                                <span class="fa fa-star star-inactive mx-1"></span>
                          @endif
                      @endfor 
                        </p>
                        <div>
                          <p>{{$rating->comment}}</p>
                        </div>
                    </div>
                </div>
                <div class="ml-auto">
                    <p class="text-muted pt-5 pt-sm-3">{{ date('d M Y', strtotime($rating->created_at))}}</p>
                </div>
              </div>  

        </div>
    @endforeach

    <!-- Pagination links -->
    <div class="mt-5">
        {{ $ratings->links('pagination::bootstrap-5') }}
    </div>
@endif
