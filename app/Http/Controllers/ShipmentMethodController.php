<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ShipmentMethod;

class ShipmentMethodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return response()->json(ShipmentMethod::All());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $new_shipment_method = ShipmentMethod::create([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'rate' => $request->input('rate'),
        ]);
        $new_shipment_method->save();

        return response()->json($new_shipment_method);
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
        return response()->json(ShipmentMethod::find($id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
        $shipment_method = ShipmentMethod::find($id);

        if ($shipment_method) {

            $shipment_method->name = $request->input('name');
            $shipment_method->description = $request->input('description');
            $shipment_method->rate = $request->input('rate');
            $shipment_method->save();

            return reponse()->json($shipment_method);
        }
        else return response()->json(null);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        return ShipmentMethod($id)->delete();
    }
}
