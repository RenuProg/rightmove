<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePropertySubTypeRequest;
use App\Http\Requests\UpdatePropertySubTypeRequest;
use App\Repositories\PropertySubTypeRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use App\Models\PropertyType;
use Flash;
use Response;
use DB;

class PropertySubTypeController extends AppBaseController
{
    /** @var  PropertySubTypeRepository */
    private $propertySubTypeRepository;

    public function __construct(PropertySubTypeRepository $propertySubTypeRepo)
    {
        $this->propertySubTypeRepository = $propertySubTypeRepo;
    }

    /**
     * Display a listing of the PropertySubType.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $propertySubTypes = DB::table('property_sub_type')
            ->join('property_type', 'property_type.id', '=', 'property_sub_type.property_type_id')
            
            ->select('property_sub_type.*','property_type.property_type')
            ->where('property_sub_type.deleted_at', '=', null)
            ->get();
            //dd($propertySubTypes);

        return view('property_sub_types.index')
            ->with('propertySubTypes', $propertySubTypes);
    }

    /**
     * Show the form for creating a new PropertySubType.
     *
     * @return Response
     */
    public function create()
    {
        $property_type=PropertyType::all();
         //dd($property_type['id']);
        return view('property_sub_types.create')->with('property_type',$property_type);
    }

    /**
     * Store a newly created PropertySubType in storage.
     *
     * @param CreatePropertySubTypeRequest $request
     *
     * @return Response
     */
    public function store(CreatePropertySubTypeRequest $request)
    {
        $request->validate([
    'property_type_id' => 'required',
    
]);
        $input = $request->all();

        $propertySubType = $this->propertySubTypeRepository->create($input);

        Flash::success('Property Sub Type saved successfully.');

        return redirect(route('propertySubTypes.index'));
    }

    /**
     * Display the specified PropertySubType.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $propertySubType = $this->propertySubTypeRepository->find($id);

        if (empty($propertySubType)) {
            Flash::error('Property Sub Type not found');

            return redirect(route('propertySubTypes.index'));
        }

        return view('property_sub_types.show')->with('propertySubType', $propertySubType);
    }

    /**
     * Show the form for editing the specified PropertySubType.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $propertySubType = $this->propertySubTypeRepository->find($id);
        $property_type=PropertyType::all();
       // dd($property_type);

        if (empty($propertySubType)) {
            Flash::error('Property Sub Type not found');

            return redirect(route('propertySubTypes.index'));
        }

        return view('property_sub_types.edit')->with(['propertySubType'=> $propertySubType,'property_type'=>$property_type]);
    }

    /**
     * Update the specified PropertySubType in storage.
     *
     * @param int $id
     * @param UpdatePropertySubTypeRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePropertySubTypeRequest $request)
    {
        $request->validate([
    'property_type_id' => 'required',
    
]);
        $propertySubType = $this->propertySubTypeRepository->find($id);

        if (empty($propertySubType)) {
            Flash::error('Property Sub Type not found');

            return redirect(route('propertySubTypes.index'));
        }

        $propertySubType = $this->propertySubTypeRepository->update($request->all(), $id);

        Flash::success('Property Sub Type updated successfully.');

        return redirect(route('propertySubTypes.index'));
    }

    /**
     * Remove the specified PropertySubType from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $propertySubType = $this->propertySubTypeRepository->find($id);

        if (empty($propertySubType)) {
            Flash::error('Property Sub Type not found');

            return redirect(route('propertySubTypes.index'));
        }

        $this->propertySubTypeRepository->delete($id);

        Flash::success('Property Sub Type deleted successfully.');

        return redirect(route('propertySubTypes.index'));
    }
}
