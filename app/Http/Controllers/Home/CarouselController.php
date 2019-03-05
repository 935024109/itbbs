<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Carousel;
class CarouselController extends Controller
{
    //获取轮播图数据
    public function index()
    {

    	//获取数据,分配到视图
    	$carousels = Carousel::select('img_src','link_url')->get();
    	dump($carousels);
    }
}
