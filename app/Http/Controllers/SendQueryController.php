<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateSendQueryRequest;
use App\Http\Requests\UpdateSendQueryRequest;
use App\Repositories\SendQueryRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class SendQueryController extends AppBaseController
{
    /** @var  SendQueryRepository */
    private $sendQueryRepository;

    public function __construct(SendQueryRepository $sendQueryRepo)
    {
        $this->sendQueryRepository = $sendQueryRepo;
    }

    /**
     * Display a listing of the SendQuery.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $sendQueries = $this->sendQueryRepository->all();

        return view('send_queries.index')
            ->with('sendQueries', $sendQueries);
    }

    /**
     * Show the form for creating a new SendQuery.
     *
     * @return Response
     */
    public function create()
    {
        return view('send_queries.create');
    }

    /**
     * Store a newly created SendQuery in storage.
     *
     * @param CreateSendQueryRequest $request
     *
     * @return Response
     */
    public function store(CreateSendQueryRequest $request)
    {
        $input = $request->all();

        $sendQuery = $this->sendQueryRepository->create($input);

        Flash::success('Send Query saved successfully.');

        return redirect(route('sendQueries.index'));
    }

    /**
     * Display the specified SendQuery.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $sendQuery = $this->sendQueryRepository->find($id);

        if (empty($sendQuery)) {
            Flash::error('Send Query not found');

            return redirect(route('sendQueries.index'));
        }

        return view('send_queries.show')->with('sendQuery', $sendQuery);
    }

    /**
     * Show the form for editing the specified SendQuery.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $sendQuery = $this->sendQueryRepository->find($id);

        if (empty($sendQuery)) {
            Flash::error('Send Query not found');

            return redirect(route('sendQueries.index'));
        }

        return view('send_queries.edit')->with('sendQuery', $sendQuery);
    }

    /**
     * Update the specified SendQuery in storage.
     *
     * @param int $id
     * @param UpdateSendQueryRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateSendQueryRequest $request)
    {
        $sendQuery = $this->sendQueryRepository->find($id);

        if (empty($sendQuery)) {
            Flash::error('Send Query not found');

            return redirect(route('sendQueries.index'));
        }

        $sendQuery = $this->sendQueryRepository->update($request->all(), $id);

        Flash::success('Send Query updated successfully.');

        return redirect(route('sendQueries.index'));
    }

    /**
     * Remove the specified SendQuery from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $sendQuery = $this->sendQueryRepository->find($id);

        if (empty($sendQuery)) {
            Flash::error('Send Query not found');

            return redirect(route('sendQueries.index'));
        }

        $this->sendQueryRepository->delete($id);

        Flash::success('Send Query deleted successfully.');

        return redirect(route('sendQueries.index'));
    }
}
