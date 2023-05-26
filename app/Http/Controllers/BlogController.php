<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Kategori;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blog = Blog::all();

        return view('admin.blog.index', compact('blog'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kategori = Kategori::all();
        $tag = Tag::all();
        return view('admin.blog.add', compact('kategori', 'tag'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $blog = new Blog;


        // dd($request->file('gambar'));

        $image = $request->file('gambar');
        $imageName = time().'.'.$image->getClientOriginalExtension();
        $image->move(public_path('images'), $imageName);


        $blog->title = $request->judul;
        $blog->slug = Str::slug($request->judul);
        $blog->kategori_id = $request->kategori;
        $blog->user_id = 1;
        $blog->konten = $request->konten;
        $blog->tumbnail = $imageName;

        $blog->save();


        $blog->tags()->sync($request->tag);

        Alert::toast('Berhasil Menambahkan Konten Baru', 'success');
        return redirect()->route('blog.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(Blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $blog)
    {
        $blog->get();
        $kategori = Kategori::all();
        $tag = Tag::all(); 

        return view('admin.blog.edit', compact('blog', 'kategori', 'tag'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Blog $blog)
    {
        $image = $request->file('gambar');
        $imageName = time().'.'.$image->getClientOriginalExtension();
        $image->move(public_path('images'), $imageName);


        $blog->title = $request->judul;
        $blog->slug = Str::slug($request->judul);
        $blog->kategori_id = $request->kategori;
        $blog->user_id = 1;
        $blog->konten = $request->konten;
        $blog->tumbnail = $imageName;

        $blog->save();


        $blog->tags()->sync($request->tag);

        Alert::toast('Berhasil Menambahkan Konten Baru', 'success');
        return redirect()->route('blog.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {
        $blog->delete();

        Alert::toast('Berhasil Menghapus Data Blog', 'sucsess');

        return redirect()->back();
    }

    public function image(Request $request)
    {
        $originName = $request->file('upload')->getClientOriginalName();
        $fileName = pathinfo($originName, PATHINFO_FILENAME);
        $extension = $request->file('upload')->getClientOriginalExtension();
        $fileName = $fileName.'_'.time().'.'.$extension;
        $request->file('upload')->move(public_path('images'), $fileName);
        $CKEditorFuncNum = $request->input('CKEditorFuncNum');
        $url = asset('images/'.$fileName); 
        $msg = 'Image successfully uploaded'; 
        $response = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";
           
        @header('Content-type: text/html; charset=utf-8'); 
        echo $response;
    }
}
