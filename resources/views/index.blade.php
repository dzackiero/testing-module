@extends('testing::layouts.master')

@section('content')
    <h1>Hello World</h1>

    <p>Module: {!! config('testing.name') !!}</p>
@endsection
