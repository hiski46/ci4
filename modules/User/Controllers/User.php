<?php

namespace Modules\User\Controllers;

use App\Controllers\BaseController;
use Modules\Crud\Models\OrangModel;

class User extends BaseController
{
    protected $orangModel;
    public function __construct()
    {
        $this->orangModel = new OrangModel;
    }

    public function index()
    {
        $data = [
            'title' => 'Hiskia Perdamen Pulungan',
            'orang' => $this->orangModel->paginate(10),
            'pager' => $this->orangModel->pager
        ];

        return  view('Modules\User\Views\user', $data);
    }

    //--------------------------------------------------------------------
}
