<?php
require_once 'controllers/Controller.php';
require_once 'models/KhachHang.php';
class khachhangController extends Controller
{

    public function index()
    {
        $this->content = $this->render('views/khachhang/index.php');
        require_once 'views/layouts/main.php';
    }
    public function add()
    {
        $this->content = $this->render('views/khachhang/add.php');
        require_once 'views/layouts/main.php';
    }
    public function edit()
    {
        $this->content = $this->render('views/khachhang/edit.php');
        require_once 'views/layouts/main.php';
    }
}