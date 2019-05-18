@extends('layouts.app')
    
@section('content')
    <div class="jumbotron text-center">
        <h1>Source of Funds</h1>
    </div>
    <br>
    <hr>
    <div class="container">
        <div class="row">
            <div class="col-9">
                <h3>Account Details</h3>
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
                                @foreach($accounts as $accountz)
                                    <div class="well">
                                        <tr>
                                            <td><center>{{$accountz->id}}</center></td>
                                            <td><center>{{$accountz->account_name}}</center></td>
                                            <td width='25%'><center>
                                                {{$accountz->account_balance}}
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
            <div class="col-3">
                <h3>Add Funds</h3>
                {!! Form::open(['action' => ['AccountsController@updateFunds', $account->id], 'method' => 'POST']) !!}
                {{-- {!! Form::open(['action' => '/accounts/{{$account->id}}/updateFunds', 'method' => 'POST']) !!} --}}
                    {{-- @csrf_field --}}
                    
                    <table class="table">
                        <thead class="thead-dark">
                            <th>Account Name: {{$account->account_name}}</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <input type="hidden" id="account" name="account" value="{{$account->id}}">
                                    <label>Amount to Add:</label>
                                    <input name="funds" min="0" step="any" type="number" class="form-control" required>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="submit" value="Save" class="btn btn-primary">
                                    <a href="/accounts" class="btn btn-danger">Back</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    {{ Form::hidden('_method', 'PUT') }} 
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection