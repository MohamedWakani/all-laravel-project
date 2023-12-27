<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateFonctionnaireRequest;
use App\Http\Requests\UpdateFonctionnaireRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\FonctionnaireRepository;
use Illuminate\Http\Request;
use Flash;

class FonctionnaireController extends AppBaseController
{
    /** @var FonctionnaireRepository $fonctionnaireRepository*/
    private $fonctionnaireRepository;

    public function __construct(FonctionnaireRepository $fonctionnaireRepo)
    {
        $this->fonctionnaireRepository = $fonctionnaireRepo;
    }

    
    /**
     * Display a listing of the Fonctionnaire.
     */
    public function index(Request $request)
    {
        $fonctionnaires = $this->fonctionnaireRepository->paginate(10);

        return view('fonctionnaires.index')
            ->with('fonctionnaires', $fonctionnaires);
    }

    /**
     * Show the form for creating a new Fonctionnaire.
     */
    public function create()
    {
        return view('fonctionnaires.create');
    }

    /**
     * Store a newly created Fonctionnaire in storage.
     */
    public function store(CreateFonctionnaireRequest $request)
    {
        $input = $request->all();

        $fonctionnaire = $this->fonctionnaireRepository->create($input);

        Flash::success('Fonctionnaire saved successfully.');

        return redirect(route('fonctionnaires.index'));
    }

    /**
     * Display the specified Fonctionnaire.
     */
    public function show($id)
    {
        $fonctionnaire = $this->fonctionnaireRepository->find($id);

        if (empty($fonctionnaire)) {
            Flash::error('Fonctionnaire not found');

            return redirect(route('fonctionnaires.index'));
        }

        return view('fonctionnaires.show')->with('fonctionnaire', $fonctionnaire);
    }

    /**
     * Show the form for editing the specified Fonctionnaire.
     */
    public function edit($id)
    {
        $fonctionnaire = $this->fonctionnaireRepository->find($id);

        if (empty($fonctionnaire)) {
            Flash::error('Fonctionnaire not found');

            return redirect(route('fonctionnaires.index'));
        }

        return view('fonctionnaires.edit')->with('fonctionnaire', $fonctionnaire);
    }

    /**
     * Update the specified Fonctionnaire in storage.
     */
    public function update($id, UpdateFonctionnaireRequest $request)
    {
        $fonctionnaire = $this->fonctionnaireRepository->find($id);

        if (empty($fonctionnaire)) {
            Flash::error('Fonctionnaire not found');

            return redirect(route('fonctionnaires.index'));
        }

        $fonctionnaire = $this->fonctionnaireRepository->update($request->all(), $id);

        Flash::success('Fonctionnaire updated successfully.');

        return redirect(route('fonctionnaires.index'));
    }

    /**
     * Remove the specified Fonctionnaire from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $fonctionnaire = $this->fonctionnaireRepository->find($id);

        if (empty($fonctionnaire)) {
            Flash::error('Fonctionnaire not found');

            return redirect(route('fonctionnaires.index'));
        }

        $this->fonctionnaireRepository->delete($id);

        Flash::success('Fonctionnaire deleted successfully.');

        return redirect(route('fonctionnaires.index'));
    }
}
