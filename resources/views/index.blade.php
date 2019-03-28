@extends('welcome')

@section('content')
<div>
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}
    </div><br />
  @endif
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>FirstName</td>
          <td>LastName</td>
          <td>Description</td>
          <td class="text-center">Actions</td>
          <td><a href="{{ route('users.create') }}" class="btn btn-success">New</a></td>
        </tr>
    </thead>
    <tbody>
        @foreach($users as $user)
        <tr>
            <td><a href="{{ route('users.show', $user->id) }}">{{$user->id}}</a></td>
            <td>{{$user->firstName}}</td>
            <td>{{$user->lastName}}</td>
            <td>{{$user->description}}</td>
            <td><a href="{{ route('users.edit', $user->id) }}" class="btn btn-primary">Edit</a></td>
            <td>
                <form action="{{ route('users.destroy', $user->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
@endsection
