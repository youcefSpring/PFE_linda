<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use App\Models\Employee;
use App\Models\Vendor;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;
class VendorController extends Controller
{
    public function index(Request $request)
    {

            $items=Vendor::all();
            //  return $items;
        return view('Dashboard.Vendeur.index',compact('items'));
    }

    public function store(Request $request)
    {
        // return $request;
        $request->validate([
            // 'matricule' =>'required|unique:employees,matricule',
            'email'=>'required|email|unique:vendors,email'

        ]);
        // return $request;
           $emp=new Vendor();
                $emp->nom = $request->Nom;
                $emp->prenom = $request->prenom;
                $emp->tel_1 = $request->tel_1;
                $emp->tel_2 = $request->tel_2;
                $emp->email=$request->email;
                $emp->address = $request->address;
                $emp->password = bcrypt($request->password);
                $emp->save();
        //  Vendor::create($request->except('_token'));

        return redirect()->route('admin.VendorList')
        ->with('success','Vendeur ajouté avec suucès');
    }

    public function create(){
        return view('Dashboard.Vendeur.create');
    }
    public function edit($id)
    {
        $item = Vendor::where('id',$id)->first();
        // return $item;
        return view('Dashboard.Vendeur.edit',compact('item'));
    }

    public function delete($id)
    {
        try{
       Vendor::where('id',$id)->delete();

       return redirect()->back()->with('success','Supprimé avec succès !');
        }
        catch(\Exception $e){
            return redirect()->back()->with('error','Impossible de le supprimer');
        }
    }

    public function update(Request $request,$id)
    {
        // return $request;

        $emp=Vendor::where('id',$id)->first();

        $emp->nom = $request->Nom;
        $emp->prenom = $request->prenom;
        $emp->tel_1 = $request->tel_1;
        $emp->tel_2 = $request->tel_2;
        $emp->email=$request->email;
        $emp->address = $request->address;
        $emp->password = bcrypt($request->password);
        $emp->save();




        return redirect()->route('admin.VendorList')
        ->with('success','Vendeur mis-à-jour avec suucès');
    }


    function action(Request $request)
    {

     if($request->ajax())
     {
      $output = '';
      $query = $request->get('query');
      if($query != '')
      {
       $data = Vendor::where('nom', 'like', '%'.$query.'%')
         ->orWhere('prenom', 'like', '%'.$query.'%')
         ->orWhere('tel_1', 'like', '%'.$query.'%')
         ->orWhere('tel_2', 'like', '%'.$query.'%')
         ->orWhere('address', 'like', '%'.$query.'%')
         ->orWhere('email', 'like', '%'.$query.'%')

         ->orderBy('created_at', 'desc')
         ->get();

      }
      else
      {
       $data = DB::table('vendors')
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
         <td>'.$row->nom.'</td>
         <td>'.$row->prenom.'</td>
         <td>'.$row->tel_1.'</td>
         <td>'.$row->tel_2.'</td>
         <td>'.$row->address.'</td>
         <td>'.$row->email.'</td>
         <td>
         <div class="btn-group" role="group" aria-label="Basic Example">
         <a href="'. route("admin.VendorEdit", $row->id) .'"
             class="btn btn-info btn-min-width box-shadow-3 mr-1 mb-1">
             <i class="la la-edit"></i> Modifier
         </a>
         <a href="'.route("admin.VendorDelete",$row->id).'"
             onclick="return confirm("Êtes-vous sûr de bien vouloir supprimer cet élément?");"
             class="btn btn-danger btn-min-width box-shadow-3 mr-1 mb-1">
             <i class="la la-trash"></i> Supprimer
         </a>

     </div></td>
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
}
