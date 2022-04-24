@extends('home.layout')

@section('title')
{{ $property->title }}
@endsection

@section('content')
<div>
    <home-property-detail :property="{{ $property }}"></home-property-detail>
</div>
@endsection
