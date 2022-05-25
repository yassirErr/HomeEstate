<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use App\Http\Requests\SliderImagesRequest;
use Illuminate\Http\Request;




class SliderController extends Controller
{
    public function addImages(){
        $images = Slider::get(['photo']);
        return view('dashboard.sliders.create',compact('images'));
    }

    public function saveSliderImages(Request $request){

        $file = $request ->file('dzfile');
        $filename = uploadImage('sliders', $file);

        return response()->json([
            'name' => $filename, 
            'original_name' => $file -> getClientOriginalName(),
        ]);
    }

    public function saveSliderImagesDB(SliderImagesRequest $request ){
        try{

            if($request ->has('document')&& count($request->document)>0){
                foreach($request ->document as $image){
                   Slider::create([
                    'photo' => $image,
                   ]);
                }
            }
    
            return redirect()->back()->with(['success'=>'SuccessFully Created']);

        }catch(\Exception $ex){
            return redirect()->back()->with(['success'=>'SuccessFully Created']);
        }
 
    }
}
