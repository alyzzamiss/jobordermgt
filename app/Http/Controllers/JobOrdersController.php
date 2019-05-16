<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\JobOrder;
use App\AppDetail;


class JobOrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $joborders = JobOrder::all();
        return view('joborders.index')->with('joborders', $joborders);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('joborders.create');
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
            'app_item_id' => 'required',
            'item_name' => 'required',
            'account' => 'required',
            'date_due' => 'required',
            'amount' => 'required|min:0',
            'staff' => 'required',
            'jo_details' => 'required'
        ]);

        //create job order
        $joborder =  new JobOrder;
        $joborder->app_item_id = $request->input('app_item_id');
        $joborder->jo_title = $request->input('item_name');
        $joborder->account_id = $request->input('account');
        $joborder->date_due = $request->input('date_due');
        $joborder->amount = $request->input('amount');
        $joborder->staff_id = $request->input('staff');
        $joborder->jo_details = $request->input('jo_details');
        $joborder->save();

        return redirect('/jo_list')->with('success', 'Job Order Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $joborder = JobOrder::find($id);
        return view('joborders.show')->with('joborder', $joborder);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $joborder = JobOrder::find($id);
        return view('joborders.edit')->with('joborder', $joborder);
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
        $this->validate($request, [
            'app_item_id' => 'required',
            'item_name' => 'required',
            'account' => 'required',
            'date_due' => 'required',
            'amount' => 'required|min:0',
            'staff' => 'required',
            'jo_details' => 'required'
        ]);

        //update job order
        $joborder = JobOrder::find($id);
        $joborder->app_item_id = $request->input('app_item_id');
        $joborder->jo_title = $request->input('item_name');
        $joborder->account_id = $request->input('account');
        $joborder->date_due = $request->input('date_due');
        $joborder->amount = $request->input('amount');
        $joborder->staff_id = $request->input('staff');
        $joborder->jo_details = $request->input('jo_details');
        $joborder->save();

        return redirect('/jo_list')->with('success', 'Job Order Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $joborder = JobOrder::find($id);
        $joborder->delete();
        return redirect('/jo_list')->with('success', 'Job Order Removed');
    }
}
