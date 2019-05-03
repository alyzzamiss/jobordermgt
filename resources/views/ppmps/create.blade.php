@extends('layouts.app')
    
@section('content')
    <div class="jumbotron text-center">
        <h1>Create Supplemental PPMP</h1>
    </div>
    <div class="container">
        {!! Form::open(['action' => 'PpmpsController@store', 'method' => 'POST']) !!}
            <div class="form-group row">
                
                <div class="col">
                {{Form::label('type', 'PPMP Type')}}
                {{Form::select('type', array('Primary' => 'Primary PPMP', 
                                            'Supplemental' =>'Supplemental PPMP'), 'Supplemental', 
                                            ['class' => 'form-control']) }}
                </div>

                <div class="col">
                {{Form::label('year', 'Academic Year (A.Y.)')}}
                {{Form::number('year', '', ['class' => 'form-control', 'placeholder' => now()->year])}}
                </div>

                <div class="col">
                        {{Form::label('quarter', 'A.Y. Quarter')}}
                        {{Form::select('quarter', array('1st Quarter' => '1st Quarter', 
                                            '2nd Quarter' =>'2nd Quarter', 
                                            '3rd Quarter' => '3rd Quarter',
                                            '4th Quarter' => '4th Quarter'), '', 
                                            ['class' => 'form-control']) }}          
                </div>
            </div>

            <div class='form-group'>
                {{Form::label('item_name', 'Item Name')}}
                {{Form::text('item_name', '', ['class' => 'form-control', 'placeholder' => 'e.g. School Building Repair'] )}}
            </div>

            <div class="col text-center">
                {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
            </div>

        {!! Form::close() !!}       
    </div>
@endsection
