<?php

namespace App\Http\Controllers\eu\social;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CityModel;
use App\Models\CountryModel;
use App\Models\EuFileModel;
use App\Models\IndividualModel;
use App\Models\SocialAssessmentModel;

class EuFileController extends Controller
{
    // EU FIles List
    public function show()
    {
        $euFiles = EuFileModel::with('created_by', 'city')->orderBy('id', 'desc')->paginate(30);
        $cities = CityModel::orderBy('name', 'asc')->get();
        $countries = CountryModel::orderBy('name', 'asc')->get();

        return view('eu.social.eu-files-show', compact('euFiles', 'cities', 'countries'));
    }


    // Single EU FIle Content ///////////////////////////////////

    // public function singleEuFileShow()
    // {
    //     $euFiles = EuFileModel::with('created_by', 'city')->orderBy('eu_no', 'desc')->paginate(30);
    //     // $countries = CountryModel::orderBy('name', 'asc')->get();
    //     $inds = IndividualModel::with('created_by', 'nationality')->orderBy('ind_id', 'asd')->paginate(30);

    //     return view('eu.social.eu-files-show', compact('euFiles', 'cities', 'countries'));
    // }

    public function singleEuFileShow(EuFileModel $eufile)
    {
        $inds = IndividualModel::with('createdby', 'nationality')->where('eu_no_id', $eufile->id)->orderBy('id', 'asc')->paginate(30);
        $eufile = EuFileModel::with('createdby', 'city')->find($eufile->id);
        $socialassessment = SocialAssessmentModel::with('createdby', 'eu_no')
            ->where('eu_no_id', $eufile->id)
            ->orderByDesc('id')
            ->first();

        return view('eu.social.eu-file-indetail', [
            'Individuals' => $inds,
            'eufile' => $eufile,
            'socialassessment' => $socialassessment
        ]);
    }
}
