<?php

namespace App\Http\Controllers\Book\Classification;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Book\SubClassification;
use App\Models\Book\MainClassification;
use Illuminate\Contracts\Foundation\MaintenanceMode;

class SubClassificationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sub = SubClassification::with('mainClassification')->get();
        return view('classifications\sub\show', compact('sub'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $main = MainClassification::all();
        return view('classifications.sub.add', compact('main'));
    }
    

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'main_classification_id' => ['required', 'integer'],
        ]);
    
        $new_sub = new SubClassification();
        $new_sub->name = $request->name;
        $new_sub->main_classification_id = $request->main_classification_id;
    
        $new_sub->save();
        return redirect()->route('sub-classifications.index');
    }
    

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $sub = SubClassification::findOrFail($id);
        $mainClassifications = MainClassification::all();
        return view("classifications.sub.edit", compact('sub', 'mainClassifications'));
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'main_classification_id' => ['required', 'string', 'max:255'],
        ]);

        $sub = SubClassification::findOrFail($id);
        $sub->name = $request->name;
        $sub->main_classification_id = $request->main_classification_id;
    
        $sub->save();
        return redirect()->route('sub-classifications.index');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $sub = SubClassification::findOrFail($id);
        $sub->delete();
        return redirect()->route('sub-classifications.index');
    }
}
