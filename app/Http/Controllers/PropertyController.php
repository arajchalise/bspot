<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Property;

class PropertyController extends Controller
{
    
    public function edit(Property $property)
    {
        $property = Property::find($property->id);
        return view('Properties.edit', ['property' => $property]);
    }
    public function store(Request $request)
    {
        
        return Property::create([
            'type' => $request->type,
            'business_type' => $request->btype,
            'property_name' => $request->name,
            'description' => $request->description,
            'photo' => 'img.jpg'
        ]);
    }

    public function update(Request $request)
    {
        $id = $request->id;

        return Property::where('id', '=', $id)->update([
            'property_name' => $request->name,
            'description' => $request->description
        ]);
    }
}
