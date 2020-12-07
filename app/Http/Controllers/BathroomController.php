<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateBathroomRequest;
use App\Http\Requests\UpdateBathroomRequest;
use App\Repositories\BathroomRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class BathroomController extends AppBaseController
{
    /** @var  BathroomRepository */
    private $bathroomRepository;

    public function __construct(BathroomRepository $bathroomRepo)
    {
        $this->bathroomRepository = $bathroomRepo;
    }

    /**
     * Display a listing of the Bathroom.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $bathrooms = $this->bathroomRepository->all();

        return view('bathrooms.index')
            ->with('bathrooms', $bathrooms);
    }

    /**
     * Show the form for creating a new Bathroom.
     *
     * @return Response
     */
    public function create()
    {
        return view('bathrooms.create');
    }

    /**
     * Store a newly created Bathroom in storage.
     *
     * @param CreateBathroomRequest $request
     *
     * @return Response
     */
    public function store(CreateBathroomRequest $request)
    {
        $input = $request->all();

        $bathroom = $this->bathroomRepository->create($input);

        Flash::success('Bathroom saved successfully.');

        return redirect(route('bathrooms.index'));
    }

    /**
     * Display the specified Bathroom.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $bathroom = $this->bathroomRepository->find($id);

        if (empty($bathroom)) {
            Flash::error('Bathroom not found');

            return redirect(route('bathrooms.index'));
        }

        return view('bathrooms.show')->with('bathroom', $bathroom);
    }

    /**
     * Show the form for editing the specified Bathroom.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $bathroom = $this->bathroomRepository->find($id);

        if (empty($bathroom)) {
            Flash::error('Bathroom not found');

            return redirect(route('bathrooms.index'));
        }

        return view('bathrooms.edit')->with('bathroom', $bathroom);
    }

    /**
     * Update the specified Bathroom in storage.
     *
     * @param int $id
     * @param UpdateBathroomRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateBathroomRequest $request)
    {
        $bathroom = $this->bathroomRepository->find($id);

        if (empty($bathroom)) {
            Flash::error('Bathroom not found');

            return redirect(route('bathrooms.index'));
        }

        $bathroom = $this->bathroomRepository->update($request->all(), $id);

        Flash::success('Bathroom updated successfully.');

        return redirect(route('bathrooms.index'));
    }

    /**
     * Remove the specified Bathroom from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $bathroom = $this->bathroomRepository->find($id);

        if (empty($bathroom)) {
            Flash::error('Bathroom not found');

            return redirect(route('bathrooms.index'));
        }

        $this->bathroomRepository->delete($id);

        Flash::success('Bathroom deleted successfully.');

        return redirect(route('bathrooms.index'));
    }
}
