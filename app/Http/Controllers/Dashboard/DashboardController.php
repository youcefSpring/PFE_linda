<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Provider;
use App\Condidate;
use Illuminate\Http\Request;
use App\Models\Vendor;
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
         'nbrV' => 0,
         'nbrP' => 0,
         'nbrG'=> 0,
         'products'=>0
        ];
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
}
