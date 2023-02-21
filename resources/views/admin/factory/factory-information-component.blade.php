@extends('layouts.admin')
@section('content')
    <div class="container-fluid">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <div class="d-flex justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Factory Information</h6>
                    @if (Session::has('message'))
                        <div  class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ Session::get('message') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Manufacturing unit</th>
                                <th>Awards</th>
                                <th>Employees</th>
                                <th>Total Factories</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                                <tr>
                                    <td>{{$factory->unit}}</td>
                                    <td>{{$factory->awrads}}</td>
                                    <td>{{$factory->employees}}</td>
                                    <td>{{$factory->factories}}</td>
                                    <td>
                                        <a href="{{route('factory.edit',$factory->id)}}" class="btn btn-success btn-circle mb-2"><i class="fas fa-edit"></i></a>
                                    </td>
                                </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

