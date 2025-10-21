<?php

namespace App\View\Composers;

class CompanyComposer
{
    public function compose($view)
    {
        $view->with('titulo', 'Listado de Posts desde View Composer');
    }
}

?>