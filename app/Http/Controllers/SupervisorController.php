<?php

namespace App\Http\Controllers;

use App\DataTables\SupervisorDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateSupervisorRequest;
use App\Http\Requests\UpdateSupervisorRequest;
use App\Repositories\SupervisorRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class SupervisorController extends AppBaseController
{
    /** @var  SupervisorRepository */
    private $supervisorRepository;

    public function __construct(SupervisorRepository $supervisorRepo)
    {
        $this->supervisorRepository = $supervisorRepo;
    }

    /**
     * Display a listing of the Supervisor.
     *
     * @param SupervisorDataTable $supervisorDataTable
     * @return Response
     */
    public function index(SupervisorDataTable $supervisorDataTable)
    {
        return $supervisorDataTable->render('supervisors.index');
    }

    /**
     * Show the form for creating a new Supervisor.
     *
     * @return Response
     */
    public function create()
    {
        return view('supervisors.create');
    }

    /**
     * Store a newly created Supervisor in storage.
     *
     * @param CreateSupervisorRequest $request
     *
     * @return Response
     */
    public function store(CreateSupervisorRequest $request)
    {
        $input = $request->all();

        $supervisor = $this->supervisorRepository->create($input);

        Flash::success('Supervisor saved successfully.');

        return redirect(route('supervisors.index'));
    }

    /**
     * Display the specified Supervisor.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $supervisor = $this->supervisorRepository->findWithoutFail($id);

        if (empty($supervisor)) {
            Flash::error('Supervisor not found');

            return redirect(route('supervisors.index'));
        }

        return view('supervisors.show')->with('supervisor', $supervisor);
    }

    /**
     * Show the form for editing the specified Supervisor.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $supervisor = $this->supervisorRepository->findWithoutFail($id);

        if (empty($supervisor)) {
            Flash::error('Supervisor not found');

            return redirect(route('supervisors.index'));
        }

        return view('supervisors.edit')->with('supervisor', $supervisor);
    }

    /**
     * Update the specified Supervisor in storage.
     *
     * @param  int              $id
     * @param UpdateSupervisorRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateSupervisorRequest $request)
    {
        $supervisor = $this->supervisorRepository->findWithoutFail($id);

        if (empty($supervisor)) {
            Flash::error('Supervisor not found');

            return redirect(route('supervisors.index'));
        }

        $supervisor = $this->supervisorRepository->update($request->all(), $id);

        Flash::success('Supervisor updated successfully.');

        return redirect(route('supervisors.index'));
    }

    /**
     * Remove the specified Supervisor from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $supervisor = $this->supervisorRepository->findWithoutFail($id);

        if (empty($supervisor)) {
            Flash::error('Supervisor not found');

            return redirect(route('supervisors.index'));
        }

        $this->supervisorRepository->delete($id);

        Flash::success('Supervisor deleted successfully.');

        return redirect(route('supervisors.index'));
    }
}
