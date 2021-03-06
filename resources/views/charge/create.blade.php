<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Create Charge
        </h2>
    </x-slot>

    <div>
        @if (session('status'))
            <div class="alert" role="alert">
                {{ session('status') }}
            </div>
        @endif

        <form id="charge-creation-form" method="POST" action="{{ route('charge.store') }}">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" class="form-control">
            </div>
            <div class="form-group">
                <label for="identifier">Identifier</label>
                <input type="text" id="identifier" name="identifier" class="form-control">
            </div>
            <div class="form-group">
                <label for="noun">Noun</label>
                <input type="text" id="noun" name="noun" class="form-control">
            </div>
            <div class="form-group">
                <label for="noun_plural">Plural Noun</label>
                <input type="text" id="noun_plural" name="noun_plural" class="form-control">
            </div>
            <div class="form-group">
                <label for="descriptor">Descriptor</label>
                <input type="text" id="descriptor" name="descriptor" class="form-control">
            </div>
            <div class="form-group">
                <label for="single_only">Can Only Be Displayed Singly</label>
                <input type="checkbox" id="single_only" name="single_only" class="form-control">
            </div>
            <div class="form-group">
                <label for="tags">Tags</label>
                <input id="tags" name="tags" type="text" class="form-control">
            </div>
            <button type="submit" class="btn">Save</button>
        </form>
    </div>
</x-app-layout>

