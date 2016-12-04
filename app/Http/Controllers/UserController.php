<?php
namespace App\Http\Controllers;

use App\User;
use Auth;
use Illuminate\Http\Request;


class UserController extends Controller
{

    public function loginview(){

        return view('users.signup');
        
    }

    public function signup(Request $request)
    {


        $this->validate($request , [
            'email' => 'required|email|unique:users',
            'username' => 'required|max:120',
            'password' => 'required|min:4',
            'cell_no' => 'min:10'
        ]);

        $email = $request['email'];
        $username = $request['username'];
        $password = bcrypt($request['password']);
        $cell_no = $request['cell_no'];

        $user = new User();

        $user->email = $email;
        $user->username = $username;
        $user->password = $password;
        $user->cell_no = $cell_no;
        $user->save();


        return redirect('questions');

    }
    
   
    public function signin(Request $request)
    {

        $this->validate($request , [
            'email' => 'required',
            'password' => 'required'
        ]);

        if(Auth::attempt(['email' => $request['email'], 'password' => $request['password'] ]))
        {
            return redirect('questions');
        }
        return back();

    }
    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
?>


