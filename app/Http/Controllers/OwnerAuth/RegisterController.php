<?php
namespace Corp\Http\Controllers\OwnerAuth;

use Illuminate\Http\Request;
use Corp\Http\Controllers\Controller;

//Validator facade used in validator method
use Illuminate\Support\Facades\Validator;

//Owner Model
use Corp\Owner;

//Auth Facade used in guard
use Auth;

class RegisterController extends Controller
{
     protected $redirectPath = '/';
	
	//shows registration form to owner
    public function showRegistrationForm()
    {
        return view('owner.auth.register');
    }

  //Handles registration request for owner
    public function register(Request $request)
    {

       //Validates data
        $this->validator($request->all())->validate();

       //Create owner
        $owner = $this->create($request->all());

        //Authenticates owner
        $this->guard()->login($owner);

       //Redirects owner
        return redirect($this->redirectPath);
    }

    //Validates user's Input
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255',
            'password' => 'required|min:6|confirmed',
        ]);
    }

    //Create a new owner instance after a validation.
    protected function create(array $data)
    {
        return Owner::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }

    //Get the guard to authenticate Owner
   protected function guard()
   {
       return Auth::guard('web_owner');
   }

}