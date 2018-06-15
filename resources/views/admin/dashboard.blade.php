@extends('layouts.app')

@section('content')

    <div class="col-lg-3">
        <div class="panel panel-info">
            <div class="panel-heading text-center">
                PUBLISHED POSTS
            </div>
            <div class="panel-body">
                <h1 class="text-center">
                    {{$post_count}}
                </h1>
            </div>
        </div>
    </div>

    <div class="col-lg-3">
        <div class="panel panel-danger">
            <div class="panel-heading text-center">
                TRASHED POST
            </div>
            <div class="panel-body">
                <h1 class="text-center">
                    {{$trashed_count}}      
                </h1>
            </div>
        </div>
    </div>

    <div class="col-lg-3">
        <div class="panel panel-success">
            <div class="panel-heading text-center">
                USERS
            </div>
            <div class="panel-body">
                <h1 class="text-center">
                    {{$user_count}}
                </h1>
            </div>
        </div>
    </div>

    <div class="col-lg-3">
        <div class="panel panel-info">
            <div class="panel-heading text-center">
                CATEGORY
            </div>
            <div class="panel-body">
                <h1 class="text-center">
                    {{$category_count}}
                </h1>
            </div>
        </div>
    </div>

@endsection
