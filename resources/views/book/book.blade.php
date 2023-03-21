@extends('layouts.app')

@section('content')

<div class="p-4 page-body text-dark">
  <div style="font-size: 180%;color: rgb(0, 0, 0);">
    <i class="fa fa-book" aria-hidden="true" style="color: rgb(0, 0, 0);"></i>
    Book
  </div>
  <hr style="background-color: black !important;">
  <div style="padding:5px;"></div>
  <div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
      @livewire('book')
    </div>
    <div class="col-md-2"></div>
  </div>
  <!-- Small card component -->
</div>


@endsection
