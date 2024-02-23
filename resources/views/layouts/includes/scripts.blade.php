 <!-- JS Plugins -->

 <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

 <script src="{{asset('usr_assets/plugins/bootstrap/bootstrap.min.js')}}"></script>

 <script src="{{asset('usr_assets/plugins/jQuery/jquery.min.js')}}"></script>




 <script src="{{asset('usr_assets/plugins/bootstrap/bootstrap.min.js')}}"></script>

 <script src="{{asset('usr_assets/plugins/slick/slick.min.js')}}"></script>

 <script src="{{asset('usr_assets/plugins/instafeed/instafeed.min.js')}}"></script>

 

 <!--===============================
                   iconify-icon 
     =================================-->

     <script type="text/javascript" src="https://code.iconify.design/iconify-icon/1.0.2/iconify-icon.min.js"></script>


 <!-- Main Script -->
 <script src="{{asset('usr_assets/js/script.js')}}"></script>


{{-- toastr js --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>



 <!-- Toastr Script -->




 <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/gsap.min.js"
 integrity="sha512-cOH8ndwGgPo+K7pTvMrqYbmI8u8k6Sho3js0gOqVWTmQMlLIi6TbqGWRTpf1ga8ci9H3iPsvDLr4X7xwhC/+DQ==" crossorigin="anonymous" 
 referrerpolicy="no-referrer"></script>
 
 
 
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>





 <!-- Swiper JS -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<script>
    @if (Session::has('message'))
        var type = "{{ Session::get('alert-type', 'info') }}"
        switch (type) {
            case 'info':
                toastr.info("{{ Session::get('message') }}");
                break;
            case 'success':
                toastr.success("{{ Session::get('message') }}");
                break;
            case 'warning':
                toastr.warning("{{ Session::get('message') }}");
                break;
            case 'error':
                toastr.error("{{ Session::get('message') }}");
                break;
        }
    @endif
</script>


{{-- sweetalert js --}}
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<!-- Sweetalert Script -->
<script>
    $('.delete').click(function(event) {
        var form = $(this).closest("form");
        event.preventDefault();
        Swal.fire({
            title: 'Do you want to delete it?',
            text: "Once deleted, you will not be able to recover this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it',
            reverseButtons: true
        }).then((result) => {
            if (result.isConfirmed) {
                form.submit()
            }
        })
    });
</script>



{{-- logout alert js --}}
<script>
    $('.logout').click(function(event) {
        var form = $(this).closest("form");
        event.preventDefault();
        Swal.fire({
            title: 'Do you want to log out now?',
            text: "",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes',
            cancelButtonText: 'No',
            reverseButtons: true
        }).then((result) => {
            if (result.isConfirmed) {
                form.submit()
            }
        })
    });
</script>



 {{-- summernote script  --}}
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>


<script>
    $(document).ready(function() {
        $('.summernote').summernote({
            height: 200,
        });
    });
</script>






{{-- real time like dislike --}}
<script> 
    $(document).ready(function() {
    $('.like_button, .dislike_button').click(function(event) {
        event.preventDefault();
        var answerId = $(this).data('answer-id');
        var action = $(this).data('action');

        likeDislike(action, answerId, $(this));
    });
});

function likeDislike(action, answerId, button) {
    var url = action === 'like'
        ? '{{ route('question_answer_like', ['id' => ':answerId']) }}'
        : '{{ route('question_answer_dislike', ['id' => ':answerId']) }}';

    url = url.replace(':answerId', answerId);

    

    $.ajax({
        url: url,
        type: 'GET',
        dataType: 'json',
        success: function(response) {
            var likeCountElement = button.siblings('.like_count');
            var dislikeCountElement = button.siblings('.dislike_count');
            var thumbsUpIcon = button.find('.thumbs_up_icon');
            var thumbsDownIcon = button.find('.thumbs_down_icon');

            if (action === 'like') {


                if(response.likeCheck){


                            // Update like count
                            // likeCountElement.text(response.likeCount);
                            likeCountElement.text(`Like ${response.likeCount}`);

                            likeCountElement.css('color', 'black');
                            likeCountElement.css('font-weight', 'bold');


                            // Reset dislike count
                            dislikeCountElement.text(`DisLike ${response.dislikeCount}`);
                            dislikeCountElement.css('color', 'black');
                            dislikeCountElement.css('font-weight', 'bold');


                            // Update thumbs-up icon
                            thumbsUpIcon.removeClass('fas fa-thumbs-up');
                            thumbsUpIcon.addClass('far fa-thumbs-up');
                            thumbsUpIcon.css('color', 'green');

                            // Reset thumbs-down icon
                            thumbsDownIcon.removeClass('fas fa-thumbs-down');
                            thumbsDownIcon.addClass('far fa-thumbs-down');
                            thumbsDownIcon.css('color', 'red');

                    }else{

                        if(response.dislikeCheck){

                        // Update like count
                            likeCountElement.text(`Like ${response.likeCount}`);
                            likeCountElement.css('color', 'green');
                            likeCountElement.css('font-weight', 'bold');


                            // Reset dislike count
                            dislikeCountElement.text(`DisLike ${response.dislikeCount}`);
                            dislikeCountElement.css('color', 'black');
                            dislikeCountElement.css('font-weight', 'bold');


                            // Update thumbs-up icon
                            thumbsUpIcon.removeClass('far fa-thumbs-up');
                            thumbsUpIcon.addClass('fas fa-thumbs-up');
                            thumbsUpIcon.css('color', 'green');

                            // Reset thumbs-down icon
                            thumbsDownIcon.removeClass('fas fa-thumbs-down');
                            thumbsDownIcon.addClass('far fa-thumbs-down');
                            thumbsDownIcon.css('color', 'red');

                        }else{

                        // Update like count
                            likeCountElement.text(`Like ${response.likeCount}`);
                            likeCountElement.css('color', 'green');
                            likeCountElement.css('font-weight', 'bold');


                            // Reset dislike count
                            dislikeCountElement.text(`DisLike ${response.dislikeCount}`);
                            dislikeCountElement.css('color', 'black');
                            dislikeCountElement.css('font-weight', 'bold');


                            // Update thumbs-up icon
                            thumbsUpIcon.removeClass('far fa-thumbs-up');
                            thumbsUpIcon.addClass('fas fa-thumbs-up');
                            thumbsUpIcon.css('color', 'green');

                            // Reset thumbs-down icon
                            thumbsDownIcon.removeClass('fas fa-thumbs-down');
                            thumbsDownIcon.addClass('far fa-thumbs-down');
                            thumbsDownIcon.css('color', 'red');
                        }

                    }

                
            } 
            else if (action === 'dislike') {



                if(response.dislikeCheck){


                    // Update like count
                    likeCountElement.text(`Like ${response.likeCount}`);
                    likeCountElement.css('color', 'black');
                    likeCountElement.css('font-weight', 'bold');


                    // Reset dislike count
                    dislikeCountElement.text(`DisLike ${response.dislikeCount}`);
                    dislikeCountElement.css('color', 'black');
                    dislikeCountElement.css('font-weight', 'bold');


                    // Update thumbs-up icon
                    thumbsUpIcon.removeClass('fas fa-thumbs-up');
                    thumbsUpIcon.addClass('far fa-thumbs-up');
                    thumbsUpIcon.css('color', 'green');

                    // Reset thumbs-down icon
                    thumbsDownIcon.removeClass('fas fa-thumbs-down');
                    thumbsDownIcon.addClass('far fa-thumbs-down');
                    thumbsDownIcon.css('color', 'red');

                    }else{

                        if(response.likeCheck){

                            // Update like count
                            likeCountElement.text(`Like ${response.likeCount}`);
                            likeCountElement.css('color', 'black');
                            likeCountElement.css('font-weight', 'bold');


                            // Reset dislike count
                            dislikeCountElement.text(`DisLike ${response.dislikeCount}`);
                            dislikeCountElement.css('color', 'red');
                            dislikeCountElement.css('font-weight', 'bold');


                            // Update thumbs-up icon
                            thumbsUpIcon.removeClass('fas fa-thumbs-up');
                            thumbsUpIcon.addClass('far fa-thumbs-up');
                            thumbsUpIcon.css('color', 'green');

                            // Reset thumbs-down icon
                            thumbsDownIcon.removeClass('far fa-thumbs-down');
                            thumbsDownIcon.addClass('fas fa-thumbs-down');
                            thumbsDownIcon.css('color', 'red');

                        }else{

                            // Update like count
                            likeCountElement.text(`Like ${response.likeCount}`);
                            likeCountElement.css('color', 'black');
                            likeCountElement.css('font-weight', 'bold');


                            // Reset dislike count
                            dislikeCountElement.text(`DisLike ${response.dislikeCount}`);
                            dislikeCountElement.css('color', 'red');
                            dislikeCountElement.css('font-weight', 'bold');


                            // Update thumbs-up icon
                            thumbsUpIcon.removeClass('fas fa-thumbs-up');
                            thumbsUpIcon.addClass('far fa-thumbs-up');
                            thumbsUpIcon.css('color', 'green');

                            // Reset thumbs-down icon
                            thumbsDownIcon.removeClass('far fa-thumbs-down');
                            thumbsDownIcon.addClass('fas fa-thumbs-down');
                            thumbsDownIcon.css('color', 'red');
                        }

                    }


                    
                }
            },
            error: function(xhr, status, error) {
                // Handle the error response
            }
        });
    }




</script>




<script>
    // Function to send the form data and update the rating
function submitRating() {
  var formData = new FormData(document.getElementById('ratingForm')); // Assuming your form has the ID 'ratingForm'

  // Send the AJAX request to store the data
  $.ajax({
    url: '/submit-rating', // Replace with the appropriate URL to your Laravel controller
    type: 'POST',
    data: formData,
    processData: false,
    contentType: false,
    success: function(response) {
      // Handle the success response from the controller
      console.log(response);

      var totalRating = button.siblings('.like_count');
      var dislikeCountElement = button.siblings('.dislike_count');
      var thumbsUpIcon = button.find('.thumbs_up_icon');
      var thumbsDownIcon = button.find('.thumbs_down_icon');

      // Fetch the updated rating data
      fetchRatingData();
    },
    error: function(xhr, status, error) {
   
      // Redirect the user to the login page
      window.location.href = '/login'; // Replace with the URL of your login page
    
  }
  });
}

// Function to fetch the rating data from the controller
function fetchRatingData() {
  $.ajax({
    url: '/fetch-rating-data', // Replace with the appropriate URL to your Laravel controller
    type: 'GET',
    success: function(response) {
      // Handle the success response from the controller
      console.log(response);

      // Update the rating data on the page
    //   updateRatingData(response);
    },
    error: function(xhr, status, error) {
      // Handle the error response from the controller
      console.log(xhr.responseText);
    }
  });
}

// Function to update the rating data on the page
function updateRatingData(data) {
  // Update the rating display with the fetched data
  // You can use JavaScript DOM manipulation or a library like jQuery to update the HTML elements with the new data
}

</script>












<script>
    function loadRatings(page) {

        // $.ajaxSetup({
        //     headers:{
        //         'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content');
        //     }
        // });
        $.ajax({
            url: "{{ route('ratings.paginate') }}",
            data: { page: page },
            success: function(response) {
                $('#ratings-container').html(response);
            }
        });
    }

    $(document).ready(function() {
        // Load the initial ratings content
        loadRatings(1);

        // Handle pagination link clicks
        $(document).on('click', '#ratings-container .pagination a', function(e) {
            e.preventDefault();
            var page = $(this).attr('href').split('page=')[1];
            loadRatings(page);
        });
    });
</script>






<!-- Initialize Swiper -->
<script>
    var swiper = new Swiper('.swiper-container', {
        slidesPerView: 'auto', // Number of slides to show initially
        slidesPerGroup: 1, // Number of slides to scroll at a time
        spaceBetween: 30,
        centeredSlides: true,
        autoplay: {
            delay: 5000, // Adjust the delay between slides in milliseconds (e.g., 5000 for 5 seconds)
            disableOnInteraction: true, // Set to false to continue autoplay even when the user interacts with the slider
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        loop: true, // Enable loop mode
    });
</script>



<script>
    function toggleContent(element) {
        // Find the next sibling element of the post title
        var content = element.nextElementSibling;

        // Toggle the display style of the content
        if (content.style.display === "none") {
            content.style.display = "inline"; // Show content
            element.querySelector(".toggle-icon:first-child").style.display = "none"; // Hide plus icon
            element.querySelector(".toggle-icon:last-child").style.display = "inline"; // Show minus icon
        } else {
            content.style.display = "none"; // Hide content
            element.querySelector(".toggle-icon:first-child").style.display = "inline"; // Show plus icon
            element.querySelector(".toggle-icon:last-child").style.display = "none"; // Hide minus icon
        }

        
    }
</script>










<Script>
const tl = gsap.timeline({
  default: {duration: .75, ease: "Power3.easeOut"} //Set default timeline
})

tl.fromTo(".annimate-img",
{scale: 1.4, 
  borderRadius: "0rem"},

{scale: 1,
   borderRadius: "1rem", 
   delay: 0.25,
  duration: 5,
  ease: "elastic.out(2.5,2.5)"
  })

  tl.fromTo(".class1", {x: "100%" , opacity: .5}, {x:0, opacity: 1}, "<30%")
  tl.fromTo(".class2", {y: "100%" , opacity: .5}, {y:0, opacity: 1}, "<30%")
  tl.fromTo(".class3", {x: "-100%" , opacity: .5}, {x:0, opacity: 1}, "<30%")
  tl.fromTo(".class4", {x: "100%" , opacity: .5}, {x:0, opacity: 1}, "<30%")
  tl.fromTo(".class5", {x: "100%" , opacity: .5}, {x:0, opacity: 1}, "<30%")
  tl.fromTo(".class6", {y: "-100%" , opacity: .5}, {y:0, opacity: 1}, "<30%")
  tl.fromTo(".class7", {y: "-100%" , opacity: .5}, {y:0, opacity: 1}, "<30%")
  tl.fromTo(".btn", {y: 20 , opacity: 0}, {y:0, opacity: 1}, "<") //,borderRadius: "1rem"

  const logo = document.querySelector(".logo")
  const letter = logo.textContent.split("")

  console.log(letter)
  logo.textContent = ""

  letter.forEach((letter) =>{
      logo.innerHTML += `<span class="letter">${letter}</span>`//Backtick or Grave accent

  })

  gsap.set(".letter", {display: "inline-block"})
  gsap.fromTo(".letter",{y: "100%"}, {y:0, delay:1, stagger: .05, ease: "back.in"}) //, repeat: -1


    const logo_name = document.querySelector(".logo_name")
    const logo_letter = logo_name.textContent.split("")

    console.log(logo_letter)
    logo_name.textContent = ""

    logo_letter.forEach((logo_letter) =>{
        logo_name.innerHTML += `<span class="logo_letter">${logo_letter}</span>`//Backtick or Grave accent

    })

    gsap.set(".logo_letter", {display: "inline-block"})
    gsap.fromTo(".logo_letter",{y: "100%"}, {y:0, delay:1, stagger: .05, ease: "back.in"}) //, repeat: -1

</Script>






<script>

function searchService() {
    // Get the selected option value
    var categoryId = document.getElementById('F0SGh_category').value;
    
    // Redirect or perform any action based on the selected option
    // For example, redirect to a specific URL with the selected category ID
    if (categoryId) {
        
        window.location.href = "/posts/category/" + categoryId;

    } else {
        // Handle case where no category is selected
        alert("Please select a category");
    }
}


</Script>






