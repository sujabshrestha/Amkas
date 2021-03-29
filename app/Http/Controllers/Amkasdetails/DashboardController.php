<?php

namespace App\Http\Controllers\Amkasdetails;

use App\AmkasForm;
use App\AmkasMeta;
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
        $amkas = AmkasForm::create([
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



        return redirect()->route('addMetas',$amkas->id)->with('success','product added successfully!!!');
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
        $form = AmkasForm::findOrFail($id);
        if($form->amkasmeta){
            foreach($form->amkasmeta as $meta){
                $meta->delete();
            }
        }
        $form->delete();
        return redirect()->back()->with('success','deleted successfully!!!');
    }


    public function addMetas($id){
        $amkasform = AmkasForm::findOrFail($id);
        $formmeta = AmkasMeta::where('amkas_form_id',$id)->pluck('value','key')->toArray();
        // dd($formmeta);
        return view('Amkasdetails.addMetas',compact('amkasform','formmeta'));
    }



    public function metaSubmit(Request $request,$id){


            // dd($request->medium_broker);
            $inputs = $request->only(
                ######background Submit
            'maternal_family','bread_winner_1','family_occupation_1','family_married_to','bread_winner_2',
            'family_occupation_2','job_for_foreignemployment','reason_for_foreignemployment','choosed_country',
            'sur_for_foreignemployment',
                ##########migrationprocess
            'medium_broker','amount_paid','activities_done','dis_with_family',
            'know_about_fm','pre_depart_orientation','language_training','skill_training','knowledge_about_owndocx',
            'problem_at_origin','problem_at_transit','problem_at_destination','job_desc','salary_promised',
            'salary_recieved','timetaken_reach_destination','medium_of_sendingmoney','facilities','working_hr','day_off',
            'medical_checkups','labour_identity','working_visa_permit','wassurvivor_incontactfamily_andhow',
            'howdid_survivorincontact_familyandhowoften','experience_problems_destination','process_of_returning',
            'howsurvivor_felt_landinghomecountry','know_about_amkashow','amkas_meet_her','physical_psychological_condition',
                ##########servicesby shelter home
            'transportation_service','shelter_support','medical_support','counseling_support',
            'paralegal_support','services_skill_training','referral_to_org','date_of_referral','name_of_org','address','contact_no',
            'otherservices_amkas','change_of_survivor','period_of_stay','where_did_survivor_return','survivor_opinion'
            ,'opinion_toward_goingabroad','survivor_planning','how_is_survivor','case_study_name','case_study_designation'



        );
            foreach($inputs as $key => $input){
                AmkasMeta::updateOrCreate([
                    'key'=>$key,
                    'amkas_form_id' => $id
                ],[
                        'value' => $input,
                    ]);
            }

            if($request->referral_to_org == '0'){


                $dors = AmkasMeta::where('amkas_form_id',$id)
                ->whereIn('key', ['date_of_referral','name_of_org','address','contact_no'])->get();
                // dd($dors);
               foreach($dors as $dor){
                //    dd($dor);
                $dor->value = '';
                $dor->update();
               }
            }

        return redirect()->route('allforms')->with('success','Amkas metas created successfully');


    }

    public function migrationprocess(Request $request){
        $amkasid = $request->id;
        $inputs = $request->only('before_departure','medium_broker','amount_paid','activities_done','dis_with_family',
        'know_about_fm','pre_depart_orientation','language_training','skill_training','knowledge_about_owndocx',
        'promised_work','problem_at_origin','problem_at_transit','problem_at_destination','job_desc','salary_promised',
        'salary_recieved','timetaken_reach_destination','mdeium_of_sendingmoney','facilities','working_hr','day_off',
        'medical_checkups','labour_identity','working_visa_permit','wassurvivor_incontactfamily_andhow',
        'howdid_survivorincontact_familyandhowoften','experience_problems_destination','process_of_returning',
        'howsurvivor_felt_landinghomecountry','know_about_amkashow','amkas_meet_her','physical_psychological_condition');
        foreach($inputs as $key => $input){
            AmkasMeta::updateOrCreate([
                'key'=>$key,
                'amkas_form_id' => $amkasid
            ],[
                    'value' => $input,
                ]);
        }
        dd('done');


    }


    public function sevicesshelterhome(Request $request){
        $amkasid = $request->id;
        $inputs = $request->only('services','transportation_service','shelter_support','medical_support','counseling_support',
        'paralegal_support','services_skill_training','referral_to_org','date_of_referral','name_of_org','address','contact_no',
        'otherservices_amkas','change_of_survivor','period-of-stay','where_did_survivor_return','survivor_opinion'
        ,'opinion_toward_goingabroad','survivor_planning','how_is_survivor','case_study_name','case_study_designation');
        foreach($inputs as $key => $input){
            AmkasMeta::updateOrCreate([
                'key'=>$key,
                'amkas_form_id' => $amkasid
            ],[
                    'value' => $input,
                ]);
        }
        dd('done');
    }




}
