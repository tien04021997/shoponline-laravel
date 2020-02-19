<?php

namespace Modules\Admin\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

class AdminTransactionController extends Controller
{

    public function index()
    {
        $transactions = Transaction::with('user:id,name')->paginate(10);

        $viewData = [
          'transactions' => $transactions
        ];

        return view('admin::transaction.index', $viewData);
    }

    public function viewOrder(Request $request, $id)
    {

    }
}
