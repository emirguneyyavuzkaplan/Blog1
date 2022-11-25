<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
//Models
use App\Models\Category;
use App\Models\Article;

class HomepageController extends Controller
{
    public  function index(){
        $data['articles']=Article::orderBy('created_at','DESC')->paginate(2);
        $data['articles']->withPath(url('sayfa'));
        $data['categories']=Category::orderBy('name', 'desc')->get();
        return view('front.homepage', $data);
    }
    public function single($category,$slug){
        Category::whereSlug($category)->first() ?? abort(403, 'böyle kategori yok');
        $article=Article::whereSlug($slug)->first() ?? abort(403,'error');
        $article->increment('hit');
        $data['article']=$article;
        $data['categories']=Category::inRandomOrder()->get();
        return view('front.single',$data);

    }
    public function category($slug){
        $category = Category::whereSlug($slug)->first() ?? abort(403,'Böyle Bir Kategori yok');
        $data['category']=$category;
        $data['articles']=Article::where('category_id',$category->id)->orderBy('created_at','DESC')->paginate(1);
        return view('front.category',$data);


    }
}
