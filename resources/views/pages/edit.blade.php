@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center">
        <h1>{{$title}}</h1>
    </div>
    
    <div class="container">
        <form>
            <div class="form-group row">
            <label for="staticItemID" class="col-sm-2 col-form-label">PPMP Item ID</label>
            <div class="col-sm-10">
                <input type="text" readonly class="form-control" id="staticItemID" value="1001">
            </div>
            </div>
            
            <div class="form-group row">
                <label for="staticItemName" class="col-sm-2 col-form-label">Item Name</label>
                <div class="col-sm-10">
                <input type="text" readonly class="form-control" id="staticItemName" value="Repair and Maintenance - School Bldg.">
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <label for="AccountName" class="col-form-label">Account Name</label>
                    <select class="form-control">
                            <option>GAAP</option>
                            <option>INCOME</option>
                            <option>FIDUCIARY</option>
                    </select>
                </div>
                <div class="col">
                    <label for="DueDate" class="col-form-label">Due Date</label>
                    <div class="input-group date" data-provide="datepicker">
                            <input type="date" class="form-control">
                            <div class="input-group-addon">
                                <span class="glyphicon glyphicon-th"></span>
                            </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <label for="text" class="col-form-label">Amount</label>
                    <input type="text" class="form-control" placeholder="estimated cost">
                </div>
                <div class="col">
                    <label for="text" class="col-form-label">Requisitioner</label>
                <input type="text" class="form-control" placeholder="eg. Ted Mosby">
                </div>
            </div>

            <div class="row">
                <div class="col">    
                <label for="details" class="col-form-label">Job Order Details</label>
                <textarea class="form-control" rows="5" id="details" placeholder="services required with specifications"></textarea>
                </div>
            </div>
            <br>
            <a href="/" class="btn btn-secondary active" role="button" aria-pressed="true">Cancel</a>
            <a href="/jlist" class="btn btn-primary active" role="button" aria-pressed="true">Save</a>
            <br>
        </form>
    </div>
@endsection