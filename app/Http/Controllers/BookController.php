<?php

namespace App\Http\Controllers;

use App\Book;
use App\Listeners\NewBookAddedListener;
use App\Notifications\NewBookAddedNotification;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Notification;
use App\Traits\StoreImageTrait;

class BookController extends Controller
{
    use StoreImageTrait;
    public function index(){
        return view('book.index');
    }

    public function store(Request $request){

        $this->validate($request,[
            'title'=>"required"
        ]);

        $data = $request->all();

        if ($request->hasFile('image')){
            $path = 'project_files/books/';
            $data['image'] = $this->BookImageStore($request->file('image'), $path, 400,400);
        }

        $data["user_id"]= auth()->id();
        $book = Book::query()->create($data);
        $users = User::query()->where('isAdmin',0)->get();

        Notification::send($users,new NewBookAddedNotification($book));

        session()->flash('success','New book added.');
        return redirect()->route('book.add');
    }

    public function status($id){
        $member = Book::query()->findOrFail($id);
        session()->flash('success','Member '.($member->isActive == 1 ? 'Active' : 'In Active'));
        return redirect()->route('book.add');
    }

    public function isActiveMeal($id){
        $member = Book::query()->findOrFail($id);
        $member->update(['isActiveMeal'=>($member->isActiveMeal == 1 ? 0 : 1)]);
        session()->flash('success','Member '.($member->isActiveMeal == 1 ? 'Active' : 'In Active'));
        return redirect()->route('book.add');
    }


    public function edit($id)
    {
        $data['book'] = Book::query()->findOrFail($id);
        return view('book.edit-book')->with($data);
    }

    public function update(Request $request,$id){

        $this->validate($request,[
            'title'=>"required"
        ]);

        $data = $request->all();
        $user = Auth::user();
        $data['user_id'] = $user->id;
        $member= Book::query()->findOrFail($id);

        if ($request->hasFile('image')){
            $path = 'project_files/books/';
            $data['image'] = $this->BookImageStore($request->file('image'), $path, 400,400);
            /* OLD Image Unlink start if Existing image column contain value */
            if (!empty($member->image)){
                $path = public_path('project_files/books/'.$member->image);
                $this->unlinkImage($path);
            }
            /* OLD Image Unlink End if Existing image column contain value*/
        }

        $member->update($data);
        session()->flash('success','Book successfully updated.');
        return redirect()->route('book.add');
    }

    public function destroy(Request $request,$id){
        $delete =  Book::query()->findOrFail($id);

        /* OLD Image Unlink start if Existing image column contain value */
        if (!empty($delete->image)){
            $path = public_path('project_files/books/'.$delete->image);
            $this->unlinkImage($path);
        }
        /* OLD Image Unlink End if Existing image column contain value*/
        $delete->delete();

        session()->flash('success',$delete ? "book deleted successfully" : "book data available at other tables. Can't delete");
        return redirect()->back();
    }

    public function markAsRead($notification_id){

        auth()->user()
            ->unreadNotifications
            ->when($notification_id, function ($query) use ($notification_id) {
                return $query->where('id', $notification_id);
            })
            ->markAsRead();

        return redirect()->route('home');
    }
}
