@extends('layouts.app')
    
@section('content')
    <div class="jumbotron text-center">
        <h1>{{$title}}</h1>
    </div>
    
    <div>
        <div class="row">
            <div class="col-md-7">
                <table class="table table-hover">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col" style="width:auto">Account Number</th>
                        <th scope="col" style="width:auto">Account Name</th>
                        <th scope="col" style="width:auto">Balance</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">502305002-001</th>
                        <td>GAA</td>
                        <td>P 370,000.00</td>
                    </tr>
                    <tr>
                        <th scope="row">502305002-002</th>
                        <td>INCOME</td>
                        <td>P 370,000.00</td>
                    </tr>
                    <tr>
                        <th scope="row">502305002-003</th>
                        <td>FIDUCIARY</td>
                        <td>P 370,000.00</td>
                    </tr>
                    </tbody>
                </table>
            </div>

            {{-- <div class="col-md-4 col-md-offset-2">
                <h2><em>Transfer funds</em></h2>
                <div class="container">
                    <h6>FROM:</h6>
                    <label for="AccountName" class="col-form-label">Account Name</label>
                        <select class="form-control">
                                <option>GAAP</option>
                                <option>INCOME</option>
                                <option>FIDUCIARY</option>
                        </select>
                    <label for="text" class="col-form-label">Amount</label>
                    <input type="text" class="form-control" placeholder="amount to transfer">
                    <br>
                    <h6>TO:</h6>
                    <label for="AccountName" class="col-form-label">Account Name</label>
                        <select class="form-control">
                                <option>GAAP</option>
                                <option>INCOME</option>
                                <option>FIDUCIARY</option>
                        </select>                   
                </div>            
            </div> --}}
            <div class="col-md-4 col-md-offset-2">
                <div class="card-header">
                    <h4>Realign Funds</h4>
                </div>
                <div class="card-body">
                    <h6>FROM:</h6>
                    <label for="AccountName" class="col-form-label">Account Name</label>
                        <select class="form-control">
                                <option>GAAP</option>
                                <option>INCOME</option>
                                <option>FIDUCIARY</option>
                        </select>
                    <label for="text" class="col-form-label">Amount</label>
                    <input type="text" class="form-control" placeholder="amount to transfer">
                    <br>
                    <h6>TO:</h6>
                    <label for="AccountName" class="col-form-label">Account Name</label>
                        <select class="form-control">
                                <option>GAAP</option>
                                <option>INCOME</option>
                                <option>FIDUCIARY</option>
                        </select>
                </div>
            </div>    
        </div>        
    </div>
@endsection
