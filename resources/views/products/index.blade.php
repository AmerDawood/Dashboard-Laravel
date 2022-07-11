
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
              @if (session()->has('success'))
  <div class="alert alert-success">
    {{ session()->get('success') }}
  </div>
@endif
              <p class="text-uppercase text-sm">

                {{

                  isset($product
                  ) ? "Update Product" :  "Create Product";
            
                 }}
              </p>
              <div class="row">
                <form action="{{isset($product)?route('product.update',$product->id):route('products.store')}}" method="POST" enctype="multipart/form-data">
                  @csrf
                  @if (isset($product))
                  @method('PUT')
                  
                  @endif
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Title</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="title" 
                    value="{{
    
                      isset($product) ? $product->title :  "";
                
                     }}">
                  </div>

                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Description</label>
                    <input  class="form-control" name="description" id="exampleFormControlTextarea1">
                  </div>

                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Content</label>
                    <input class="form-control" name="content" value="{{isset($product) ? $product->content :  "";}}" type="text">
                  </div>

                  <div style="padding-bottom: 20px">
                    <label  for="selectCategoryId" class="form-label">Category ID</label>
                    <select  id="selectCategoryId" class="form-select" name="categoryID">
                    
    
                      @foreach ($categories as $category)
    
                       <option value="{{$category->id}}">{{$category->name}} </option>
    
                      @endforeach
                     
                    </select>
                  </div>


                  <label for="example-text-input" class="form-control-label">Image</label>


                  @if(isset($product))
                  <div class="form-gorup">
                   <img src="{{asset('storage/' . $product->image)}}" style="width: 200px ; padding-bottom: 10px;"> 
                 </div> 
 
                  @endif
                  
               
               <div class="input-group mb-3">
                 <input type="file" class="form-control" name="image" id="inputGroupFile02">
                 {{-- <label class="input-group-text" for="inputGroupFile02">Upload Image</label> --}}
               </div>


                  <button class="btn btn-primary btn-sm ms-auto" type="submit">
                    {{
                      isset($product)?"Update":"Create"
                     }}
                  </button>
              </form>
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

   {{-- @section('')
       
   @endsection --}}


</body>

</html>