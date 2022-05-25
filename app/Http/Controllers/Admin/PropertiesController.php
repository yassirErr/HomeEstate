<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\GeneralPropertyRequest;
use App\Http\Requests\PropertyFeatureRequest;
use App\Http\Requests\PropertyImagesRequest;
use App\Http\Requests\PropertyPriceValidation;
use App\Models\Category;
use App\Models\CategoryTranslation;
use App\Models\City;
use App\Models\Image;
use App\Models\Property;
use Illuminate\Http\Request;
use DB;

class PropertiesController extends Controller
{
   public function index(){

      $properties = Property::select('id','slug','total_price','created_at')->paginate(PAGINATION_COUNT);
      return view ('dashboard.properties.general.index',compact('properties'));
   }

   public function create(){
       $data=[];
       $data['cities']=City::active()->select('id')->get();
       $data['categories']=Category::active()->select('id')->get();
       return view('dashboard.properties.general.create',$data);
   }

   public function store(GeneralPropertyRequest $request){



      //validation 
      DB::beginTransaction();

   
      if(!$request ->has('is_active'))

      $request->request->add(['is_active'=>0]);
      else 
      $request->request->add(['is_active'=>1]);

      $property= Property::create([
         'slug'=>$request ->slug,
         'city_id'=>$request ->city_id,
         'is_active'=>$request ->is_active,
      ]);


      //save translations

      $property->building_age = $request->building_age;
      $property->name = $request->name;
      $property->description = $request->description;
      $property->parking = $request->parking;
      $property->cooling = $request->cooling;
      $property->heating = $request->heating;
      $property->sewer = $request->sewer;
      $property->water = $request->water;
      $property->torage_room = $request->torage_room;
      $property->exercise_room = $request->exercise_room;
      $property->location = $request->location;
      $property->save();

      //save property categories
      $property ->categories()->attach($request->categories);

      //save product tags
      DB::commit();
      return redirect()->route('admin.properties')->with(['success'=>'added successfully']);


   }



   public function getprice($property_id){

      $property = Property:: find($property_id);

      if(!$property_id)
      return redirect()->route('admin.properties')->with(['error'=>'This section does not exist']);

      return view('dashboard.properties.prices.create')->with('id',$property_id);

   }



   public function savePropertyPrice(PropertyPriceValidation $request){
      //validation 
      try{

         Property::whereId($request ->property_id)->update($request ->only(['total_price','price_meter']));
         return redirect()->route('admin.properties')->with(['success'=>'added successfully']);

      }catch(\Exception $ex){
         return redirect()->route('admin.properties')->with(['error'=>'An error occurred']);
      }
   
   }



   public function getPropertyFeature($property_id){

      $property = Property:: find($property_id);

      if(!$property_id)
      return redirect()->route('admin.properties')->with(['error'=>'This section does not exist']);

      return view('dashboard.properties.features.create')->with('id',$property_id);

   }

   public function savePropertyFeature(PropertyFeatureRequest $request){

         Property::whereId($request->property_id)->update($request->except(['_token','property_id']));

         return redirect()->route('admin.properties')->with(['success'=>'Updated successfully']);

   }

   public function addImages($property_id){

      $property=Property::find($property_id);

      if(!$property_id)
      return redirect()->route('admin.properties')->with(['error'=>'This section does not exist']);
      return view('dashboard.properties.images.create')->withId($property_id);

   }

   //save images into  properties folder 
   public function savePropertyImages(Request $request){

      $file = $request->file('dzfile');
      $filename = uploadImage('properties' , $file);
      return response()->json([
         'name'=> $filename,
         'original_name'=>$file->getClientOriginalName(),
      ]);
   }


   public function savePropertyImagesDB(PropertyImagesRequest $request){

      try {
          // save dropzone images
          if($request->has('document') && count($request->document) > 0) {
              foreach ($request->document as $image) {
                  Image::create([
                      'property_id' => $request->property_id,
                      'photo' => $image,
                  ]);
              }
          }

          return redirect()->route('admin.properties')->with(['success' => 'successfully']);

      }catch(\Exception $ex){
          return $ex;
          return redirect()->route('admin.properties')->with(['error' => 'An error occurred, please try again later']);
      }
  }

}

