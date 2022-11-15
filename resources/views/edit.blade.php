@extends('layouts.main')

@section('container')

<form method="GET" action="{{ route('update', $datas->id) }}" class="card shadow">
    <div class="card-header bg-dark text-light text-center">
        <h1 class="create-h1">Form Edit</h1>
    </div>
    <div class="card-body">
        {{-- Activity --}}
        <div class="form-group">
            <strong>Activity :</strong>
            <input value="{{ $datas->name_activity }}" id="name_activity" name="name_activity" type="text" class="form-control mb-3" autocomplete="off" autofocus required>
        </div>

        {{-- Submit Button --}}
       <button type="submit" class="btn btn-primary">Submit</button>
    </div>
    @csrf
</form>
@endsection
