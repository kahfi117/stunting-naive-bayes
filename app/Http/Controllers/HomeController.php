<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Kategori;
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
        
        $blog = Blog::where('slug', '=',$slug)->get();
        dd($blog);


    }

    public function contact(){
        // 
    }

}
