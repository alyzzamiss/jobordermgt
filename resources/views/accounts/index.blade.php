@extends('layouts.app')
    
@section('content')
    <div class="jumbotron text-center">
        <h1>Source of Funds</h1>
    </div>
    <br>
    <div class="container">
        <br><br>  
        <table class="table table-hover">
            <thead class="thead-dark">
            <tr align="center">
                <th scope="col">Account number</th>
                <th scope="col">Account Name</th>
                <th scope="col">Balance</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
                @if(count($accounts) > 0)
                        @foreach($accounts as $account)
                            <div class="well">
                                <tr align="center">
                                    <td>{{$account->id}}</td>
                                    <td>{{$account->account_name}}</td>
                                    <td>{{$account->account_balance}}</td>
                                    <td>
                                        <a href="/accounts/{{$account->id}}/addFunds" class="btn btn-success">Add Funds</a>
                                        <a href="/accounts/{{$account->id}}/edit" class="btn btn-primary">Realignment</a>
                                    </td>
                                </tr>
                            </div>
                        @endforeach
                        
                        @else
                        <tr>
                            <td colspan=6><p>No items found!</p></td>
                        </tr>
                @endif
            </tbody>
        </table>
    </div>
@endsection