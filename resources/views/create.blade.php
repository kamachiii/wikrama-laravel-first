@extends('layouts.main')

@section('container')

<form method="POST" action="{{ route('storeActivity') }}" class="card shadow">
    <div class="card-header bg-dark text-light text-center">
        <h1 class="create-h1">Form Input</h1>
    </div>
    <div class="card-body">
        {{-- Activity --}}
        <div class="form-group">
            <strong>Activity :</strong>
            <input id="name_activity" name="name_activity" type="text" class="form-control mb-3" autocomplete="off" autofocus required>
        </div>

        {{-- Submit Button --}}
       <button type="submit" class="btn btn-primary">Submit</button>
    </div>
    @csrf
</form>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js"></script>
    <script type="text/javascript">
        var route = "{{ route('search') }}";

        $('#name_activity').typeahead({
            source: function (query, process) {
                return $.get(route, {
                    query: query
                }, function (data) {
                    return process(data);
                });
            }
        });
    </script>

@endsection
