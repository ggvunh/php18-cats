@extends('layouts.master')

@section('header')
  <h4>Edit a new cat</h4>
@stop

@section('content')
  {!! Form::model($cat, [ 'url' => 'cats/' . $cat->id, 'method' =>  'put' ]) !!}
    @include('partials.forms.cat')
  {!! Form::close() !!}
@stop
