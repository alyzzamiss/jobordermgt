@extends('layouts.app')
    
@section('content')
    <div class="jumbotron text-center">    
        <h1>{{$title}}</h1>
    </div>
    <div>
        <a href="/realign">
            <button type="button" class="btn btn-success">Realign Funds</button>
        </a>        
    </div>
    <br>    
    <div class="container">
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
@endsection



