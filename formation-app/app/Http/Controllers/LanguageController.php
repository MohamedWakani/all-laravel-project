<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LanguageController extends Controller
{
    public function convertToArabic(Request $request)
    {
        App::setLocale('ar');
        return response()->json(['success' => true]);
    }
}
