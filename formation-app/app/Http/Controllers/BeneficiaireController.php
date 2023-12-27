<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateBeneficiaireRequest;
use App\Http\Requests\UpdateBeneficiaireRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\BeneficiaireRepository;
use Illuminate\Http\Request;
use App\Models\Formation;
use Flash;

class BeneficiaireController extends AppBaseController
{
    /** @var BeneficiaireRepository $beneficiaireRepository*/
    private $beneficiaireRepository;

    public function __construct(BeneficiaireRepository $beneficiaireRepo)
    {
        $this->beneficiaireRepository = $beneficiaireRepo;
    }

    /**
     * Display a listing of the Beneficiaire.
     */
    public function index(Request $request)
    {
        $beneficiaires = $this->beneficiaireRepository->paginate(10);

        return view('beneficiaires.index')
            ->with('beneficiaires', $beneficiaires);
    }

    /**
     * Show the form for creating a new Beneficiaire.
     */
    public function create()
    {
        $benefi = Formation::all();
        return view('beneficiaires.create',compact('benefi'));
    }

    /**
     * Store a newly created Beneficiaire in storage.
     */
    public function store(CreateBeneficiaireRequest $request)
    {
        $input = $request->all();

        $beneficiaire = $this->beneficiaireRepository->create($input);

        Flash::success('Beneficiaire saved successfully.');

        return redirect(route('beneficiaires.index'));
    }

    /**
     * Display the specified Beneficiaire.
     */
    public function show($id)
    {
        $beneficiaire = $this->beneficiaireRepository->find($id);

        if (empty($beneficiaire)) {
            Flash::error('Beneficiaire not found');

            return redirect(route('beneficiaires.index'));
        }

        return view('beneficiaires.show')->with('beneficiaire', $beneficiaire);
    }

    /**
     * Show the form for editing the specified Beneficiaire.
     */
    public function edit($id)
    {
        $beneficiaire = $this->beneficiaireRepository->find($id);

        if (empty($beneficiaire)) {
            Flash::error('Beneficiaire not found');

            return redirect(route('beneficiaires.index'));
        }

        return view('beneficiaires.edit')->with('beneficiaire', $beneficiaire);
    }

    /**
     * Update the specified Beneficiaire in storage.
     */
    public function update($id, UpdateBeneficiaireRequest $request)
    {
        $beneficiaire = $this->beneficiaireRepository->find($id);

        if (empty($beneficiaire)) {
            Flash::error('Beneficiaire not found');

            return redirect(route('beneficiaires.index'));
        }

        $beneficiaire = $this->beneficiaireRepository->update($request->all(), $id);

        Flash::success('Beneficiaire updated successfully.');

        return redirect(route('beneficiaires.index'));
    }

    /**
     * Remove the specified Beneficiaire from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $beneficiaire = $this->beneficiaireRepository->find($id);

        if (empty($beneficiaire)) {
            Flash::error('Beneficiaire not found');

            return redirect(route('beneficiaires.index'));
        }

        $this->beneficiaireRepository->delete($id);

        Flash::success('Beneficiaire deleted successfully.');

        return redirect(route('beneficiaires.index'));
    }
}
