<?php

namespace App\Http\Controllers;

use App\Service\IDbPlantService;
use Illuminate\Http\Request;

class MyPlantsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, IDbPlantService $dbPlant)
    {
        $plants = $dbPlant->getAllPlants();
        return view('plants.chosenTable',['plants' => $plants]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param $userId
     * @param $plantId
     * @param \Illuminate\Http\Request $request
     * @param IDbPlantService $dbPlant
     * @return void
     */
    public function store($userId, $plantId, Request $request, IDbPlantService $dbPlant)
    {
        $dbPlant->addPlantToFavor($userId, $plantId);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, IDbPlantService $dbPlant)
    {
        $dbPlant->removePlantFromFavor(1,2);
    }
}