<?php

namespace App\Http\Controllers\Admin;

use App\AmkasForm;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\support\Facades\Auth;
use App\User;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;

class AdminController extends Controller
{
    public function adminhome(){
        $amkasForms = AmkasForm::all();
        
        $today = Carbon::today();
        $past   = $today->subMonths(6);
        // dd($past->month);
        ##########monthly arrival
        $l = AmkasForm::latest()->first();

        $month = [
            $a = count(AmkasForm::where('date_of_arr','<=', Carbon::now())->where('date_of_arr','>', $past)->get()),

        ];
        // $march = AmkasForm::whereMonth('date_of_arr','=',date('03'))->get();
        // $june = AmkasForm::whereMonth('date_of_arr','=',date('06'))->get();
        // $l = AmkasForm::whereMonth('date_of_arr','=',date('03'))->get();
        // dd($month[0]);
        // $lastdate = $l->date_of_arr;
        // dd($lastdate);

        $context = new Collection();
        $context->ageData = $this->ageChartData($amkasForms);
        $context->maritialData = $this->maritialChartData($amkasForms);

        return view('user.adminHome',compact('context','month'));
    }

    /*age chart*/
    private function ageChartData($forms){
        $below20 = count(AmkasForm::where('age','<=','20')->get());
        $twentyto30 = count(AmkasForm::where('age','>','20')->where('age','<','30')->get());
        $thirtto40 = count(AmkasForm::where('age','>','30')->where('age','<','40')->get());
        $fourtyto50 = count(AmkasForm::where('age','>','40')->where('age','<','50')->get());
        $above50 = count(AmkasForm::where('age','>','50')->get());
        return [
            'below20' => $below20,
            'twenyto30' => $twentyto30,
            'thirtto40'=> $thirtto40,
            'fourtyto50'=> $fourtyto50,
            'above50'=> $above50,
        ];
    }
    //maritial chart
    private function maritialChartData($forms){
       ######piechart for maritial status
       $single = count(AmkasForm::where('maritialstatus','single')->get());
       $married = count(AmkasForm::where('maritialstatus','married')->get());
        return [
            'single' => $single,
            'married' => $married,
        ];
    }





    public function adduser(){
        return view('user.addUser');
    }

    public function addusersubmit(Request $request){
        $request->validate([
            'firstName'=> 'required|max:255|min:4',
            'lastName'=> 'required|max:255|min:4',
            'role'=> 'required',
            'email'=>'unique:users,email,required',
            'password'=>'required|min:8',
            'password1' => 'required_with:password|same:password|min:6'
        ]);

        // $user=User::create(request(['firstname','lastname','email' ,'role','password']));

        User::create([
            'firstname' => $request->firstName,
            'lastname' => $request->lastName,
            'email' => $request->email,
            'role' => $request->role,
            'password' => bcrypt($request->password)

        ]
        );

        return redirect()->back()->with('success','user created');
    }



    public function alluser(){
        $allusers = User::all();
        return view('user.allUser',compact('allusers'));
    }


    public function deleteuser($id){
        $user  = User::where('id',$id)->first();
        $user->delete();
        return redirect()->back()->with('error','user deleted successfully');
    }

    public function edituser($id){
        $user = User::findorfail($id);
        return view('user.editUser',compact('user'));
    }

    public function changepassword(){
        return view('user.changePassword');
    }

    public function changepasswordsubmit(Request $request){
        $request->validate([
            'oldpassword' => 'required',
            'password'=>'required|min:8',
            'password1' => 'required_with:password|same:password|min:6'
        ]);
        if(Auth::check()){
            $user = Auth::user();
        }
        if($request->oldpassword = $user->password){
            $u = User::where('id',Auth::user()->id)->first();
            $u->password = $request->password;
            $u->update();
            return redirect()->route('admin')->with('success','Password successfully changed!!!');
        }else{
            return redirect()->back()->with('error','OLdpassword is incorrect!!!');
        }

        return view('user.changePassword');
    }
}
