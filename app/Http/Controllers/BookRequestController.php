<?php

namespace App\Http\Controllers;

use App\Book;
use App\BookIssue;
use App\BookRequest;
use Illuminate\Http\Request;

class BookRequestController extends Controller
{
    public function index(){
        return view("bookrequest.index");
    }

    public function store(Request $request){

        $this->validate($request,[
            'book_id'=>'required',
        ]);

        $data = $request->all();
        $data['user_id'] = auth()->id();
        BookRequest::query()->create($data);
        session()->flash("success", "Book Request saved successfully");
        return redirect()->back();
    }

    public function edit($id){
        $data['bookrequest'] = BookRequest::query()->findOrFail($id);
        return view('bookrequest.edit-bookrequest')->with($data);
    }

    public function update(Request $request,$id){

        $this->validate($request,[
            'book_id'=>'required',
        ]);
        $prevBook = Book::query()->findOrFail($request->book_id);
        $bookrequest = BookRequest::query()->findOrFail($id);

        if ($prevBook->stock <=0 || $bookrequest->status !=0){
            session()->flash("warning", "Can't update bookBook issued already handled by Admin");
            return redirect()->route('bookrequest.add');
        }

        $data = $request->all();
        $data['user_id'] = auth()->id();
        $bookrequest->update($data);

        session()->flash("success", "Book request updated successfully");
        return redirect()->route('bookrequest.add');
    }

    public function requestAction($id){
        $bookrequest = BookRequest::query()->findOrFail($id);
        $bookrequest->update(['status'=>2]);
        session()->flash("success", "Book request declined successfully");
        return redirect()->route('bookrequest.adminView');
    }

    public function adminView(){
        return view('bookrequest.adminView');
    }

    public function requestView($id){
        $data['bookrequest'] = BookRequest::query()->find($id);
        return view('bookrequest.requestView')->with($data);
    }


    public function adminStore(Request $request,$id)
    {
        $this->validate($request, [
            'start_date' => 'required',
            'end_date' => 'required',
        ]);

        $bookrequest = BookRequest::query()->findOrFail($id);

        $data=$request->all();
        $data['student_id'] = $bookrequest->user->isStudent->id;
        $data['user_id'] = $bookrequest->user_id;
        $data['book_id'] = $bookrequest->book_id;
        $data['status'] = 1;

        BookIssue::query()->create($data);

        $book = Book::query()->findOrFail($bookrequest->book_id);
        $book->update(['stock'=>($book->stock-1)]);
        $bookrequest->update(['status' => 1]);

        session()->flash("success", "Book request approved successfully");
        return redirect()->route('bookrequest.adminView');
    }




}
