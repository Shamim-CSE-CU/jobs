<header class="navigation fixed-top">
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-white">
        <a class="navbar-brand order-1" href="{{url('/')}}" style="display: inherit;">
          
            <iconify-icon icon="arcticons:jobstreet" style="padding-left:17px; text-align:center; align-items:center; font-size:38px; color:hsl(122, 70%, 17%);"></iconify-icon>
            
            <h6 class="logo_name" style="color: rgb(48 102 37); font-size:17px;" >WORKS</h6>
            <h6 class="logo_name" style="color: rgb(143 114 114); font-size:21px;" >PLACE</h6>

        </a>
        <div class="collapse navbar-collapse text-center order-lg-2 order-3" id="navigation">
          <ul class="navbar-nav mx-auto">
            <li class="nav-item">
              <a class="nav-link @if ($page == 'Home') active @endif" href="{{url('/')}}" >হোম</a>
            </li>
            <li class="nav-item">
              <a class="nav-link @if ($page == 'why_halaljobs') active @endif" href="{{route('why_halaljobs')}}">কেন হালাল জবস?</a>
              
            </li>
  
            <li class="nav-item">
              <ul class="navbar-nav mx-auto">
                <li class="nav-item dropdown">
                  <a class="nav-link @if ($page == 'সার্ভিস') active @endif" href="">সার্ভিস</a>
                  <div class="dropdown-menu">
                    @foreach ($categories as $category)
                        <a class="dropdown-item" href="{{route('filter_by_category', $category->id) }}">{{$category->name}}</a>
                    @endforeach
                  </div>
                </li>
              </ul>
            </li>

            <li class="nav-item">
              <ul class="navbar-nav mx-auto">
                <li class="nav-item dropdown">
                  <a class="nav-link @if ($page == 'প্রজেক্ট') active @endif" href="">প্রজেক্ট</a>
                  <div class="dropdown-menu">
                    @foreach ($categories as $category)
                        <a class="dropdown-item" href="{{route('filter_by_project', $category->id) }}">{{$category->name}}</a>
                    @endforeach
                  </div>
                </li>
              </ul>
            </li>
  
            
  
            <li class="nav-item">
              <a class="nav-link @if ($page == 'Ask') active @endif" href="{{route('questions')}}">সচরাচর জিজ্ঞাসা</a>
            </li>

            <li class="nav-item">
              <a class="nav-link @if ($page == 'যোগাযোগ') active @endif" href="{{route('contact')}}">যোগাযোগ
</a>
            </li>
          </ul>
        </div>
  
        <div class="order-2 order-lg-3 d-flex align-items-center">
          <ul class="navbar-nav mx-auto">
            <li class="nav-item dropdown">
              <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false">
                @auth
                    @if (auth()->user()->photo)
                        <img src="{{asset('images/user_photos/'.auth()->user()->photo)}}" alt="" class="rounded-circle" style="height: 30px">
                    @else
                        <img src="{{asset('images/user_photos/user.png')}}" alt="" class="rounded-circle" style="height: 30px">
                    @endif
                    @else
                        <i class="fas fa-user-circle" style="font-size:20px "></i>
                @endauth
                
                
                <i class="ti-angle-down ml-1"></i>
              </a>
              <div class="dropdown-menu">
                
                @auth
                <a class="dropdown-item" href="">{{ auth()->user()->name}}</a>
                
                

                <form action="{{route('logout')}}" method="POST">
                @csrf
                <button type="submit" class="dropdown-item logout">Logout</button>
                </form>
                @else 
                <a class="dropdown-item" href="{{route('login')}}">Login</a>
            
                <a class="dropdown-item" href="{{route('register')}}">Register</a>
                @endauth
  
                
                
              </div>
            </li>
          </ul>
          <button class="navbar-toggler border-0 order-1" type="button" data-toggle="collapse" data-target="#navigation">
            <i class="ti-menu"></i>
          </button>
        </div>
  
      </nav>
    </div>
  </header>


  
