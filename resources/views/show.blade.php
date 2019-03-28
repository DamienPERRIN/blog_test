@extends('welcome')

@section('content')
<div class="card">
  <div class="card-header">
    User n°{{$user->id}}
  </div>
  <div class="card-body">
      <form method="get" action="">
          <div class="form-group">
              @csrf
              <label for="fname">Firstname :</label>
              <input type="text" class="form-control" name="firstName" value="{{$user->firstName}}" disabled/>
          </div>
          <div class="form-group">
              <label for="lname">Lastname :</label>
              <input type="text" class="form-control" name="lastName" value="{{$user->lastName}}" disabled/>
          </div>
          <div class="form-group">
              <label for="message">Description :</label>
              <input type="text" class="form-control" name="description" value="{{$user->description}}" disabled/>
          </div>
          <a class="btn btn-default btn-close" href="{{ route('users.index') }}">Cancel</a>
      </form>
  </div>
</div>
@endsection
