<?php

namespace App\Http\Controllers;

use App\DataTables\BagDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateBagRequest;
use App\Http\Requests\UpdateBagRequest;
use App\Repositories\BagRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class BagController extends AppBaseController
{
    /** @var  BagRepository */
    private $bagRepository;

    public function __construct(BagRepository $bagRepo)
    {
        $this->bagRepository = $bagRepo;
    }

    /**
     * Display a listing of the Bag.
     *
     * @param BagDataTable $bagDataTable
     * @return Response
     */
    public function index(BagDataTable $bagDataTable)
    {
        return $bagDataTable->render('bags.index');
    }

    /**
     * Show the form for creating a new Bag.
     *
     * @return Response
     */
    public function create()
    {
        return view('bags.create');
    }

    /**
     * Store a newly created Bag in storage.
     *
     * @param CreateBagRequest $request
     *
     * @return Response
     */
    public function store(CreateBagRequest $request)
    {
        $input = $request->all();

        $bag = $this->bagRepository->create($input);

        Flash::success('Bag saved successfully.');

        return redirect(route('bags.index'));
    }

    /**
     * Display the specified Bag.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $bag = $this->bagRepository->findWithoutFail($id);

        if (empty($bag)) {
            Flash::error('Bag not found');

            return redirect(route('bags.index'));
        }

        return view('bags.show')->with('bag', $bag);
    }

    /**
     * Show the form for editing the specified Bag.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $bag = $this->bagRepository->findWithoutFail($id);

        if (empty($bag)) {
            Flash::error('Bag not found');

            return redirect(route('bags.index'));
        }

        return view('bags.edit')->with('bag', $bag);
    }

    /**
     * Update the specified Bag in storage.
     *
     * @param  int              $id
     * @param UpdateBagRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateBagRequest $request)
    {
        $bag = $this->bagRepository->findWithoutFail($id);

        if (empty($bag)) {
            Flash::error('Bag not found');

            return redirect(route('bags.index'));
        }

        $bag = $this->bagRepository->update($request->all(), $id);

        Flash::success('Bag updated successfully.');

        return redirect(route('bags.index'));
    }

    /**
     * Remove the specified Bag from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $bag = $this->bagRepository->findWithoutFail($id);

        if (empty($bag)) {
            Flash::error('Bag not found');

            return redirect(route('bags.index'));
        }

        $this->bagRepository->delete($id);

        Flash::success('Bag deleted successfully.');

        return redirect(route('bags.index'));
    }
}
