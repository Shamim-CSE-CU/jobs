<!DOCTYPE html>

<html lang="en-us">

@include('layouts.includes.head')

<body>
  <!-- navigation -->
  @include('layouts.includes.navbar')
<!-- /navigation -->

<!-- start of banner -->

<!-- end of banner -->


    @yield('mainSection')



    

    
    
    @include('layouts.includes.footer')

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
  </a>

    @include('layouts.includes.scripts')

</body>
</html>
  


 




