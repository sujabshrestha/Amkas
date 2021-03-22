<?php

namespace App\Http\Controllers\Amkasdetails;

use App\AmkasForm;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\AmkasPostRequest;
use Illuminate\Http\Response;

class DashboardController extends Controller
{
    public function adddetails(){
        return view('Amkasdetails.adddetails');
    }

    public function createformsubmit(AmkasPostRequest $request){

        $request->validated();

        AmkasForm::create([
            'sheltercase_no' => $request->shelterCase,
            'date_of_arr' =>  $request->date_of_arr,
            'date_of_reg'  =>  $request->date_of_reg,
            'date_of_dep'  =>  $request->date_of_dep,
            'name' => $request->name,
            'dob' => $request->date_of_birth,
            'passportno' => $request->passportno,
            'originaladdress' => $request->original_add,
            'contact_no' => $request->contact_no,
            'age'  => $request->age,
            'maritialstatus' => $request->maritialstatus,
            'no_of_children' => $request->no_of_child,
            'Education' =>  $request->education,
            'foreignemployment' =>  $request->forign_emp,
            'transitcountry'=> $request->transitCountry,
            'durationofstay' => $request->duration_of_stay,
            'document' => $request->docx,
            'parentialname' => $request->parent,
            'natureofjobs' => $request->natureofjob,
        ]);



        return redirect()->back()->with('success','Details Added Successfully!!!');
    }




    public function allforms(){
        $allforms = AmkasForm::all();
        return view('Amkasdetails.allForms',compact('allforms'));
    }


    public function formdetail($id){
        $form = AmkasForm::findorfail($id);
        return view('Amkasdetails.formDetail',compact('form'));
    }

    public function formedit($id){
        $form = AmkasForm::findorfail($id);
        return view('Amkasdetails.editForm',compact('form'));
    }



    public function editformsubmit(Request $request,$id){
       $form = AmkasForm::findorfail($id);
       $form->sheltercase_no = $request->shelterCase;
       $form->date_of_arr = $request->date_of_arr;
       $form->date_of_reg = $request->date_of_reg;
       $form->date_of_dep = $request->date_of_dep;
       $form->name = $request->name;
       $form->dob = $request->date_of_birth;
       $form->passportno = $request->passportno;
       $form->originaladdress = $request->original_add;
       $form->contact_no = $request->contact_no;
       $form->age = $request->age;
       $form->maritialstatus = $request->maritialstatus;
       $form->no_of_children = $request->no_of_child;
       $form->Education = $request->education;
       $form->foreignemployment = $request->forign_emp;
       $form->transitcountry = $request->transitCountry;
       $form->durationofstay = $request->duration_of_stay;
       $form->document = $request->docx;
       $form->parentialname = $request->parent;
       $form->natureofjobs = $request->natureofjob;
       $form->update();
       return redirect()->back()->with('success','edited successfully!!!!');
    }

    public function deleteform($id){
        $form = AmkasForm::findorfail($id);
        $form->delete();
        return redirect()->back()->with('success','deleted successfully!!!');
    }







}
