@extends('layouts.app')
    
@section('content')
    <div class="jumbotron text-center">
        <h1>Create Job Order</h1>
    </div>
    <a href="/jo_list" class="btn btn-outline-dark">Go Back</a>
    <hr>
    <div class='container'>
        {!! Form::open(['action' => 'JobOrdersController@store', 'method' => 'POST']) !!}
        
        <div class='form-group'>
            {{Form::label('app_item_id', 'Item ID')}}
            {{Form::text('app_item_id', $app_details->id, ['class' => 'form-control', 'readonly'] )}}
        </div>

        <div class='form-group'>
            {{Form::label('item_name', 'Item Name')}}
            {{Form::text('item_name', $app_details->item_name, ['class' => 'form-control', 'readonly'] )}}
        </div>
       
        <div class="form-group row">
            <div class="col">
                {{Form::label('account', 'Charge to Account')}}
                <select name="account" class="form-control">
                    @foreach($accounts as $row)
                        <option value="{{$row->id}}">{{$row->account_name}}</option>
                    @endforeach
                </select>
            </div>

            <div class="col">
                    {{Form::label('date_due', 'Date Due')}}
                    {{Form::date('date_due', '', ['class' => 'form-control'])}}
            </div>
        </div>
        
        <div class="form-group row">
            <div class="col">
                    {{Form::label('amount', 'Estimated Cost')}}
                    {{Form::number('amount', '', ['class' => 'form-control', 'placeholder' => 'input estimated amount', 'step'=>'any']) }}
            </div>

            <div class="col">
                {{Form::label('staff', 'Requisitioner')}}
                <select name="staff" class="form-control">
                    @foreach($staffs as $row)
                        <option value="{{$row->id}}">{{$row->staff_name}}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="form-group">
            {{Form::label('jo_details', 'Job Order Details')}}
            {{Form::textarea('jo_details', '', ['class' => 'form-control', 'placeholder' => 'Provide description for Job Order'] )}}
        </div>
        
        <div class="col text-center">
                {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
        </div>
        {!! Form::close() !!}
    </div>
@endsection
