<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{

    public function list(Request $request){

        if($request->ajax())
        {
         $output = '';
         $query = $request->get('query');
         if($query != '')
         {
          $data = Product::where('designation', 'like', '%'.$query.'%')
            ->orWhere('type', 'like', '%'.$query.'%')
            ->orWhere('qte', 'like', '%'.$query.'%')
            ->orWhere('prix_achat', 'like', '%'.$query.'%')
            ->orWhere('prix_vente', 'like', '%'.$query.'%')
            ->orWhere('description', 'like', '%'.$query.'%')
            ->orWhere('date_expiration', 'like', '%'.$query.'%')
            ->orderBy('created_at', 'desc')
            ->get();

         }
         else
         {
          $data = DB::table('products')
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
           <td><img src="'.asset($row->img).'" class="img-fluid" style="max-width:80px" alt="avatar.png"></td>
            <td>'.$row->designation.'</td>
            <td>'.$row->type.'</td>
            <td>'.$row->qte.'</td>
            <td>'.$row->prix_achat.'</td>
            <td>'.$row->prix_vente.'</td>
            <td>'.$row->description.'</td>
            <td>'.$row->date_expiration.'</td>
           </tr>
           ';
          }
         }
         else
         {
          $output = '
          <tr>
           <td align="center" colspan="5">Aucun Produit Trouvé !</td>
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
