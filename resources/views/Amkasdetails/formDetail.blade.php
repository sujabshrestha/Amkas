@extends('base')

@section('content')

<div class="formdetail"  style="margin-left:17%;margin-top:2%;">
    <h1>AMKAS Shelter Home Client Case Study Form</h1>

<div class="row">
    <div class="col-md-6">
        <p>Shelter case number : {{ $form->sheltercase_no }}</p>
    </div>
    <div class="col-md-6">
        <p>Form number : {{ $form->id }}</p>
    </div>
</div>
<p>Date of Departure: {{ $form->date_of_dep }}</p>
<p>Date of Arrival: {{ $form->date_of_arr }}</p>
<p>Date of Registration: {{ $form->date_of_reg }} </p>
<h1>Details of survivor</h1>
<div class="row">
    <div class="col-md-6 text-left">
        Name :- {{ $form->name }} <br>
        DOB :- {{ $form->dob }} <br>
        Passport No :- {{ $form->passportno }} <br>
        Original Address :- {{ $form->originaladdress }} <br>
        Contact Number :- {{ $form->contact_no }} <br>
        Age:- {{ $form->age }} <br>
        Maritial Status:- {{ $form->maritialstatus }} <br>
        No of Children:- {{ $form->no_of_children }} <br>

    </div>
    <div class="col-md-6 ">
       Education:- {{ $form->Education }} <br>
       Nature of Job:- {{ $form->natureofjobs }} <br>
       Foreign Employment:- {{ $form->foreignemployment }} <br>
       Transit Country:- {{ $form->transitcountry }} <br>
       Duration of Stay:- {{ $form->durationofstay }} <br>
       Document:- {{ $form->document }} <br>
       Parential Name:- {{ $form->parentialname }} <br>

    </div>
</div>

@endsection

