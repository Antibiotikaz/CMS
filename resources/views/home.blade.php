@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body log-in">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    You are logged in!
                </div>

                <div class="card-body">
                  <h1>Your blogs</h1>

                  <ul class="list-group">
                  @forelse ($blogs->sortByDesc('created_at') as $blog)

                      <li class="list-group-item"><a href="/blogs/{{$blog->id}}">{{$blog->title}}</a></li>
                      <small>{{$blog->created_at}}</small>

                  @empty
                    <h1>You have no blogs</h1>
                  @endforelse
                    </ul>

                </div>

            </div>
              <a href="/blogs/create" class="btn btn-dark">Make new blog</a>
        </div>

            {{-- CURRENCY EXCHANGE API --}}

          @include('currency')

    </div>
</div>
@endsection
