<?php

namespace App\Http\Controllers;

use App\Experience;
use App\Traits\StoreImageTrait;
use Illuminate\Http\Request;

class ExperienceController extends Controller
{
    use StoreImageTrait;
    public function index(){
        return view('experience.index');
    }

    public function store(Request $request){
        $this->validate($request,[
            'organization'=>"required",
            'body'=>"required",
            'designation'=>"required",
            'join_date'=>"required",
            'left_date'=>"required",
            'website'=>"required",
            'position'=>"required",
        ]);
        $data = $request->all();
        $experience = Experience::query()->create($data);
        session()->flash('success','New experience Record created.');
        return redirect()->route('experience.add');
    }

    public function edit($id)
    {
        $data['experience'] = Experience::query()->findOrFail($id);
        return view('experience.edit-experience')->with($data);
    }

    public function update(Request $request,$id){

        $this->validate($request,[
            'organization'=>"required",
            'body'=>"required",
            'designation'=>"required",
            'join_date'=>"required",
            'left_date'=>"required",
            'website'=>"required",
            'position'=>"required",
        ]);

        $data = $request->all();
        $experience= Experience::query()->findOrFail($id);
        $experience->update($data);
        session()->flash('success','experience record successfully updated.');
        return redirect()->route('experience.add');
    }

    public function destroy(Request $request,$id){
        $delete =  Experience::query()->findOrFail($id);
        $delete->delete();
        session()->flash('success',$delete ? "experience deleted successfully" : "experience data available at other tables. Can't delete");
        return redirect()->back();
    }
}
