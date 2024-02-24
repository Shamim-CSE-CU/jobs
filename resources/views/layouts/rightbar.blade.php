


  <aside class="col-lg-4 sidebar-home">
   
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
      <h4 class="widget-title"><span>Categories:</span></h4>
      <ul class="list-unstyled widget-list">
        
        

        
        <li class="d-flex"><a href="{{ '/posts/category/' . $services->category }}">{{ $services->category_name }}</a></li>

        
        
      </ul>
    </div>

    <!-- authors -->
    <div class="widget widget-author">
      <h4 class="widget-title" style="border-bottom-width: thin;
      border-bottom-style: inset;
      border-bottom-color: #d0dbdb;">About The Seller</h4>
      <div class="media align-items-center">
        <div class="mr-3">
          <img class="widget-author-image" src="{{ asset('images/user_photos/' . $services->user_photo) }}">
        </div>
        <div class="media-body">
          <h5 class="mb-1"><a class="post-title" href="">{{$services->user_name}}</a></h5>
          <span>Department of Computer Science Engineering , University of Chittagong</span>
        </div>
      </div>
      <div class="media align-items-center">
        
        <div class="media-body">
          <h5 class="mb-1" style="display: flex;
          justify-content: space-between;"><a class="post-title" href="https://www.facebook.com/profile.php?id=100008406361771">Mobile:</a><span>01949969731</span></h5>
          
        </div>
        
      </div>
      <div class="media align-items-center" >
          <div class="media-body" style="display:flex; justify-content:center">
            <a href="" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" style="background: #5bbb7b;height:40px;width:158px;" data-toggle="modal" data-target="#AddpostModel"><b>Contact me</b></a>
            
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







{{-- email model  --}}


<div class="modal" id="AddpostModel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content" style="width: 550px;
            height: 391px; padding: 20px;
    margin: auto;">
                
                
                  <form class="" action="{{ route('send.sms') }}" method="POST">
                      @csrf
                      
                      <label for="recipient">Recipient's Email</label>
                      <input type="text" name="recipient" id="recipient">
                      <label for="recipient">Subject</label>
                      <input type="text" name="subject" id="recipient">
                      <label for="sms">Write Email</label>
                      <textarea name="sms" id="sms" cols="30" rows="4"></textarea>
                      <div style="display: flex; justify-content:center;height:56px;">
                        <input type="submit" style="display: flex; justify-content:center;" value="Send Email" name="submit">
                      </div>
                      
                  </form>
                  {{-- <div class="response-container">
                      <h1>SMS Status</h1>
                      <p>{{ session('success') }}</p>
                      <p>{{ session('error') }}</p>
                  </div> --}}
                
                
            </div>
        </div>
</div>









  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script>
    function predict_image() {
        

            window.location.href =
                'http://localhost/pd/transorflowModel.html';

    }
  </script>