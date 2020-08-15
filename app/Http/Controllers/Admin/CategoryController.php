<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Category;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {  
        $categories =  Category::all();

        return view('admin.category.index',compact('categories'));
    } 

    public function store(Request $request)
    {     
        $request->validate([
                'name' => 'required',
            ]
        );

         $category = new Category;
         $category->name = $request->name;
         $category->slug = Str::slug($request->get('name'), '-'); 
         $category->save();
         
         return redirect()->route('admin.category.index');

    }

    public function edit($id)
    {
        $category = Category::find($id);
        return view('admin.category.edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {   
        $request->validate([
                'name' => 'required',
            ]
        );
        $category = Category::find($id);
        $category->name = $request->name;
        $category->slug = Str::slug($request->get('name'), '-'); 
        $category->save();
        return redirect()->route('admin.category.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {   
        $category = Category::find($id);
        $category->delete();
        return redirect()->route('admin.category.index');
    }
}
