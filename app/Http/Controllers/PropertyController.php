<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePropertyRequest;
use App\Http\Requests\UpdatePropertyRequest;
use App\Repositories\PropertyRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use App\Models\Property;
use App\Models\PropertyType;
use App\Models\PropertySubType;
use App\Models\Balcony;
use App\Models\Floor;
use App\Models\Bathroom;
use App\Models\Bedroom;
use Flash;
use Response;
use DB;

class PropertyController extends AppBaseController
{
    /** @var  PropertyRepository */
    private $propertyRepository;

    public function __construct(PropertyRepository $propertyRepo)
    {
        $this->propertyRepository = $propertyRepo;

    }

    /**
     * Display a listing of the Property.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        //$properties = $this->propertyRepository->all();
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


        return view('properties.index')
            ->with('properties', $properties);
    }

    /**
     * Show the form for creating a new Property.
     *
     * @return Response
     */
    public function create()
    {
        return view('properties.create');
    }

    /**
     * Store a newly created Property in storage.
     *
     * @param CreatePropertyRequest $request
     *
     * @return Response
     */
    public function store(CreatePropertyRequest $request)
    {
        $input = $request->all();

        $property = $this->propertyRepository->create($input);

        Flash::success('Property saved successfully.');

        return redirect(route('properties.index'));
    }

    /**
     * Display the specified Property.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $property = $this->propertyRepository->find($id);

        if (empty($property)) {
            Flash::error('Property not found');

            return redirect(route('properties.index'));
        }

        return view('properties.show')->with('property', $property);
    }

    /**
     * Show the form for editing the specified Property.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $property = $this->propertyRepository->find($id);
         //dd($property->property_sub_type_id);
          $property_type=PropertyType::all();
        $property_sub_type=PropertySubType::find($property->property_sub_type_id);
        $balcony=Balcony::all();
        $floor=Floor::all();
        $bathroom=Bathroom::all();
        $bedroom=Bedroom::all();
        if (empty($property)) {
            Flash::error('Property not found');

            return redirect(route('properties.index'));
        }

        return view('properties.edit')->with(['property'=> $property,'property_type'=>$property_type,
            'balcony'=>$balcony,
            'floor'=>$floor,
            'bedroom'=>$bedroom,
            'bathroom'=>$bathroom,
            'property_sub_type'=>$property_sub_type
        ]);
    }

    /**
     * Update the specified Property in storage.
     *
     * @param int $id
     * @param UpdatePropertyRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePropertyRequest $request)
    {
        //dd($request['property_type_id']);
        $property = Property::find($id);

        if (empty($property)) {
            Flash::error('Property not found');

            return redirect(route('properties.index'));
        }
        $property['property_type_id']=$request['property_type_id'];
         $property['property_sub_type_id']=$request['property_sub_type_id'];
          $property['property_title']=$request['property_title'];
           $property['total_area']=$request['total_area'];
            $property['builtup_area']=$request['builtup_area'];
             $property['carpet_area']=$request['carpet_area'];
              $property['location']=$request['location'];
               $property['price']=$request['price'];

                $property['bathroom_id']=$request['bathroom_id'];
                 $property['bedroom_id']=$request['bedroom_id'];
                  $property['balcony_id']=$request['balcony_id'];
                   $property['floor_id']=$request['floor_id'];
                   $property['about_property']=$request['about_property'];

         $images=array();

      if ($files=$request->file('image')) {
        //dd('hi');
        foreach($files as $file){
            $filename=time()."_".$file->getClientOriginalName();

             $destinationPath = 'uploads';
      $file->move($destinationPath, $filename);
            $images[]=$filename;
            
        }
        $property['image']=implode("|",$images);
        //dd($property['image']=implode("|",$images));
       }
       //dd($property);
       $property->save();
        
        

        //$property = $this->propertyRepository->update($input, $id);

        Flash::success('Property updated successfully.');

        return redirect(route('properties.index'));
    }

    /**
     * Remove the specified Property from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $property = $this->propertyRepository->find($id);

        if (empty($property)) {
            Flash::error('Property not found');

            return redirect(route('properties.index'));
        }

        $this->propertyRepository->delete($id);

        Flash::success('Property deleted successfully.');

        return redirect(route('properties.index'));
    }
     public function changeUserStatus(Request $request)
    {  
        $id=$request->id;
       
        $user = Property::find($id);


        $user->is_active= $request->is_active;

        $user->save();
  // dd($user[0]['is_active']->save());
  //       DB::table('properties')
  //     ->where('id', $id)
  //     ->update($user[0]['is_active']);

  
        return response()->json(['success'=>'User status change successfully.']);
    }
}
