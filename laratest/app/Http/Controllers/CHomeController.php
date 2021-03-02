<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Validator;
use App\Http\Requests\UserRequest;
use App\Http\Requests\UserUpdateRequest;

class CHomeController extends Controller
{
    public function index( Request $req){

        $name = "Nafi";
        $id = "123";

        //return view('home.index', ['name'=> 'xyz', 'id'=>12]);
        // return view('home.index')
        //         ->with('name', 'Nafi')
        //         ->with('id', '12');

        // return view('home.index')
        //         ->withName($name)
        //         ->withId($id);

        return view('home.customer', compact('id', 'name'));

    }

    public function show($id){

        $user = User::find($id);
        //print_r($user);
        return view('home.Cdetails')->with('user', $user);
    }

    public function create(){
        return view('home.Ccreate');
    }

    public function store(UserRequest $req){

/*
        $this->validate($req, [
            'username' => 'required|max:5',
            'password' => 'required|min:6'
        ])->validate();*/

        /*$req->validate([
            'username' => 'required|max:5',
            'password' => 'required|min:6'
        ])->validate();*/

        //$validation->validate();

        /*$validation = Validator::make($req->all(), [
            'username' => 'required|max:5',
            'password' => 'required|min:6'
        ]);

        if($validation->fails()){
         //   return redirect()->route('home.create')->with('errors', $validation->errors());

            return Back()->with('errors', $validation->errors())->withInput();            
        }*/

        if($req->hasFile('myfile')){
            $file = $req->file('myfile');  
            /*echo $file->getClientOriginalName()."<br>";  
            echo $file->getClientOriginalExtension()."<br>";  
            echo $file->getSize()."<br>";*/
            //$file->move('upload', $file->getClientOriginalName());
            
            $filename = time().".".$file->getClientOriginalExtension();
            
            $file->move('upload', $filename);

            $user = new User();
            $user->username     = $req->username;
            $user->password     = $req->password;
            $user->name         = $req->name;
            $user->dept         = $req->dept;
            $user->type         = $req->type;
            $user->cgpa         = $req->cgpa;
            $user->profile_img = $filename;
            $user->save();
            return redirect()->route('home.Cuserlist');

        }  

    }

    public function edit($id){
        
        $user = User::find($id);
        return view('home.Cedit')->with('user', $user);
    }


    public function update($id, UserUpdateRequest $req){

        $user = User::find($id);
        
        $user->username = $req->username;
        $user->name     = $req->name;
        $user->password = $req->password;
        $user->dept     = $req->dept;
        $user->type     = $req->type;
        $user->cgpa     = $req->cgpa;
        $user->save();

        return redirect()->route('home.Cuserlist');
    }

    public function userlist(){
        
        $userlist = User::all();
        //$userlist = $this->getUserlist();
        return view('home.Clist')->with('list', $userlist);
    }

    /*public function getUserlist (){

        return [
                ['id'=>1, 'name'=>'alamin', 'email'=> 'alamin@aiub.edu', 'password'=>'123'],
                ['id'=>2, 'name'=>'abc', 'email'=> 'abc@aiub.edu', 'password'=>'456'],
                ['id'=>3, 'name'=>'xyz', 'email'=> 'xyz@aiub.edu', 'password'=>'789']
            ];
    }*/

    public function delete($id){

        $user = User::find($id);
        return view('home.Cdelete')->with('user', $user);
    }

    public function destroy($id){

        if(User::destroy($id)){
            return redirect()->route('home.Cuserlist');
        }else{
            return redirect('/E-Pay-home/delete-customer/'.$id);
        }

    }
}
