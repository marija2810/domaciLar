<?php

namespace App\Http\Controllers;
use App\Models\Book;
use App\Models\Genre;
use App\Models\Writer;
use Illuminate\Http\Request;

class WebController extends Controller
{ 
    public function all(){
        $books=Book::all();
        $response=[];
        foreach ($books as $book) {
           $response[]=$book;
        }
        return view('home',["chunks"=>array_chunk($response,3)]);
       
    }
    public function one($id){
        $book=Book::find($id);
        $genres=Genre::all();
        $writers=Writer::all();
        return view('edit',['book'=>$book,'genres'=>$genres,'writers'=>$writers]);
       
    }
    public function update(Request $request, $id){
        $book=Book::find($id);
        if(isset($_POST["delete"])){
            $book->delete();
            
        }else{
            if(isset($request->title)){
                $book->title=$request->title;
            }
            if(isset($request->description)){
                $book->description=$request->description;
            }
            if(isset($request->genre_id)){
                $book->genre_id=$request->genre_id;
            }
            if(isset($request->writer_id)){
                $book->writer_id=$request->writer_id;
            }
            if(isset($request->pages)){
                $book->pages=$request->pages;
            }
            $book->save();
        }
        return redirect('/');
    } 
}

