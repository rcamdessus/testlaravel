@extends('layouts.master')

@section('content')
    <table class="table table-hover mt-4">
    <thead>
      <tr>
        <th></th>
        <th>ID</th>
        <th>Name</th>
        <th>Url</th>
      </tr>
    </thead>
    <tbody>
      @foreach($users as $user)
      <tr>
        <td><img height="30" width="30" src="{{ $user->avatar_url }}" class="rounded-circle" ></td>
        <td>{{ $user->id }}</td>
        <td>{{ $user->login }}</td>
        <td>{{ $user->url }}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
@endsection
