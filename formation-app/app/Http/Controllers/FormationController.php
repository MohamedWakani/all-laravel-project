<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateFormationRequest;
use App\Http\Requests\UpdateFormationRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\FormationRepository;
use Illuminate\Http\Request;
use App\Models\Fonctionnaire;
use Flash;

class FormationController extends AppBaseController
{
    /** @var FormationRepository $formationRepository*/
    private $formationRepository;

    public function __construct(FormationRepository $formationRepo)
    {
        $this->formationRepository = $formationRepo;
    }

    /**
     * Display a listing of the Formation.
     */
    public function index(Request $request)
    {
        $formations = $this->formationRepository->paginate(10);

        return view('formations.index')
            ->with('formations', $formations);
    }

    /**
     * Show the form for creating a new Formation.
     */
    public function create()
    {
        $fonc = Fonctionnaire::all();
        return view('formations.create',compact('fonc'));
    }

    /**
     * Store a newly created Formation in storage.
     */
    public function store(CreateFormationRequest $request)
    {
        $input = $request->all();

        $formation = $this->formationRepository->create($input);

        Flash::success('Formation saved successfully.');

        return redirect(route('formations.index'));
    }

    /**
     * Display the specified Formation.
     */
    public function show($id)
    {
        $formation = $this->formationRepository->find($id);

        if (empty($formation)) {
            Flash::error('Formation not found');

            return redirect(route('formations.index'));
        }

        return view('formations.show')->with('formation', $formation);
    }

    /**
     * Show the form for editing the specified Formation.
     */
    public function edit($id)
    {
        $formation = $this->formationRepository->find($id);
        $fonc = Fonctionnaire::all();
        if (empty($formation)) {
            Flash::error('Formation not found');

            return redirect(route('formations.index'));
        }

        return view('formations.edit',compact('fonc'))->with('formation', $formation);
    }

    /**
     * Update the specified Formation in storage.
     */
    public function update($id, UpdateFormationRequest $request)
    {
        $formation = $this->formationRepository->find($id);

        if (empty($formation)) {
            Flash::error('Formation not found');

            return redirect(route('formations.index'));
        }

        $formation = $this->formationRepository->update($request->all(), $id);

        Flash::success('Formation updated successfully.');

        return redirect(route('formations.index'));
    }

    /**
     * Remove the specified Formation from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $formation = $this->formationRepository->find($id);

        if (empty($formation)) {
            Flash::error('Formation not found');

            return redirect(route('formations.index'));
        }

        $this->formationRepository->delete($id);

        Flash::success('Formation deleted successfully.');

        return redirect(route('formations.index'));
    }
}
