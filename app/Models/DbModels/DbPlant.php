<?php


namespace App\Models\DbModels;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;

class DbPlant extends \Illuminate\Database\Eloquent\Model
{
    use HasFactory;
    protected $table = "plant";
    protected $primaryKey = "id";

    public function tags(): HasMany
    {
        return $this->hasMany(DbPlantTag::class, 'plant_id', 'id');
    }
}
