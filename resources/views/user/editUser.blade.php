@extends('base')

@section('content')

    <div class="container" style="margin-left: 20%;margin-bottom:8%;">
        <h1>Edit User</h1>
        <form  method="post" action="{{ route('editsubmit',$user->id) }}">
            @csrf
            @include('user.commonForm')
        </form>
    </div>



@endsection

