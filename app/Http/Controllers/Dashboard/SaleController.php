<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\DetailSale;
use App\Models\Sale;
use Illuminate\Http\Request;

class SaleController extends Controller
{
    public function list(){

        $items=Sale::all();
        // return $items;
        return view('Dashboard.Ventes.index',compact('items'));
    }
    public function detail($id){
        $items=DetailSale::where('sale_id',$id)->with('product')->get();
    //   return $items;
        return view('Dashboard.Ventes.detail',compact('items'));
    }
}
