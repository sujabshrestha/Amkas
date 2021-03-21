<?php

namespace App\Http\Controllers;
use Illuminate\support\Facades\Auth;
use Illuminate\Http\Request;
use App\User;

class AdminController extends Controller
{
    public function adminhome(){
        return view('user.adminHome');
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
