<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Account;
use PDF;
use DB;

class AccountsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $accounts = Account::all();
        return view('accounts.index')->with('accounts', $accounts);
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
        // $accounts = Account::find($id);
        $accounts = Account::all();
        // return view('accounts.edit')->with('accounts', $accounts);

        // $accounts = Account::all();
        return view('accounts.edit')->with('accounts', $accounts);
    }

    public function transferFunds($id)
    {
        // $accounts = Account::find($id);
        $accounts = Account::all();
        // return view('accounts.edit')->with('accounts', $accounts);

        // $accounts = Account::all();
        return view('accounts.edit')->with('accounts', $accounts);
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
            'amountTransfer' => 'required'
        ]);

        // $_POST values
            $fromAccount = $request->input('fromAccount');
            $transferAmount = $request->input('amountTransfer');
            $toAccount = $request->input('toAccount');

        // Fetching its balance per ID
            $fromAccountBalance = DB::table('accounts')
            ->where('id', $fromAccount)
            ->select('account_balance')->value('account_balance');

            $toAccountBalance = DB::table('accounts')
            ->where('id', $toAccount)
            ->select('account_balance')->value('account_balance');

        if($fromAccount !== $toAccount){
            if($transferAmount <= $fromAccountBalance){
                DB::table('accounts')->where('id', $fromAccount)->decrement('account_balance', $transferAmount);
                DB::table('accounts')->where('id', $toAccount)->increment('account_balance', $transferAmount);
    
                return redirect('/accounts/1/edit')->with('success', 'Realignment successful!');
            }else{
                return redirect('/accounts/1/edit')->with('error', 'Requested amount is greater than the current balance.');
            }
            
        }else{
            return redirect('/accounts/1/edit')->with('error', 'You cannot transfer funds into the same account!');
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
        //
    }
}
