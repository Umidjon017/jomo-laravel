@extends('layout.site')
@section('title')
    Home Page
@endsection

@section('content')
    @include('sections.sliders')
    @include('sections.search')
    @include('sections.cars')
    @include('sections.about')
    @include('sections.feature')
    @include('sections.statistics')
    @include('sections.clients')
    @include('sections.contact')
@endsection
