@extends('layout')

@section('content')

    <h1>My {{ $something }} page</h1>

    <ul>

        @foreach($lists as $list)

            <li>{{ $list }}</li>

        @endforeach

    </ul>
@endsection