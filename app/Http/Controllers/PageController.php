<?php

namespace App\Http\Controllers;

use App\Models\Content;
use App\Models\Page;
use App\Models\PostCategory;
use App\Models\KalenderAkademik;
use App\Models\Post;
use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function index($slug)
    {
        //$kalender = KalenderAkademik::select('slug')->groupBy(['slug'])->get();
        $category = PostCategory::all();
        $pg = Page::where('slug','=',$slug)->first();
        $data = Content::where('page_id','=',$pg->id)->orderBy('published_at','asc')->get();
        Content::where('page_id','=',$pg->id)->increment('views_count');
        return view('pages.index', compact('data','category'));
    }

    public function show($slug, $detail)
    {
        $category = PostCategory::all();
        $post = Post::where('slug','=',$detail)->with(['category','user'])->first();
        return view('pages.show',compact('post','category'));
    }
}
