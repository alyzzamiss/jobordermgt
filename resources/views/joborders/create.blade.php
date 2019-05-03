@extends('layouts.app')
    
@section('content')
    <div class="jumbotron text-center">
        <h1>Create Job Order</h1>
    </div>
    <a href="/" class="btn btn-outline-dark">Go Back</a>
    <hr>
    <div class='container'>
        {!! Form::open(['action' => 'JobOrdersController@store', 'method' => 'POST']) !!}
        
        <div class='form-group'>
            {{Form::label('ppmp_item_id', 'PPMP Item ID')}}
            {{Form::text('ppmp_item_id', $ppmp_item->id, ['class' => 'form-control', 'readonly'] )}}
        </div>

        <div class='form-group'>
            {{Form::label('item_name', 'Item Name')}}
            {{Form::text('item_name', $ppmp_item->item_name, ['class' => 'form-control', 'readonly'] )}}
        </div>
       
        <div class="form-group row">
            <div class="col">
                    {{Form::label('account', 'Charge to Account')}}
                    {{Form::select('account', array('502305002-001' => 'GAA', 
                                                '502305002-002' =>'Income',
                                                '502305002-003' =>'Fiduciary'), '', 
                                                ['class' => 'form-control', 'placeholder' => 'Choose an Account']) }}
            </div>

            <div class="col">
                    {{Form::label('date_due', 'Date Due')}}
                    {{Form::date('date_due', '', ['class' => 'form-control'])}}
            </div>
        </div>
        
        <div class="form-group row">
            <div class="col">
                    {{Form::label('amount', 'Estimated Cost')}}
                    {{Form::number('amount', '', ['class' => 'form-control', 'placeholder' => 'input estimated amount']) }}
            </div>

            <div class="col">
                    {{Form::label('staff', 'Requisitioner')}}
                    {{Form::select('staff', array('1' => 'Ted Mosby', 
                                                '2' =>'Marshall Ericson'), '', 
                                                ['class' => 'form-control', 'placeholder' => 'Choose staff name']) }}
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
