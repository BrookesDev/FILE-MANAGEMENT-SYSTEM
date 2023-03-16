@extends('layouts.master')

@section('content')
    <div class="content container-fluid">
        <div class="row">

            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h3>Create New Role</h3>
                </div>
                <div class="pull-right text-end mb-3">
                    <a class="btn btn-primary" href="{{ route('roles.index') }}"> Back</a>
                </div>
            </div>
        </div>
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        {!! Form::open(['route' => 'roles.store', 'method' => 'POST']) !!}
        <div class="row">

            <div class="col-sm-12">
                <div class="card card-table">
                    {{-- <div class="card-header">
                <h5 class="card-title">List of Users</h5>
            </div> --}}
                    <div class="card-body">
                        <div class="table-responsive">

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group mt-3 ml-5">
                                    <strong>Name:</strong>
                                    {!! Form::text('name', null, ['placeholder' => 'Name', 'class' => 'form-control']) !!}
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Permission:</strong>
                                    <br />
                                    @foreach ($permission as $value)
                                        <label>{{ Form::checkbox('permission[]', $value->id, false, ['class' => 'name']) }}
                                            {{ $value->name }}</label>
                                        <br />
                                    @endforeach
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 text-center mb-3">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
                @endsection
