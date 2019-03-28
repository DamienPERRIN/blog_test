@extends('welcome')

@section('content')
<div class="card">
  <div class="card-header">
    Add User
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
      <form method="post" action="{{ route('users.store') }}">
          <div class="form-group">
              @csrf
              <label for="fname">Firstname :</label>
              <input type="text" class="form-control" name="firstName"/>
          </div>
          <div class="form-group">
              <label for="lname">Lastname :</label>
              <input type="text" class="form-control" name="lastName"/>
          </div>
          <div class="form-group">
              <label for="message">Description :</label>
              <input type="text" class="form-control" name="description"/>
          </div>
          <button type="submit" class="btn btn-primary">Create User</button>
          <a class="btn btn-default btn-close" href="{{ route('users.index') }}">Cancel</a>
      </form>
  </div>
</div>
@endsection
