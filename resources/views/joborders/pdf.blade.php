@extends('layouts.pdf')
    
@section('content')
    <h2>{{$joborder->jo_title}}</h2>
    <h5>Job Order No. : {{$joborder->id}}</h5>
    <h5>Date: {{$joborder->created_at}}</h5>
    <br>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col" style="width:65%"><center>Detail of Job</center></th>
                <th scope="col" style="width:20%"><center>Date to be undertaken</center></th>
                <th scope="col" style="width:15%"><center>Account Charge</center></th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <td>{{$joborder->jo_details}}</td>
                <td><center>{{$joborder->date_due}}</center></td>
                <td><center>{{$joborder->account_name}}</center></td>
            </tr>
        </tbody>
    </table>
    <h5>Estimated Cost: {{$joborder->amount}}</5>
    <h5>Job Requisitioner: {{$joborder->staff_name}}</h5>
    <hr>
@endsection