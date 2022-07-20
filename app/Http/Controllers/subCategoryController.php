<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SubCategory;
use Illuminate\Support\Facades\DB;


class subCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subcategories = DB::table('sub_category')
        ->get();

        return view('admin.subcategories', ['subcategories' => $subcategories]);
    }

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
            'category_title' => ['required', 'string', 'max:20'],
            'subcategory_title' => ['required', 'string', 'max:20', 'unique:sub_category']
        ]);

        // create a new sub category instance model 
        $subcategory = new SubCategory;
        $subcategory->subcategory_title = strtoupper($request->input("subcategory_title"));
        $subcategory->fk_category       = $request->input("category_title");

        if ($subcategory->save()) {
            return redirect('/admin/subcategories')->with('success', 'ub Category created successfully');
        } else {
            echo "Failed to insert category";
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $subcategory = SubCategory::find($id);
  
        return response()->json($subcategory);
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
        // store id and subcategory title in variable
        $subcategory_id = $request->input('subcategory_id');
        $subcategory_title = $request->input('subcategory_title');

        $subcategory = SubCategory::find($subcategory_id);

        // update sub category column
        $subcategory->subcategory_title = $subcategory_title;

        // update category in database 
        if ($subcategory->save()) {
            return redirect('/admin/subcategories')->with('success', 'SubCategory updated successfully!');
        } else {
            echo "Failed to update subcategory";
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
        // store subcategory id in variable 
        $subcategory_id = $request->input('subcategory_id');

        $updateSubCategory = DB::table('sub_category')
        ->where('id', '=', $subcategory_id)
        ->update(['subcategory_status' => 'INACTIVE']);
 
        return redirect('/admin/subcategories')->with('success', 'Sub Category deleted successfully!');
    }

    public function listingSubCategory(Request $request)
    {
        $category_id = $request->category_id;

        $subcategories = DB::table('sub_category')
            ->where([
                ['subcategory_status', '=', 'ACTIVE'],
                ['fk_category', '=', $category_id],
            ])
            ->get();
         
        return response()->json([
            'subcategories' => $subcategories
        ]);
    }
}
