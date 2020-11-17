@extends('layouts.landing-page')

@section('title', 'Page Title')

@section('sidebar')
    @parent

    <p style="padding: 1em; color: white">master sidebar.</p>
@endsection

@section('content')
    <h1 style="padding: 1em; color: white">Testing Layout</h1>
@endsection
