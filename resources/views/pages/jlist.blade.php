@extends('layouts.app')
    
@section('content')
    <div class="jumbotron text-center">
        <h1>{{$title}}</h1>
    </div>

    <div class="container">
        <table class="table table-hover">
            <thead class="thead-dark">
            <tr>
                <th scope="col" style="width:auto">Job Order ID</th>
                <th scope="col" style="width:auto">Date Created</th>
                <th scope="col" style="width:auto">Job Order Title</th>
                <th scope="col" style="width:auto">Due Date</th>
                <th scope="col" style="width:auto">Account Charged</th>
                <th scope="col" style="width:auto"><center>Action</center></th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Repair and Maintenance - School Bldg.</td>
                <td>P 370,000.00</td>
                <td>2nd</td>
                <td>GAAP</td>
                <td><center>
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <button type="button" class="btn btn-secondary">View</button>
                        <a href="/edit"><button type="button" class="btn btn-primary">Edit</button></a>
                        <button type="button" class="btn btn-danger">Remove</button>
                    </div>
                </center></td>
            </tr>
            </tbody>
        </table>
    </div>
@endsection

