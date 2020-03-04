<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\DictionaryConcept;
use Illuminate\Http\Request;

class ConceptController extends Controller
{
    public function index(Request $request, DictionaryConcept $concept)
    {
        $concepts = $concept::paginate(2);
        return view('admin.concept', [
            'concepts' => $concepts, 'page' => 'Concepts'
        ]);
    }

    public function store(Request $request, DictionaryConcept $concept)
    {
        $concept->description = "Just test";
        $concept->save();
    }
}
