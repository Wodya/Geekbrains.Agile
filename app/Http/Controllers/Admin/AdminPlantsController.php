<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PlantFull;
use App\Service\IDbPlantService;
use Illuminate\Http\Request;
use function PHPUnit\Framework\isNull;

class AdminPlantsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     *
     */
    public function index(Request $request, IDbPlantService $dbPlant)
    {
        $plants = $dbPlant->getAllPlants();
        return view('admin.plants', ['plants' => $plants]);
    }

    /**
     * Show the form for creating a new resource.
     *
     *
     */
    public function create(Request $request, IDbPlantService $dbPlant)
    {

        $plant = new PlantFull();
        $plant->name = $request['namePlant'];
        $plant->addDate = date("Y-m-d H:i:s");
        $plant->fullInfo = $request['fullInfo'];
        $plant->photoBigPath = $request['photoBigPath'];
        $plant->photoSmallPath = $request['photoSmallPath'];
        $plant->shortInfo = $request['shortInfo'];
        $plant->tags = $request['tags'];

        $plant->wateringDays = $request['wateringDays'];

        $dbPlant->insertPlant($plant);
        return redirect()->route('admin::plants::createView')
            ->with('success', "Растение добавлено");

    }

    public function createView(IDbPlantService $dbPlant)
    {

        $tags = $dbPlant->getTags();
        return view('admin.addPlant', ['tags' => $tags]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }




    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     */

    public function updateView(int $id, IDbPlantService $dbPlant)
{
    $plants =  $dbPlant->getPlant($id);
    $tags = $dbPlant->getTags();
    return view('admin.addPlant', [
        'plants' => $plants,
        'tags' => $tags
    ]);
}
    public function update(Request $request, $id, IDbPlantService $dbPlant)
    {


        $plant = $dbPlant->getPlant($id);

        $plant->name = $request['name'];
        $plant->fullInfo = $request['fullInfo'];
        $plant->shortInfo = $request['shortInfo'];
        $plant->tags = [];
        for ($tag = 0; $tag == isNull($tag) ; $tag++){ // TODO
            $keyTag = "tag".$tag;
            $plant->tags[] = $request[$keyTag];

        }

        $plant->wateringDays = $request['wateringDays'];

        $dbPlant->updatePlant($plant);
        return redirect()->route('admin::plants::updateView', ['id' => $plant-> id])
            ->with('success', "Растение обновлено");
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

