<?php

namespace App\Http\Controllers\Country;

use App\Http\Controllers\Controller;
use http\Env\Response;
use Illuminate\Http\Request;
use App\Models\CountryModel;
use Illuminate\Support\Facades\Validator;

class CountryController extends Controller
{
    public function index()
    {
        return response()->json(CountryModel::get(),200);
    }

    public function indv_country(Request $request,$id)
    {
        //dd($request->all());
        $country = CountryModel::findOrFail($id);
        if ($country){
            return response()->json($country,200);
        }
        else{
            return response()->json("Country not found",404);
        }
    }

    public function create()
    {
        return view('create_country');
    }

    public function store(Request $request)
    {
        //dd($request->all());
        $rules = [
            'name' => 'required|min:3',
            'iso' => 'required|min:2',
            'iso3' => 'required|min:2'
        ];
        $validator = Validator::make($request->all(),$rules);
        if ($validator->fails()){
            return \response()->json(['message' => $validator->errors()]);
        }
        $country = CountryModel::create($request->all());
        if ($country){
            return response()->json(['msg' => 'Country created successfully',$country],201);
        }
        else
        {
            return response()->json(['msg' => 'Country was not created'],304);
        }
    }

    public function update(Request $request,$id)
    {
        $country = CountryModel::findOrFail($id);
        $country->update([
            'iso' => $request->iso,
            'iso3' => $request->iso3
        ]);
        if ($country)
        {
            return \response()->json(['msg' => 'Country updated','country' => $country],200);
        }
        else
        {
            return \response()->json(['msg' => 'Country was not updated'],304);
        }
    }

    public function destroy(Request $request,$id)
    {

        $country = CountryModel::findOrFail($id);
        if ($country->delete())
        {
            return \response()->json(['msg' => 'Country deleted','country' => $country],200);
        }
        else
        {
            return \response()->json(['msg' => 'Country not deleted due to some errors'],304);
        }
    }
}
