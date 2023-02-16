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
    public function create(): Response
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        //
        

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): Response
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): Response
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        //
    }
}
