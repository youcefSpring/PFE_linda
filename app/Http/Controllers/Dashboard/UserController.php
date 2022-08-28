<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $items=User::all();

        return view('Dashboard.users.index',compact('items'));
    }


    public function delete($id)
    {
        try{

            User::find($id)->delete();
            return back()->with('success','Element supprimé avec succès');

        }catch(\Exception $e){

            return back()->with('error','Erreur !');

        }
    }
}
