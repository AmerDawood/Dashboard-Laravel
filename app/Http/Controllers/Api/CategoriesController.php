<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Traits\GeneralTraits;

class CategoriesController extends Controller
{

   use GeneralTraits;
  public function categoryData()
  {
    $categoryData =  Category::get();

    return $this->returnData('category',$categoryData ,msg:"111");
     
  }


  public function productData()
  {
    $productData =  Product::get();

    return $this->returnData('category',$productData ,msg:"111");
     
  }


//  public function getCategoryAndChangeLang()
//  {
//    $categories =  Category::select('id','name_'.app()->getLocale().' as name')->get();

//    return response()->json($categories);

// }


//     public function getCategoryById(Request $request){
      
//       $category =  Category::find($request -> id,'name_'.app()->getLocale().' as name');
       

//        if(!$category){
//        return $this->returnError('000','Category Not Found');
//        }
//       //  return response()->json($category);

//       return $this->returnData('category',$category ,msg:"111");
//     }



//     public function changeCategoryStatus(Request $request){
//       Category::where('id',$request->id)->update(['active'=>$request->active]);

//       return $this->returnSuccessMessage('Change Status Successfully','000');

//     }







    
}