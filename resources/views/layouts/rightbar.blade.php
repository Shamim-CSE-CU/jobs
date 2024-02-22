


  <aside class="col-lg-4 sidebar-home">
    <!-- Search -->
    
  
    <!-- about me -->
    {{-- <div class="widget widget-about">
      <h4 class="widget-title">Hi, I am Alex!</h4>
      <img class="img-fluid" src="{{asset('usr_assets/images/author.jpg')}}" alt="Themefisher">
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vel in in donec iaculis tempus odio nunc laoreet . Libero ullamcorper.</p>
      <ul class="list-inline social-icons mb-3">
        
        <li class="list-inline-item"><a href="#"><i class="ti-facebook"></i></a></li>
        
        <li class="list-inline-item"><a href="#"><i class="ti-twitter-alt"></i></a></li>
        
        <li class="list-inline-item"><a href="#"><i class="ti-linkedin"></i></a></li>
        
        <li class="list-inline-item"><a href="#"><i class="ti-github"></i></a></li>
        
        <li class="list-inline-item"><a href="#"><i class="ti-youtube"></i></a></li>
        
      </ul>
      <a href="about-me.html" class="btn btn-primary mb-2">About me</a>
    </div> --}}
    
    <!-- capcha_image -->
    <div class="capcha_image">
      <img src="" style="background: white; " class="img-fluid w-10">
      <div class="capcha_image-content">
        <p class="text-black">Service Price
        </p>


        



        <p class="text-black" style="font-size: 20px;"><span class="woocommerce-Price-currencySymbol">৳&nbsp;</span>{{$services->payment}}</p>
        
        <button type="button" class="btn btn-secondary" onclick="predict_image()" style="background-color: rgb(118, 118, 204)">Order Now</button>
      </div>
    </div>


    
  
    
    <!-- Search -->
    
    
  
    <!-- categories -->
    <div class="widget widget-categories">
      <h4 class="widget-title"><span>Disease Categories</span></h4>
      <ul class="list-unstyled widget-list">
        {{-- <li><a href="tags.html" class="d-flex">Creativity <small class="ml-auto">(4)</small></a></li> --}}

        {{-- @foreach ($categories as $category)
        <li class="d-flex"><a href="">{{$category->name}}</a></li>
        @endforeach --}}
        
      </ul>
    </div>

    <!-- authors -->
    <div class="widget widget-author">
      <h4 class="widget-title">Authors</h4>
      <div class="media align-items-center">
        <div class="mr-3">
          <img class="widget-author-image" src="{{asset('usr_assets/images/profile_pic.jpg')}}">
        </div>
        <div class="media-body">
          <h5 class="mb-1"><a class="post-title" href="https://www.facebook.com/profile.php?id=100008406361771">MD. SHAMIM MIA</a></h5>
          <span>Department of Computer Science Engineering , University of Chittagong</span>
        </div>
      </div>
      <div class="media align-items-center">
        <div class="mr-3">
          <img class="widget-author-image" src="{{asset('usr_assets/images/profile_pic.jpg')}}">
        </div>
        <div class="media-body">
          <h5 class="mb-1"><a class="post-title" href="https://www.facebook.com/profile.php?id=100008406361771">MD. SHAMIM MIA</a></h5>
          <span>Department of Computer Science Engineering , University of Chittagong</span>
        </div>
      </div>
      <div class="media align-items-center">
        <div class="mr-3">
          <img class="widget-author-image" src="{{asset('usr_assets/images/profile_pic.jpg')}}" alt="John Doe">
        </div>
        <div class="media-body">
          <h5 class="mb-1"><a class="post-title" href="https://www.facebook.com/profile.php?id=100008406361771">MD. SHAMIM MIA</a></h5>
          <span>Department of Computer Science Engineering , University of Chittagong</span>
        </div>
      </div>
    </div>

    <div class="widget">



      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d233668.38703692693!2d90.27919586057241!
    3d23.780573258035947!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8b087026b81%3A0x8fa563bbdd5904c2!
    2sDhaka!5e0!3m2!1sen!2sbd!4v1686306998860!5m2!1sen!2sbd" width="60" 
    height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

    </div>
   
  </aside>



  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script>
    function predict_image() {
        

            window.location.href =
                'http://localhost/pd/transorflowModel.html';

    }
  </script>