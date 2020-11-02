<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\CategoryRequest;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $perPage=3;
        $all= Category::orderBy('created_at','DESC')->paginate($perPage);
        return view('category.index',['all'=>$all]);
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
    public function store(CategoryRequest $request)
    {
        /**$request->validate([
            'name'=>'required|unique:categories|max:20|min:2'
        ]);
**/


        $c= new Category();
        $c->name= $request->name;
        $c->save();
        return redirect()->route('category.index')->with('message','La categorie est ajoutée avec succès');
        //var_dump($request->all());
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
        return view('category.edit')->with('id',$category->id);
        //var_dump($category->id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryRequest $request, Category $category)
    {
        //die($category);

        $c = Category::find($category->id);
        $c->name= $request->name;
        $c->save();
        return redirect()->route('category.index')->with('message','La categorie est modifiée avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
       // var_dump($category->id);
        $c= Category::find($category->id);
        $c->delete();
        return redirect()->route('category.index')->with('message','La categorie est ajoutée avec succès');

    }
}
