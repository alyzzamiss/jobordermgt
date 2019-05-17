@extends('layouts.app')
    
@section('content')
    {{-- <div class="jumbotron text-center">
        <h1>JOB ORDER</h1>
    </div> --}}
    <br>
    <a href="javascript:history.go(-1)" class="btn btn-outline-dark">Go Back</a>
    <a href="/joborders/{{$joborder->id}}/edit">
        <button type="button" class="btn btn-outline-primary">Edit</button>
    </a>
    <hr>
    <div class="container">
        <h2>{{$joborder->jo_title}}</h2>
        <h5>Job Order No. : {{$joborder->id}}</h5>
        <h5>Date: {{$joborder->created_at}}</h5>
        <br>
        <table class="table table-hover table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th scope="col" style="width:65%"><center>Detail of Job</center></th>
                    <th scope="col" style="width:20%"><center>Date to be undertaken</center></th>
                    <th scope="col" style="width:15%"><center>Account Charge</center></th>
                </tr>
            </thead>

            <tbody>
                <div class="well well-lg">
                    <tr>
                        <td>{{$joborder->jo_details}}</td>
                        <td><center>{{$joborder->date_due}}</center></td>
                        <td><center>{{$joborder->account_name}}</center></td>
                    </tr>
                </div>
            </tbody>
        </table>
        <h5>Estimated Cost: {{$joborder->amount}}</5>
        <h5>Job Requisitioner: {{$joborder->staff_name}}</h5>
        <hr>
        <a href="{{action('JobOrdersController@downloadPDF', $joborder->id)}}">
            <button type="button" class="btn btn-primary">Print</button>
        </a>
    </div>
@endsection