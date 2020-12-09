<?php

namespace App\Http\Controllers;

use App\Models\PostAdvertisement;
use Illuminate\Support\Facades\File; 
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\PropertyType;
use App\Models\PropertySubType;
use App\Models\Balcony;
use App\Models\Floor;
use App\Models\Bathroom;
use App\Models\Bedroom;

use DB;




class PostAdvertisementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $properties = DB::table('properties')
            ->join('property_type', 'property_type.id', '=', 'properties.property_type_id')
            ->join('property_sub_type', 'property_sub_type.id', '=', 'properties.property_sub_type_id')
            ->join('bedroom', 'bedroom.id', '=', 'properties.bedroom_id')
            ->join('bathroom', 'bathroom.id', '=', 'properties.bathroom_id')
            ->join('balcony', 'balcony.id', '=', 'properties.balcony_id')
             ->join('floor', 'floor.id', '=', 'properties.floor_id')
            
            ->select('properties.*','property_type.property_type','property_sub_type.type','bathroom.bathroom','balcony.balcony','floor.floor','bedroom.bedroom')
            ->where('properties.deleted_at', '=', null)
            ->get();
        //dd($properties);
        return view('index')->with('properties',$properties);
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $property_type=PropertyType::all();
        //$property_sub_type=PropertySubType::all();
        $balcony=Balcony::all();
        $floor=Floor::all();
        $bathroom=Bathroom::all();
        $bedroom=Bedroom::all();
       // dd($property_type);
        
      return view('add_post')->with(['property_type'=>$property_type,'balcony'=>$balcony,'floor'=>$floor,'bedroom'=>$bedroom,'bathroom'=>$bathroom]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        $request->validate([
            //'image' => 'required|mimes:jpeg,jpg,png|max:2048',
            
        'property_type'=>'required',
        'property_sub_type'=>'required',
        'total_area'=>'required',
        'builtup_area'=>'required',
        'property_title' => 'required',
        'price'=>'required|numeric|min:1',
        'about'=>'required',
        'location'=>'required',
        'carpet_area'=>'required',
        'bathroom'=>'required',
        'bedroom'=>'required',
        'balcony'=>'required',
        'floor'=>'required'
    ]);
        $status=0;
        $input['property_type_id'] = $request->property_type;
        $input['property_sub_type_id'] = $request->property_sub_type;
        $input['total_area'] = $request->total_area;
        $input['builtup_area'] = $request->builtup_area;
        $input['price'] = $request->price;
        $input['about_property'] = $request->about;
        $input['location'] = $request->location; 
        $input['carpet_area'] = $request->carpet_area;
        $input['bathroom_id'] = $request->bathroom;
        $input['bedroom_id'] = $request->bedroom;
        $input['balcony_id'] = $request->balcony;
         $input['floor_id'] = $request->floor;
         $input['property_title'] = $request->property_title;
         $input['is_active'] = $status;

         //dd($input );
        $images=array();
      if ($files=$request->file('image')) {
        foreach($files as $file){
            $filename=time()."_".$file->getClientOriginalName();
             $destinationPath = 'uploads';
      $file->move($destinationPath, $filename);
            $images[]=$filename;
            $input['image']=implode("|",$images);
        }
        
        //Move Uploaded File
   //      $file = $request->file('image');
   // $filename=time().".".$file->getClientOriginalExtension();
   //    $destinationPath = 'uploads';
   //    $file->move($destinationPath, $filename);
   //      $input['image']= $destinationPath.'/'.$filename;
        }
             

         
        PostAdvertisement::create($input);
        
        
        return redirect('')->with('status', 'Property added Successfully');
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PostAdvertisement  $postAdvertisement
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $post = DB::table('properties')
            ->join('property_type', 'property_type.id', '=', 'properties.property_type_id')
            ->join('property_sub_type', 'property_sub_type.id', '=', 'properties.property_sub_type_id')
            ->join('bedroom', 'bedroom.id', '=', 'properties.bedroom_id')
            ->join('bathroom', 'bathroom.id', '=', 'properties.bathroom_id')
            ->join('balcony', 'balcony.id', '=', 'properties.balcony_id')
             ->join('floor', 'floor.id', '=', 'properties.floor_id')
            
            ->select('properties.*','property_type.property_type','property_sub_type.type','bathroom.bathroom','balcony.balcony','floor.floor','bedroom.bedroom')
            ->where('properties.deleted_at', '=', null)
            ->where('properties.id', '=', $id)
            ->get();
          //dd($post);


        if (empty($post)) {
            Flash::error('Property Details not found');

            return redirect(route('post'));
        }
        return view('post_detail')->with('property_detail', $post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PostAdvertisement  $postAdvertisement
     * @return \Illuminate\Http\Response
     */
    public function edit(PostAdvertisement $postAdvertisement)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PostAdvertisement  $postAdvertisement
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PostAdvertisement $postAdvertisement)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PostAdvertisement  $postAdvertisement
     * @return \Illuminate\Http\Response
     */
    public function destroy(PostAdvertisement $postAdvertisement)
    {
        //
    }
    public function get_sub_type(Request $request){
       
      
        $id=$request->id;
         //dd($id);

        $data='';

        $city = PropertySubType::where('property_type_id','=', $id)->get();
        //dd($city);
        foreach($city as $citys){
         $data.= "<option value='".$citys->id."'>$citys->type</option>";
            
        } 
        echo  $data;

    }
}
