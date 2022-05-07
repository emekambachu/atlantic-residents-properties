@extends('home.layout')

@section('title')
{{ $property->title }}
@endsection

@section('top-assets')
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <style>
        .center-cropped {
            object-fit: none; /* Do not scale the image */
            object-position: center; /* Center the image within the element */
            width: 700px;
            height: 400px;
        }
    </style>
@endsection

@section('content')
<div>
    <home-property-detail :property="{{ $property }}"></home-property-detail>
</div>
@endsection

@section('bottom-assets')
    <script type="text/javascript">
        $(document).ready(function(){
            $('.your-class').slick({
                dots: true,
                infinite: true,
                speed: 300,
                slidesToShow: 1,
                centerMode: true,
                variableWidth: true
            });
        });
    </script>
@endsection
