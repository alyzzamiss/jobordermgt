@extends('layouts.app')
    
@section('content')
    <div class="jumbotron text-center">
        <h1>Job Order Management</h1>
    </div>
    <div class="container">
            <a href="/createppmp">
                <button type="button" class="btn btn-primary">Create Supplemental PPMP</button>
            </a>
    </div>
    <br>
    <div class="container">
        <table class="table table-hover">
            <h3><center>Supplemental PPMP Items</center></h3>
            <thead class="thead-dark">
            <tr>
                <th scope="col" style="width:15%">PPMP Item ID</th>
                <th scope="col" style="width:40%">Item Name</th>
                <th scope="col" style="width:10%">Quarter</th>
                <th scope="col" style="width:20%"><center>Action</center></th>
            </tr>
            </thead>
                @if(count($ppmp_items) > 0)
                        @foreach($ppmp_items as $ppmp_item)
                            <div class="well">
                                <tr>
                                    <td>{{$ppmp_item->id}}</td>
                                    <td>{{$ppmp_item->item_name}}</td>
                                    <td>{{$ppmp_item->quarter}}</td>
                                    <td><center>
                                        <a href="/ppmps/{{$ppmp_item->id}}">
                                            <button type="button" class="btn btn-success">Create Job Order</button>
                                        </a>
                                    </center></td>
                                </tr>
                            </div>
                        @endforeach
                        
                        @else
                        <tr>
                            <td colspan=5><p><center>No items found!</center></p></td>
                        </tr>
                @endif
            </tbody>
        </table>
    </div>
@endsection