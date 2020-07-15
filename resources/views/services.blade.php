@extends('app')

@section('title', 'Services')

@section('content')
    <h1>Welcome to Laravel from Services</h1>

    <ul>
        @forelse($services as $service)
            <li>{{ $service->name }}</li>
        @empty
            <li>No Services Available</li>
        @endforelse
    </ul>
@endsection