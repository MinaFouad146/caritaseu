<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CountryModel extends Model
{
    use HasFactory;
    protected $table = 'countries';
    protected $fillable = [
        'id', 'name',
    ];


    public function cities()
    {
        return $this->hasMany(CityModel::class, 'country_id');
    }
}
