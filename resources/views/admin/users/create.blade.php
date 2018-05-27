@extends('layouts.app');

@section('content')

    @include('admin.includes.errors');

    <div class="panel panel-default">
        <div class="panel-heading">
            Create a new user
        </div>
        <div class="panel-body">
            <form action="{{ route('user.store') }}" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="name">User</label>
                    <input type="text" name="name" class="form-contrl">
                </div>

                <div class="form-group">
                    <label for="name">Email</label>
                    <input type="email" name="email" class="form-contrl">
                </div>
                
                <div class="form-group">
                    <div class="text-center">
                        <button class="btn btn-success" type="submit">Create User</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@stop