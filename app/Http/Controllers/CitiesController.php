<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\City;

class CitiesController extends Controller
{
    public function index($country_id)
    {
        $cities = City::where('country_id', $country_id)->get();
        return view('cities.index', compact('cities', 'country_id'));
    }

    public function create($country_id)
    {
        return view('cities.create', compact('country_id'));
    }

    public function store($country_id, Request $request)
    {
        City::create($request->all() + ['country_id' => $country_id]);
        return redirect()->route('countries.cities.index', $country_id);
    }

    public function edit($country_id, City $city)
    {
        return view('cities.edit', compact('country_id', 'city'));
    }

    public function update($country_id, Request $request, City $city)
    {
        $city->update($request->all());
        return redirect()->route('countries.cities.index', $country_id);
    }

    public function show($country_id, City $city)
    {
        return view('cities.show', compact('country_id', 'city'));
    }

    public function destroy($country_id, City $city)
    {
        $city->delete();
        return redirect()->route('countries.cities.index', $country_id);
    }
}
