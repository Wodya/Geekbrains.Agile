<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PlantFull;
use App\Service\IDbPlantService;
use Illuminate\Http\Request;

class AdminPlantsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
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
     * @param Request $request
     * @param IDbPlantService $dbPlant
     * @return void
     */
    public function edit(Request $request, IDbPlantService $dbPlant)
    {
        $plant = new PlantFull();
        $plant->id = 5;
        $plant->name = 'Ромашка';
        $plant->shortInfo = "Душенька! Павел Иванович! — вскричал.";
        $plant->fullInfo = "Здесь был испущен — очень приятный человек? — Чрезвычайно приятный, и какой умный, какой начитанный человек! Мы у — всех делается. Все что ни было печалям, из которых по.";
        $plant->photoSmallPath='image1.jpg';
        $plant->photoBigPath='image1.png';
        $plant->tags[] = 'Хорошее';
        $plant->tags[] = 'Яркое';
        $dbPlant->updatePlant($plant);
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
     * @param Request $request
     * @param IDbPlantService $dbPlant
     * @return void
     */
    public function destroy(Request $request, IDbPlantService $dbPlant)
    {
        $dbPlant->deletePlant(1);
    }
}
