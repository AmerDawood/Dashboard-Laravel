
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
              <p class="text-uppercase text-sm">
               
                {{
            
                  isset($category) ? "Update Category" :  "Create Category";
            
                 }}
            
                
              </p>
           



              @if (session()->has('success'))
              <div class="alert alert-success">
                {{ session()->get('success') }}
              </div>
            @endif
            
              @if (session()->has('error'))
                  <div class="alert alert-danger">
                    {{session()->get('error')}}
                  </div>
              @endif

             
              {{-- <div class="row">
                <div class="col-md-12">
                 <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Category Name</label>
                    <input type="text" class="form-control" name="name">
                  </div>  --}}


                  
               

                  <form action="{{isset($category)?route('categories.update',$category->id) :route('categories.store')}}" method="POST">
                    @csrf
                    @if (isset($category))
                    @method('PUT')
                    @endif
                    <div class="mb-3">
                      <label class="form-label">Category Name</label>
                      <input type="text" class="form-control" name="name" class="@error('name')is-invalid @enderror "
                      
                       value="{{
        
                        isset($category) ? $category->name :  "";
                  
                       }}"
                      >
                    </div>
        
                    @error('name')
                     <div class="alert alert-danger">
                        {{$message}}
                     </div>
                    
                    @enderror
                  
                    <button type="submit" class="btn btn-primary">
        
                        {{
        
                            isset($category) ? "Update" :  "Create";
                      
                           }}
                    </button>
                  </form>















                  {{-- <button class="btn btn-primary btn-sm ms-auto" type="submit">Create</button> --}}

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