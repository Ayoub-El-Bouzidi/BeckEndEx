<?php
namespace App\Services;
use App\Models\Nature;

class NatureService
{
    public function getAllNature()
    {
        return Nature::all();
    }


    public function createNature(array $data)
    {
        return Nature::create($data);
    }
    public function findNature($id)
    {
        return Nature::findOrFail($id);
    }
    public function updateNature($id ,array $data)
    {
        $nature = Nature::findOrFail($id);
        $nature->update($data);
        return $nature;
    }
    public function deleteNature( $id)
    {
        Nature::findOrFail($id)->delete();
    }
}
