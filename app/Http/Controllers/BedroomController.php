<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateBedroomRequest;
use App\Http\Requests\UpdateBedroomRequest;
use App\Repositories\BedroomRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class BedroomController extends AppBaseController
{
    /** @var  BedroomRepository */
    private $bedroomRepository;

    public function __construct(BedroomRepository $bedroomRepo)
    {
        $this->bedroomRepository = $bedroomRepo;
    }

    /**
     * Display a listing of the Bedroom.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $bedrooms = $this->bedroomRepository->all();

        return view('bedrooms.index')
            ->with('bedrooms', $bedrooms);
    }

    /**
     * Show the form for creating a new Bedroom.
     *
     * @return Response
     */
    public function create()
    {
        return view('bedrooms.create');
    }

    /**
     * Store a newly created Bedroom in storage.
     *
     * @param CreateBedroomRequest $request
     *
     * @return Response
     */
    public function store(CreateBedroomRequest $request)
    {
        $input = $request->all();

        $bedroom = $this->bedroomRepository->create($input);

        Flash::success('Bedroom saved successfully.');

        return redirect(route('bedrooms.index'));
    }

    /**
     * Display the specified Bedroom.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $bedroom = $this->bedroomRepository->find($id);

        if (empty($bedroom)) {
            Flash::error('Bedroom not found');

            return redirect(route('bedrooms.index'));
        }

        return view('bedrooms.show')->with('bedroom', $bedroom);
    }

    /**
     * Show the form for editing the specified Bedroom.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $bedroom = $this->bedroomRepository->find($id);

        if (empty($bedroom)) {
            Flash::error('Bedroom not found');

            return redirect(route('bedrooms.index'));
        }

        return view('bedrooms.edit')->with('bedroom', $bedroom);
    }

    /**
     * Update the specified Bedroom in storage.
     *
     * @param int $id
     * @param UpdateBedroomRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateBedroomRequest $request)
    {
        $bedroom = $this->bedroomRepository->find($id);

        if (empty($bedroom)) {
            Flash::error('Bedroom not found');

            return redirect(route('bedrooms.index'));
        }

        $bedroom = $this->bedroomRepository->update($request->all(), $id);

        Flash::success('Bedroom updated successfully.');

        return redirect(route('bedrooms.index'));
    }

    /**
     * Remove the specified Bedroom from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $bedroom = $this->bedroomRepository->find($id);

        if (empty($bedroom)) {
            Flash::error('Bedroom not found');

            return redirect(route('bedrooms.index'));
        }

        $this->bedroomRepository->delete($id);

        Flash::success('Bedroom deleted successfully.');

        return redirect(route('bedrooms.index'));
    }
}
