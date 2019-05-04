@extends('layouts.app')
    
@section('content')
    <div class="jumbotron text-center">
        <h1>Source of Funds</h1>
    </div>
    <br>
    <div class="container">
        <table class="table table-hover">
            <thead class="thead-dark">
            <tr>
                <th scope="col">Account number</th>
                <th scope="col">Account Name</th>
                <th scope="col">Balance</th>
                <th scope="col"><center>Action</center></th>
            </tr>
            </thead>
            <tbody>
                @if(count($accounts) > 0)
                        @foreach($accounts as $account)
                            <div class="well">
                                <tr>
                                    <td>{{$account->id}}</td>
                                    <td>{{$account->account_name}}</td>
                                    <td>{{$account->account_balance}}</td>
                                    <td><center>
                                        <div class="btn-group" role="group">
                                            <a href="/">
                                                <button type="button" class="btn btn-primary">Edit</button>
                                            </a>
                                            <a href="/">
                                            <button type="button" class="btn btn-danger">Remove</button>
                                            </a>
                                        </div>
                                    </center></td>
                                </tr>
                            </div>
                        @endforeach
                        
                        @else
                        <tr>
                            <td colspan=6><p><center>No items found!</center></p></td>
                        </tr>
                @endif
            </tbody>
        </table>
    </div>
@endsection