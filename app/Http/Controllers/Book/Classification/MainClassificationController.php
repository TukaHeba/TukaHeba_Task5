<?php

namespace App\Http\Controllers\Book\Classification;

use App\Http\Controllers\Controller;
use App\Models\Book\MainClassification;
use Illuminate\Contracts\Foundation\MaintenanceMode;
use Illuminate\Http\Request;

class MainClassificationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct(){
        // $this->middleware("auth");
        // $this->middleware("admin");
    }
    public function index()
    {
        $main = MainClassification::all();
        return view(("classifications\main\show"), compact('main'));

    //    return $main->subClassifications;
        // $sub = SubClassification::find(1);
        // return $sub->mainClassification;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("classifications\main\add");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
        ]);

        $new_main = new MainClassification();
        $new_main->name = $request->name;

        $new_main->save();
        return redirect()->route('main-classifications.index');
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
        $main = MainClassification::findOrFail($id);
        return view(("classifications.main.edit"), compact('main'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
        ]);

        $main = MainClassification::findOrFail($id);
        $main->name = $request->name;

        $main->save();
        return redirect()->route('main-classifications.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $main = MainClassification::findOrFail($id);
        $main->delete();
        return redirect()->route('main-classifications.index');
    }
}
