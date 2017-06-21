@extends('layouts.master')

@section('header')
  <h4>Add a new cat</h4>
@stop

@section('content')
  {!! Form::open(['url' => 'cats']) !!}
    @include('partials.forms.cat')
  {!! Form::close() !!}
@stop
