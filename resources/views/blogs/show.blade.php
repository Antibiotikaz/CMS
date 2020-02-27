@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
              <div class="card-header">{{$blog->title}} </div>
                <strong class="ml-2">Author: {{$blog->user->name}}</strong>
                <small class="ml-2">Date: {{$blog->created_at}}</small>
                <div class="card-body">
                    <img style="width:300px;" src="/storage/uploads/{{$blog->image}}" alt="">
                    {{$blog->content}}
                </div>
                    <a href="/home" class="btn btn-dark">Back to Dashboard</a>
            </div>
    </div>
</div>
@endsection
