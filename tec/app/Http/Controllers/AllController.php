<?php

namespace App\Http\Controllers;
use PDF;

use Illuminate\Http\Request;
use App\Models\Prof;
use App\Models\ProfChecked;
use App\Models\Formation;
use App\Models\Instutition;
use App\Models\UserExcel;

class AllController extends Controller
{
    public function index()
    {
        $formation = Formation::all();
        $profs = Prof::orderBy('name', 'asc')->get();
        return view('welcome', compact('profs', 'formation'));
    }
     

    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'formation_id'=>'required'
        ]);
        $profChecked = new ProfChecked();
        $profChecked->formation_id=$request->formation_id;
        $profChecked->name=json_encode($request->name);
        $profChecked->save();
        return redirect('/')->with('message','The data added successfully');
    }
    public function showData(Request $request)
    {
        $formation=Formation::all();
        $formation_id = $request->input('formation_id');
        //select Prof checked
        $profCheckeds = ProfChecked::join('formations', 'prof_checkeds.formation_id', '=', 'formations.id')
        ->select('prof_checkeds.*')
        ->where('formations.id', '=', $formation_id)
        ->get();
        //select Excel Prof
        $excelUser = UserExcel::join('formations', 'user_excels.formation_id', '=', 'formations.id')
        ->select('user_excels.*')
        ->where('formations.id', '=', $formation_id)
        ->get();

        return view('show',compact('profCheckeds','formation','excelUser'));
    }
    public function create(){
        $institution = Instutition::all();
        return view('create',compact('institution'));
    }
    public function storeProf(Request $request){
        $prof = new Prof();
        $prof->name=$request->name;
        $prof->email=$request->email;
        $prof->institution_id=$request->institution_id;
        $prof->save();
        return redirect('/');
    }
    public function generatePDF(Request $request)
    {
        $selectedNames = $request->input('selected_names');
        $namesArray = explode(',', $selectedNames);
        $pdfContent = '<ul>';
        
        $pdfContent .= '<h1>La liste des présents</h1>';
        foreach ($namesArray as $name) {
            $pdfContent .= '<li>' . $name . '</li>';
        }
    
        $pdfContent .= '</ul>';
    
        $pdf = PDF::loadHTML($pdfContent);
    
        return $pdf->stream('selected_names.pdf');
    }
    
}


// public function index(Request $request)
// {

//     $institution=Institution::all();
//     $formation=Formation::all();
//     $institution_id = $request->input('institution_id');
//     $teachers = Teacher::join('institutions', 'teachers.institution_id', '=', 'institutions.id')
//        ->select('teachers.*')
//        ->where('institutions.id', '=', $institution_id)
//        ->get();
//     return view('teachers.index', compact('teachers','institution','formation'));
// }