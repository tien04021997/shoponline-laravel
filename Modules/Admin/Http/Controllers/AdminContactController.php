<?php

namespace Modules\Admin\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

class AdminContactController extends Controller
{

    public function index(Request $request)
    {
        $contacts = Contact::whereRaw(1);

        $contacts = $contacts->orderBy('id','DESC')->paginate(10);

        $viewData = [
            'contacts' => $contacts
        ];
        return view('admin::contacts.index', $viewData);
    }

    public function action($action, $id)
    {
        if ($action){
            $contacts = Contact::find($id);
            switch ($action){
                case 'delete':
                    $contacts->delete();
                    break;

                case 'status':
                    $contacts->status = $contacts->status ? 0 : 1;
                    $contacts->save();
                    break;
            }
            return redirect()->back();
        }
    }

}
