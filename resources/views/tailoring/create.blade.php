@extends('layouts.app')

@section('content')
<div class="form-wraper container">
    
    <form enctype="multipart/form-data" method="POST" action="{{ url('tailoring') }}">
        @csrf
        {{-- {{ csrf_token() }} --}}

        <div class="row">

            <div class="form-group col-md-6">
                <label for="example-text-input" class="form-control-label">Name</label>
                <input class="form-control" type="text" name="name" placeholder="John Snow" id="example-text-input">
            </div>

            <div class="form-group col-md-6">
                <label for="example-tel-input" class="form-control-label">Mobile Number</label>
                <input class="form-control" type="tel" name="mobile" placeholder="40-(770)-888-444" id="example-tel-input" maxlength="10">
            </div>

            <div class="form-group col-md-6">
                <label for="example-number-input" class="form-control-label">Reciept Number</label>
                <input class="form-control" type="number" name="reciept_number" placeholder="23" id="example-number-input">
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
                <label for="example-date-input" class="form-control-label">Description</label>
                <div class="input-group">
                    <textarea class="form-control" aria-label="With textarea" name="description"></textarea>
                </div>
            </div>

            <div class="form-group col-md-6">
                <label for="example-date-input" class="form-control-label">Delivery Date</label>
                <input class="form-control" type="date" name="delivery_date" placeholder="2018-11-23" id="example-date-input">
            </div>

            <div class="form-group col-md-6">
                <label for="example-date-input" class="form-control-label">Booking Date</label>
                <input class="form-control" type="date" name="today_date" placeholder="2018-11-23" id="example-date-input">
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