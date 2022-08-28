<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Condidate;

class CondidateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $items=Condidate::all();
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
        return redirect()->back()->with('success','votre demande a été enregistré avec succès');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
