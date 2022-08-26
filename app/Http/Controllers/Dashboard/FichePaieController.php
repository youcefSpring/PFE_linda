<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\FichePaie;
use Mail;
use DB;
use PDF;
use File;
use Storage;
class FichePaieController extends Controller
{
    public function index(){
        $fiches=FichePaie::with('employee')
               ->orderBy('date_fiche_paie','desc')
               ->get();
        // return $fiches;
        return view('Dashboard.fiche de paie.index',compact('fiches'));
    }

    public function create(){
         $a=nbrEmp();
         if($a < 1){
             return
             redirect()
             ->route('ajaxItems.create')
             ->with('error','Aucun Employé Enegistré');
         }
        $emps=Employee::all();
        return view('Dashboard.fiche de paie.create',compact('emps'));
    }


    public function store(Request $r){

        $r->validate([
            'moreFields.*' => 'required|mimes:pdf'
          ]);



          foreach ($r->moreFields as $value) {


            $namewithextension = $value->getClientOriginalName(); //Name with extension 'filename.jpg'
            $name = explode('.', $namewithextension)[0];
            $emp=Employee::select('id', 'nom' , 'prenom','email')->where('matricule',$name)->first();


            $this->sendMail($emp,$value,$r->date);


            if(!$emp){
                return redirect()->back()->with('error','Employé n\'existe pas('.$namewithextension.')');
            }

            $fichiername = time().'_'.$namewithextension;
            $location = 'Fiches de paies/'.$emp->nom.' '.$emp->prenom.'/'.$r->date;
            $value->move($location,$fichiername);

            $f=new FichePaie;
            $f->matricule=$emp->id;
            $f->date_fiche_paie=$r->date;
            $f->url_pdf=$location."/".$fichiername;
            $f->save();


        }

        // return $i;
        return redirect()->back()->with('success','Enregistré avec suucès');

      }
       public function sendMail($emp,$file,$date)
       {
           $data=[
             'emp' =>$emp,
             'file'=>$file,
             'date' =>$date
           ];

           return $emp;
           \Mail::to($emp->email)->send(new \App\Mail\FichePaieMail($data));
       }

      public function download(Request $request, $id)
    {

          $fiche=FichePaie::where('id',$id)->with('employee')->first();
          $fichier=$fiche->employee->matricule.".pdf";
        $file = public_path()."/".$fiche->url_pdf;

        $headers = array('Content-Type: application/*');
        if(file_exists($file))
        {
        return response()->download($file, $fichier, $headers);
        }
        else{
            return redirect()->back()->with('error','support introuvable !!');
        }

    }


    public function envoyer(Request $r, $id)
    {

        $fiche=FichePaie::where('id',$id)->with('employee')->first();
        $data = [
            'document' => $fiche
        ];

        $to_email = $fiche->employee->email;
        try{
        \Mail::to($to_email)->send(new \App\Mail\Upload($data));

           return redirect()->back()->with('success','Email envoyé avec suucès');
        }
        catch(\Exception $e)
        {
            return redirect()->back()->with('error','Error !');
        }
     }

     public function imprimer()
     {
        // $pdf = PDF::loadView('path.to.your.file',['model'=>$model])
        // ->setPaper('a4')
        // ->setOptions([
        //     'header-html'=>"/var/www/html/{your-laravel-install-folder}/resources/views/header.html", // display a image logo on every page header
        //     'footer-font-size'=>'8',
        //     'footer-left'=>'Footer Left Text',
        //     'footer-center'=>'Footer Center Text',
        //     'footer-right'=>'Footer Right Text']);

        //     return $pdf->inline();
        return redirect()->back();
      }

      function action(Request $request)
      {

       if($request->ajax())
       {
        $output = '';
        $query = $request->get('query');
        if($query != '')
        {
         $data = FichePaie::

           with('employee')
           ->where('date_fiche_paie','like', '%'.$query.'%')
           ->orderBy('created_at', 'desc')
           ->get();

        }
        else
        {
         $data =FichePaie::
            with('employee')
           ->orderBy('created_at', 'desc')
           ->get();
        }
        $total_row = $data->count();
        if($total_row > 0)
        {
         foreach($data as $row)
         {
          $output .= '
          <tr>
           <td>'.$row->employee->matricule.'</td>
           <td>'.$row->employee->nom.'</td>
           <td>'.$row->employee->prenom.'</td>
           <td>'.$row->date_fiche_paie.'</td>
           <td> <a
           href="'.route("FichePaieDownload", $row->id).' "><i
               class="la la-download" aria-hidden="true"></i> Télécharger</a>  </td>
           <td>
           <div class="btn-group" role="group" aria-label="Basic Example">
           <a href="'. route("FichePaieSendMail", $row->id).'"
               class="btn btn-info btn-min-width box-shadow-3 mr-1 mb-1">
               <i class="la la-send"></i> Envoyer
           </a>
           <a href="'.route("imp").'"
               class="btn btn-warning btn-min-width box-shadow-3 mr-1 mb-1">
               <i class="la la-print"></i> Imprimer
           </a>

       </div>
           </td>
          </tr>
          ';
         }
        }
        else
        {
         $output = '
         <tr>
          <td align="center" colspan="5">Aucun Employee Trouvé !</td>
         </tr>
         ';
        }
        $data = array(
         'table_data'  => $output,
         'total_data'  => $total_row
        );

        echo json_encode($data);
       }
      }

    //   $data = FichePaie::

    //   with(['employee' =>function($q){
    //       $q->select('matricule','nom','prenom','email')
    //       ->where('matricule','like', '%'.$query.'%')
    //       ->orWhere('nom', 'like', '%'.$query.'%')
    //       ->orWhere('prenom', 'like', '%'.$query.'%')
    //       ->orWhere('email', 'like', '%'.$query.'%');
    //   }

    //   ])
    //   ->where('date_fiche_paie','like', '%'.$query.'%')
    //   ->orderBy('created_at', 'desc')
    //   ->get();

 }




