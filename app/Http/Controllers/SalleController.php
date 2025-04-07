<?php

namespace App\Http\Controllers;

use App\Services\SalleService;
use Illuminate\Http\Request;

class SalleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
   /**
     * Display a listing of the resource.
     */
    protected $salleService;
    public function __construct(SalleService $salleService){
        $this->salleService = $salleService;

    }
    public function index()
    {
        $salle = $this->salleService->getAllSalle();
        return view('salle.index', compact('salle'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('salle.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->salleService->createSalle($request->validate(['Nom'=>'required|string|max:20','espace'=>'required|string']));
        return redirect()->route('salle.index')->with(['success', 'Salle Created']);
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
        $salle = $this->salleService->findSalle($id);
        return view('nature.edit',compact('salle'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->salleService->updateSalle($id , $request->validate(['Nom' => 'required|string','espace' => 'required|integer']));
        return redirect()->route('salle.index')->with(['success', 'Salle Updated']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->salleService->deleteSalle($id);
        return redirect()->route('salle.index')->with(['Success','Salle deleted']);
    }
}
