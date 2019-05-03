@extends('layouts.app')
    
@section('content')
    <div class="jumbotron text-center">
        <h1>List of Job Orders</h1>
    </div>
    <div class="container">
        <table class="table table-hover">
            <thead class="thead-dark">
            <tr>
                <th scope="col" style="width:10%">Job Order ID</th>
                <th scope="col" style="width:auto">Date Created</th>
                <th scope="col" style="width:auto">Job Order Title</th>
                <th scope="col" style="width:auto">Due Date</th>
                <th scope="col" style="width:auto">Account Charged</th>
                <th scope="col" style="width:auto"><center>Action</center></th>
            </tr>
            </thead>
            <tbody>
                @if(count($joborders) > 0)
                        @foreach($joborders as $job_order)
                            <div class="well">
                                <tr>
                                    <td>{{$job_order->id}}</td>
                                    <td>{{$job_order->created_at}}</td>
                                    <td>{{$job_order->jo_title}}</td>
                                    <td>{{$job_order->date_due}}</td>
                                    <td>{{$job_order->amount}}</td>
                                    <td><center>
                                        <div class="btn-group" role="group">
                                            <a href="/">
                                            <button type="button" class="btn btn-secondary">View</button>
                                            </a>
                                            <a href="/">
                                                <button type="button" class="btn btn-primary">Edit</button>
                                            </a>
                                            <a href="/">
                                            <button type="button" class="btn btn-danger">Remove</button>
                                            </a>
                                        </div>
                                    </center></td>
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