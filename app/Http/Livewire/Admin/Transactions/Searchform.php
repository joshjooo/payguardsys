<?php

namespace App\Http\Livewire\Admin\Transactions;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Searchform extends Component
{
    public $form = '';
    public $transactions;

    public function mount(){  
        // $this->transactions = DB::table('transactions')->select('transactions.*')->get();
    }
    
    public function render()
    {
        sleep(1);         
        $query = DB::table('transactions');

        if ($this->form) {
            $query->where('fee',$this->form);
            $query->oRwhere('reference_number',$this->form);
            $query->oRwhere('sender',$this->form);
            $query->oRwhere('receiver',$this->form);
        }
        $transaction = $query->get(); 
        $this->transactions = $query->get(); 
        // dd($transaction);
        $data = ['transaction' => $transaction];
        return view('livewire.admin.transactions.searchform', $data);
    }
}
