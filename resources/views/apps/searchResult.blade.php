@extends('layouts.app')
    
@section('content')
    <div class="jumbotron text-center">
        <h1>APP Items</h1>
    </div>
    <div class="container">
        <p>Filter APP Items</p>
        {!! Form::open(['action' => 'SearchController@getSearch', 'method' => 'GET']) !!}
            <div class="form-group row">
                <div class="col">
                    {{Form::label('type', 'APP Type')}}
                    {{Form::select('type', array('Primary' => 'Primary', 
                                                    'Supplemental' =>'Supplemental'), 'Supplemental', 
                                                    ['class' => 'form-control'])}}
                    
                </div>
                <div class="col">
                    {{Form::label('quarter', 'A.Y. Quarter')}}
                    <select name="quarter" class="form-control">
                        <option value="" disabled selected>Select Quater</option>
                        <option value="1st Quarter">1st Quarter</option>
                        <option value="2nd Quarter">2nd Quarter</option>
                        <option value="3rd Quarter">3rd Quarter</option>
                        <option value="4th Quarter">4th Quarter</option>
                    </select>
                    {{-- {{Form::select('quarter', array('1st Quarter' => '1st Quarter', 
                                                    '2nd Quarter ' =>'2nd Quarter', 
                                                    '3rd Quarter' => '3rd Quarter',
                                                    '4th Quarter' => '4th Quarter'), '', 
                                                    ['class' => 'form-control']) }}           --}}
                </div>

                <div class="col">
                        {{Form::label('costcenter', 'Cost Center')}}
                        <select name="costcenter" class="form-control">
                            <option value="" disabled selected>Select Cost Center</option>
                            @foreach($costcenters as $row)
                                <option value="{{$row->id}}">{{$row->costcenter_name}}</option>
                            @endforeach
                        </select>        
                </div>
            </div>

            <div class="col text-center">
                    {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
            </div>
        {!! Form::close() !!}
    </div>

    <div class="container">
            <table id="table_format" class="table table-hover">
                <hr>
                <thead class="thead-dark">
                <tr>
                    <th scope="col"><center>Item ID</center></th>
                    <th scope="col"><center>Item Name</center></th>
                    <th scope="col"><center>APP type</center></th>
                    <th scope="col"><center>Year</center></th>
                    <th scope="col"><center>Quarter</center></th>                    
                    <th scope="col"><center>Cost Center</center></th>
                    <th scope="col"><center>Action</center></th>
                </tr>
                </thead>
                    @if(count($app_details) > 0)
                            @foreach($app_details as $app_detail)
                                <div class="well">
                                    <tr>
                                        <td>{{$app_detail->id}}</td>
                                        <td>{{$app_detail->item_name}}</td>
                                        <td>{{$app_detail->type}}</td>
                                        <td>{{$app_detail->year}}</td>
                                        <td>{{$app_detail->quarter}}</td>
                                        <td>{{$app_detail->costcenter_name}}</td>
                                        <td><center>
                                            <a href="/apps/{{$app_detail->id}}">
                                                <button type="button" class="btn btn-success">Create Job Order</button>
                                            </a>
                                        </center></td>
                                    </tr>
                                </div>
                            @endforeach
                    @else
                        <tr>
                            <td colspan=7><p><center>No items found!</center></p></td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
@endsection