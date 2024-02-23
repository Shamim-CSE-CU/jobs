
<div class="banner text-center">
    <div class="container">





      <nav>
        <img src="{{asset('usr_assets/images/Bismillah-hir-rahman-nir-raheem.jpg')}}"/>
        {{-- <h1 class="logo">হালালজবস</h1> --}}
    </nav>

    <div class="hero">
        {{-- <img src="{{asset('usr_assets/images/potatoanimationImage.jpg')}}" alt="image" class="annimate-img"> --}}
        
        <div class="group">
            <div class="group-text">
                <h2><span class="class1">আপনার </span></h2>
                <h2><span class="class2">দৈনন্দিন </span></h2>
                <h2><span class="class3">প্রয়োজনে </span></h2>
                <h2><span class="class4">সার্ভিস </span></h2>
                <h2><span class="class4">প্রদানকারীকে </span></h2>
                <h2><span class="class4">খুঁজে </span></h2>
                <h2><span class="class4">নিন </span></h2>
                <h2><span class="class4">সহজেই </span></h2>
    
            </div>
    
            <div class="group-text">
                <h2><span class="class5">হালালজবসে যে কোনো সার্ভিস প্রদানকারীকে খুঁজে পাবেন, একইসাথে বিশেষ কোনো প্রজেক্ট সম্পন্ন করিয়ে নিতে পারবেন।</span></h2>
                {{-- <h2><span class="class6">যে</span></h2>
                <h2><span class="class6">Wealth</span></h2> --}}
    
            </div>
            
           <!-- search -->
          {{-- <form class="search">
            <input id="search-query" name="s" type="search" placeholder="কি সার্ভিস খুঁজছেন?
            ">
             
          </form> --}}

          

          <div class="mt-4"> 
              
              
                  <div class="row row-20 align-items-center list-fileds " style="display: flex; justify-content:center;">

                    
                        {{-- <div class="item-column col-12 col-md-5 col-lg-5  has-icon ">                      
                          <div class="form-group-inner inner has-icon">
                              <i class="ti-search"></i>
                              <input type="text" name="filter-title" class="form-control " value="" id="F0SGh_title" placeholder="কি সার্ভিস খুঁজছেন?" data-listener-added_85f5cebe="true">
                          </div>
                        </div> --}}
                        <div class="item-column col-12 col-md-4 col-lg-4   item-last">
                              <div class="form-group-category tax-select-field">
                                    <div class="form-group-inner inner ">
                                          <select name="filter-category" class="form-control select2-hidden-accessible" id="F0SGh_category" data-placeholder="ক্যাটাগরি" tabindex="-1" aria-hidden="true">

                                            <option value="">ক্যাটাগরি</option>
                                                @foreach ($categories as $category)
                                                <option class="level-0" value="{{$category->id}}">{{$category->name}}</option>
                                               
                                                @endforeach
                                                
                                                
                                          </select>
                                    </div>
                              </div>
                        </div>
                        <div class="col-12 col-md-2 form-group-search " style="display: flex; justify-content: center;
                        border-radius: 20px; background-color:rgb(248, 250, 247); border:1px solid rgb(81, 175, 4); transition: background-color 0.5ms;">
                          <div class="d-flex align-items-center justify-content-end">
                            <button class="btn-submit btn w-100 btn-theme btn-inverse" type="" onclick="searchService()">
                            সার্ভিস খুঁজুন<i class="flaticon-right-up next"></i> </button>
                          </div>
                          <div class="input-group-append">
                              <button class="btn" type="button">
                                  <i class="fas fa-search fa-sm"></i>
                              </button>
                          </div>
                        </div>
                  </div>
              
            </div>
          </div>



        <div class="row">
          <div class="col-lg-9 mx-auto">
              
              @foreach ($categories as $category)
               <li class="list-inline-item" style="border-radius: 10px; background-color:rgb(196 192 201); padding-left:5p x;padding-right:5px"></li>
              @endforeach
            </ul>
          </div>
        </div>
      </div>

    </div>



  
  
    
    <svg class="banner-shape-1" width="39" height="40" viewBox="0 0 39 40" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M0.965848 20.6397L0.943848 38.3906L18.6947 38.4126L18.7167 20.6617L0.965848 20.6397Z" stroke="#040306"
        stroke-miterlimit="10" />
      <path class="path" d="M10.4966 11.1283L10.4746 28.8792L28.2255 28.9012L28.2475 11.1503L10.4966 11.1283Z" />
      <path d="M20.0078 1.62949L19.9858 19.3804L37.7367 19.4024L37.7587 1.65149L20.0078 1.62949Z" stroke="#040306"
        stroke-miterlimit="10" />
    </svg>
    
    <svg class="banner-shape-2" width="39" height="39" viewBox="0 0 39 39" fill="none" xmlns="http://www.w3.org/2000/svg">
      <g filter="url(#filter0_d)">
        <path class="path"
          d="M24.1587 21.5623C30.02 21.3764 34.6209 16.4742 34.435 10.6128C34.2491 4.75147 29.3468 0.1506 23.4855 0.336498C17.6241 0.522396 13.0233 5.42466 13.2092 11.286C13.3951 17.1474 18.2973 21.7482 24.1587 21.5623Z" />
        <path
          d="M5.64626 20.0297C11.1568 19.9267 15.7407 24.2062 16.0362 29.6855L24.631 29.4616L24.1476 10.8081L5.41797 11.296L5.64626 20.0297Z"
          stroke="#040306" stroke-miterlimit="10" />
      </g>
      <defs>
        <filter id="filter0_d" x="0.905273" y="0" width="37.8663" height="38.1979" filterUnits="userSpaceOnUse"
          color-interpolation-filters="sRGB">
          <feFlood flood-opacity="0" result="BackgroundImageFix" />
          <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
          <feOffset dy="4" />
          <feGaussianBlur stdDeviation="2" />
          <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
          <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow" />
          <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow" result="shape" />
        </filter>
      </defs>
    </svg>
  
    
    <svg class="banner-shape-3" width="39" height="40" viewBox="0 0 39 40" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M0.965848 20.6397L0.943848 38.3906L18.6947 38.4126L18.7167 20.6617L0.965848 20.6397Z" stroke="#040306"
        stroke-miterlimit="10" />
      <path class="path" d="M10.4966 11.1283L10.4746 28.8792L28.2255 28.9012L28.2475 11.1503L10.4966 11.1283Z" />
      <path d="M20.0078 1.62949L19.9858 19.3804L37.7367 19.4024L37.7587 1.65149L20.0078 1.62949Z" stroke="#040306"
        stroke-miterlimit="10" />
    </svg>
  
    
    <svg class="banner-border" height="240" viewBox="0 0 2202 240" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path
        d="M1 123.043C67.2858 167.865 259.022 257.325 549.762 188.784C764.181 125.427 967.75 112.601 1200.42 169.707C1347.76 205.869 1901.91 374.562 2201 1"
        stroke-width="2" />
    </svg>
  </div>




 