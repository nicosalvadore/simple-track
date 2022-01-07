@extends('templates.app')

@section('title', 'Items')

@section('content')
<h2 class="display-2">Dashboard - {{ $owner }}</h2>
<p><a class="btn btn-primary" href="/{{ $owner }}/items/create" role="button">New item</a></p>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">name</th>
      <th scope="col">total used</th>
      <th scope="col">actions</th>
    </tr>
  </thead>
  <tbody>
      @foreach ($items as $item)
      <tr>
          <th scope="row">{{ $loop->iteration }}</th>
          <td>{{ $item['item']->name }}</td>
          <td>{{ $item['sum'] }} {{ $item['item']->unit }}</td>
          <td>
              <form action="/{{ $item['item']->owner }}/transactions" method="post">
                  @csrf
                  <input type="number" name="quantity" value="{{ $item['item']->default_quantity }}"> {{ $item['item']->unit }}
                  <input type="hidden" name="item_id" value="{{ $item['item']->id }}">
                  <input class="btn btn-success" type="submit" value="add" />
              </form>
          </td>
      </tr>
      @endforeach
  </tbody>
</table>

@endsection
