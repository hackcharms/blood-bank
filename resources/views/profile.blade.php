@extends('layouts.app')
@section('content')
<div class="raw">
    <div class="container">
        
        <div class="d-flex flex-wrap">
            <div class="col-5 p-2 text-center">
                    {{-- <img class="rounded-circle" src="" alt=""> --}}
                    <svg
                        class="col-6 "
                        xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 32 32" xml:space="preserve">
                        <style>.st0{fill:none;stroke:#E3342F;stroke-width:2;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10}</style>
                        <path class="st0" d="M16 3L3 10v3h26v-3zM14 13h4v10h-4zM23 13h4v10h-4zM5 13h4v10H5zM3 23h26v3H3zM1 26h30v3H1z"/>
                    </svg>
            </div>
            <div class="col-7 p-2">
                <div class="text-right px-4 p-2">
                    <a onclick="BloodBank.toggleTags(['#editBtn','#cancelBtn','#detailsForm','#details'])">
                        <span class="btn btn-info" id="editBtn">Edit</span>
                        <span class="btn btn-danger d-none" id="cancelBtn">Cancel</span>
                    </a>
                </div>
                <div id="details" id="details">
                    <h2>
                        {{$user->name}}
                    </h2>
                    <p>
                        {{$user->description}}
                    </p>
                    <h4 class="pt-4">Address : </h4>
                    <address>
                        {{$user->address}}
                    </address>
                    
                </div>
                <div id="detailsForm" class="d-none">
                    <form action="{{route('hospital.profile.update')}}" method="POST">
                        @csrf
                        <h2 class="input-group">
                            <input type="text"
                            class=" form-control" style="font-size: 2rem"
                            value="{{$user->name}}"
                            name="name"
                            >
                        </h2>
                        <p class="input-group">
                            <textarea name="description" class="col-12 form-control">{{$user->description}}</textarea>
                        </p>
                        <h4>Address : </h4>
                        <address class="input-group">
                            <textarea name="address" class="form-control">{{$user->address}}</textarea>
                        </address>
                        <p class="text-right px-4">
                            <button class="btn btn-primary" type="submit">
                                Save
                            </button>
                        </p>
                    </form>
                </div>
                <h5>Blood Group : <span class="text-danger">{{$user->blood_group}}</span></h5>  
                Email : <a href="mailto:zaa78692@gmail.com">zaa78692@gmail.com</a>
            </div>
        </div>
            <div class="card shadow mb-4">
                <div class="card-header">
                    <h3>
                        Blood Requests
                    </h3>
                </div>
            <div class="card-body">
                <div class="table-responsive">
                    <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                        <div class="row">
                            <div class="col-sm-12">
                                @if (!$BloodRequests->count())
                                <h3 class="text-center">
                                    No Data Found
                                    </h3>        
                                @else
                                    
                                <table class="table table-bordered dataTable" id="dataTable" role="grid"
                                    aria-describedby="dataTable_info" style="width: 100%;" width="100%" cellspacing="0">
                                    <thead>
                                        <tr role="row">
                                            <th class="sorting_asc" tabindex="0" aria-controls="dataTable" rowspan="1"
                                                colspan="1" style="width: 148.517px;" aria-sort="ascending"
                                                aria-label="Name: activate to sort column descending">Name</th>
                                            <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1"
                                                colspan="1" style="width: 58.517px;"
                                                aria-label="Position: activate to sort column ascending">Blood Group</th>
                                            <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1"
                                                colspan="1" style="width: 52.517px;"
                                                aria-label="Office: activate to sort column ascending">Unit</th>
                                            <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1"
                                                colspan="1" style="width: 61.517px;"
                                                aria-label="Salary: activate to sort column ascending">Request date</th>
                                            <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1"
                                                colspan="1" style="width: 93.7833px;"
                                                aria-label="Salary: activate to sort column ascending">Respond date</th>
                                            <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1"
                                                colspan="1" style="width: 93.7833px;"
                                                aria-label="Salary: activate to sort column ascending">Status</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th rowspan="1" colspan="1">Name</th>
                                            <th rowspan="1" colspan="1">Blood Group</th>
                                            <th rowspan="1" colspan="1">Unit</th>
                                            <th rowspan="1" colspan="1">Request date</th>
                                            <th rowspan="1" colspan="1">Respond date</th>
                                            <th rowspan="1" colspan="1">Staus</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        @foreach ($BloodRequests as $request)                                        
                                            <tr role="row" class="odd">
                                                <td>{{$request->requested_to}}</td>
                                                <td>{{$request->blood_group}}</td>
                                                <td>{{$request->unit}}</td>
                                                <td>{{$request->requested_at}}</td>
                                                <td>{{$request->responded_at}}</td>
                                                <td>
                                                    @if ($request->is_pending)
                                                        <span class="px-2 py-1 text-secondary">
                                                            Pending
                                                        </span>
                                                    @else
                                                        @if ($request->isAccepted)
                                                            <span class="px-2 py-1 text-success">
                                                                Accepeted
                                                            </span>
                                                        @else
                                                            <span class="px-2 py-1 text-danger">
                                                                Declined
                                                            </span>
                                                        @endif    
                                                    @endif
                                                    
                                                </td>
                                        </tr>
                                        @endforeach
    
                                    </tbody>
                                </table>
                                @endif
    
                            </div>
                        </div>
                        <div class="row">
                            {{$BloodRequests->links('vendor.pagination.bootstrap-4')}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection