<?php

namespace App\Http\Controllers;

use App\Profile;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Traits\StoreImageTrait;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    use StoreImageTrait;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function profileEdit($id){
        $user = User::query()->findOrFail($id);
        $data['user'] = $user;
        $data['profile'] = Profile::query()->first();
        return view('profile.edit-profile')->with($data);
        
    }

    public function profileUpdate(Request $request ,$id){
        $user = User::query()->findOrFail($id);
        
        // Image Upload
        if($request->hasFile('avatar')){
            $path = 'project_files/picture/';
            $filename = $this->imageFileImageStore($request->file('avatar'),$path,900,900);
            $user->update(['avatar' => $filename]);
        }
        
        // Resume Upload 
        if($request->hasFile('resume')){
            $path = 'project_files/resume/';
            $filename = $this->resumeStore($request->file('resume'),$path);
            $user->update(['resume' => $filename]);
        }
        
        $data = $request->except(['avatar','_token']);

        $profile = Profile::query()->first();  

        if( !empty($profile)){
            Profile::query()->update($data);
        }else{
            Profile::query()->create($data);
        }
        session()->flash('success','Profile Information updated successfully');
        return redirect()->back();
    }

    public function changePassword(){
        return view('profile.change-password');
    }

    public function updatePassword(Request $request){
        $oldPassword = $request->password;
        $newPassword = $request->newPassword;

        $user = Auth::user();

        if (Hash::check($request->password, $user->password)) {
            $user->update([
                'password' => Hash::make($request->newPassword)
            ]);
            session()->flash('success', 'Password updated successfully');
            return redirect()->route('profile.changePassword');
        }else{
            session()->flash('success', 'Old Password not matched');
            return redirect()->route('profile.changePassword');
        }

    }
}