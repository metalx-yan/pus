<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

class BooksController extends Controller
{
    public function site()
    {
      return view('books.site');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $index = Book::orderBy('id','asc')->paginate(5);
        return view('books.index',compact('index'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('books.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $this->validate($request, [
        'judul' => 'min:3|max:255',
        'slug' => 'unique:books'
      ]);

      $s = Book::create([
        'judul' => $request->judul,
        'review' => $request->review,
        'slug' => str_slug($request->judul)
      ]);

      $b = Book::where('slug', '=', str_slug($s->slug))->first();

      if (isset($b)) {
          $s->slug = str_slug("$s->id $s->judul");
      }else {
          $s->slug = str_slug($s->judul);
      }
      $s->save();

      return redirect()->route('books.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // dd($id);

        $show = Book::where('slug', '=' , $id)->first();
        // dd($show);
        return view('books.show', compact('show'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // dd($edit)
        $edit = Book::where('slug', '=', $id)->first();
        return view('books.edit', compact('edit'));
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
      $this->validate($request, [
        'judul' => 'min:3|max:255',
        'slug' => 'unique:books'
      ]);
      // dd($request->judul);
      $update = Book::where('slug', '=' , $id)->first();
      // dd($update);
      $update->update([
        'judul' => $request->judul,
        'review' => $request->review,
        'slug' => str_slug($request->judul)
      ]);
      // dd($id);
      return redirect()->route('books.show', $request->judul);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = Book::where('judul', '=', $id)->first();
        $delete->delete();

        return redirect()->back();
    }
}
