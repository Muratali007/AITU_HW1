<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class MainController extends Controller
{
    function login(){
        return view('auth.login');
    }
    function upload(){
        $data = ['LoggedUserInfo'=>Admin::where('id','=',session('LoggedUser'))->first()];
        return view('upload',$data);
    }
    function javas(){
        $data = ['LoggedUserInfo'=>Admin::where('id','=',session('LoggedUser'))->first()];
        return view('courses.java',$data);
    }
    function ln(){
        $data = ['LoggedUserInfo'=>Admin::where('id','=',session('LoggedUser'))->first()];
        return view('courses.ln',$data);
    }
    function be(){
        $data = ['LoggedUserInfo'=>Admin::where('id','=',session('LoggedUser'))->first()];
        return view('courses.be',$data);
    }
    function calc2(){
        $data = ['LoggedUserInfo'=>Admin::where('id','=',session('LoggedUser'))->first()];
        return view('courses.calc2',$data);
    }
    function calc1(){
        $data = ['LoggedUserInfo' => Admin::where('id', '=', session('LoggedUser'))->first()];
        return view('courses.calc1', $data);
    }
    function dm(){
        $data = ['LoggedUserInfo'=>Admin::where('id','=',session('LoggedUser'))->first()];
        return view('courses.dm',$data);
    }
    function course(){
        $data = ['LoggedUserInfo'=>Admin::where('id','=',session('LoggedUser'))->first()];
        return view('course',$data);
    }
    function CourseMath(){
        $data = ['LoggedUserInfo'=>Admin::where('id','=',session('LoggedUser'))->first()];
        return view('CourseMath',$data);
    }
    function CourseProgramming(){
        $data = ['LoggedUserInfo'=>Admin::where('id','=',session('LoggedUser'))->first()];
        return view('CourseProgramming',$data);
    }
    function register(){
        return view('auth.register');
    }
    function save(Request $request){
        //Validate requests
        $request->validate([
           'fname'=>'required',
           'lname'=>'required',
           'email'=>'required|email| unique:admins',
           'password'=>'required|min:5|max:12'
        ]);

        $admin = new Admin;
        $admin->fname=$request->fname;
        $admin->lname=$request->lname;
        $admin->email=$request->email;
        $admin->Rating=0;
        $admin->password=Hash::make($request->password);
        $save = $admin->save();

        if ($save){
            return back()->with('success', 'New User has been successfuly added to database');
        }
        else{
            return back()->with('fail', 'Something went wrong, try again later');
        }
    }
    function check(Request $request){
        $request->validate([
            'email'=>'required|email',
            'password'=>'required|min:5|max:12'
        ]);

        $userInfo = Admin::where('email','=', $request->email)-> first();

        if(!$userInfo){
            return back()->with('fail', 'We do not recognize your email address');
        }
        else{
            //check password
            if(Hash::check($request->password, $userInfo->password)){
                $request->session()->put('LoggedUser', $userInfo->id);
                return redirect('admin/dashboard');
            }
            else{
                return back()->with('fail', 'Incorrect password');
            }
        }
    }
    function logout(){
        if(session()->has('LoggedUser')){
            session()->pull('LoggedUser');
            return redirect('/auth/login');
        }
    }
    function dashboard(){
        $data = ['LoggedUserInfo'=>Admin::where('id','=',session('LoggedUser'))->first()];
        return view('admin.dashboard',$data);
    }
    public function send(Request $request){
        $request->validate([
           'CourseName'=>'required',
           'topic'=>'required',
            'lnk'=>'required',
            'NameAndSurname'=>'required',
            'message'=>'required'
        ]);
        if($this->isOnline()){
            $mail_data=[
                'recipient'=>'gohelpcode13@mail.ru',
                'fNameAndSurname'=>$request->NameAndSurname,
                'fcourseName'=>$request->CourseName,
                'ftopic'=>$request->topic,
                'flnk'=>$request->lnk,
                'fmessage'=>$request->message
            ];
            \Mail::send('email-template',$mail_data,function ($message) use ($mail_data){
                $message->to($mail_data['recipient'])
                    ->from($mail_data['recipient'])
                    ->subject($mail_data['fcourseName']);
            });
            return redirect()->back()->with('success','Email Sent');
        }
        else{
            return redirect()->back()->withInput()->with('error','Check your internet connection');
        }
    }
    public function isOnline($site ="https://www.youtube.com/"){
        if(@fopen($site,"r")){
            return true;
        }
        else {
            return false;
        }
}
}
