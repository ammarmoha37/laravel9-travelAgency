<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    protected $appends =['getParentsTree'];
    
    public static function getParentsTree($category, $title){
        if($category->parent_id == 0){
            return $title;
        }
        $parent = Category::find($category->parent_id);
        $title = $parent->title . ' > ' . $title;
        return CategoryController::getParentsTree($parent, $title);
    }



    
    public function index()
    {
        //
        $data = category::all();
        return view('admin.category.index', ['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $data = category::all();
        return view('admin.category.create', ['data'=>$data]);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //;
        //echo $request;
        $data = new Category();
        $data->parent_id = $request->input('parent_id');
        $data->title = $request->input('title');
        $data->keywords = $request->input('keywords');
        $data->description = $request->input('description');
        $data->status = $request->input('status');
        if($request->file('image')){
            $data->image=$request->file('image')->store('images');
        }
        $data->save();
        return redirect('/admin/category');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(category $category, $id)
    {
        //
        
        $data = Category::find($id);
        return view('admin.category.show', ['data'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(category $category, $id)
    {
        //
        $data = Category::find($id);
        $datalist = Category::all();
        return view('admin.category.edit', ['data'=>$data, 'datalist'=>$datalist]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, category $category, $id)
    {
        //
        $data = Category::find($id);
        $data->parent_id = $request->input('parent_id');
        $data->title = $request->input('title');
        $data->keywords = $request->input('keywords');
        $data->description = $request->input('description');
        $data->status = $request->input('status');
        if($request->file('image')){
            $data->image=$request->file('image')->store('images');
        }
        $data->save();
        return redirect('admin/category');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(category $category, $id)
    {
        //
        $data = Category::find($id);
        if ($data->image && Storage::disk('public')->exists($data->image)){
            Storage::delete($data->image);
        }
        $data->delete();
        return redirect('admin/category');
    }
}