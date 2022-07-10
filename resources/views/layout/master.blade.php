
<!DOCTYPE html>
<html lang="en">



  @include('layout.head')




<body class="g-sidenav-show   bg-gray-100">
  <div class="min-height-300 bg-primary position-absolute w-100"></div>
   

     <!-- Sidebar -->

    @include('layout.main-sidebar')
    <!-- End Sidebar -->


  <main class="main-content position-relative border-radius-lg ">
    
     <!-- Navbar -->
    @include('layout.main-header')
 
     <!-- End Navbar -->


     <!-- Content -->
     
     @yield('content')

     <!-- End Content -->
     
  </main>
 

    @include('layout.fixed-plugin')



   @include('layout.footer-scripts')


</body>

</html>