@extends('layouts.main')

@section('container')

<div class="text-center">
<table class="table table-bordered">
    <tr class="bg-secondary">
        <th class="text-center">No</th>
        <th class="text-center">Activity</th>
        <th width="240px" class="text-center">Time Created</th>
        <th width="280px" class="text-center">Action</th>
    </tr>
    <?php $i=0;?>
    @foreach ($datas as $data)
    <tr class="bg-secondary bg-opacity-50">
        <td>{{ ++$i }}</td>
        <td>{{ $data->name_activity}}</td>
        <td>{{ $data->created_at }}</td>
        {{-- <td></td> --}}
        <td>
            <form action="{{ route('destroy', $data->id) }}" method="post">
                @csrf
                <a class="btn btn-primary" href="{{ route('edit', $data->id) }}">Edit</a>
                <button class="btn btn-danger" type="submit">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
</div>

@endsection
