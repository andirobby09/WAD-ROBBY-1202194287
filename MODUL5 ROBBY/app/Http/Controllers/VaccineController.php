<?php

namespace App\Http\Controllers;

use App\Models\Vaccine;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class VaccineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        return view('vaksin/vaccine', [
            "title" => "Vaccine",
            "vaccines" => Vaccine::all()
        ]);
    }

    public function register(){
        return view('pasien/register', [
            "title" => "Pasien",
            "vaccines" => Vaccine::all()
        ]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $model = new Vaccine();
        return view('vaksin.create', compact('model'), [
            "title" => "Vaccine",
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $image = $request->file('image');
        $imageName = time().'.'.$image->getClientOriginalName();
        $tempat = "foto";
        $image->move($tempat, $imageName);

        $vaccine = new Vaccine();

        $vaccine->name = $request->name;
        $vaccine->price = $request->price;
        $vaccine->description = $request->description;
        $vaccine->image = "/$tempat/$imageName";

        $vaccine->save();

        return redirect('vaksin');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $model = Vaccine::find($id);
        return view('vaksin.editvaksin', compact('model'),  [
            "title" => "Vaccine",
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $vaccine = Vaccine::find($id);

        $vaccine->name = $request->name;
        $vaccine->price = $request->price;
        $vaccine->description = $request->description;
        $vaccine->image = $request->image;

        $vaccine->save();
        return redirect('vaksin');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = Vaccine::find($id);
        $model->delete();
        return redirect('vaksin');
    }
}
