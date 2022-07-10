
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
     
        <div class="container-fluid py-5">
            <div class="row">
              <div class="col-md-10">
                <div class="card">
                  <div class="card-header pb-0">
                    <div class="d-flex align-items-center">
                      <p class="mb-0"></p>
                    </div>
                  </div>
                  <div class="card-body">
                    <p class="text-uppercase text-sm">Category</p>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label for="example-text-input" class="form-control-label">Category Name</label>
                          <input class="form-control" type="text">
                        </div>
                        <button class="btn btn-primary btn-sm ms-auto">Create</button>

                      </div>
                    
                  </div>
                </div>
              </div>
            
            </div>
           
          </div>
           
    
         </div>
      
    
     <!-- End Content -->
     
  </main>
 

    @include('layout.fixed-plugin')



   @include('layout.footer-scripts')


</body>

</html>