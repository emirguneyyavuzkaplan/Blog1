<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;

class HomepageController extends Controller
{
    public  function index(){

        $data['categories']=Category::orderBy('name', 'desc')->get();
        return view('front.homepage', $data);
    }
}

