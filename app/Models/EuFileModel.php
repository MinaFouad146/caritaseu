<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EuFileModel extends Model
{
    use HasFactory;

    protected $table = 'eu_files';
    public $timestamps = true;
    protected $fillable = [
        'id', 'Open_File_Location', 'Referral_From', 'Referral_no', 'city_id',  'area', 'address', 'created_at', 'updated_at'
    ];

    public function city()
    {
        return $this->belongsTo(CityModel::class, 'city_id');
    }

    public function country()
    {
        return $this->belongsTo(CountryModel::class, 'country_id');
    }

    public function created_by()
    {
        return $this->belongsTo(Admin::class, 'created_by');
    }
}
