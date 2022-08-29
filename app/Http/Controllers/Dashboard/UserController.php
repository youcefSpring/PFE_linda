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

    public function store(Request $r)
    {
        try{
        $u=new User();
        $u->name=$r->name;
        $u->email=$r->email;
        $u->user_type=$r->user_type;
        $u->password=bcrypt($r->password);
        $u->save();
        return back()->with('success','Enregistré avec succès');
        }
        catch(\Exception $e){
            return back()->with('error','Erreur');
        }
    }

    public function update(Request $r,$id)
    {
        try{
            $u=User::findOrFail($id);
            $u->name=$r->name;
            $u->email=$r->email;
            $u->user_type=$r->user_type;
            $u->password=bcrypt($r->password);
            $u->save();
            return back()->with('success','Enregistré avec succès');
            }
            catch(\Exception $e){
                return back()->with('error','Erreur');
            }
    }
}
