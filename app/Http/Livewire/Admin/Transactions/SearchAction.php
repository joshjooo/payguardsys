<?php

namespace App\Http\Livewire\Admin\Transactions;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class SearchAction extends Component
{

    public function render($id)
    {
        $transaction = DB::table('transactions')->where('id', $id)->select('transactions.*')->first();
        $data = [
            'transaction' => $transaction,
        ];
        // dd($transaction);
        return view('livewire.admin.transactions.search-action', $data);
    }
}
