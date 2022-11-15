@extends('layouts.main')

@section('container')

{{-- Notif Berhasil --}}
@if ($message = Session::get('success'))
    <p class="alert alert-success">{{ $message }}</p>
@endif

{{-- Notif Update --}}
@if ($message = Session::get('update'))
    <p class="alert alert-primary">{{ $message }}</p>
@endif

@endsection
