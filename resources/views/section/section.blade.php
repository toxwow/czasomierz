@extends('layouts.app-nc')
@push('styles')
    <link href="{{ asset('css/section.css') }}"  rel="stylesheet">
@endpush
@section('content')

    <p>{{$section}}</p>
    {{--{{$test}}--}}

@endsection



