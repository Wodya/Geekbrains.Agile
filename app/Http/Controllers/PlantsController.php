<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\News;
use App\Models\PlantFull;
use App\Models\Source;
use App\Service\IDbPlantService;
use Illuminate\Http\Request;

class PlantsController extends Controller
{

    public function create(Request $request)
    {
        $plant = (new PlantFull())
            ->fill($request->all())
            ->save();
        return redirect()->route('plants::createView');
    }


    public function createView()
    {
//
        return view('admin.addNews', [
            'operation' => 'Довавить новость',
            'categories' => $categories,
            'sources' => $sources,
        ]);
    }

    public function update(Request $request, PlantFull $onePlant)
    {
        $onePlant->fill($request->all())->save();
        return redirect()->route('plants::updateView', ['id' => $onePlant->id]);
//            ->with('success', "Данные сохранены");
    }

    public function updateView(PlantFull $id)
    {
//        $categories = (new Category())->getCategories();
//        $sources = (new Source())->getSource();
        return view('admin.addNews', [
            'oneNews' => $id,
            'operation' => 'Редактировать новость',
            'categories' => $categories,
            'sources' => $sources,
        ]);
    }

    public function delete($id)
    {
        PlantFull::destroy([$id]);
        return redirect()->route('plants::plantList');
    }
}
