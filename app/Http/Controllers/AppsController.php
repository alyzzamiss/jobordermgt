<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\App;
use App\AppDetail;



class AppsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $app_details = DB::table('app_details')
            ->join ('apps', 'apps.id', 'app_details.app_id')
            ->join ('cost_centers', 'cost_centers.id', 'apps.costcenter_id')
            ->select('app_details.id','cost_centers.costcenter_name', 'apps.year', 'apps.type', 'apps.quarter', 'app_details.item_name')
            ->whereNOTIn('app_details.id',function($query){
                $query->select('job_orders.app_item_id')->from('job_orders');
            })
            ->orderBy('app_details.id', 'asc')
            ->get();
        return view('apps.index')->with('app_details', $app_details);
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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $app_details = AppDetail::find($id);
        return  view('joborders.create')->with('app_details', $app_details);
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
