<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Employee;
use App\Imports\EmployeesImport;
use Maatwebsite\Excel\Facades\Excel;
use DB;
class ExcelImportController extends Controller
{
    public function importPage(){
        return view('Dashboard.employees.importExcel');
    }

    public function stockerExcel(Request $request) {
        $this->validate($request, [
            'emps'  => 'required|mimes:xls,xlsx'
           ]);

        $path1 = $request->file('emps')->store('temp');
         $path=storage_path('app').'/'.$path1;
         try{
           Excel::import(new EmployeesImport,$path);
           return back()->with('success','Fichier importé avec succès ');
         }
         catch(\Exception $e) {
            return back()->with('error','Email/Matricule dupliqué');
         }
            }
}
