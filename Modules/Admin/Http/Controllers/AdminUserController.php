<?php

namespace Modules\Admin\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

class AdminUserController extends Controller
{

    public function index(Request $request)
    {
        $users = User::whereRaw(1);

        $users = $users->orderBy('id','DESC')->paginate(10);

        $viewData = [
            'users' => $users
        ];

        return view('admin::user.index', $viewData);
    }

    public function action($action, $id)
    {
        if ($action){
            $users = User::find($id);
            switch ($action){
                case 'delete':
                    $users->delete();
                    break;
            }
        }

        return redirect()->back();
    }

}
