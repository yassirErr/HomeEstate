<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\City;
use App\Models\Property;
use App\Models\Category;

class HomeController extends Controller
{
   public function home(){

    $data = [];
    $data ['sliders'] =Slider::get(['photo']);
    $data ['cities'] =City::get();
    $data ['properties'] =Property::get();
    
    $data['categories'] = Category::parent()->select('id','slug')->with(['childrens' => function($q){
        $q->select('id','parent_id','slug');
        $q->with(['childrens'=>function($qq){
            $qq->select('id','parent_id','slug');
        }]);
    }])->get();
    return view('front.site',$data);

   }
}
