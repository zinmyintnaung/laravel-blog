@extends('layouts.app');

@section('content')

    @include('admin.includes.errors');

    <div class="panel panel-default">
        <div class="panel-heading">
            Edit blog setting
        </div>
        <div class="panel-body">
            <form action="{{ route('settings.update') }}" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="site_name">Site Name</label>
                    <input type="text" name="site_name" value="{{ $setting->site_name }}" class="form-contrl">
                </div>

                <div class="form-group">
                    <label for="contact_number">Contact</label>
                    <input type="text" name="contact_number" value="{{ $setting->contact_number }}" class="form-contrl">
                </div>

                <div class="form-group">
                    <label for="contact_email">Email</label>
                    <input type="email" name="contact_email" value="{{ $setting->contact_email }}" class="form-contrl">
                </div>

                <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" name="address" value="{{ $setting->address }}" class="form-contrl">
                </div>

                <div class="form-group">
                    <div class="text-center">
                        <button class="btn btn-success" type="submit">Update Settings</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@stop