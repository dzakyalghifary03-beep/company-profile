@extends('layouts.app')

@section('title', 'Home')

@section('content')

@include('partials.home.hero')

@include('partials.home.about')

@include('partials.home.services')

@include('partials.home.why')

@include('partials.home.projects')

@include('partials.home.statistics')

@include('partials.home.clients')

@include('partials.home.cta')

@include('partials.home.contact')

@endsection