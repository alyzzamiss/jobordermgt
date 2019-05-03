<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ppmp;
use App\Ppmp_item;
use App\JobOrder;

class PpmpsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {      
        $ppmps = Ppmp::all();
        $ppmp_items = Ppmp_item::all();
        return view('ppmps.index')->with('ppmp_items', $ppmp_items);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ppmps.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'type' => 'required',
            'year' => 'required',
            'quarter' => 'required',
            'item_name' => 'required'
        ]);
        
        //create ppmp and ppmp_item
        $ppmp = new Ppmp;
        $ppmp_item = new Ppmp_item;
        $ppmp->type = $request->input('type');
        $ppmp->year = $request->input('year'); 
        $ppmp_item->quarter = $request->input('quarter');       
        $ppmp_item->item_name = $request->input('item_name');
        $ppmp->save();
        $ppmp_item->save();

        return redirect('/')->with('success','Item created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ppmp_item = Ppmp_item::find($id);
        return  view('joborders.create')->with('ppmp_item', $ppmp_item);
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
    }
}
