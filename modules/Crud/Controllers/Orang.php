<?php

namespace Modules\Crud\Controllers;

use Modules\Crud\Models\OrangModel;
use App\Controllers\BaseController;

class Orang extends BaseController
{
    protected $orangModel;
    public function __construct()
    {
        $this->orangModel = new OrangModel();
    }
    public function index()
    {
        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $orang = $this->orangModel->search($keyword);
        } else {
            $orang = $this->orangModel;
        }
        $currentPage = $this->request->getVar('page_orang') ? $this->request->getVar('page_orang') : 1;
        $data = [
            "title" => "Daftar Orang",
            // 'orang' => $this->orangModel->findAll()
            'orang' => $orang->paginate(10, 'orang'),
            'pager' => $this->orangModel->pager,
            'currentPage' => $currentPage
        ];

        return view(modules_crud_views('orang/index'), $data);
    }
}
