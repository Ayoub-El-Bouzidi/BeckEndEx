<?php

namespace App\Http\Controllers;

use App\Services\NatureService;
use Illuminate\Http\Request;

class NatureController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    protected $natureService;
    public function __construct(NatureService $natureService){
        $this->natureService = $natureService;
    }
    public function index()
    {
        $nature = $this->natureService->getAllNature();
        return view('nature.index', compact('nature'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('nature.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->natureService->createNature($request->validate(['Nom'=>'required|string|max:20']));
        return redirect()->route('nature.index')->with(['success', 'nature Created']);
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
        $salle = $this->natureService->findNature($id);
        return view('salle.edit',compact('salle'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->natureService->updateNature($id , $request->validate(['Nom' => 'required|string','espace' => 'required|integer']));
        return redirect()->route('salle.index')->with(['success', 'Salle Updated']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->natureService->deleteNature($id);
        return redirect()->route('salle.index')->with(['Success','Salle deleted']);
    }
}
