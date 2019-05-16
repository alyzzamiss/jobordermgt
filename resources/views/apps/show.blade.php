@extends('layouts.app')
    
@section('content')
    <div class="jumbotron text-center">
        <h1>APP Items</h1>
    </div>
    <div class="container">
        <p>Filter APP</p>
        {{-- {!! Form::open(['action' => 'AppsController@show', 'method' => 'POST']) !!} --}}
        
            <div class="form-group row">
                <div class="col">
                    {{Form::label('quarter', 'A.Y. Quarter')}}
                    {{Form::select('quarter', array('1st Quarter' => '1st Quarter', 
                                                    '2nd Quarter' =>'2nd Quarter', 
                                                    '3rd Quarter' => '3rd Quarter',
                                                    '4th Quarter' => '4th Quarter'), '', 
                                                    ['class' => 'form-control']) }}          
                </div>

                <div class="col">
                        {{Form::label('costcenter', 'Cost Center')}}
                        {{Form::select('costcenter', array('1' => 'CBAA', 
                                            '2' =>'CON', 
                                            '3' => 'CCS',
                                            '4' => 'COET',
                                            '5' => 'CASS',
                                            '6' => 'CED',
                                            '7' => 'CSM'), '', 
                                            ['class' => 'form-control']) }}          
                </div>
            </div>
            {{-- <div class="col text-center">
                    {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
            </div> --}}
        {{-- {!! Form::close() !!}   --}}
    </div>
@endsection