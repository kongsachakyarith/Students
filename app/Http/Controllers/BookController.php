<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Book;
class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $book = Book::all();
        return view('book.index',['book' => $book]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $book = Book::all();
        return view('book.create',['book' => $book]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validator = Validator::make($request->all(), [
            'title'         =>'required',
            'name'          =>'required',
            'author'        =>'required',
            'publisher'     => 'required'
        ]);
        if ($validator->fails()) {
            return Redirect()
                    ->back()
                    ->withErrors($validator);
        }else{
            $book =new Book();
            $book->title      = $request->input('title');
            $book->name       = $request->input('name');
            $book->author     = $request->input('author');
            $book->publisher  = $request->input('publisher');
            $book->save();
            return redirect()->route('book.index')->with('message','Add Book Successfully');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $book = Book::find($id);
        return view('book.edit',  ['book' => $book ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $validator = Validator::make($request->all(), [
            'title'         =>'required',
            'name'          =>'required',
            'author'        =>'required',
            'publisher'     => 'required'
        ]);
        if ($validator->fails()) {
            return Redirect()
                    ->back()
                    ->withErrors($validator);
        }else{
            $book = Book::find($id);
            $book->title      = $request->input('title');
            $book->name       = $request->input('name');
            $book->author     = $request->input('author');
            $book->publisher  = $request->input('publisher');
            $book->save();
            return redirect()->route('book.index')->with('message','Update Book Successfully');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $profile = Book::find($id);
        $student->delete();

		return redirect()->route('book.index')->with('message','Delete Profile Successfully');
    }
}
