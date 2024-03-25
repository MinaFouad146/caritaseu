<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IndividualModel extends Model
{
    use HasFactory;

    protected $table = 'individuals';
    public $timestamps = true;
    protected $fillable = [
        'ind_id', 'name', 'personal_info', 'education_info', 'work_info', 'eu_no_id', 'country_id', 'created_by', 'created_at', 'updated_at'
    ];


    public function nationality()
    {
        return $this->belongsTo(CountryModel::class, 'country_id');
    }

    public function created_by()
    {
        return $this->belongsTo(Admin::class, 'created_by');
    }
}
