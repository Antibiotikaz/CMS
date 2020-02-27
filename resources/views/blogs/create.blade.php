@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create Blog</div>

                  <div class="card-body">
                  <form class="" action="/blogs" method="post" enctype="multipart/form-data">

                    @csrf

                    <div class="form-group">
                      <label for="title">Title</label>
                      <input name="title" type="text" class="form-control" id="title" aria-describedby="titleHelp" placeholder="Enter blog title">
                      <small id="titleHelp" class="form-text text-muted">Enter your blog title</small>
                      @error ('title')
                        <small class="text-danger">{{ $message}}</small>
                      @enderror
                    </div>

                    <div class="form-group">
                      <label for="content">Content</label>
                  
                      <textarea rows="8" cols="80" name="content" type="text" class="form-control" id="content" aria-describedby="contentHelp" placeholder="Enter blog's content"></textarea>
                      <small id="contentHelp" class="form-text text-muted">Enter your blog's content</small>
                      @error ('content')
                        <small class="text-danger">{{ $message}}</small>
                      @enderror
                    </div>

                    <div class="form-group d-flex flex-column">
                      <label for="image">Blog Image</label>
                      <input type="file" name="image" value="">
                      @error ('image')
                        <small class="text-danger">{{ $message}}</small>
                      @enderror
                    </div>


                      <button type="submit" class="btn btn-primary">Create Blog</button>
                  </form>
                  </div>
        </div>
    </div>
</div>
@endsection
