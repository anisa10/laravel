<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use Carbon\Carbon;
class BookController extends Controller
{
    //
    public function index()
    {
    	$book = Book::all();
    	return $book;
    }

    public function create()
    {
    	$book = new Book();
    	$book->tittle = "Mencari Dia";
    	$book->publisher = "Assalaam Studio";
    	$book->price = 150000;
    	$book->synopsis = "Lorem Ipsum";
    	$book->pages = 100;
    	$book->status = false;
    	$book->data = Carbon::now();
    	$book->save();
    	return $book;
    }

    public function show($id)
    {
    	$book = Book::find($id);
    	return $book;
    }

    public function edit($id, $jdl)
    {
    	$book = Book::find($id);
    	$book->tittle = $jdl;
    	$book->publisher = "Assalaam Studio";
    	$book->price = 150000;
    	$book->synopsis = "Lorem Ipsum";
    	$book->pages = 100;
    	$book->status = false;
    	$book->data = Carbon::now();
    	$book->save();
    	return $book;
    }

    public function delete($id)
    {
    	$book = Book::find($id);
    	$book->delete();
    	return $book;
    }
    public function latihan($id) {
        $book = Book::all();
        return $book;
    }
    public function latihan2($id) {
        $book = Book::select('tittle','publisher','price')->take(3)->get();
        return $book;
    }
}