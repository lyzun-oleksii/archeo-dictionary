<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\DictionaryConcept;
use Illuminate\Http\Request;

class ConceptController extends Controller
{
    public function index(Request $request, DictionaryConcept $concept)
    {
        $concepts = $concept::paginate(20);
        return view('welcome', ['concepts' => $concepts]);
    }

    public function store(Request $request, DictionaryConcept $concept)
    {
        $concept->description = "Just test";
        $concept->save();
    }
}
