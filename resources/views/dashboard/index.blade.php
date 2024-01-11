@extends('dashboard.layout')

@section('section1')
    @include('dashboard.partials.start')
@endsection

@section('section2')
    @include('dashboard.partials.work')
@endsection

@section('section3')
    @include('dashboard.partials.rig')
@endsection

@section('section4')
    @include('dashboard.partials.about')
@endsection

{{-- https://picsum.photos/200/300 --}}
