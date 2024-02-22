<head>
    <meta charset="utf-8">
    <title>JOBS | HALALJOBS</title>
  
    <!-- mobile responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="This is meta description">
    <meta name="author" content="">
    <meta name="generator" content="" />
  
    <!-- plugins -->
    
    <link rel="stylesheet" href="{{asset('usr_assets/plugins/bootstrap/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('usr_assets/plugins/themify-icons/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('usr_assets/plugins/slick/slick.css')}}">
  
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="{{asset('usr_assets/css/style.css')}}" media="screen">

    


    
  
    <!--Favicon-->
    <link rel="shortcut icon" href="{{asset('usr_assets/images/leaf.png')}}" type="image/x-icon">
    <link rel="icon" href="{{asset('usr_assets/images/leaf.png')}}" type="image/x-icon">

    {{-- toastr css --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <!-- include summernote css/js -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">

    {{-- font-awesome cdn  --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css" integrity="sha512-q3eWabyZPc1XTCmF+8/LuE1ozpg5xxn7iO89yfSOd5/oKvyqLngoNGsx8jq92Y8eXJ/IRxQbEC+FGSYxtk2oiw==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
  
    <meta property="og:title" content="JOBS | HALALJOBS" />
    <meta property="og:description" content="This is meta description" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="" />
    <meta property="og:updated_time" content="2020-03-15T15:40:24+06:00" />
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <style>
      .rate {
          float: left;
          height: 46px;
          padding: 0 10px;
          }
          .rate:not(:checked) > input {
          position:absolute;
          display: none;
          }
          .rate:not(:checked) > label {
          float:right;
          width:1em;
          overflow:hidden;
          white-space:nowrap;
          cursor:pointer;
          font-size:30px;
          color:#ccc;
          }
          .rated:not(:checked) > label {
          float:right;
          width:1em;
          overflow:hidden;
          white-space:nowrap;
          cursor:pointer;
          font-size:30px;
          color:#ccc;
          }
          .rate:not(:checked) > label:before {
          content: '★ ';
          }
          .rate > input:checked ~ label {
          color: #ffc700;
          }
          .rate:not(:checked) > label:hover,
          .rate:not(:checked) > label:hover ~ label {
          color: #deb217;
          }
          .rate > input:checked + label:hover,
          .rate > input:checked + label:hover ~ label,
          .rate > input:checked ~ label:hover,
          .rate > input:checked ~ label:hover ~ label,
          .rate > label:hover ~ input:checked ~ label {
          color: #c59b08;
          }
          .star-rating-complete{
             color: #c59b08;
          }
          .rating-container .form-control:hover, .rating-container .form-control:focus{
          background: #fff;
          border: 1px solid #ced4da;
          }
          .rating-container textarea:focus, .rating-container input:focus {
          color: #000;
          }
          .rated {
          float: left;
          height: 46px;
          padding: 0 10px;
          }
          .rated:not(:checked) > input {
          position:absolute;
          display: none;
          }
          .rated:not(:checked) > label {
          float:right;
          width:1em;
          overflow:hidden;
          white-space:nowrap;
          cursor:pointer;
          font-size:30px;
          color:#ffc700;
          }
          .rated:not(:checked) > label:before {
          content: '★ ';
          }
          .rated > input:checked ~ label {
          color: #ffc700;
          }
          .rated:not(:checked) > label:hover,
          .rated:not(:checked) > label:hover ~ label {
          color: #deb217;
          }
          .rated > input:checked + label:hover,
          .rated > input:checked + label:hover ~ label,
          .rated > input:checked ~ label:hover,
          .rated > input:checked ~ label:hover ~ label,
          .rated > label:hover ~ input:checked ~ label {
          color: #c59b08;
          }










a {
    text-decoration: none !important;
    color: inherit
}

a:hover {
    color: #455A64
}
#posts-container{
    height: 450px; display:flex; overflow-x:scroll;
}
#posts-container::-webkit-scrollbar{ 
    display: none;
}

.card {
    width:30.5%;
    height: 417px;
    display:grid;
    margin-right:15px;
    margin-left: 15px;
    grid-template-columns:auto auto auto;
    flex:none;
    border-radius: 5px;
    background-color: white;
    margin-top: 30px;
    padding-bottom: 30px
    filter: grayscale(100%);
    transition:transform 0.5s;
}
/* .card:hover{
    filter: grayscale(0);
    cursor: pointer;
    transform: scale(1.1);
} */

.card-video{
    
    display:grid;
    margin-right:15px;
    margin-left: 15px;
    grid-template-columns:auto auto auto;
    
    flex:none;
    border-radius: 5px;
    background-color: white;
    padding-left: 20px;
    padding-right: 20px;
    margin-top: 30px;
    padding-top: 20px;
    padding-bottom: 20px
    filter: grayscale(100%);
    transition:transform 0.5s;
}

.card-video:hover{
    filter: grayscale(0);
    cursor: pointer;
    transform: scale(1.1);
}




/* email start */

.sms-container {
      /* width:70vw; */
      margin: 40px auto;
      text-align: center;
      padding: 0;
    }
    .email {
      width: 50%;
      border: 2px solid #ccc;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
      padding: 20px;
      margin: auto;
    }
    input,
    textarea {
      width: 100%;
      border-radius: 5px;
      border: none;
      padding: 5px;
      outline-style: solid;
      outline-width: 2px;
      outline-color: rgb(97, 87, 87);
      outline-offset: -2px;
    }
    h1 {
      color: #fff;
    }
    form label {
      min-width: 100%;
      text-align: left;
      display: block;
    }
    input[type="submit"] {
      width: 150px;
      background: rgb(48 102 37);
      font-weight: 700;
      letter-spacing: 2px;
      font-size: large;
      line-height: 50px;
      cursor: pointer;
    }
    .response-container {
      
      width: 50%;
      margin: auto;
      text-align: left;
    }

    /* email end */



.rating-box {
    width: 130px;
    height: 130px;
    margin-right: auto;
    margin-left: auto;
    background-color: #FBC02D;
    color: #fff
}

.rating-label {
    font-weight: bold
}

.rating-bar {
    width: 300px;
    padding: 8px;
    border-radius: 5px
}

.bar-container {
    width: 100%;
    background-color: #f1f1f1;
    text-align: center;
    color: white;
    border-radius: 20px;
    cursor: pointer;
    margin-bottom: 5px
}

.bar-5 {
    width: 70%;
    height: 13px;
    background-color: #FBC02D;
    border-radius: 20px
}

.bar-4 {
    width: 30%;
    height: 13px;
    background-color: #FBC02D;
    border-radius: 20px
}

.bar-3 {
    width: 20%;
    height: 13px;
    background-color: #FBC02D;
    border-radius: 20px
}

.bar-2 {
    width: 10%;
    height: 13px;
    background-color: #FBC02D;
    border-radius: 20px
}

.bar-1 {
    width: 0%;
    height: 13px;
    background-color: #FBC02D;
    border-radius: 20px
}

td {
    padding-bottom: 10px
}

.star-active {
    color: #FBC02D;
    margin-top: 10px;
    margin-bottom: 10px
}

.star-active:hover {
    color: #F9A825;
    
    cursor: pointer
}

.star-inactive {
    color: #CFD8DC;
    margin-top: 10px;
    margin-bottom: 10px
}

.blue-text {
    color: #0091EA
}

.content {
    font-size: 18px
}

.profile-pic {
    width: 90px;
    height: 90px;
    border-radius: 100%;
    margin-right: 30px
}

.pic {
    width: 80px;
    height: 80px;
    margin-right: 10px
}

.vote {
    cursor: pointer
}



   </style>
    

  </head>