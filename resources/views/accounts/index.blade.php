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
                <th scope="col"><center>Account number</center></th>
                <th scope="col"><center>Account Name</center></th>
                <th scope="col"><center>Balance</center></th>
            </tr>
            </thead>
            <tbody>
                @if(count($accounts) > 0)
                        @foreach($accounts as $account)
                            <div class="well">
                                <tr>
                                    <td><center>{{$account->id}}</center></td>
                                    <td><center>{{$account->account_name}}</center></td>
                                    <td><center>{{$account->account_balance}}</center></td>
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