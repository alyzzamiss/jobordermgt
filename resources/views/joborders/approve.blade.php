@extends('layouts.app') 

@section('content')
    <br>
    <a href="javascript:history.go(-1)" class="btn btn-outline-dark">Go Back</a>
    <br>

    <hr>
    <div class="container">
        {!! Form::open(['action' => ['JobOrdersController@approve_update', $joborder->id], 'method' => 'POST']) !!}
            <div class="form-group row">
                <div class="col">
                    {{Form::label('staff', 'Approved by')}}
                    {{Form::text('staff', $joborder->staff_name, ['class' => 'form-control'])}}
                    {{-- <select name="staff" class="form-control">
                        @foreach($staff as $row)
                            <option value="{{$row->id}}">{{$row->staff_name}}</option>
                        @endforeach
                    </select> --}}
                </div>
                
                <div class="col">
                    {{Form::label('approved_at', 'Date Approved')}}
                    {{Form::date('approved_at', now(), ['class' => 'form-control'])}}
                </div>
                <input id="status" name="status" type="hidden" value="Approved">
                <input id="amount" name="amount" type="hidden" value="{{$joborder->amount}}">
                <input id="account_id" name="account_id" type="hidden" value="{{$joborder->account_id}}">
                <input id="account_balance" name="account_balance" type="hidden" value="{{$joborder->account_balance}}">
            </div>

            <div class="col text-center">        
                {{Form::hidden('_method', 'PUT')}}
                {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
            </div>
        {!! Form::close()!!}
    </div>
    <hr>
    <div class="container">
        <h2>{{$joborder->jo_title}}</h2>
        <h5>Job Order No. : {{$joborder->id}}</h5>
        <h5>Date: {{$joborder->created_at}}</h5>
        <br>
        <table class="table table-hover table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th scope="col" style="width:65%"><center>Detail of Job</center></th>
                    <th scope="col" style="width:20%"><center>Date to be undertaken</center></th>
                    <th scope="col" style="width:15%"><center>Account Charge</center></th>
                </tr>
            </thead>

            <tbody>
                <div class="well well-lg">
                    <tr>
                        <td>{{$joborder->jo_details}}</td>
                        <td><center>{{$joborder->date_due}}</center></td>
                        <td><center>{{$joborder->account_name}}</center></td>
                    </tr>
                </div>
            </tbody>
        </table>
        <h5>Estimated Cost: {{$joborder->amount}}</5>
        <h5>Job Requisitioner: {{$joborder->staff_name}}</h5>
    </div>
    
    
    @endsection