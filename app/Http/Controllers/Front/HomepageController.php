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
        $data['articles']=Article::orderBy('created_at','DESC')->get();

        $data['categories']=Category::orderBy('name', 'desc')->get();
        return view('front.homepage', $data);
    }
    public function single($slug){


        return view('front.single');

    }
}

