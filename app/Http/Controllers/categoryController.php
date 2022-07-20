<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Support\Facades\DB;


class categoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = DB::table('category')
        ->get();

        return view('admin.create_category', ['categories' => $categories]);

    }

    public function listingCategory() 
    {

        $categories = DB::table('category')
        ->get();

        return view('add_listing', ['categories' => $categories]);


    }

    // public function listingSubCategory(Request $request)
    // {

    //     $category = $request->category;

    //     $subcategory = DB::table('sub_category')
    //         ->where([
    //             ['fk_category', '=', $category]
    //         ])
    //         ->get();
         
    //     return response()->json([
    //      'subcategory' => $subcategory
    //     ]);

    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validate create category form
        $request->validate([
            'category_title' => ['required', 'string', 'max:20', 'unique:category']
        ]);

        // create a new category instance model 
        $category = new Category;
        $category->category_title = strtoupper($request->input("category_title"));

        if ($category->save()) {
            return redirect('/admin/categories')->with('success', 'Category created successfully');
        } else {
            echo "Failed to insert category";
        }
        

        // create a new subcategory instance model 
        // $subcategory = new SubCategory;
        // $subcategory->subcategory_title = strtoupper($request->input("subcategory"));
        // $subcategory->fk_category       = $category->id;

        // if ($subcategory->save()) {
        //     return redirect('/admin/view_categories')->with('success', 'Category created successfully');
        // } else {
        //     echo "Failed to create category";
        // }


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $category = Category::find($id);
  
        return response()->json($category);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        // store id and title of category in variable 
        $category_id    = $request->input('category_id');
        $category_title = $request->input('category_title');

        $category = Category::find($category_id);

        // update category column
        $category->category_title = $category_title;

        // update category in database 
        if ($category->save()) {
            return redirect('/admin/categories')->with('success', 'Category updated successfully!');
        } else {
            echo "Failed to update category";
        }
            
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        // store category id in variable 
        $category_id = $request->input('category_id');

        $updateCategory = DB::table('category')
        ->where('id', '=', $category_id)
        ->update(['category_status' => 'INACTIVE']);
 
        return redirect('/admin/categories')->with('success', 'Category deleted successfully!');
    }

    public function retrieveCategory()
    {
        $categories = DB::table('category')
        ->get();

        return view('admin.categories', ['categories' => $categories]);
    }

}
