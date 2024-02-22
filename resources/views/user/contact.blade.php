@extends('layouts.app')


@php
    $page= 'যোগাযোগ';
@endphp

@section('mainSection')

    <!-- questions section -->
  <section class="section-sm">
    <div class="container">
      <div class="row justify-content-center">
         
        



        <aside class="col-lg-12 sidebar-home">
          <!-- Search -->
          
        
          
          
          <!-- image -->
          <div class="capcha_image">
            <img src="{{asset('usr_assets/images/jugajug.png')}}" class="img-fluid w-10">
          </div>
      
      
          
        
          
          <!-- Search -->
          
          
        
        </aside>
    
      </div>
    </div>



    

    <div class="sms-container">
      <form class="email" action="{{ route('send.sms') }}" method="POST">
          @csrf
          <h1>Send Email Online</h1>
          <label for="recipient">Recipient's Email</label>
          <input type="text" name="recipient" id="recipient">
          <label for="recipient">Subject</label>
          <input type="text" name="subject" id="recipient">
          <label for="sms">Write Email</label>
          <textarea name="sms" id="sms" cols="30" rows="10"></textarea>
          <input type="submit" value="Send Email" name="submit">
      </form>
      <div class="response-container">
          <h1>SMS Status</h1>
          <p>{{ session('success') }}</p>
          <p>{{ session('error') }}</p>
      </div>
    </div>
    




    

    
    
    
  </section>





  @endsection