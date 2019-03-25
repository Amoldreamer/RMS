<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Illuminate\Support\Facades\Storage;
use DB;

class Add_restaurantController extends Controller
{
    public function index(Request $request){
        $resource = opendir("Images");
        $l=0;
        while(($entry = readdir($resource))!==FALSE){
            $l++;
        }
        $l = $l-1;

        if($request->hasFile("image")){
            $file = $request->file("image");
            $fName = $file->getClientOriginalName();
            $fExt = $file->getClientOriginalExtension();

            $new_array = explode('.',$fName);
            $first = $new_array[0];
            $second = $new_array[1];
            
            $changedName = str_replace($first,$l,$first);
            $changedExt = str_replace($second,'jpg',$second);

            $file->move("Images/", (int)$changedName.'.'.$changedExt);
        };
        
        $validator = Validator::make($request->all(),[
            "name"=>"required",
            "kind"=>"required",
            "email"=>"required|max:20|min:8|email|unique:restaurantinformations,restaurantEmail",
            "family"=>"required",
            "cuisine"=>"required",
            "about"=>"required",
            "phone"=>"required",
            "state"=>"required",
            "city"=>"required",
            "address"=>"required",
        ]);
        
        if($validator->fails()){
            return redirect('add_restaurant')->withErrors($validator);
        }
        else{
            DB::table('restaurantinformations')->insert(['restaurantName'=>$request->name,'restaurantType'=>$request->kind,'restaurantEmail'=>$request->email,'restaurantFamily'=>$request->family,'Cuisine'=>$request->cuisine,'aboutRestaurant'=>$request->about,'restaurantPhone'=>$request->phone,'State'=>$request->state,'City'=>$request->city,'restaurantAddress'=>$request->address,'rest_image'=>$request->image]);            
        }
    }
}
