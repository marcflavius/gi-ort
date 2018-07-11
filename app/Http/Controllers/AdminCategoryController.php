<?php

namespace App\Http\Controllers;

use App\Category;
use App\User;
use Illuminate\Http\Request;

class AdminCategoryController extends Controller
{
    protected  $validate_rules = [
        'name' => 'required|max:50',
        'description'    => 'required|max:400',
    ];

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        return view('admin.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        dd(request()->input());
        $this->validate($request, $this->validate_rules);
        
        $category = new Category();

        $category->description = $request->input('description');
        $category->name = $request->input('name') ;
        $category->user_id = \Auth::user()->id;

        $category->save();
        return redirect()->route('admin.categories.show', $category->id)->with('success','catégorie créé avec succès !');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        return view('admin.categories.show',compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        $users = User::all();
        $responsibleArray = $users->pluck('name', 'id');
        return view('admin.categories.edit',compact('category', 'responsibleArray'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $rules = [
            'description' => 'required',
            'name' => 'required',
            'user_id' => 'required'
        ];

//        $this->validate($request, $rules);
        $category->description = $request->description;
        $category->name = $request->name;
        $category->update();

        return redirect()->route('admin.categories.show', ['id' => $category->id])->with('success','La catégorie a été mise à jour avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $c = Category::findOrFail($id);
        $c->destroy($id);
        return redirect()->route('admin.categories.index');
    }
}
