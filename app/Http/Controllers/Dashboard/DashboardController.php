<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Provider;
use App\Condidate;
use Illuminate\Http\Request;
use App\Models\Leave;
use App\Models\Admin;
use App\Models\Fichier;
use File;
use Response;
use Illuminate\Support\Facades\Storage;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $a=[
         'nbr_condidat' => Condidate::count(),
         'nbr_congé' => Leave::count(),
         'nbr_users'=> Admin::count(),
         'products'=>0
        ];
        // return $a;
        return view('Dashboard.indexAdmin')->with('a',$a);
    }

    function getFile($folder,$id,$filename){

        // dd(1);
        $file = public_path()."/".$folder."/".$id."/".$filename;
        $headers = array('Content-Type: application/*');
        if(file_exists($file))
        {
        return response()->download($file, $filename, $headers);
        }
        else{
            return redirect()->back()->with('error','support introuvable !!');
        }


    }


    public function importFicheVoeux()
    {
        return view('Dashboard.fiche_voeux.importFichier');
    }

    public function stockerFichVoeux(Request $r)
    {
        $fil=new Fichier();
        $fil->type="fiche de voeux";
        $fil->save();

        $emps = $r->emps->getClientOriginalName();
        $path_emps='fiches_voeux/'.$fil->id;
        $r->emps->move(public_path($path_emps),$emps);
        $fil->path=$path_emps.'/'. $emps;
        $fil->type="fiche de voeux";
        $fil->save();

        return back()->with('success','Enregistrement du fichier avec succès');
    }

    public function importPv()
    {
        return view('Dashboard.Pv.importFichier');
    }

    public function stockerPv(Request $r)
    {
        $fil=new Fichier();
        $fil->type="Pv";
        $fil->save();

        $emps = $r->emps->getClientOriginalName();
        $path_emps='Pv/'.$fil->id;
        $r->emps->move(public_path($path_emps),$emps);
        $fil->path=$path_emps.'/'. $emps;
        $fil->type="Pv";
        $fil->save();

        return back()->with('success','Enregistrement du Pv avec succès');
    }
}
