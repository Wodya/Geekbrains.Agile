<?php
namespace App\Models\DbModels;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DbUserPlant extends \Illuminate\Database\Eloquent\Model
{
    use HasFactory;
    protected $table = "user_plant";
    protected $fillable = ['user_id', 'plant_id'];
    public $incrementing =false;

    public function plants(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(DbPlant::class, 'plant_id', 'id');
    }
}
