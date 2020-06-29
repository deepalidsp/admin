@extends('layouts.app')

@section('content')
<div class="container-fluid" >
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header border-0">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h3 class="mb-0">{{ __('Feedbacks   ') }}</h3>
                        </div>
                        <div class="col-4 text-right">
                            <a href="{{ route('feedback.create')}}" class="btn btn-sm btn-primary">{{ __('Add Feedback') }}</a>
                        </div>
                    </div>
                </div> 
                
                <div class="col-12">
                    @if(Session::has('success'))
                        <div class="alert alert-success" alert-dismissible fade show" role="alert">
                            {{Session::get('success')}}
                        </div>
                    @elseif(Session::has('fail'))
                        <div class="alert alert-danger" alert-dismissible fade show" role="alert">
                            {{Session::get('fail')}}
                        </div>
                    @endif
                </div>
                <main>
                    <div class="table-responsive py-4">
                        <table class="table table-flus" id="project">
                            <thead class="thead-light">
                                <tr>
                                    <th>Sr No</th>
                                    <th>Name</th>
                                    <th>Address</th>
                                    <th>Pin</th>
                                    <th>Date of Birth</th>
                                    <th>Mobile Number</th>
                                    <th>Todays date</th>
                                    <th>Amount</th>
                                    <th>Description</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody class="list">
                                @foreach ($feedbacks as $feedback)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $feedback->name }}</td>
                                        <td>{{ $feedback->address }}</td>
                                        <td>{{ $feedback->pin }}</td>
                                        <td>{{ $feedback->dob }}</td>
                                        <td>{{ $feedback->mobile }}</td>
                                        <td>{{ $feedback->todays_date }}</td>
                                        <td>{{ $feedback->amount }}</td>
                                        <td>{{ $feedback->description }}</th>
                                        <td>
                                            <a href="{{ route('feedback.edit',$feedback->id)}}" class="btn btn-primary">Edit</a>|
                                            <form action="{{ route('feedback.destroy', $feedback->id)}}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger" type="submit">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </main> 
            </div>
        </div>
    </div>
</div> {{-- container-fluid --}}
@endsection

@push('js')
<script>
    $('#project').dataTable();
</script>
@endpush