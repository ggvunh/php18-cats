@extends('layouts.master')

@section('header')
  <h1>About Page</h1>
@stop

@section('content')
  <h1>Number of cats : {!! $number !!}</h1>
@stop
