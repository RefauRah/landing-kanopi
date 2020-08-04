<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;
use App\Tags;

class BlogController extends Controller
{
    public function index(Post $post){
        $category_widget = Category::all();
        $tags = Tags::all()->take(10);
        $data = $post->latest()->take(4)->get();
        $trend = $post->latest()->take(3)->get();
        $hot = $post->where('total','>=',1)->orderBy('total','DESC')->take(6)->get();
        return view('blog', compact('trend','data','hot','category_widget','tags'));
    }

    public function profil(Post $post){
        $category_widget = Category::all();
        $tags = Tags::all()->take(10);
        $data = $post->latest()->get();
        $hot = $post->where('total','>=',1)->orderBy('total','DESC')->take(6)->get();
        return view('blog.profil', compact('data', 'category_widget','tags','hot'));
    }

    public function kontak(Post $post){
        $category_widget = Category::all();
        $tags = Tags::all()->take(10);
        $data = $post->latest()->get();
        $hot = $post->where('total','>=',1)->orderBy('total','DESC')->take(6)->get();
        return view('blog.kontak', compact('data', 'category_widget','tags','hot'));
    }

    public function isi_blog($slug){
        $category_widget = Category::all();
        $tags = Tags::all()->take(10);
        $data = Post::latest()->get();
        $hot = Post::where('total','>=',1)->orderBy('total','DESC')->take(6)->get();
        $isi = Post::where('slug', $slug)->get();
        return view('blog.isi_post', compact('data','isi','category_widget','tags','hot'));
    }

    public function list_post(Post $post){
        $category_widget = Category::all();
        $tags = Tags::all()->take(10);
        $data = $post->latest()->paginate(4);
        $hot = $post->where('total','>=',1)->orderBy('total','DESC')->take(6)->get();
        return view('blog.list_post',compact('data','category_widget','tags','hot'));
    }

    public function list_category(Category $category){
        $category_widget = Category::all();
        $tags = Tags::all()->take(10);        
        $hot = Post::where('total','>=',1)->orderBy('total','DESC')->take(6)->get();
        $data = $category->post()->latest()->paginate(4);
        return view('blog.list_post',compact('data','category_widget','tags','hot'));
    } 

    public function cari(request $request){
        $category_widget = Category::all();
        $tags = Tags::all()->take(10);
        $data = Post::where('judul', $request->cari)->orWhere('judul','like','%'.$request->cari.'%')->paginate(6);
        $hot = Post::where('total','>=',1)->orderBy('total','DESC')->take(6)->get();
        return view('blog.list_post',compact('data','category_widget','tags','hot'));
    }
}
