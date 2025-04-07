<?php
namespace App\Services;
use App\Models\Salle;

class SalleService
{
    public function getAllSalle()
    {
        return Salle::all();
    }

    public function createSalle(array $data)
    {
        return Salle::create($data);
    }
    
    public function updateSalle($id ,array $data)
    {
        $salle = Salle::findOrFail($id);
        $salle->update($data);
        return $salle;
    }
    public function deleteSalle( $id)
    {
        Salle::findOrFail($id)->delete();
    }
}
