<?php
require_once 'controllers/Controller.php';
require_once 'models/HoaDon.php';
class HoaDonController extends Controller
{

    public function index()
    {
        $this->content = $this->render('views/hoadon/index.php');
        require_once 'views/layouts/main.php';
    }
    public function add()
    {
        $this->content = $this->render('views/hoadon/add.php');
        require_once 'views/layouts/main.php';
    }
    public function edit()
    {
        $this->content = $this->render('views/hoadon/edit.php');
        require_once 'views/layouts/main.php';
    }
}