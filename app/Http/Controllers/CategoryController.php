<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = Category::all();
        return view('category.index', compact("category"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'categoryname' => 'required|min:3|max:100',
                'icon' => 'required'
            ],
            [
                'categoryname.required' => 'Category name is required',
                'categoryname.min' => 'min 3 words',
                'categoryname.max' => 'max 100 words',
                'icon.required' => 'Icon is required'
            ]
        );

        $img = $request->file('icon'); //mengambil file dari form
        $filename = time() . "_" . $img->getClientOriginalName(); //mengambil dan mengedit nama file dari form
        $img->move('img', $filename); //proses memasukkan image ke dalam direktori laravel

        Category::create(
            [
                'category_name' => $request->categoryname,
                'icon' => $filename
            ]
        );
        return redirect('/category')->with('status', 'Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        return view('category.update', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $request->validate(
            [
                'categoryname' => 'required|min:3|max:100',
            ],
            [
                'categoryname.required' => 'Category name is required',
                'categoryname.min' => 'min 3 words',
                'categoryname.max' => 'max 100 words',
            ]
        );

        if ($request->icon != null) {
            $img = $request->file('icon'); //mengambil dari form
            $filename = time() . "_" . $img->getClientOriginalName();
            $img->move('img', $filename);
            Category::where('id', $category->id)->update(
                [
                    'category_name' => $request->categoryname,
                    'icon' => $filename
                ]
            );
        } else {
            Category::where('id', $category->id)->update(
                [
                    'category_name' => $request->categoryname
                ]
            );
        }
        return redirect('/category')->with('status', 'Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        Category::destroy('id', $category->id);
        return redirect('/category')->with('status', ' Deleted Successfully ');
    }
}
