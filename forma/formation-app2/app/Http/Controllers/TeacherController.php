<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;
use App\Models\Institution;
use App\Models\Formation;


class TeacherController extends Controller
{
    public function index(Request $request)
{

    $institution=Institution::all();
    $formation=Formation::all();
    $institution_id = $request->input('institution_id');
    $teachers = Teacher::join('institutions', 'teachers.institution_id', '=', 'institutions.id')
       ->select('teachers.*')
       ->where('institutions.id', '=', $institution_id)
       ->get();
    return view('teachers.index', compact('teachers','institution','formation'));
}

public function create(Request $request){
    $institution=Institution::all();
    return view('teachers.create',compact('institution'));
}
public function store(Request $request){
    $teacher = new Teacher();
    $teacher->name=$request->name;
    $teacher->email=$request->email;
    $teacher->institution_id=$request->institution_id;
    $teacher->save();
    return redirect('teachers');
   
}
public function assignTeachers(Request $request)
{
    $request->validate([
        'formation_id' => 'required|integer|exists:formations,id',
        'teacher_ids' => 'required|array',
        'teacher_ids.*' => 'integer|exists:teachers,id',
    ]);

    $formationId = $request->input('formation_id');
    $teacherIds = $request->input('teacher_ids');

    // Attach the selected teachers to the formation using the pivot table
    Formation::find($formationId)->teachers()->attach($teacherIds);

    // Redirect to a specific page or return a response
    // For example, you can redirect to the formations index page
    return redirect()->route('formations.index')->with('success', 'Teachers assigned successfully.');
}


}


// public function beneficiaire(Request $request){
//     $formations = Formation::all();
//     $formation_id = $request->input('formation_id'); // Get the selected formation ID from the form

//     $benefi = Beneficiaire::join('formations', 'beneficiaires.formation_id', '=', 'formations.id')
//         ->select('beneficiaires.*')
//         ->where('formations.id', '=', $formation_id)
//         ->get();
//     $beneficiaryCount = $benefi->count();
//     return view('frontPage.beneficiaire', compact('benefi', 'formations', 'beneficiaryCount'));
// }
