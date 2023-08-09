<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

use App\Models\Psgc;

class PsgcController extends Controller
{
    

    // custom controllers
    public function getRegionsDropdown()
    {
        $regions = Psgc::where('level', 'Reg')->orderBy('name', 'asc')->pluck('name', 'code')->toArray();
        return response()->json($regions);
    }

    public function getProvinceName($code)
    {
        $provinceName = Psgc::getProvince($code);
        return response()->json(['provinceName' => $provinceName]);
    }

    public function getCityName($code)
    {
        $cityName = Psgc::getCity($code);
        return response()->json(['cityName' => $cityName]);
    }

   
    // /custom controllers

    public function getProvincesForRegion(Request $request, $region)
    {

        $provinces = Psgc::where('level', 'Prov')
        // ->where(DB::raw('substr(code, 1, 2)'), '=', $region)
        ->where(DB::raw('substr(code, 1, 2)'), '=', 13)
        ->orderBy('name', 'asc')
        ->pluck('name', 'code')
        ->toArray();

    
return response()->json($provinces);

    }
    // /end custom controllers
    public function getBrgy(Request $request)
    {
        $cityId = Str::substr($request->cityID, 0, 6);

        $barangays = Psgc::where([[DB::raw('substr(code, 1, 6)'), '=', $cityId], ['level', 'Bgy']])
            ->orderBy('name', 'asc')->get();
        return json_encode($barangays);
        
    
    }

    public function getCities(Request $request)
    {
        $provinceId = Str::substr($request->provinceID, 0, 4);

        $cities = Psgc::where([[DB::raw('substr(code, 1, 4)'), '=', $provinceId], ['level', 'City']])
            ->orwhere([[DB::raw('substr(code, 1, 4)'), '=', $provinceId], ['level', 'Mun']])
            ->orwhere([[DB::raw('substr(code, 1, 4)'), '=', $provinceId], ['level', 'SubMun']])
            ->orderBy('name', 'asc')
            ->get();

        // return json_encode($cities);
        return response()->json($cities);
    }

    public function getProvinces(Request $request)
    {
        $regionId = Str::substr($request->regionID, 0, 2);

        $provinces = Psgc::where([[DB::raw('substr(code, 1, 2)'), '=', $regionId], ['level', 'Prov']])
            ->orwhere([[DB::raw('substr(code, 1, 2)'), '=', $regionId], ['level', 'Dist']])
            ->orderBy('name', 'asc')
            ->get();

        // return json_encode($provinces);
       
        return response()->json($provinces);
    }
}
