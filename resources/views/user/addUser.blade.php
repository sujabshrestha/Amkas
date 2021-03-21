@extends('base')

@section('content')

<div class="container" style="margin-left: 20%;margin-bottom:8%;">
    <h1>Add User</h1>
    <form  method="post" action="{{ route('addusersubmit') }}">
        @csrf
        @include('user.commonForm')
    </form>
</div>




@endsection

