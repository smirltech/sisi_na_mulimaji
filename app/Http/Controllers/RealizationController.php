<?php

namespace App\Http\Controllers;

use App\Models\realization;
use Illuminate\Http\Request;

class RealizationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        $realizations = realization::all();
        return view('pages.realization', compact('realizations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(realization $realization)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(realization $realization)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, realization $realization)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(realization $realization)
    {
        //
    }
}
