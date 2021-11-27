<?php

namespace App\Http\Controllers;

use App\Models\Courier;
use Illuminate\Http\Request;

class CourierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courier = Courier::all();
        return view('courier.index', compact('courier'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('courier.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'couriername' => 'required|min:3|max:100',
                'totalongkir' => 'required'
            ],
            [
                'couriername.required' => 'Courier name is required',
                'couriername.min' => 'min 3 words',
                'couriername.max' => 'max 100 words',
                'totalongkir.required' => 'Total ongkir is required',
            ]
        );
        Courier::create(
            [
                'courier_name' => $request->couriername,
                'total_ongkir' => $request->totalongkir,
            ]
        );
        return redirect('/courier')->with('status', 'Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Courier  $courier
     * @return \Illuminate\Http\Response
     */
    public function show(Courier $courier)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Courier  $courier
     * @return \Illuminate\Http\Response
     */
    public function edit(Courier $courier)
    {
        
        return view('courier.update', compact('courier'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Courier  $courier
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Courier $courier)
    {
        $request->validate([
            'couriername' => 'required|min:3|max:100',
            'totalongkir' => 'required',
            
        ],
        [
            'couriername.required' => 'Courier name is required',
            'couriername.min' => 'min 3 words',
            'couriername.max' => 'max 100 words',
            'totalongkir.required' => 'Total ongkir is required'
        ]);

        Courier::where('id', $courier->id) -> update(
            [
                'courier_name' => $request->couriername,
                'total_ongkir' => $request->totalongkir,
            ],
            
            );
            return redirect('/courier')->with('status', 'Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Courier  $courier
     * @return \Illuminate\Http\Response
     */
    public function destroy(Courier $courier)
    {
        Courier::destroy('id', $courier->id);
        return redirect('/courier')->with('status', ' Deleted Successfully ');
    }
}
