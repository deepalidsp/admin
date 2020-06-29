@extends('layouts.app', ['title' => __('Feedback')])

@section('content')
<div class="col-xl-12 order-xl-1">
    <div class="card bg-secondary shadow">
        <div class="card-header bg-white border-0">
            <div class="row align-items-center">
                <h3 class="col-12 mb-0">{{ __('Add Feedback') }}</h3>
            </div>
        </div>
        <div class="card-body">
            <form enctype="multipart/form-data" method="POST" action="{{ url('feedback') }}" id="feedback">

                @csrf
                {{-- {{ csrf_token() }} --}}
                <div class="row">

                    <div class="form-group col-md-6">
                        <label for="example-text-input" class="form-control-label">Name</label>
                        <input class="form-control" type="text" name="name" placeholder="John Snow" id="example-text-input">
                    </div>

                    <div class="form-group col-md-6">
                        <label for="example-text-input" class="form-control-label">Address</label>
                        <input class="form-control" type="text" name="address" placeholder="Address" id="example-text-input">
                    </div>

                    <div class="form-group col-md-6">
                        <label for="example-number-input" class="form-control-label">Pin</label>
                        <input class="form-control" type="number" name="pin" placeholder="23" id="example-number-input">
                    </div>

                    <div class="form-group col-md-6">
                        <label for="example-date-input" class="form-control-label">Birth Date</label>
                        <input class="form-control" type="date" name="dob" placeholder="2018-11-23" id="example-date-input">
                    </div>

                    <div class="form-group col-md-6">
                        <label for="example-tel-input" class="form-control-label">Mobile Number</label>
                        <input class="form-control" type="tel" name="mobile" placeholder="40-(770)-888-444" id="example-tel-input" maxlength="10">
                    </div>

                    <div class="form-group col-md-6">
                        <label for="example-date-input" class="form-control-label">Today's Date</label>
                        <input class="form-control" type="date" name="today_date" placeholder="2018-11-23" value="{{ date("Y-m-d") }}" id="example-date-input" disabled>
                        <input class="form-control" type="date" name="todays_date" placeholder="2018-11-23" value="{{ date("Y-m-d") }}" id="example-date-input" hidden>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="example-date-input" class="form-control-label">Amount</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">₹</span>
                            </div>

                            <input type="text" class="form-control" name="amount" aria-label="Amount (to the nearest dollar)">

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

                </div>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    <br />
                @endif
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input class="btn btn-primary" type="submit" value="Submit" id="submit">
                        </div>
                    </div>
                </div>
                

            </form>
        </div>
    </div>
</div>
@endsection
<script type="text/javascript">
$(document).ready(function() {
    $('#feedback').validate({
        rules: {
            name: 'required',
        }
    });
    $('#submit').click(function() {
        $('#feedback').form('validate form');
    });
});
</script>