<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateFloorRequest;
use App\Http\Requests\UpdateFloorRequest;
use App\Repositories\FloorRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class FloorController extends AppBaseController
{
    /** @var  FloorRepository */
    private $floorRepository;

    public function __construct(FloorRepository $floorRepo)
    {
        $this->floorRepository = $floorRepo;
    }

    /**
     * Display a listing of the Floor.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $floors = $this->floorRepository->all();

        return view('floors.index')
            ->with('floors', $floors);
    }

    /**
     * Show the form for creating a new Floor.
     *
     * @return Response
     */
    public function create()
    {
        return view('floors.create');
    }

    /**
     * Store a newly created Floor in storage.
     *
     * @param CreateFloorRequest $request
     *
     * @return Response
     */
    public function store(CreateFloorRequest $request)
    {
        $input = $request->all();

        $floor = $this->floorRepository->create($input);

        Flash::success('Floor saved successfully.');

        return redirect(route('floors.index'));
    }

    /**
     * Display the specified Floor.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $floor = $this->floorRepository->find($id);

        if (empty($floor)) {
            Flash::error('Floor not found');

            return redirect(route('floors.index'));
        }

        return view('floors.show')->with('floor', $floor);
    }

    /**
     * Show the form for editing the specified Floor.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $floor = $this->floorRepository->find($id);

        if (empty($floor)) {
            Flash::error('Floor not found');

            return redirect(route('floors.index'));
        }

        return view('floors.edit')->with('floor', $floor);
    }

    /**
     * Update the specified Floor in storage.
     *
     * @param int $id
     * @param UpdateFloorRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateFloorRequest $request)
    {
        $floor = $this->floorRepository->find($id);

        if (empty($floor)) {
            Flash::error('Floor not found');

            return redirect(route('floors.index'));
        }

        $floor = $this->floorRepository->update($request->all(), $id);

        Flash::success('Floor updated successfully.');

        return redirect(route('floors.index'));
    }

    /**
     * Remove the specified Floor from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $floor = $this->floorRepository->find($id);

        if (empty($floor)) {
            Flash::error('Floor not found');

            return redirect(route('floors.index'));
        }

        $this->floorRepository->delete($id);

        Flash::success('Floor deleted successfully.');

        return redirect(route('floors.index'));
    }
}
