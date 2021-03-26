@extends('base')

@section('content')

<div class="container" style="margin-left: 20%;margin-bottom:8%;margin-top:2%;">
    <h1 style="margin-left: 35%;font-weight:500; text-decoration: underline;"> Create Site setting</h1>
    <form  method="post" action="{{ route('sitesettingsubmit')}}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <img src="{{ asset(app\Sitesetting::returnValue('site_icon')) }}" height="200px" width="200px"  alt=""><br>
            <label for="first">Select site icon</label>
            <input type="file" class="form-control"  name="icon" id="site_icon" placeholder="Enter site icon">
            @error('site_icon')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <img src="{{ asset(app\Sitesetting::returnValue('fav_icon')) }}" height="200px" width="200px"  alt=""><br>
            <label for="first">Enter site favicon</label>
            <input type="file" class="form-control" name="favicon" id="fav_icon" placeholder="Enter site favicon">
            @error('fav_icon')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="first">Enter Description</label>
            <input type="text" class="form-control" value="{{ $description->value }}" name="description" id="description" placeholder="Enter Description">
            @error('description')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>

    </form>
</div>


@endsection


{{-- value="{{ isset($form->foreignemployment) ? $form->foreignemployment : "" }}" --}}

