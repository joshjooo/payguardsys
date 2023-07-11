<?php

namespace App\Http\Livewire\Admin\Transactions;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Lists extends Component
{
    public function render()
    {
        $transactions = DB::table('transactions')->select('transactions.*')->get();
        
        $data = ['transactions' => $transactions];
        return view('livewire.admin.transactions.lists', $data);
    }
}
