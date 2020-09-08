@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1>Resources</h1>

                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                @if (!empty($tag))
                    <p>Showing only resources with tag "{{ $tag }}".</p>
                @endif

                @if (Auth::user()->is_admin)
                    <p>
                        <a href="{{ route('resource.create') }}" class="btn btn-primary">Create New</a>
                        <a href="{{ route('resource.json') }}" class="btn btn-info">Create from JSON</a>
                    </p>
                @endif

                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title">Search</h2>
                        <form method="POST" action="{{ route('resource.search') }}">
                            @csrf
                            <div class="form-group">
                                <label for="name">Name to search for</label>
                                <input type="text" name="name" class="form-control">
                            </div>
                            <button type="submit" class="btn btn-primary">Search</button>
                        </form>
                    </div>
                </div>

                <h2>List of Resources</h2>

                <ul>
                    @foreach ($resources as $resource)
                        <li>
                            <a href="{{ route('resource.show', ['resource'=>$resource->id]) }}">{{ $resource->name }}</a>
                        </li>
                    @endforeach
                </ul>

                {{ $resources->links() }}
            </div>
        </div>
    </div>
@endsection
