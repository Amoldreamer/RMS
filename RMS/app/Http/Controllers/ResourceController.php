<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Validator;

class ResourceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $resource = opendir("Images");
        $l=0;
        while(($entry = readdir($resource))!==FALSE){
            $l++;
        }
        $counts = array();

        for($i=1;$i<=$l-2;$i++){
            array_push($counts,$i);
        }
        
        $data = DB::table('restaurantinformations')->get();
         return view('all',compact('counts','data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $resource = opendir("Images");
        $l=0;
        while(($entry = readdir($resource))!==FALSE){
            $l++;
        }
        $l = $l - 1;
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Request $request)
    {
        $filePath = "Images/".$request->fName;
        
        unlink($filePath);
        $restaurant = DB::table("restaurantinformations")->where(["id"=>$id])->delete();
    }
}
