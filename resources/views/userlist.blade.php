@extends('layouts.master')

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Users List</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
            <i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
    </div>

    <!-- Content Row -->
   
                <div class="container-fluid">

                    <!-- Page Heading -->
                   
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">All Users List</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Gender</th>
                                            <th>Occupation</th>
                                            <th>Income</th>
                                            <th>Family type</th>
                                            <th>Manglik</th>
                                            <th>DOB</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Name</th>
                                            <th>Gender</th>
                                            <th>Occupation</th>
                                            <th>Income</th>
                                            <th>Family type</th>
                                            <th>Manglik</th>
                                            <th>DOB</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        @foreach ($users as $user)
                                            
                                        <tr>
                                            <td>{{$user->name}}</td>
                                            <td>{{$user->gender}}</td>
                                            <td>{{$user->occupation}}</td>
                                            <td>{{$user->income}} pa.</td>
                                            <td>{{$user->family_type}}</td>
                                            <td>{{$user->manglik}}</td>
                                            <td>{{$user->dob}}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
</div>
@endsection
