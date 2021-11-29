<?php

namespace App\Http\Controllers;

use App\Book;
use App\BookIssue;
use App\Stock;
use Illuminate\Http\Request;

class BookIssueController extends Controller
{
    public function index(){
        return view("bookissue.index");
    }

    public function store(Request $request){

        $this->validate($request,[
            'book_id'=>'required',
            'student_id'=>'required',
            'start_date'=>'required',
            'end_date'=>'required',
        ]);

        $data = $request->all();
        $data['user_id'] = auth()->id();

        $bookIssue =  BookIssue::query()->create($data);

        $book = Book::query()->findOrFail($request->book_id);
        $book->update(['stock'=>($book->stock-1)]);

        session()->flash("success", "Book issued successfully");
        return redirect()->back();
    }

    public function edit($id){
        $data['bookissue'] = BookIssue::query()->findOrFail($id);
        return view('bookissue.edit-bookissue')->with($data);
    }

    public function update(Request $request,$id){

        $this->validate($request,[
            'book_id'=>'required',
            'student_id'=>'required',
            'start_date'=>'required',
            'end_date'=>'required',
        ]);

        $data = $request->all();
        $data['user_id'] = auth()->id();
        $bookIssue = BookIssue::query()->findOrFail($id);

        $prevBook = Book::query()->findOrFail($bookIssue->book_id);
        $prevBook->update(['stock'=>($prevBook->stock+1)]);

        $bookIssue->update($data);


        $newUpdate = Book::query()->findOrFail($request->book_id);
        $newUpdate->update(['stock'=>($newUpdate->stock-1)]);

        session()->flash("success", "Book issued updated successfully");
        return redirect()->route('bookissue.add');
    }

    public function bookReturn($id){
        $data['bookissue'] = BookIssue::query()->findOrFail($id);
        return view('bookissue.book-return')->with($data);
    }

    public function returnStore(Request $request,$id){
        $this->validate($request,[
            'submit_date'=>'required',
        ]);

        $book = BookIssue::query()->findOrFail($id);
        $data = $request->all();
        $data['status'] =1 ;
        $book->update($data);

        $exactBook = Book::query()->findOrFail($book->book_id);

        $exactBook->update(['stock'=>($exactBook->stock+1)]);

        session()->flash("success", "Book returned successfully");
        return redirect()->route('bookissue.add');

    }

    public function returnable(){
        return view('bookissue.returnable-book');
    }

    public function bookAlert(){
        return view('bookissue.book-alert');
    }
}
