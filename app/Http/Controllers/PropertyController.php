<?php

namespace App\Http\Controllers;

use App\Http\Requests\PropertyRequest;
use App\Models\Property;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $properties = Property::all();

        return view('backend.properties.index', [
            'properties' => $properties
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.properties.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PropertyRequest $request)
    {
        $data = $request->validated();

        if ($request->hasFile('cover_image')) {

            $file = $request->file('cover_image');

            $filename = time() . $file->getClientOriginalName();

            $path = $file->storeAs('properties/', $filename);

            $data['cover_image'] = $path;
        }



        if ($request->hasFile('floor_plans_image')) {

            $file = $request->file('floor_plans_image');

            $filename = time() . $file->getClientOriginalName();

            $path = $file->storeAs('properties/plans', $filename);

            $data['floor_plans_image'] = $path;
        }

        if ($request->hasFile('slider_image')) {

            $file = $request->file('slider_image');

            $filename = time() . $file->getClientOriginalName();

            $path = $file->storeAs('properties/slider', $filename);

            $data['slider_image'] = $path;
        }

        Property::create([
            'name' => $data['name'],
            'description' => $data['description'],
            'status' => $data['status'],
            'property_type' => $data['property_type'],
            'location' => $data['location'],
            'price' => $data['price'],
            'video' => $data['video'],
            'bed' => $data['bed'],
            'bath' => $data['bath'],
            'garage' => $data['garage'],
            'floor_plans_image' => $data['floor_plans_image'],
            'area' => $data['area'],
            'slider_image' => $data['slider_image'],
            'in_slider' => $data['in_slider'],
            'cover_image' => $data['cover_image'],
            'user_id' => Auth::id()
        ]);


        return redirect()->route('properties.index')->with('success', 'Property is created.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function show(Property $property)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function edit(Property $property)
    {
        return view('backend.properties.edit', [
            'property' => $property
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function update(PropertyRequest $request, Property $property)
    {
        $data = $request->validated();

        if ($request->hasFile('cover_image')) {



            $file = $request->file('cover_image');

            $filename = time() . $file->getClientOriginalName();

            $path = $file->storeAs('properties/', $filename);

            $data['cover_image'] = $path;
        }



        if ($request->hasFile('floor_plans_image')) {


            $file = $request->file('floor_plans_image');

            $filename = time() . $file->getClientOriginalName();

            $path = $file->storeAs('properties/plans', $filename);

            $data['floor_plans_image'] = $path;
        }

        if ($request->hasFile('slider_image')) {



            $file = $request->file('slider_image');

            $filename = time() . $file->getClientOriginalName();

            $path = $file->storeAs('properties/slider', $filename);

            $data['slider_image'] = $path;
        }


        $property->update([
            'name' => $data['name'],
            'description' => $data['description'],
            'status' => $data['status'],
            'property_type' => $data['property_type'],
            'location' => $data['location'],
            'price' => $data['price'],
            'video' => $data['video'],
            'bed' => $data['bed'],
            'bath' => $data['bath'],
            'garage' => $data['garage'],
            'floor_plans_image' => $data['floor_plans_image'],
            'area' => $data['area'],
            'slider_image' => $data['slider_image'],
            'in_slider' => $data['in_slider'],
            'cover_image' => $data['cover_image'],
            'user_id' => Auth::id()
        ]);



        return redirect()->route('properties.index')->with('success', 'Property is updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function destroy(Property $property)
    {
        $property->delete();

        return redirect()->route('properties.index')->with('success', 'Property is deleted');
    }
}
