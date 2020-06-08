<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;//means the user in the methods is
use App\User;
use Illuminate\Support\Facades\Storage;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Book::where('user_id',auth()->user()->id)->with('user')->paginate(6);
        // dd($books);
        return view('library_books.books',[
            'books'=>$books
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('add_book_page.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $data=request()->validate([
            /*'another' => '',if there more fields and doesn't need to be validated*/
            'book_name'=>'required',
            'book_photo' => ['required', 'image'],
            'book_lang'=>'required',
            'target_relegion'=>'required',
            'country'=>'required',
            'city'=>'required',            
          ]);

        // $files_array = [];
        $book_photo_path='';
        $book_file_path='';
 
        // $data=$request->all();
        
        if($request->hasFile('book_photo'))
        {
            // dd('book_photo');
            $fileNameWithExt =
            $request->file('book_photo')->getClientOriginalName();
            $filename = pathinfo($fileNameWithExt,PATHINFO_FILENAME);
            $extension = $request->file('book_photo')->getClientOriginalExtension();
            $fileNameToStore= $filename.'.'.time().'.'.$extension;
            // $book_photo_path=$request->file('book_photo')->storeAs('bookPhotos',$fileNameToStore);
            $book_photo_path=$request->file('book_photo')->store('bookPhotos','public');
            
        }
        if($request->hasFile('book_file'))
        {
            $fileNameWithExt =
            $request->file('book_file')->getClientOriginalName();
            $filename = pathinfo($fileNameWithExt,PATHINFO_FILENAME);
            $extension = $request->file('book_file')->getClientOriginalExtension();
            $fileNameToStore= $filename.'.'.time().'.'.$extension;
            // $book_file_path=$request->file('book_file')->storeAs('bookpdf',$fileNameToStore);
            // dd($request->file('book_file'));
            $book_file_path=$request->file('book_file')->store('bookpdf','public');
        }
        auth()->user()->books()->create([
            'name' => $data['book_name'],
            'photo' => $book_photo_path,
            'language' => $data['book_lang'],
            'relegion' => $data['target_relegion'],
            'country' => $data['country'],
            'city' => $data['city'],   
            'pdf'=>$book_file_path 
          ]);

        return redirect('/librarybooks');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pdf_book = Book::find($id);
        return Storage::disk('public')->download($pdf_book->pdf);
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
        $book=Book::find($id);
        return view('edit_book.edit',['book'=>$book]);
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
        $book_photo_path='';
        $book_file_path='';

        $data=request()->validate([
            /*'another' => '',if there more fields and doesn't need to be validated*/
            'book_name'=>'required',            
            'book_lang'=>'required',
            'target_relegion'=>'required',
            'country'=>'required',
            'city'=>'required',            
          ]);

          if($request->hasFile('book_photo'))
          {
              // dd('book_photo');
              $fileNameWithExt =
              $request->file('book_photo')->getClientOriginalName();
              $filename = pathinfo($fileNameWithExt,PATHINFO_FILENAME);
              $extension = $request->file('book_photo')->getClientOriginalExtension();
              $fileNameToStore= $filename.'.'.time().'.'.$extension;
              // $book_photo_path=$request->file('book_photo')->storeAs('bookPhotos',$fileNameToStore);
              $book_photo_path=$request->file('book_photo')->store('bookPhotos','public');
              
          }
          if($request->hasFile('book_file'))
          {
              $fileNameWithExt =
              $request->file('book_file')->getClientOriginalName();
              $filename = pathinfo($fileNameWithExt,PATHINFO_FILENAME);
              $extension = $request->file('book_file')->getClientOriginalExtension();
              $fileNameToStore= $filename.'.'.time().'.'.$extension;
              // $book_file_path=$request->file('book_file')->storeAs('bookpdf',$fileNameToStore);
              // dd($request->file('book_file'));
              $book_file_path=$request->file('book_file')->store('bookpdf','public');
          }

        $book=Book::find($id);
        $book->name= $data['book_name'];
        $book->language=$data['book_lang'];
        $book->relegion=$data['target_relegion'];
        $book->country=$data['country'];
        $book->city=$data['city'];
        $book->photo=$request->hasFile('book_photo')?$book_photo_path:$book->photo;
        $book->pdf=$request->hasFile('book_file')?$book_file_path:$book->pdf;
        

        $book->save();
        return redirect('/librarybooks');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $book=Book::find($id);
        $book->delete();
        return redirect('/librarybooks'); 
    }
}
