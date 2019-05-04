@extends('layouts.app')
    
@section('content')
    <div class="jumbotron text-center">
        <h1>Edit Job Order</h1>
    </div>
    <a href="javascript:history.go(-1)" class="btn btn-outline-dark">Go Back</a>
    <hr>
    <div class='container'>
        {!! Form::open(['action' => ['JobOrdersController@update', $joborder->id], 'method' => 'POST']) !!}
        
        <div class='form-group'>
            {{Form::label('ppmp_item_id', 'PPMP Item ID')}}
            {{Form::text('ppmp_item_id', $joborder->ppmp_item_id, ['class' => 'form-control', 'readonly'] )}}
        </div>

        <div class='form-group'>
            {{Form::label('item_name', 'Item Name')}}
            {{Form::text('item_name', $joborder->jo_title, ['class' => 'form-control', 'readonly'] )}}
        </div>
       
        <div class="form-group row">
            <div class="col">
                    {{Form::label('account', 'Charge to Account')}}
                    {{Form::select('account', array('502305001' => 'GAA', 
                                                '502305002' =>'Income',
                                                '502305003' =>'Fiduciary'), $joborder->account_id, 
                                                ['class' => 'form-control'])}}
            </div>

            <div class="col">
                    {{Form::label('date_due', 'Date Due')}}
                    {{Form::date('date_due', $joborder->date_due, ['class' => 'form-control'])}}
            </div>
        </div>
        
        <div class="form-group row">
            <div class="col">
                    {{Form::label('amount', 'Estimated Cost')}}
                    {{Form::number('amount', $joborder->amount, ['class' => 'form-control', 'placeholder' => 'input estimated amount', 'step'=>'any']) }}
            </div>

            <div class="col">
                    {{Form::label('staff', 'Requisitioner')}}
                    {{Form::select('staff', array('1' => 'Ted Mosby', 
                                                '2' =>'Marshall Ericson'), $joborder->staff_id, 
                                                ['class' => 'form-control']) }}
            </div>
        </div>

        <div class="form-group">
            {{Form::label('jo_details', 'Job Order Details')}}
            {{Form::textarea('jo_details', $joborder->jo_details, ['class' => 'form-control'] )}}
        </div>
        
        <div class="col text-center">        
            {{Form::hidden('_method', 'PUT')}}
            {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
        </div>
        {!! Form::close() !!}
    </div>
@endsection
