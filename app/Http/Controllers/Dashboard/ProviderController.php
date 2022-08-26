<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;

use App\Models\Provider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProviderController extends Controller
{ 
  public function index(){
    return view('Dashboard.Providers.index');
  }

    public function list(Request $request){

        if($request->ajax())
        {
         $output = '';
         $query = $request->get('query');
         if($query != '')
         {
          $data = Provider::where('nom', 'like', '%'.$query.'%')
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
          $data = DB::table('providers')
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
           </tr>
           ';
          }
         }
         else
         {
          $output = '
          <tr>
           <td align="center" colspan="5">Aucun Fournisseurs Trouvé !</td>
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
