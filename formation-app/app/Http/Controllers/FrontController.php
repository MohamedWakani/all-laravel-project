<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Beneficiaire;
use App\Models\Formation;

class FrontController extends Controller
{
    public function index(Request $request){
        $search = $request->input('search');
        $formation = Formation::where('formation_name', 'LIKE', "%$search%")->get();
        return view('frontPage.table', compact('formation', 'search'));
    }
    
    public function beneficiaire(Request $request){
        $formations = Formation::all();
        $formation_id = $request->input('formation_id'); // Get the selected formation ID from the form
    
        $benefi = Beneficiaire::join('formations', 'beneficiaires.formation_id', '=', 'formations.id')
            ->select('beneficiaires.*')
            ->where('formations.id', '=', $formation_id)
            ->get();
        $beneficiaryCount = $benefi->count();
        return view('frontPage.beneficiaire', compact('benefi', 'formations', 'beneficiaryCount'));
    }
    
    
    public function createNewBeneficiaire(){
        $formation=Formation::all();
        return view('frontPage.createBene',compact('formation'));
    }
    public function storeNewBeneficiaire(Request $request){
        $bene = new Beneficiaire();
        $bene->ppr=$request->ppr;
        $bene->name=$request->name;
        $bene->emqil=$request->emqil;
        $bene->formation_id=$request->formation_id;
        $bene->save();

        session()->flash('success', 'Thanks');

        return redirect()->back();
    }
    public function page404(){
        return view('frontPage.404');
    }
}
