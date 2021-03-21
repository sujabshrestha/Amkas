@extends('base')

@section('content')

<div class="container" style="margin-left: 20%;margin-bottom:8%;">

    <h1>All User</h1>

    <table class="table">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">Email</th>
            <th scope="col">Role</th>
            <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($allusers as $user)
            <tr data-row="{{ $loop->iteration }}">
            <th scope="row">{{ $loop->iteration }}</th>
            <td>{{ $user->firstname}}</td>
            <td>{{ $user->lastname}}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->getrole() }}</td>
            <td>
                <a href="{{ route('edituser',$user->id) }}"><i class="fas fa-edit fa-2x" style="color: royalblue"></i></a>
                <a href="{{ route('deleteuser',$user->id) }}"><i class="fas fa-trash fa-2x" style="color: red;"></i></a>
            </td>
            </tr>

        @endforeach
        </tbody>
        </table>
</div>

@endsection

