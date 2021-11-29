<?php

namespace App\Http\Controllers;

use App\Slider;
use App\Traits\StoreImageTrait;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    use StoreImageTrait;
    public function index()
    {
        $data['sliders'] = Slider::query()->orderByDesc('id')->get();
        return view('slider.index')->with($data);
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'title'=>'required',
            'image'=>'nullable|mimes:jpeg,png,gif|max:1048576',
            'description'
        ]);

        $data = $request->all();

        if ($request->hasFile('image')){
            $path = 'project_files/slider';
            $data['image'] = $this->BookImageStore($request->file('image'),$path,900,1900);
        }

        Slider::query()->create($data);
        session()->flash('success','slider added');
        return redirect()->route('slider.add');
    }

    public function edit($id)
    {
        $data['slider'] = Slider::query()->findOrFail($id);
        $data['sliders'] = Slider::query()->orderByDesc('id')->get();
        return view('slider.edit-slider')->with($data);
    }

    public function update(Request $request,$id)
    {
        $this->validate($request,[
            'title'=>'required',
            'image'=>'nullable|mimes:jpeg,png,gif|max:1048576',
            'description'
        ]);

        $data = $request->all();

        $slider = Slider::query()->findOrFail($id);

        if ($request->hasFile('image')){
            $path = 'project_files/slider';
            $data['image'] = $this->BookImageStore($request->file('image'),$path,900,1900);

            /* unlink start */
            if (!empty($slider->image)){
                $unlinkPath = public_path('project_files/slider/'.$slider->image);
                $this->unlinkImage($unlinkPath);
            }
            /* unlink end */
        }

        $slider->update($data);
        session()->flash('success','slider updated');
        return redirect()->route('slider.add');
    }

    public function destroy($id)
    {
        $slider = Slider::query()->findOrFail($id);
        /* unlink start */
        if (!empty($slider->image)){
            $path = public_path('project_files/slider/'.$slider->image);
            $this->unlinkImage($path);
        }
        /* unlink end */
        $slider->delete();
        session()->flash('success','Slider deleted');

        return back();
    }

    public function view()
    {
        $sliders = Slider::query()->get();
        return view('slider.view-slider',compact('sliders'));

    }


}
