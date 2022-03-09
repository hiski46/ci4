<?php

namespace Modules\User\Controllers;

use App\Controllers\BaseController;

class User extends BaseController
{

    public function index()
    {
        $data = [
            'title' => 'Hiskia Perdamen Pulungan'
        ];

        return  view('Modules\User\Views\user', $data);
    }

    //--------------------------------------------------------------------
}
