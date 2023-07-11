<?php

namespace App\Http\Livewire\Auth;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class LoginAction extends Component
{
     public  $email, $password;

    public function render()
    {
        return view('livewire.auth.login-action');
    }

    private function resetInputFields(){
        $this->email = '';
        $this->password = '';
    }


     public function login()
    {
        $validatedDate = $this->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        
       

        if(\Auth::attempt(array('user_email' => $this->email, 'password' => $this->password))){
            $user = User::where('user_email', $this->email)->first();
            Auth::login($user);
            
           // Auth::loginUsingId($user['user_id']);
            session()->flash('message', "You are Login successful.");
            return redirect()->to('/admin/dashboard');
        


        }else{
            session()->flash('error', 'email and password are wrong.');
            return redirect()->to('/');
            resetInputFields();
        }
    }



}
