@extends('layouts.app')
    
@section('content')
    <div class="jumbotron text-center">
        <h1>Source of Funds</h1>
    </div>
    <br>
    <a href="javascript:history.go(-1)" class="btn btn-outline-dark">Go Back</a>
    <hr>
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
                                    <td width='25%'><center>
                                        {{Form::number('balance', $account->account_balance,
                                             ['class' => 'form-control', 'step'=>'any'])}}
                                    </td>
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