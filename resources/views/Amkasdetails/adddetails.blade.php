@extends('base')

@section('content')


<div class="container" style="margin-left: 20%;margin-bottom:8%;margin-top:2%;">
    <h1 style="margin-left: 35%;font-weight:500; text-decoration: underline;">Amkas Form </h1>
    <form  method="post" action="{{ route('createformsubmit') }}">
        @csrf
        @include('Amkasdetails.commonForm')

        <button type="submit" class="btn btn-primary">Submit</button>

    </form>
</div>

@endsection

