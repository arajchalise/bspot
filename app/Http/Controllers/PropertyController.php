<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Property;

class PropertyController extends Controller
{

    public function index()
    {
        $properties = Property::all();
        return view('Properties.showAll', ['properties' => $properties]);
    }

    public function getSales($type)
    {
        $properties =  property::where('business_type', '=', 'Sale')
                        ->where('type', '=', $type)->get();

        return view('Properties.index', ['properties' => $properties]);
    }

    public function getRent($type)
    {
        $properties = property::where('business_type', '=', 'Rent')
                        ->where('type', '=', $type)->get();

        return view('Properties.index', ['properties' => $properties]);
    }

    public function show($type, $property)
    {
        $prop = Property::where('id', '=', $property)->get();
        return view('Properties.show', ['prop' => $prop]);
    }
    
    public function edit(Property $property)
    {
        $property = Property::find($property->id);
        return view('Properties.edit', ['property' => $property]);
    }
    public function store(Request $request)
    {
            $file = $request->file('photo');
            $name = str_replace(":", "_", $request->name);
            $name = str_replace("?", "_", $name);
            $name = str_replace(" ", "_", $name);
            $ext = $file->getClientOriginalExtension();
            if ($file->move("images/", "{$name}.{$ext}")){
                return Property::create([
                    'type' => $request->type,
                    'business_type' => $request->btype,
                    'property_name' => $request->name,
                    'description' => $request->description,
                    'location' => $request->loc,
                    'photo' => $name.".".$ext
                ]);
    }
}

    public function update(Request $request)
    {
        $id = $request->id;

        return Property::where('id', '=', $id)->update([
            'property_name' => $request->name,
            'description' => $request->description,
            'location' => $request->loc
        ]);
    }

    public function destroy($id)
    {
        Property::where('id', '=', $id)->delete();
        return 'OK';
    }
}
