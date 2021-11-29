<?php

namespace App\Http\Controllers;

use App\Graduation;
use App\Notifications\NewBookAddedNotification;
use App\Traits\StoreImageTrait;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Notification;

class GraduationController extends Controller
{
    use StoreImageTrait;
    public function index(){
        return view('graduation.index');
    }

    public function store(Request $request){

        $this->validate($request,[
            'title'=>"required",
            'certificate_title_id'=>'required',
            'institute'=>'required',
            'session'=>'required',
            'passing_year'=>'required',
            'notes'=>'required',
        ]);

        $data = $request->all();
        $graduation = Graduation::query()->create($data);
        session()->flash('success','New Graduation Record created.');
        return redirect()->route('graduation.add');
    }

    public function edit($id)
    {
        $data['graduation'] = Graduation::query()->findOrFail($id);
        return view('graduation.edit-graduation')->with($data);
    }

    public function update(Request $request,$id){

        $this->validate($request,[
            'title'=>"required",
            'certificate_title_id'=>'required',
            'institute'=>'required',
            'session'=>'required',
            'passing_year'=>'required',
            'notes'=>'required',
        ]);
        
        $data = $request->all();
        $graduation= Graduation::query()->findOrFail($id);
        $graduation->update($data);
        session()->flash('success','Graduation record successfully updated.');
        return redirect()->route('graduation.add');
    }

    public function destroy(Request $request,$id){
        $delete =  Graduation::query()->findOrFail($id);
        $delete->delete();
        session()->flash('success',$delete ? "Graduation deleted successfully" : "Graduation data available at other tables. Can't delete");
        return redirect()->back();
    }
}