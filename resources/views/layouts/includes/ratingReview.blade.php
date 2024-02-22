@if (auth()->check() && auth()->user()->name)
                <div class="container-fluid px-1 py-5 mx-auto">
                  <div class="row justify-content-center">
                      <div class="col-xl-7 col-lg-8 col-md-10 col-12 text-center mb-5">
                          <div class="card">
                            @php                            
                              
                              $averagetotalRating = App\Models\rating::average('rating');
                              $averagetotalRating = round($averagetotalRating, 2);

                              

                              $totalRatingCount = App\Models\rating::count();
                              $totalRatingCounts = App\Models\rating::all();

                                                        
                            @endphp
                              <div class="row justify-content-left d-flex">
                                  <div class="col-md-4 d-flex flex-column">
                                      <div class="rating-box">
                                          <h1 class="pt-4">{{$averagetotalRating}}</h1>
                                          <p class="">out of 5</p>
                                      </div>
                                      <div>

                                        
                                        
                                        @for ($i = 1; $i <= 5; $i++)
                                            @if ($i <= ceil($averagetotalRating))
                                                <span class="fa fa-star star-active mx-1"></span>
                                            @else
                                                <span class="fa fa-star star-inactive mx-1"></span>
                                            @endif
                                        @endfor 
                                      </div>
                                  </div>
                                  <div class="col-md-8">
                                      <div class="rating-bar0 justify-content-center">
                                          <table class="text-left mx-auto">

                                            
                                                                                          
                                            @foreach ($averageRatings as $averageRating)

                                                  @php
                                                    $starRatingCount = $starRatingCounts->firstWhere('rating', $averageRating->rating_value);
                                                  @endphp
                                            
                                                  <td class="rating-label">
                                                      @if ($averageRating->rating_value == 5)
                                                          Excellent
                                                      @elseif ($averageRating->rating_value == 4)
                                                          Very Good
                                                      @elseif ($averageRating->rating_value == 3)
                                                          Good
                                                      @elseif ($averageRating->rating_value == 2)
                                                          Fair
                                                      @else
                                                          Poor
                                                      @endif
                                                  </td>
                                                  {{ $starRatingCount->count }}

                                                  {{ $totalRatingCount }}
                                                  <td class="rating-bar">
                                                      <div class="bar-container">
                                                          <div class="bar-{{ $averageRating->rating_value }}" style="width: {{ ($starRatingCount->count / $totalRatingCount)*100 }}%"></div>
                                                      </div>
                                                  </td>
                                                  <td class="text-right" style="width:80px">
                                                    @if ($starRatingCount)
                                                    <span>({{$starRatingCount->count}}) {{ round(($starRatingCount->count / $totalRatingCount)*100, 2) }}%</span>
                                                    @else
                                                      0
                                                    @endif
                                                  </td>
                                              </tr>
                                            @endforeach                                            
                                          </table>
                                      </div>
                                  </div>
                              </div>
                        </div>
                        <div id="ratings-container">
                            @if($ratings->count()>0)
                                @foreach ($ratings as $rating)
                                <div class="card">
                                                          
                                  </div>
                                @endforeach

                                {{-- pagination  --}}

                                    {{-- <div class="mt-5">
                                      {{ $posts->links('pagination::bootstrap-5')}}
                                  </div> --}}
                              @endif
                          </div>
                        
                      </div>
                  </div>
                </div>
                
@endif

    
                @if(!empty($response->rating))
                    <div class="container">
                      <div class="row">
                        <div class="col mt-4">
                          <p class="font-weight-bold">Review</p>
                          <div class="form-group row">
                            <input type="hidden" name="" value="">
                            <div class="col">
                              <div class="rated">
                                @for($i=1; $i<=$response->rating; $i++)
                                  <label class="star-rating-complete" title="text">{{$i}} stars</label>
                                @endfor
                              </div>
                            </div>
                          </div>
                          <div class="form-group row mt-4">
                            <div class="col">
                              <p>{{ $response->comment }}</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                @else
                    <div class="container">
                      <div class="row">
                        <div class="col mt-4">
                          <form class="py-2 px-4" id="ratingForm" style="box-shadow: 0 0 10px 0 #dbadad;" onsubmit="event.preventDefault(); submitRating();" method="POST" autocomplete="off">
                            @csrf
                            <p class="font-weight-bold">Review</p>
                            <div class="form-group row">

                              @if(auth()->check())
                              <input type="hidden" name="email" value="{{ auth()->user()->email }}">
                              @endif

                              
                              <div class="col">
                                <div class="rate">
                                  <input type="radio" id="star5" class="rate" name="rating" value="5"/>
                                  <label for="star5" title="text">5 stars</label>
                                  <!-- Add remaining star rating inputs here -->

                                  <input type="radio" checked id="star4" class="rate" name="rating" value="4"/>
                                    <label for="star4" title="text">4 stars</label>
                                    <input type="radio" id="star3" class="rate" name="rating" value="3"/>
                                    <label for="star3" title="text">3 stars</label>
                                    <input type="radio" id="star2" class="rate" name="rating" value="2">
                                    <label for="star2" title="text">2 stars</label>
                                    <input type="radio" id="star1" class="rate" name="rating" value="1"/>
                                    <label for="star1" title="text">1 star</label>
                                </div>
                              </div>
                            </div>
                            <div class="form-group row mt-4">
                              <div class="col">
                                <textarea class=" summernote form-control" name="comment" rows="6" placeholder="Comment" maxlength="200"></textarea>
                              </div>
                            </div>
                            <div class="mt-3 text-right">
                              <button type="submit" class="btn btn-sm py-2 px-3 btn-info">Submit</button>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                @endif