<?php

namespace App\Http\Controllers\Front;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
//Models
use App\Models\Category;
use App\Models\Article;
use App\Models\Page;



class HomepageController extends Controller
{
    public function __construct()
    {
        view()->share('pages',Page::orderBy('order','ASC')->get());
        view()->share('categories',Category::inRandomOrder()->get());
    }


    public  function index(){
        $data['articles']=Article::orderBy('created_at','DESC')->paginate(2);
        $data['articles']->withPath(url('sayfa'));


        return view('front.homepage', $data);
    }
    public function single($category,$slug){
        Category::whereSlug($category)->first() ?? abort(403, 'böyle kategori yok');
        $article=Article::whereSlug($slug)->first() ?? abort(403,'error');
        $article->increment('hit');
        $data['article']=$article;


        return view('front.single',$data);

    }
    public function category($slug){
        $category = Category::whereSlug($slug)->first() ?? abort(403,'Böyle Bir Kategori yok');
        $data['category']=$category;
        $data['articles']=Article::where('category_id',$category->id)->orderBy('created_at','DESC')->paginate(1);


        return view('front.category',$data);


    }
    public  function page($slug){

       $page=Page::whereSlug($slug)->first() ?? abort(403,'boyle sayfa yok kardes');
       $data['page']=$page;

       return view('front.page',$data);
    }
    public  function contact(){
        return view('front.contact');

    }
    public function contactpost(Request $request){
        print_r($request->post());


    }

}
