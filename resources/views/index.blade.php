@extends('layouts.master')

@section('title','Home')

@section('content')
    <h1>Home</h1>
    <p>This is my body content.</p>
@endsection

@extends('layouts.master')
@section('title','Hello')
@section('content')
    <h1>This is{{$name}}'s home.</h1>
