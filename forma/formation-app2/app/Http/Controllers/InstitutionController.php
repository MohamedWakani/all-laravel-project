<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Institution;

class InstitutionController extends Controller
{
    public function index()
{
    $institutions = Institution::all();
    return view('institutions.index', compact('institutions'));
}
public function select(Request $request)
{
    $institutionId = $request->input('institution_id');
    if (!$institution) {
        return redirect()->route('institutions.index')->with('error', 'Institution not found');
    }

    // You can now use the $institution variable to perform actions
    // For example, you can display information about the selected institution
    return view('institutions.selected', ['institution' => $institution]);
}
}


