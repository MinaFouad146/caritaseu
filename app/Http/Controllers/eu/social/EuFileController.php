<?php

namespace App\Http\Controllers\eu\social;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\EuFile;
use App\Models\CityModel;
use App\Models\CountryModel;

class EuFileController extends Controller
{
    //
    public function show()
    {
        $euFiles = EuFile::with('created_by', 'city')->orderBy('eu_no', 'desc')->paginate(30);
        $cities = CityModel::orderBy('name', 'asc')->get();
        $countries = CountryModel::orderBy('name', 'asc')->get();

        return view('eu.social.eu-files-show', compact('euFiles', 'cities', 'countries'));
    }
}
