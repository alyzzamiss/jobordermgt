@extends('layouts.app')
    
@section('content')
    <div class="jumbotron text-center">
        <h1>{{$title}}</h1>
    </div>
    <div class="container">
        <a href="/createppmp">
            <button type="button" class="btn btn-primary">Create Supplemental PPMP</button>
        </a>
    </div>
        <br>
        <br>
        <table class="table table-hover">
            <thead class="thead-dark">
            <tr>
                <th scope="col" style="width:15%">PPMP Item ID</th>
                <th scope="col" style="width:40%">Item Name</th>
                <th scope="col" style="width:15%">Amount</th>
                <th scope="col" style="width:10%">Quarter</th>
                <th scope="col" style="width:20%"><center>Action</center></th>
            </tr>
            </thead>

            <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Repair and Maintenance - School Bldg.</td>
                <td>P 0.00</td>
                <td>2nd</td>
                <td><center>
                    <a href="/createjo">
                        <button type="button" class="btn btn-success">Create Job Order</button>
                    </a>
                </center></td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Snacks - Seminar</td>
                <td>P 0.00</td>
                <td>1st</td>
                <td><center>
                    <a href="/createjo">
                        <button type="button" class="btn btn-success">Create Job Order</button>
                    </a>
                </center></td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>Repair and Maintenance - AC</td>
                <td>P 0.00 </td>
                <td>2nd</td>
                <td><center>
                    <a href="/createjo">
                        <button type="button" class="btn btn-success">Create Job Order</button>
                    </a>
                </center></td>
            </tr>
            </tbody>
        </table>
    </div>
      
@endsection
