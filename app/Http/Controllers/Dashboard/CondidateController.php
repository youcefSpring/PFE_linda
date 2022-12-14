<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Condidate;
use PDF;

class CondidateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request){
        $search=$request->search ?? null;

        if(isset($search)){
            $items=Condidate::where('name','like','%'.$search.'%')
                        ->orWhere('nationality','like','%'.$search.'%')
                        ->orWhere('date_n','like','%'.$search.'%')
                        ->orWhere('lieu_n','like','%'.$search.'%')
                        ->orWhere('phone','like','%'.$search.'%')
                        ->orWhere('address','like','%'.$search.'%')
                        ->orWhere('type_inscription','like','%'.$search.'%')
                        ->orWhere('status','like','%'.$search.'%')
                        ->get();

                        // return $items;
        }else{
            $items=Condidate::all();
        }

        // return $items;
        return view('Dashboard.condidates.index',compact('items'));
      }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $r)
    {
        $r->validate([
            'g-recaptcha-response' => 'required|captcha'
        ]);

        $condidat= new Condidate();
        $condidat->name=$r->name;
        $condidat->nationality=$r->nationality;
        $condidat->date_n=$r->date_n;
        $condidat->lieu_n=$r->lieu_n;
        $condidat->phone=$r->phone;
        $condidat->address=$r->address;
        $condidat->email=$r->email;
        $condidat->type_inscription=$r->type_inscription;
        $condidat->password=bcrypt('phone');
        $condidat->save();

        $l_motivation = $r->l_motivation->getClientOriginalName();
        $path_l='condidats/'.$condidat->id;
        $r->l_motivation->move(public_path($path_l),$l_motivation);
        $condidat->l_motivation=$path_l.'/'. $l_motivation;

        $f_voeux = $r->f_voeux->getClientOriginalName();
        $path_f='condidats/'.$condidat->id;
        $r->f_voeux->move(public_path($path_f),$f_voeux);
        $condidat->f_voeux=$path_f.'/'. $f_voeux;


        $r_bac = $r->r_bac->getClientOriginalName();
        $path_r='condidats/'.$condidat->id;
        $r->r_bac->move(public_path($path_r),$r_bac);
        $condidat->r_bac=$path_r.'/'. $r_bac;

        $c_diplome = $r->c_diplome->getClientOriginalName();
        $path_c='condidats/'.$condidat->id;
        $r->c_diplome->move(public_path($path_c),$c_diplome);
        $condidat->c_diplome=$path_c.'/'. $c_diplome;

        $c_relevet = $r->c_relevet->getClientOriginalName();
        $path_relevet='condidats/'.$condidat->id;
        $r->c_relevet->move(public_path($path_relevet),$c_relevet);
        $condidat->c_relevet=$path_relevet.'/'. $c_relevet;
        // return  $condidat->f_voeux;

        $autorisation = $r->autorisation->getClientOriginalName();
        $path_autorisation='condidats/'.$condidat->id;
        $r->autorisation->move(public_path($path_autorisation),$autorisation);
        $condidat->autorisation=$path_autorisation.'/'. $autorisation;

        $condidat->save();
        // return $r->r_bac->getClientOriginalName();
        return redirect()->back()->with('success','votre demande a ??t?? enregistr?? avec succ??s');

    }

    public function changeStatus($id,$status)
    {
       $c=Condidate::find($id);
       $c->status=$status;
       $c->save();

    $data["email"] = $c->email;
    $data["title"] = 'Etat demande ??tudes universitaire';
    $data["body"] ='Salam, <br> Nous vous informons que votre demande a ??t?? '.$status;

    $pdf = \PDF::loadView('Dashboard.emails.confirm', $data);

    \Mail::send('Dashboard.emails.upload', $data, function($message)use($data, $pdf) {
        $message->to($data["email"], $data["email"])
                ->subject($data["title"])
                ->attachData($pdf->output(), "Etat demande ??tudes universitair.pdf");
    });

    // dd('sent');
       return back()->with('success','Mise ?? jour avec succ??s');
    }


    public function changeDateDepot($id,Request $r)
    {
       $c=Condidate::find($id);
       $c->date_depot=$r->date_depot;
       $c->save();

    $data["email"] = $c->email;
    $data["title"] = 'Date d??pot dossier original';
    $data["body"] ='Salam, <br> Nous vous informons que la date pour d??poser le dossier original est : '.$r->date_depot;

    // $pdf = \PDF::loadView('Dashboard.emails.confirm', $data);

    \Mail::send('Dashboard.emails.upload', $data, function($message)use($data) {
        $message->to($data["email"], $data["email"])
                ->subject($data["title"]);
    });

    // dd('sent');
       return back()->with('success','Mise ?? jour avec succ??s');
    }



}
