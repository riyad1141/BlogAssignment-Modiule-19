@extends('app')

@section('content')

    @include('components.hero');
    @include('components.Grid-Trending');
    @include('components.Culture-Category');
    @include('components.Business-Category');
    @include('components.Lifestyle');

@endsection
