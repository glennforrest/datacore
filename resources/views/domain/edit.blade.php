@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1>Edit Domain</h1>

                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                <form id="domain-edit-form" method="POST" action="{{ route('domain.update', ['domain' => $domain]) }}">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" id="name" name="name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="appearance_traits">Appearance Traits</label>
                        <input type="text" id="appearance_traits" name="appearance_traits" class="form-control" value="{{ $domain->appearance_traits }}">
                    </div>
                    <div class="form-group">
                        <label for="personality_traits">Personality Traits</label>
                        <input type="text" id="personality_traits" name="personality_traits" class="form-control" value="{{ $domain->personality_traits }}">
                    </div>
                    <div class="form-group">
                        <label for="holy_items">Holy Items</label>
                        <input type="text" id="holy_items" name="holy_items" class="form-control" value="{{ $domain->holy_items }}">
                    </div>
                    <div class="form-group">
                        <label for="holy_symbols">Holy Symbols</label>
                        <input type="text" id="holy_symbols" name="holy_symbols" class="form-control" value="{{ $domain->holy_symbols }}">
                    </div>
                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>
        </div>
    </div>
@endsection