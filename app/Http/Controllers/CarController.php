<?php

namespace App\Http\Controllers;

use App\Car;
use Image;
use Illuminate\Http\Request;

class CarController extends Controller
{

    public function __construct(){

        $this->middleware('admin')->except(['index', 'show']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cars = Car::all();
        return view('cars.index', compact('cars'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cars.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'model' => 'required',
            'price' => 'required',
            'description' => 'required',
            'photo' => 'image|mimes: jpg,png,jpeg|max:2048'
        ]);

        $car = new Car;
        $car->name = $request->name;
        $car->model = $request->model;

        if($request->hasFile('photo')){
            $photo = $request->photo;
            $fileName = time() . '_' . $photo->getClientOriginalName();
            $location = public_path('img/cars/' . $fileName);
            Image::make($photo)->resize(800,400)->save($location);

            $car->photo = $fileName;
        }

        $car->price = $request->price;
        $car->description = $request->description;

        $car->save();

        return redirect()->route('cars.index')->with('success', 'Car Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function show(Car $car)
    {
        return view('cars.show', compact('car'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function edit(Car $car)
    {
        return view('cars.edit', compact('car'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Car $car)
    {
        $request->validate([
            'name' => 'required',
            'model' => 'required',
            'price' => 'required',
            'description' => 'required',
            'photo' => 'image|mimes: jpg,png,jpeg|max:2048'
        ]);

        $car = new Car;
        $car->name = $request->name;
        $car->model = $request->model;

        if($request->hasFile('photo')){
            $photo = $request->photo;
            $fileName = time() . '_' . $photo->getClientOriginalName();
            $location = public_path('img/cars/' . $fileName);
            Image::make($photo)->resize(800,400)->save($location);

            $car->photo = $fileName;
        }

        $car->price = $request->price;
        $car->description = $request->description;

        $car->save();

        return redirect()->route('cars.index')->with('success', 'Car Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function destroy(Car $car)
    {
        $car->delete();

        return redirect()->route('cars.index')->with('success', 'Car Deleted Successfully');
    }
}
