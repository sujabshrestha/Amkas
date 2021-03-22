@extends('base')

@section('content')

<div class="container" style="margin-left:18%;margin-top:2%;">
    <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">SN</th>
            <th scope="col">Shelter Case Number</th>
            <th scope="col">Name</th>
            <th scope="col">Age</th>
            <th scope="col">Maritial Status</th>
            <th scope="col">No of children</th>
            <th scope="col">Passport Number</th>
            <th scope="col">Contact Number</th>
            <th scope="col">Action</th>

          </tr>
        </thead>
        <tbody>
            @foreach ($allforms as $detail)
          <tr data-row="{{ $loop->iteration }}" class="text-center">
            <th>{{ $loop->iteration }}</th>
            <td>{{ $detail->sheltercase_no }}</td>
            <td>{{ $detail->name }}</td>
            <td>{{ $detail->age }}</td>
            <td>{{ $detail->maritialstatus }}</td>
            <td>{{ $detail->no_of_children }}</td>
            <td>{{ $detail->passportno }}</td>
            <td>{{ $detail->contact_no }}</td>
            <td>
                <a href="{{ route('formdetail',$detail->id) }}"><i class="fas fa-eye fa-2x" style="color: green;"></i></a>
                <a href="{{ route('formedit',$detail->id) }}"><i class="fas fa-edit fa-2x"></i></a>
                <a href="{{ route('deleteform',$detail->id) }}"><i class="fas fa-trash fa-2x" style="color: red;"></i></a>
            </td>
          </tr>
          @endforeach

        </tbody>
      </table>

</div>



@endsection

