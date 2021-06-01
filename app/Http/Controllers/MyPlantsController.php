<?php

namespace App\Http\Controllers;

use App\Service\IDbPlantService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class MyPlantsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, IDbPlantService $dbPlant)
    {
        $plants = $dbPlant->getFavorPlants(1);
        return view('plants.chosenTable',['plants' => $plants]);
    }
    public function addFavor($userId, $plantId, Request $request, IDbPlantService $dbPlant)
    {
        $dbPlant->addPlantToFavor($userId, $plantId);
        echo('$userId = ' . $userId);
        echo('$plantId = ' . $plantId);
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
    public function store()
    {
        //
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
    public function edit($id, IDbPlantService $dbPlant)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id, IDbPlantService $dbPlant)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, IDbPlantService $dbPlant)
    {
      //
    }
    public function removeFavor($userId, $plantId, Request $request, IDbPlantService $dbPlant)

    {
        $dbPlant->removePlantFromFavor($userId, $plantId);
    }
}
