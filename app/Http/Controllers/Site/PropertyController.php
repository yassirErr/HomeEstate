<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\Property;
use App\Models\Category;
use App\Models\Image;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    public function propertyById($id){
        
        $data=[];
        $data['property'] = Property::where('id',$id)->first(); //improve select only required fields
        $data['cities']  =City::where('id',$id)->get();
        $data['images'] = Image::where('id',$id)->get(); //improve select only required fields
    
        $data['property'] -> id ;
        $data['property'] -> categories ->pluck('id'); 
    
    
        $data['properties'] = Property::get();
    
        $data['categories'] = Category::parent()->select('id', 'slug')->with(['childrens' => function ($q) {
           $q->select('id', 'parent_id', 'slug');
           $q->with(['childrens' => function ($qq) {
               $qq->select('id', 'parent_id', 'slug');
           }]);
       }])->get();


       if(!$data['property']){
        return redirect()->route('home');

       }
       return view('front.users.properties.home.properties-details',$data);
    }
}
