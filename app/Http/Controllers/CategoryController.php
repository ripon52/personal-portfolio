<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    public function index(){
        return view('category.index');
    }

    public function store(Request $request){

        $this->validate($request,[
            'name'=>"required"
        ]);

        $data = $request->all();
        Category::query()->create($data);
        session()->flash('success','New category added.');
        return redirect()->route('category.add');
    }


    public function edit($id)
    {
        $data['category'] = Category::query()->findOrFail($id);
        return view('category.edit-category')->with($data);
    }

    public function update(Request $request,$id){

        $this->validate($request,[
            'name'=>"required"
        ]);
        $data = $request->only('name');
        $member= Category::query()->findOrFail($id);
        $member->update($data);
        session()->flash('success','category Updated.');
        return redirect()->route('category.add');
    }

    public function destroy(Request $request,$id){
       $delete =  Category::query()->findOrFail($id)->delete();
        session()->flash('success',$delete ? "category deleted successfully" : "category data available at other tables. Can't delete");
        return redirect()->back();
    }
}