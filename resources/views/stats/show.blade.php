@extends('templates.app')

@section('title', 'Stats')

@section('content')
<h2 class="display-2">Stats</h2>
@foreach ($transactions as $transaction)
  {{ $transaction->created_at }} -  {{ $transaction->quantity }}
@endforeach

@endsection
