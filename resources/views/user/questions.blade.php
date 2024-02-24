@extends('layouts.app')


@php
    $page= 'Ask';
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
            <img src="{{asset('usr_assets/images/Question_jiggasha.png')}}" class="img-fluid w-10">
          </div>
      
          
          <div class="widget widget-author">
            
            <div class="media align-items-center">
              
              <div class="media-body">
                <h5 class="mb-1" style="display:flex; justify-content: space-between;" onclick="toggleContent(this)">হালালজবসে কি কোনো চাকরী দেয়া হয়?<span class="toggle-icon" style="font-size: x-large;">+</span><span class="toggle-icon" style="display: none; font-size: x-large;">-</span>
                </h5>
                <span style="display: none">এখানে কোনো চাকরী দেয়া হয় না। এখানে আপনার দক্ষতা অনুযায়ী সার্ভিস তৈরির মাধ্যমে উপার্জন করে নিজের কর্মসংস্থান নিজেকেই তৈরি করতে হবে। এটা চাকরীর চেয়েও উত্তম।</span>
              </div>
            </div>
            <div class="media align-items-center">
              
              <div class="media-body">
                <h5 class="mb-1" style="display:flex; justify-content: space-between;" onclick="toggleContent(this)">হালালজবসে কোনো প্রডাক্ট বিক্রি করা যাবে?<span class="toggle-icon" style="font-size: x-large;">+</span><span class="toggle-icon" style="display: none; font-size: x-large;">-</span>
                </h5>
                <span style="display: none">না, হালালজবসে সরাসরি কোনো প্রডাক্ট বিক্রির বিজ্ঞাপন এপ্রুভ করা হয় না। এখানে সেবা প্রদানের জন্য সার্ভিস তৈরি করতে পারবেন। তবে আপনার সার্ভিস যদি প্রোডাক্ট প্রস্তুতকরণের হয়ে থাকে তাহলে সেটা এপ্রুভ হবে। যেমন আপনি সরাসরি পাঞ্জাবি বিক্রির বিজ্ঞাপন দিলে তা এপ্রুভ হবে না, তবে আপনি যদি কারখানা থেকে পাঞ্জাবী প্রস্তুত করার সার্ভিস তৈরি করেন তা এপ্রুভ হবে।</span>
              </div>
            </div>
            <div class="media align-items-center" style="margin-bottom: 8px">
              
              <div class="media-body">
                <h5 class="mb-1" style="display:flex; justify-content: space-between;" onclick="toggleContent(this)">আমার সার্ভিসটি এপ্রুভ হচ্ছে না কেন?<span class="toggle-icon" style="font-size: x-large;">+</span><span class="toggle-icon" style="display: none; font-size: x-large;">-</span>
                </h5>
                <span style="display: none">কয়েকটি কারণে সার্ভিস এপ্রুভ হয় না। যেমন, আপনি যদি কোনো প্রডাক্ট বিক্রির সার্ভিস তৈরি করেন তাহলে এপ্রুভ হবে না। কোনো হারাম সার্ভিস এপ্রুভ হবে না। মানসম্মত না হলে এপ্রুভ হবে না। মেয়েদের ছবি আপলোড করলেও এপ্রুভ হবে না।</span>
              </div>
            </div>
            <div class="media align-items-center" style="margin-bottom: 8px">
              
              <div class="media-body">
                <h5 class="mb-1" style="display:flex; justify-content: space-between;" onclick="toggleContent(this)">আমি কীভাবে হালালজবসে একাউন্ট খুলতে পারি?<span class="toggle-icon" style="font-size: x-large;">+</span><span class="toggle-icon" style="display: none; font-size: x-large;">-</span>
                </h5>
                <span style="display: none">‘সাইন আপ’ বাটনে ক্লিক করে আপনার ইমেইল ব্যবহার করে একাউন্ট খুলতে পারেন।</span>
              </div>
            </div>
            <div class="media align-items-center" style="margin-bottom: 8px">
              
              <div class="media-body">
                <h5 class="mb-1" style="display:flex; justify-content: space-between;" onclick="toggleContent(this)">হালালজবসে একাউন্ট খুলতে কি টাকা লাগে?
                  <span class="toggle-icon" style="font-size: x-large;">+</span><span class="toggle-icon" style="display: none; font-size: x-large;">-</span>
                </h5>
                <span style="display: none">হালালজবসে একাউন্ট খুলতে টাকার প্রয়োজন নেই।</span>
              </div>
            </div>
            <div class="media align-items-center" style="margin-bottom: 8px">
              
              <div class="media-body">
                <h5 class="mb-1" style="display:flex; justify-content: space-between;" onclick="toggleContent(this)">হালালজবসের মাধ্যমে সার্ভিস দিলে কি কমিশন দিতে হয়?<span class="toggle-icon" style="font-size: x-large;">+</span><span class="toggle-icon" style="display: none; font-size: x-large;">-</span>
                </h5>
                <span style="display: none">হালালজবস এখন পর্যন্ত সম্পূর্ণ ফ্রি। ভবিষ্যতে কোনো চার্জ বসানো হলে ইউজারদের জানিয়ে দেওয়া হবে ইন শা আল্লাহ।</span>
              </div>
            </div>
            <div class="media align-items-center" style="margin-bottom: 8px">
              
              <div class="media-body">
                <h5 class="mb-1" style="display:flex; justify-content: space-between;" onclick="toggleContent(this)">হালালজবসে প্রজেক্ট খুলতে কি কোন টাকা লাগে?<span class="toggle-icon" style="font-size: x-large;">+</span><span class="toggle-icon" style="display: none; font-size: x-large;">-</span>
                </h5>
                <span style="display: none">এখানে প্রজেক্ট খোলা একদম ফ্রি।</span>
              </div>
            </div>
            <div class="media align-items-center" style="margin-bottom: 8px">
              
              <div class="media-body">
                <h5 class="mb-1" style="display:flex; justify-content: space-between;" onclick="toggleContent(this)">আমি কি একই সাথে সার্ভিস এবং প্রজেক্ট উভয়ের জন্য আলাদা একাউন্ট খুলতে পারবো?<span class="toggle-icon" style="font-size: x-large;">+</span><span class="toggle-icon " style="display: none; font-size: x-large;">-</span>
                </h5>
                <span style="display: none">আপনি এক একাউন্ট থেকেই প্রজেক্ট তৈরি এবং সার্ভিস বিক্রি করতে পারবেন। মেনুবার থেকে Switch account বাটনে ক্লিক করে একাউন্টের টাইপ চেঞ্জ করতে পারবেন।</span>
              </div>
            </div>
            <div class="media align-items-center" style="margin-bottom: 8px">
              
              <div class="media-body">
                <h5 class="mb-1" style="display:flex; justify-content: space-between;" onclick="toggleContent(this)">সার্ভিস প্রদান করার একাউন্ট দিয়ে কি প্রজেক্ট খোলা যায়?<span class="toggle-icon" style="font-size: x-large;">+</span><span class="toggle-icon" style="display: none; font-size: x-large;">-</span>
                </h5>
                <span style="display: none">জ্বি। মেনুবার থেকে Switch account বাটনে ক্লিক করে একাউন্টের টাইপ চেঞ্জ করে করতে পারবেন।</span>
              </div>
            </div>
            <div class="media align-items-center" style="margin-bottom: 8px">
              
              <div class="media-body">
                <h5 class="mb-1" style="display:flex; justify-content: space-between;" onclick="toggleContent(this)">আমি সার্ভিস প্রদান করে টাকা পাবো কিভাবে?<span class="toggle-icon" style="font-size: x-large;">+</span><span class="toggle-icon" style="display: none; font-size: x-large;">-</span>
                </h5>
                <span style="display: none">যে বায়ার আপনার সার্ভিস ক্রয় করবে, তার সাথে ব্যক্তিগতভাবে আলোচনা করে লেনদেন করতে হবে। আপাতত ব্যক্তিগত লেনদেনে হালালজবস কোনো হস্তক্ষেপ করছে না।</span>
              </div>
            </div>
            <div class="media align-items-center" style="margin-bottom: 8px">
              
              <div class="media-body">
                <h5 class="mb-1" style="display:flex; justify-content: space-between;" onclick="toggleContent(this)">আমি স্টুডেন্ট, আমিও কি হালালজবস এ একাউন্ট তৈরি করে সার্ভিস বিক্রি করতে পারবো?<span class="toggle-icon" style="font-size: x-large;">+</span><span class="toggle-icon" style="display: none; font-size: x-large;">-</span>
                </h5>
                <span style="display: none">অবশ্যই, স্টুডেন্টরা পড়াশোনার পাশাপাশি উপার্জন করতে পারলে তো অনেক ভাল। আমরা সেটা আরো উৎসাহিত করি।</span>
              </div>
            </div>
            <div class="media align-items-center" style="margin-bottom: 8px">
              
              <div class="media-body">
                <h5 class="mb-1" style="display:flex; justify-content: space-between;" onclick="toggleContent(this)">মেয়েরাও কি হালালজবস এ একাউন্ট তৈরি করে সার্ভিস বিক্রি করতে পারবে?<span class="toggle-icon" style="font-size: x-large;">+</span><span class="toggle-icon" style="display: none; font-size: x-large; ">-</span>
                </h5>
                <span style="display: none">যে কেউ একাউন্ট তৈরি করে সার্ভিস বিক্রি করতে পারবে। তবে মেয়েদের বেপর্দা ছবি আপলোড করা যাবে না।</span>
              </div>
            </div>
          </div>       
        </aside>
      </div>
    </div>
  </section>
@endsection