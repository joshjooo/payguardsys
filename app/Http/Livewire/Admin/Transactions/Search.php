<?php

namespace App\Http\Livewire\Admin\Transactions;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Search extends Component
{

    public function render()
    {
        return view('livewire.admin.transactions.search');
    }
}
