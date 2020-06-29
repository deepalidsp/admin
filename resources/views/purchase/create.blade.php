@extends('layouts.app')

@section('content')
<div class="form-wraper container">
    
    <form enctype="multipart/form-data" method="POST" action="{{ url('project') }}">
        @csrf
        {{-- {{ csrf_token() }} --}}

        <div class="row">

            <div class="form-group col-md-6">
                <label for="example-text-input" class="form-control-label">Name of Party</label>
                <input class="form-control" type="text" name="name" placeholder="John Snow" id="example-text-input">
            </div>

            <div class="form-group col-md-6">
                <label for="example-date-input" class="form-control-label">Date of Purchase</label>
                <input class="form-control" type="date" name="purchase_date" placeholder="2018-11-23" id="example-date-input">
            </div>

            <div class="form-group col-md-6">
                <label for="example-date-input" class="form-control-label">Description</label>
                <div class="input-group">
                    <textarea class="form-control" aria-label="With textarea" name="description"></textarea>
                </div>
            </div>

            <div class="form-group col-md-6">
                <label for="example-date-input" class="form-control-label">Amount</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">₹</span>
                    </div>

                    <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">

                    {{-- <div class="input-group-append">
                        <span class="input-group-text">.00</span>
                    </div> --}}
                </div>
            </div>

            <div class="form-group col-md-6">
                <label for="exampleFormControlSelect1" name="pay_status">Pay Status</label>
                <select class="form-control" id="exampleFormControlSelect1">
                  <option value="paid">Paid</option>
                  <option value="unpaid">unpaid</option>
                </select>
            </div>

            <div class="form-group col-md-6">
                <label for="example-date-input" class="form-control-label">Monthly Purchase Statement</label>
                <div class="input-group">
                    <textarea class="form-control" aria-label="With textarea" name="monthly_purchase_statement"></textarea>
                </div>
            </div>

        </div>
        
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <input class="btn btn-primary" type="submit" value="Submit">
                </div>
            </div>
        </div>
        

    </form>
</div>
@endsection