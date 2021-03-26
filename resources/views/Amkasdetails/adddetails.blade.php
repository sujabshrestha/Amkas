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


@push('script')
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<script>
    $( function() {
    $( ".datepicker" ).datepicker({ dateFormat: 'yy-mm-dd' });
  } );
</script>
@endpush

