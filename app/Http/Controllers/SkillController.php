<?php

namespace App\Http\Controllers;

use App\SKill;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    public function index(){
        return view('skill.index');
    }

    public function store(Request $request){

        $this->validate($request,[
            'name'=>"required"
        ]);

        $data = $request->all();
        Skill::query()->create($data);
        session()->flash('success','New Skill added.');
        return redirect()->route('skill.add');
    }


    public function edit($id)
    {
        $data['skill'] = SKill::query()->findOrFail($id);
        return view('skill.edit-skill')->with($data);
    }

    public function update(Request $request,$id){

        $this->validate($request,[
            'name'=>"required"
        ]);
        $data = $request->all();
        $member= Skill::query()->findOrFail($id);
        $member->update($data);
        session()->flash('success','Skill Updated.');
        return redirect()->route('skill.add');
    }

    public function destroy(Request $request,$id){
       $delete =  Skill::query()->findOrFail($id)->delete();
        session()->flash('success',$delete ? "Skill deleted successfully" : "Skill data available at other tables. Can't delete");
        return redirect()->back();
    }
}