<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    public function AllCategory(){

        $categories = Category::latest()->get();
        return view('backend.category.category_all',compact('categories'));

    } // End Mehtod

        ////////////// Sub Category All ///////////////


        public function AllSubCategory(){

            $subcategories = Subcategory::latest()->get();
            return view('backend.subcategory.subcategory_all',compact('subcategories'));

        } // End Mehtod

        public function StoreSubCategory(Request $request){

            Subcategory::insert([
                'category_id' => $request->category_id,
                'subcategory_name' => $request->subcategory_name,
                'subcategory_slug' => strtolower(str_replace(' ', '-', $request->subcategory_name)),

            ]);


             $notification = array(
                'message' => 'SubCategory Inserted Successfully',
                'alert-type' => 'success'

            );

            return redirect()->route('all.subcategory')->with($notification);


        }// End Mehtod

}
