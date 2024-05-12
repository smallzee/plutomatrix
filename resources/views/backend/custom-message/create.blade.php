@extends('layouts.backend.app')

@push('content')
    <form action="{{route('custom-message.store')}}" method="post">
        @csrf
    </form>
@endpush
