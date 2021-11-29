<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;

class BasicController extends Controller
{
    public function search(Request $request){
        $publisher_id = $request->publisher_id;
        $department_id = $request->department_id;

        $data['books'] = Book::query()
            ->where('department_id', $department_id)
            ->where('publisher_id', $publisher_id)
            ->where('title','LIKE','%'.$request->keywords.'%')
            ->Orwhere('description','LIKE','%'.$request->keywords.'%')
            ->get();
        return view('front-search-result')->with($data);
    }
}
