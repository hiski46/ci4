<?php

namespace Modules\Crud\Controllers;

use App\Controllers\BaseController;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            "title" => "Home"
        ];
        // echo 'Modules/Crud/Views' .  DIRECTORY_SEPARATOR . 'pages/home';

        return view(modules_crud_views('Pages/home.php'), $data);
    }

    public function about()
    {
        $data = [
            "title" => "About Me"
        ];
        return view(modules_crud_views('pages/about'), $data);
    }
    public function contact()
    {
        $data = [
            "title" => "Contact Us"
        ];
        return view(modules_crud_views('pages/contact'), $data);
    }
}
