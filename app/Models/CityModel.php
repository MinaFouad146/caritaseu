<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CityModel extends Model
{
    use HasFactory;

    protected $table = 'cities';
    protected $fillable = [
        'id', 'name', 'country_id',
    ];


    public function country()
    {
        return $this->belongsTo(CountryModel::class, 'country_id');
    }
}
