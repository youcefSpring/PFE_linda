<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Leave;

class LeaveController extends Controller
{



    public function store(Request $r)
    {
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
        $path_l='/congés/'.$condidat->id;
        $r->c_etudiant->move(public_path($path_l),$c_etudiant);
        $condidat->c_etudiant=$path_l.'/'. $c_etudiant;

        $c_inscription = $r->c_inscription->getClientOriginalName();
        $path_f='/congés/'.$condidat->id;
        $r->c_inscription->move(public_path($path_f),$c_inscription);
        $condidat->c_inscription=$path_f.'/'. $c_inscription;


        $p_justificative = $r->p_justificative->getClientOriginalName();
        $path_r='/congés/'.$condidat->id;
        $r->p_justificative->move(public_path($p_justificative),$p_justificative);
        $condidat->p_justificative=$path_r.'/'. $p_justificative;


        $condidat->save();
        return redirect()->back()->with('success','votre demande a été enregistré avec succès');
    }

}
