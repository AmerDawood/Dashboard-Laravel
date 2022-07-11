<?php

namespace App\Http\Controllers;

use App\Http\Requests\Request\ProductRequest;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('products.index')->with('products', Product::all())->with('categories',Category::all());
    }


   

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create')->with('categories',Category::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {

 
      $product=  Product::create([
            'title'=>$request->title,
            'description'=>$request->description,
            'content'=>$request->content,
            'image'=>$request->image->store('images','public'),
            'category_id'=>$request->categoryID,

        ]);

        session()->flash('success', 'Product created successfully');

        return redirect(route('products.index'));

        // dd($request->image->store('images','public'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function show(Product $Product)
    // {
    //   $user = $Product->user;
    //   $profile = $user->profile; 
    //   return view("Products.show")->with('Product',$Product)->with('categories',Category::all())->with('profile',$profile)->with('user',$user);
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function edit(Product $Product)
    // {
    //     return view('Products.create',['Product'=>$Product, 'categories'=>Category::all(),'tags'=>Tag::all(),]);
    // }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function update(UpdateProductsRequest $request , Product $Product)

    // {
    //     $data = $request->only(['title','description','content']);

    //     if($request->hasFile('image')){
    //       $image=  $request->image->store('images','public');
    //       Storage::disk('public')->delete($Product->image);
    //       $data['image'] = $image;

    //     }

    //     if($request->tags){

    //         $Product->tags()->sync($request->tags);

    //     }

    //     $Product->update($data);
    //     session()->flash('success', 'Product updated successfully');

    //    return redirect(route('Products.index'));

    // }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function destroy($id)
    // {

    //    $Product = Product::withTrashed()->where('id',$id)->first();
    //    if($Product->trashed()){
    //     Storage::disk('public')->delete($Product->image);
    //       $Product->forceDelete();
    //    }else{
    //     $Product->delete();
    //    }
    //    session()->flash('success', 'Product deleted successfully');

    //    return redirect(route('Products.index'));
        

    // }


    // public function trashed(){
    //     $trashed =Product::onlyTrashed()->get();
    //     return view('Products.index')->with('Products',$trashed);


    // }

    // public function restore($id){
    //     Product::withTrashed()
    //     ->where('id',$id)
    //     ->restore();

    //     return view(route('Products.index'));
    // }
}
