@extends('layouts.master')
@section('header')
  @if (isset($breed))
    <a href="{{ url('/cats') }}"> Back to overview </a>
  @endif
  <h2> All @if (isset($breed)) {{ $breed->name }} @endif Cats
      <a href="{{ url('/cats/create') }} " class="btn btn-primary pull-right">Add New Cat</a>
  </h2>
@stop

@section('content')
  @foreach ($cats as $cat)
    <div class="">
      <a href=" {{ url('cats/') . $cat->id }}"> {{ $cat->name }} - {{ $cat->breed->name }} </a>
    </div>
  @endforeach
@stop
