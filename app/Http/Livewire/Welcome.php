<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Welcome extends Component
{
    public function render()
    {
        $data = DB::table('users')->select('users.*')->get();
        return view('livewire.welcome');
    }
}
