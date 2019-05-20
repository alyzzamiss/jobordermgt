<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\JobOrder;
use App\AppDetail;
use App\Account;
use App\Staff;
use DB;
use PDF;


class JobOrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $joborders = JobOrder::all();
        $joborders = DB::table('job_orders')
        ->select('job_orders.id', 'job_orders.created_at', 'job_orders.amount', 
                'job_orders.jo_title', 'job_orders.date_due', 'job_orders.status')
        ->orderBy('job_orders.status', 'desc')
        ->orderBy('job_orders.created_at', 'desc')
        ->get();
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
        $joborder = DB::table('job_orders')
        ->join('accounts', 'accounts.id', 'job_orders.account_id')
        ->join('staff', 'staff.id', 'job_orders.staff_id')
        ->select('job_orders.id' ,'job_orders.jo_title',  'job_orders.jo_details', 'job_orders.created_at','job_orders.date_due' 
                ,'accounts.account_name', 'staff.staff_name', 'job_orders.amount', 'job_orders.status', 'job_orders.received_by', 'job_orders.approved_at')
        ->where('job_orders.id', $id)
        ->first();
        // $joborder = JobOrder::find($id);
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
        // $joborder = JobOrder::find($id);
        $joborder = DB::table('job_orders')
        ->join('accounts', 'accounts.id', 'job_orders.account_id')
        ->join('staff', 'staff.id', 'job_orders.staff_id')
        ->select('job_orders.id', 'job_orders.app_item_id' ,'job_orders.jo_title',  'job_orders.jo_details', 'job_orders.created_at','job_orders.date_due' 
                ,'accounts.account_name', 'job_orders.staff_id', 'job_orders.account_id' ,'staff.staff_name', 'job_orders.amount', 'job_orders.status', 'job_orders.received_by', 'job_orders.approved_at')
        ->where('job_orders.id', $id)
        ->first();
        $staff = Staff::all();
        $account = Account::all();
        return view('joborders.edit')->with('joborder', $joborder)
                                    ->with('staff', $staff)
                                    ->with('account', $account)
                                    ->with('success', 'Job Order Successfully Updated!');
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
            'amount' => 'required',
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

        // 
        return redirect()->action(
            'JobOrdersController@show', ['id' => $id]
        );
    }

    public function approve($id)
    {
        $joborder = DB::table('job_orders')
        ->join('accounts', 'accounts.id', 'job_orders.account_id')
        ->join('staff', 'staff.id', 'job_orders.staff_id')
        ->select('job_orders.id' ,'job_orders.jo_title',  'job_orders.jo_details', 'job_orders.created_at','job_orders.date_due' 
                ,'accounts.account_name', 'staff.staff_name', 'job_orders.amount', 'job_orders.account_id','job_orders.status', 'accounts.account_balance')
        ->where('job_orders.id', $id)
        ->first();
        return view('joborders.approve')->with('joborder', $joborder)->with('success', 'Job Order Approved!');
    }

    public function approve_update(Request $request, $id)
    {
        $this->validate($request, [
           'staff' => 'required',
           'approved_at' =>'required',
           'status' => 'required'
        ]);

        $amount = $request->input('amount');
        $account_balance = $request->input('account_balance');
        $account_id = $request->input('account_id');
        //update job order
    
        if($amount <= $account_balance){
            $joborder = JobOrder::find($id);
            $joborder->received_by = $request->input('staff');
            $joborder->status = $request->input('status');
            $joborder->approved_at = $request->input('approved_at');
            $joborder->save();

            return redirect()->action('JobOrdersController@show', ['id' => $id]);
        } else {

            return redirect()->action('JobOrdersController@show', ['id' => $id])
                    ->with('message', "Requested amount is greater than the current balance, <a href=/accounts/{$account_id}/addFunds>Click here</a> to realign funds.")
                    ->with('status', 'danger');
            // return redirect()->action('JobOrdersController@show', ['id' => $id])
            //                  ->with('error', 'Requested amount is greater than the current balance.' <a href="/accounts" class="alert-link">Please realign funds.</a>');
        }
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

    public function downloadPDF($id)
    {
        $joborder = DB::table('job_orders')
        ->join('accounts', 'accounts.id', 'job_orders.account_id')
        ->join('staff', 'staff.id', 'job_orders.staff_id')
        ->select('job_orders.id' ,'job_orders.jo_title',  'job_orders.jo_details', 'job_orders.created_at','job_orders.date_due' 
                ,'accounts.account_name', 'staff.staff_name', 'job_orders.amount')
        ->where('job_orders.id', $id)
        ->first();

        $pdf = PDF::loadView('joborders.pdf', compact('joborder'));
        return $pdf->download('Job_Order.pdf');
    }
}
