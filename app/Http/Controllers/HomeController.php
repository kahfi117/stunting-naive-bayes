<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Kategori;
use App\Models\Tag;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){

        $blog = Blog::limit(3)->orderBy('created_at', 'ASC')->get();
        return view('user.home', compact('blog'));
    }

    public function blog(Request $request){

        $search = $request->search;

        if ($search != null) {
            # code...
            $blog = Blog::where('title', 'like', '%' . $search . '%')
                    ->orWhere('konten', 'like', '%' . $search . '%')
                    ->paginate('2');
        } else {

            $blog = Blog::paginate(2);
        }
        
        return view('user.blog', compact('blog'));
    }

    public function detailBlog($slug){
        
        $blog = Blog::where('slug', '=',$slug)->first();
        $kategori = Kategori::limit(5)->get();

        $recent = Blog::limit(3)->get();


        return view('user.blog_detail', compact('blog', 'kategori', 'recent'));

    }

    public function blogKategori($slug){
        $kategori = Kategori::where('slug', '=', $slug)->first();
        $blog = Blog::where('kategori_id', '=', $kategori->id)->paginate(5);
        return view('user.blog', compact('blog'));
    }

    public function contact(){
        // 
    }

}
