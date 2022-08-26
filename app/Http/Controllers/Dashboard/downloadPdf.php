<?php

namespace App\Http\Controllers\PDF;

use App\Http\Controllers\Controller;
use App\Models\Adherent;
use Barryvdh\DomPDF\Facade as DomPDF;

use Illuminate\Http\Request;
use \PDF;

class downloadPdf extends Controller
{
    
    public function generatePDF()
    {
        $adherents= Adherent::all();
        $data = ['title' => $adherents];
        $pdf = DomPDF::loadView('Dashboard.adherents.index', $data);
  
        return $pdf->download('itsolutionstuff.pdf');
    }
}
