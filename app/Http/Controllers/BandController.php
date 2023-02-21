<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Band;

class BandController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bands = Band::all();
        return response()->view('bands.index', ['bands' => $bands]);
    }
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('bands.create');
    }

    /**
     * Store a newly created resource in storage.
     */
        // * @param \Illuminate\Http\Request $request
        // * @return \Illuminate\Http\RedirectResponse
    public function store(Request $request)
    {
        //
        $input = $request->all();
        Band::create($input);
        return redirect('bands')->with('flash_message', 'Band created successfully.');


    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $bands = Band::find($id);
        return view('bands.show')->with('bands', $bands);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $bands = Band::find($id);
        return view('bands.edit')->with('bands', $bands);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $bands = Band::find($id);
        $input = $request->all();
        $bands->update($input);
        return redirect('bands')->with('flash_message', 'Band updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //

        Band::destroy($id);
        return redirect('bands')->with('flash_message', 'Band deleted successfully.');

    }
}

