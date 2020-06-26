@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1>Patterns</h1>

                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
                <p><a href="{{ route('pattern.create') }}" class="btn btn-primary">Create New</a></p>

                <div class="card">
                    <div class="card-body">
                        <p>@{{ message }}</p>

                        <h2 class="card-title">Process JSON Data</h2>
                        <p>The JSON must have a parent entity "pattern" that contains an array of properly-formatted pattern.</p>
                        <div class="form-group">
                            <label for="pattern-json">JSON</label>
                            <textarea class="form-control" id="pattern-json" rows="12" v-model="patternJson"></textarea>
                        </div>
                        <div class="btn-group">
                            <button class="btn btn-danger" id="pattern-from-json" v-on:click="createPatternsFromJson" :disabled="!patternJson">Process</button>
                        </div>
                    </div>
                </div>

                <h2>List of Patterns</h2>
                <ul>
                    @foreach ($patterns as $pattern)
                        <li>
                            <a href="{{ route('pattern.show', ['pattern' => $pattern->id]) }}">{{ $pattern->name }}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection
