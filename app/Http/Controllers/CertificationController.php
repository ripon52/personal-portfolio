<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CertificateTitle;

class CertificationController extends Controller
{
    public function index(){
        return view('certification.index');
    }

    public function store(Request $request){

        $this->validate($request,[
            'name'=>"required"
        ]);

        $data = $request->all();
        CertificateTitle::query()->create($data);
        session()->flash('success','New certification added.');
        return redirect()->route('certification.add');
    }


    public function edit($id)
    {
        $data['certification'] = CertificateTitle::query()->findOrFail($id);
        return view('certification.edit-certification')->with($data);
    }

    public function update(Request $request,$id){

        $this->validate($request,[
            'name'=>"required"
        ]);
        $data = $request->only('name');
        $member= CertificateTitle::query()->findOrFail($id);
        $member->update($data);
        session()->flash('success','certification Updated.');
        return redirect()->route('certification.add');
    }

    public function destroy(Request $request,$id){
        $delete =  CertificateTitle::query()->findOrFail($id)->delete();
        session()->flash('success',$delete ? "certification deleted successfully" : "certification data available at other tables. Can't delete");
        return redirect()->back();
    }
}
