@extends('base')

@section('content')

<div class="container" style="margin-left: 20%;margin-bottom:8%;">
    <h1>Add User</h1>
    <form  method="post" action="{{ route('changepasswordsubmit') }}">
        @csrf
        <div class="form-group">
            <label for="exampleInputPassword">Old Password</label>
            <input type="password" name="oldpassword" class="form-control" id="oldpassword" placeholder="Password">
            @error('oldpassword')
            <div class="text-danger">{{ $message }}</div>
            @enderror
          </div>
          <div class="form-group">
              <label for="exampleInputPassword1">New password</label>
              <input type="password" name="password" class="form-control" id="password" placeholder="Password1">
              @error('password')
            <div class="text-danger">{{ $message }}</div>
            @enderror
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Confirm password</label>
            <input type="password" name="password1" class="form-control" id="password1" placeholder="Password1">
            @error('password1')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
          <button type="submit" class="btn btn-success">Change Password</button>
    </form>
</div>




@endsection

