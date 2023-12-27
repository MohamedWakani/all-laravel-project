<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Formation;
use App\Models\Teacher;
use App\Models\Institution;


class FormationController extends Controller
{
    public function create(){
        return view('formations.create');
    }
    public function store(Request $request)
    {
        // Create a new formation based on the user's input
        $formation = new Formation();
        
        $formation->name=$request->input('name'); 
        $formation->description=$request->input('description');
        $formation->save();

        return redirect()->route('formations.index')
            ->with('success', 'Formation created successfully');
    }

    public function assignTeachers(Request $request)
    {
        // Validate the form data
        $request->validate([
            'formation_id' => 'required|integer|exists:formations,id',
            'teacher_ids' => 'required|array',
            'teacher_ids.*' => 'integer|exists:teachers,id',
        ]);

        // Retrieve the selected formation and associated teachers
        $formation = Formation::findOrFail($request->input('formation_id'));
        $teacherIds = $request->input('teacher_ids');

        // Associate the selected teachers with the formation
        $formation->teachers()->sync($teacherIds);

        // Redirect to a specific page or return a response
        // For example, you can redirect to the formations index page
        return redirect()->route('formations.index')->with('success', 'Teachers assigned successfully.');
    }
    public function index(Request $request)
    {
        $formations=Formation::all();
        return view('formations.saveFormations',compact('formations'));
    }
    public function viewTeachersInFormation(Request $request)
    {
        $formationId = $request->input('formation_id');
        $formation = Formation::find($formationId);
    
      
    
        $teachers = $formation->teachers;
    
        return view('formations.teachers_in_formation', ['teachers' => $teachers]);
    }

    
    

}

