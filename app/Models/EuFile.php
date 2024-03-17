<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EuFile extends Model
{
    use HasFactory;

    protected $table = 'eu_files';
    public $timestamps = true;
    protected $fillable = [
        'eu_no', 'Open_File_Location', 'Referral_From', 'Referral_no', 'city', 'country', 'area', 'address', 'created_at', 'updated_at'

    ];
}
