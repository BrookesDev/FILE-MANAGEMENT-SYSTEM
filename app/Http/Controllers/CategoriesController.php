<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
//to return category view 
     public function category(Request $request)
    {
        $data['categories'] = categories::all();
        return view('categories', $data);
    }
//to save category into database
        public function category_save (Request $request){
        $input = $request->all();
        $input = Categories::create($request->all());
        // $input->save();
        return redirect()->back()->with('success', 'User created successfully');
        }
//to edit category  
        public function categories_update(Request $request)
        {
            $input = $request->all();
            $id = $request->id;
            $categories = Categories::find($id);
            $categories->update($input);
            return redirect()->back()->with('success', 'Record updated successfully');
        }
//to delete category
        public function delete_categories(Request $request)
        {
            $id = $request->id;
            $categories = Categories::find($id);
            $categories->delete();
    
            return redirect()->back()->with('success', 'Record deleted successfully');
        }

}
