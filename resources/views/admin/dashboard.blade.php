@extends('admin.layouts.app_admin')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="jumbotron text-center">
                    <p><span class="label label-primary">Categories 1</span></p>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="jumbotron text-center">
                    <p><span class="label label-primary">Posts 1</span></p>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="jumbotron text-center">
                    <p><span class="label label-primary">Views 1</span></p>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="jumbotron text-center">
                    <p><span class="label label-primary">Views Today 1</span></p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6">
                <a class="btn btn-block btn-default" href="#">Create category</a>
                <a href="#" class="list-group-item">
                    <h4 class="list-group-item-heading">Categories</h4>
                    <p class="list-group-item-text">Category 1</p>
                </a>
            </div>
            <div class="col-sm-6">
                <a class="btn btn-block btn-default" href="#">Create Post</a>
                <a href="#" class="list-group-item">
                    <h4 class="list-group-item-heading">Warcraft</h4>
                    <p class="list-group-item-text">Category</p>
                </a>
            </div>
        </div>
    </div>

@endsection