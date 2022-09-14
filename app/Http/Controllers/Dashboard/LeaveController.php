<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Leave;

class LeaveController extends Controller
{



    public function store(Request $r)
    {
        $r->validate([
            'g-recaptcha-response' => 'required|captcha'
        ]);
        $condidat= new Leave();
        $condidat->name=$r->name;
        $condidat->matricule=$r->matricule;
        $condidat->year_study=$r->year_study;
        $condidat->domaine=$r->domaine;
        $condidat->filiere=$r->filiere;
        $condidat->speciality=$r->speciality;
        $condidat->email=$r->email;
        $condidat->phone=$r->phone;
        $condidat->annee_univ=$r->annee_univ;
        $condidat->raison=isset($r->another_raison) ? $r->another_raison : $r->raison;
        $condidat->password=bcrypt('phone');
        $condidat->save();

        $c_etudiant = $r->c_etudiant->getClientOriginalName();
        $path_l='congés/'.$condidat->id;
        $r->c_etudiant->move(public_path($path_l),$c_etudiant);
        $condidat->c_etudiant=$path_l.'/'. $c_etudiant;

        $c_inscription = $r->c_inscription->getClientOriginalName();
        $path_f='congés/'.$condidat->id;
        $r->c_inscription->move(public_path($path_f),$c_inscription);
        $condidat->c_inscription=$path_f.'/'. $c_inscription;


        $p_justificative = $r->p_justificative->getClientOriginalName();
        $path_r='congés/'.$condidat->id;
        $r->p_justificative->move(public_path($p_justificative),$p_justificative);
        $condidat->p_justificative=$path_r.'/'. $p_justificative;


        $condidat->save();
        return redirect()->back()->with('success','votre demande a été enregistré avec succès');
    }

    public function index(Request $request){
        $search=$request->search ?? null;
        if(isset($search)){
            $items=Leave::where('name','like','%'.$search.'%')
                        ->orWhere('matricule','like','%'.$search.'%')
                        ->orWhere('year_study','like','%'.$search.'%')
                        ->orWhere('domaine','like','%'.$search.'%')
                        ->orWhere('filiere','like','%'.$search.'%')
                        ->orWhere('speciality','like','%'.$search.'%')
                        ->orWhere('email','like','%'.$search.'%')
                        ->orWhere('annee_univ','like','%'.$search.'%')
                        ->orWhere('raison','like','%'.$search.'%')
                        ->orWhere('status','like','%'.$search.'%')
                        ->get();

                        // return $items;
        }
        else{
            $items=Leave::all();
        }

    //   return $items;
      return view('Dashboard.leaves.index',compact('items'));
    }


    public function changeStatus($id,$status)
    {
        $c=Leave::find($id);
       $c->status=$status;
       $c->save();

    //    $details = [
    //     'title' => 'Etat demande congé académique',
    //     'body' => 'Salam, <br> Nous vous informons que votre demande du congé académique a été '.$status
    // ];

    // \Mail::to($c->email)->send(new \App\Mail\MyTestMail($details));

    $data["email"] = $c->email;
    $data["title"] = 'Etat demande congé académique';
    $data["body"] ='Salam, <br> Nous vous informons que votre demande du congé académique a été '.$status;

    $pdf = \PDF::loadView('Dashboard.emails.confirm', $data);

    \Mail::send('Dashboard.emails.upload', $data, function($message)use($data, $pdf) {
        $message->to($data["email"], $data["email"])
                ->subject($data["title"])
                ->attachData($pdf->output(), "Etat demande congé académique.pdf");
    });
       return back()->with('success','Mise à jour avec succès');
    }
    public function changeDateDepot($id,Request $r)
    {
       $c=Leave::find($id);
       $c->date_depot=$r->date_depot;
       $c->save();

    $data["email"] = $c->email;
    $data["title"] = 'Date dépot dossier original';
    $data["body"] ='Salam, <br> Nous vous informons que la date pour déposer le dossier original est : '.$r->date_depot;

    // $pdf = \PDF::loadView('Dashboard.emails.confirm', $data);

    \Mail::send('Dashboard.emails.upload', $data, function($message)use($data) {
        $message->to($data["email"], $data["email"])
                ->subject($data["title"]);
    });

    // dd('sent');
       return back()->with('success','Mise à jour avec succès');
    }

}
