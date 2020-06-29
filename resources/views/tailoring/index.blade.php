@extends('layouts.app')

@section('content')
<div class="container-fluid" >
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header border-0">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h3 class="mb-0">{{ __('Tailorings') }}</h3>
                        </div>
                        <div class="col-4 text-right">
                            <a href="{{ route('tailoring.create')}}" class="btn btn-sm btn-primary">{{ __('Add Tailoring') }}</a>
                        </div>
                    </div>
                </div> 
                
                <div class="col-12">
                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @elseif (session('error'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{ session('error') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                </div>
                <main>
                    <div class="table-responsive py-4">
                        <table class="table table-flus" id="project">
                            <thead class="thead-light">
                                <tr>
                                    <th>Sr No</th>
                                    <th >Project Name</th>
                                    <th >Location</th>
                                    <th >start date</th>
                                    <th >Completion Date</th>
                                    {{-- @if (\Auth::user()->isSuperAdmin() || \Auth::user()->isAdminHeadOffice())
                                        <th >Action</th>
                                    @else

                                    @endif --}}
                                </tr>
                            </thead>
                            <tbody class="list">                        
                                
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