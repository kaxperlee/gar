<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\Support\Facades\DB;
class SbCodigos extends Component
{
    public $codigos;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $codigos = DB::table('delitos')->groupBy('Epigrafe')->orderBy('id','asc')->limit(200)->get();

        $this->codigos = $codigos;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.sb-codigos');
    }
}
