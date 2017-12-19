<?php

namespace App\Http\Controllers;

use App\DataTables\BagItemsDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateBagItemsRequest;
use App\Http\Requests\UpdateBagItemsRequest;
use App\Repositories\BagItemsRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class BagItemsController extends AppBaseController
{
    /** @var  BagItemsRepository */
    private $bagItemsRepository;

    public function __construct(BagItemsRepository $bagItemsRepo)
    {
        $this->bagItemsRepository = $bagItemsRepo;
    }

    /**
     * Display a listing of the BagItems.
     *
     * @param BagItemsDataTable $bagItemsDataTable
     * @return Response
     */
    public function index(BagItemsDataTable $bagItemsDataTable)
    {
        return $bagItemsDataTable->render('bag_items.index');
    }

    /**
     * Show the form for creating a new BagItems.
     *
     * @return Response
     */
    public function create()
    {
        return view('bag_items.create');
    }

    /**
     * Store a newly created BagItems in storage.
     *
     * @param CreateBagItemsRequest $request
     *
     * @return Response
     */
    public function store(CreateBagItemsRequest $request)
    {
        $input = $request->all();

        $bagItems = $this->bagItemsRepository->create($input);

        Flash::success('Bag Items saved successfully.');

        return redirect(route('bagItems.index'));
    }

    /**
     * Display the specified BagItems.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $bagItems = $this->bagItemsRepository->findWithoutFail($id);

        if (empty($bagItems)) {
            Flash::error('Bag Items not found');

            return redirect(route('bagItems.index'));
        }

        return view('bag_items.show')->with('bagItems', $bagItems);
    }

    /**
     * Show the form for editing the specified BagItems.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $bagItems = $this->bagItemsRepository->findWithoutFail($id);

        if (empty($bagItems)) {
            Flash::error('Bag Items not found');

            return redirect(route('bagItems.index'));
        }

        return view('bag_items.edit')->with('bagItems', $bagItems);
    }

    /**
     * Update the specified BagItems in storage.
     *
     * @param  int              $id
     * @param UpdateBagItemsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateBagItemsRequest $request)
    {
        $bagItems = $this->bagItemsRepository->findWithoutFail($id);

        if (empty($bagItems)) {
            Flash::error('Bag Items not found');

            return redirect(route('bagItems.index'));
        }

        $bagItems = $this->bagItemsRepository->update($request->all(), $id);

        Flash::success('Bag Items updated successfully.');

        return redirect(route('bagItems.index'));
    }

    /**
     * Remove the specified BagItems from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $bagItems = $this->bagItemsRepository->findWithoutFail($id);

        if (empty($bagItems)) {
            Flash::error('Bag Items not found');

            return redirect(route('bagItems.index'));
        }

        $this->bagItemsRepository->delete($id);

        Flash::success('Bag Items deleted successfully.');

        return redirect(route('bagItems.index'));
    }
}
