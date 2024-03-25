<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SocialAssessmentModel extends Model
{
    use HasFactory;

    protected $table = 'social_assessments';
    public $timestamps = true;
    protected $fillable = [
        'id', 'family_income_resources', 'family_expenses', 'accommodation_type', 'family_summary', 'family_level', 'medical_contributions', 'home_visit', 'eu_no_id', 'created_by', 'created_at', 'updated_at'
    ];


    public function eu_no()
    {
        return $this->belongsTo(EuFileModel::class, 'eu_no_id');
    }

    public function created_by()
    {
        return $this->belongsTo(Admin::class, 'created_by');
    }
}
