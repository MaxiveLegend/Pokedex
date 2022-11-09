@extends('layout')
@section('title', 'Pokemon - ' . $name)

@section('content')
    <pokemon name="{{$name}}"/>
@endsection
