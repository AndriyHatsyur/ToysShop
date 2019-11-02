<?php

namespace App\Http\Controllers\Admin;

use App\Exsports\ProductExport;
use App\Exsports\ProductImport;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;

class ExcelAdminController extends Controller
{
    public function export()
    {


        return Excel::download(new ProductExport, 'invoices.xlsx');
    }

    public function importView()
    {
        return view('pages.admin.import');
    }

    public function import(Request $request)
    {

        ini_set('memory_limit', '512M');
       Excel::import(new ProductImport, $request->file('file'));

        return redirect()->route('product.index');

    }
}
