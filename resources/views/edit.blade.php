@extends('welcome')

@section('content')
<div class="card">
  <div class="card-header">
    Edit user
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('users.update', $user->id) }}">
          <div class="form-group">
              @csrf
              @method('PATCH')
              <label for="fname">Firstname :</label>
              <input type="text" class="form-control" name="firstName" value="{{$user->firstName}}"/>
          </div>
          <div class="form-group">
              <label for="lname">Lastname :</label>
              <input type="text" class="form-control" name="lastName" value="{{$user->lastName}}"/>
          </div>
          <div class="form-group">
              <label for="message">Description :</label>
              <input type="text" class="form-control" name="description" value="{{$user->description}}"/>
          </div>
          <button type="submit" class="btn btn-primary">Update Book</button>
          <a class="btn btn-default btn-close" href="{{ route('users.index') }}">Cancel</a>
      </form>
  </div>
</div>
@endsection
