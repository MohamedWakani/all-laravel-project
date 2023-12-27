<?php

namespace App\Http\Controllers;

use Excel;
use App\Models\ProfChecked; // Adjust the namespace if needed
use App\Models\Formation;
use Illuminate\Http\Request;
use App\Imports\ImportData;

class ImportController extends Controller
{
    public function index()
    {
        $formation = Formation::all();
        return view('importData', compact('formation'));
    }

    public function import(Request $request)
    {
        $formationId = $request->input('formation_id');

        if ($request->hasFile('file')) {
            $files = $request->file('file');

            foreach ($files as $file) {
                // For each file, process the import
                Excel::import(new ImportData($formationId), $file);
            }

            return redirect('/show')->with('success', 'Data imported successfully');
        } else {
            return redirect('/show')->with('error', 'No files were uploaded.');
        }
    }
}

