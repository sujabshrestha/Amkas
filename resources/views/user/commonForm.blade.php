<div class="form-group">
    <label for="first">Enter firstname</label>
    <input type="text" class="form-control" name="firstName" value="{{ isset($user->firstname) ? $user->firstname : "" }}" id="first" placeholder="Enter firstname">

    @error('firstName')
        <div class="text-danger">{{ $message }}</div>
    @enderror
</div>
<div class="form-group">
    <label for="first">Enter lastname</label>
    <input type="text" class="form-control" name="lastName" value="{{ isset($user->lastname) ? $user->lastname : "" }}" id="last" placeholder="Enter lastname">
    @error('lastName')
    <div class="text-danger">{{ $message }}</div>
    @enderror
</div>
<div class="form-group">
  <label for="exampleInputEmail1">Email address</label>
  <input type="email" class="form-control" name="email" value="{{ isset($user->email) ? $user->email : "" }}"  @if(isset($user) && $user->role == 'admin') disabled @endif id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    @error('email')
    <div class="text-danger">{{ $message }}</div>
    @enderror
  <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
</div>
<div class="form-group">
    <label for="role">Select role</label>
    <select class="form-control" name="role" id="role">
        <option value="">Select Role</option>
        <option value="admin" @if(isset($user) && $user->role == 'admin') selected @endif>Admin</option>
        <option @if(isset($user) && $user->role == 'user') selected @endif>User</option>
      </select>
</div>
@if(!isset($user))
<div class="form-group">
  <label for="exampleInputPassword">Password</label>
  <input type="password" name="password" class="form-control" id="password" placeholder="Password">
  @error('password')
  <div class="text-danger">{{ $message }}</div>
  @enderror
</div>
<div class="form-group">
    <label for="exampleInputPassword1">Password confirmation</label>
    <input type="password" name="password1" class="form-control" id="password1" placeholder="Password1">
</div>
@endif
<button type="submit" class="btn btn-primary">Submit</button>
