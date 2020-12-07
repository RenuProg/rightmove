<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateBalconyRequest;
use App\Http\Requests\UpdateBalconyRequest;
use App\Repositories\BalconyRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class BalconyController extends AppBaseController
{
    /** @var  BalconyRepository */
    private $balconyRepository;

    public function __construct(BalconyRepository $balconyRepo)
    {
        $this->balconyRepository = $balconyRepo;
    }

    /**
     * Display a listing of the Balcony.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $balconies = $this->balconyRepository->all();

        return view('balconies.index')
            ->with('balconies', $balconies);
    }

    /**
     * Show the form for creating a new Balcony.
     *
     * @return Response
     */
    public function create()
    {
        return view('balconies.create');
    }

    /**
     * Store a newly created Balcony in storage.
     *
     * @param CreateBalconyRequest $request
     *
     * @return Response
     */
    public function store(CreateBalconyRequest $request)
    {
        $input = $request->all();

        $balcony = $this->balconyRepository->create($input);

        Flash::success('Balcony saved successfully.');

        return redirect(route('balconies.index'));
    }

    /**
     * Display the specified Balcony.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $balcony = $this->balconyRepository->find($id);

        if (empty($balcony)) {
            Flash::error('Balcony not found');

            return redirect(route('balconies.index'));
        }

        return view('balconies.show')->with('balcony', $balcony);
    }

    /**
     * Show the form for editing the specified Balcony.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $balcony = $this->balconyRepository->find($id);

        if (empty($balcony)) {
            Flash::error('Balcony not found');

            return redirect(route('balconies.index'));
        }

        return view('balconies.edit')->with('balcony', $balcony);
    }

    /**
     * Update the specified Balcony in storage.
     *
     * @param int $id
     * @param UpdateBalconyRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateBalconyRequest $request)
    {
        $balcony = $this->balconyRepository->find($id);

        if (empty($balcony)) {
            Flash::error('Balcony not found');

            return redirect(route('balconies.index'));
        }

        $balcony = $this->balconyRepository->update($request->all(), $id);

        Flash::success('Balcony updated successfully.');

        return redirect(route('balconies.index'));
    }

    /**
     * Remove the specified Balcony from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $balcony = $this->balconyRepository->find($id);

        if (empty($balcony)) {
            Flash::error('Balcony not found');

            return redirect(route('balconies.index'));
        }

        $this->balconyRepository->delete($id);

        Flash::success('Balcony deleted successfully.');

        return redirect(route('balconies.index'));
    }
}
