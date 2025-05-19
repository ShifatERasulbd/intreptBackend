<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $category=category::orderBy('id','ASC')->get();
        return view('backend.category.index',compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
             return view('backend.category.add_category');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
         $category = category::create([
        'category_name' => $request->category_name,
       
    ]);
     return redirect()
        ->route('category');
    }

    /**
     * Display the specified resource.
     */
    public function show(category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(category $category,$id)
    {
        //
         $category=category::findorfail($id);
         return view('backend.category.edit_category',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, category $category,$id)
    {
        //
        $category = category::findOrFail($id);

        // Update post main data
        $category->update([
            'category_name' => $request->category_name,
            
        ]);

        return redirect()->back();

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(category $category,$id)
    {
         //
         $category=category::findorfail($id)->delete();
     return redirect()
        ->route('category');
    }
}
