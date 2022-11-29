@extends('layouts.main')

@section('container')

<h1 class="display-4">
    Welcome <b>{{ auth()->user()->name }}</b>
</h1>

<form action="/logout" method="POST">
    @csrf
    <button class="btn btn-danger">Logout</button>
</form>

@endsection
