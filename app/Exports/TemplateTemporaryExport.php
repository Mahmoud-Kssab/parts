<?php

namespace App\Exports;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class TemplateTemporaryExport implements FromView
{


    public function view(): View
    {         
        
       return view('admin.export.template_temporary_export');

    }
}
