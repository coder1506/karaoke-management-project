<?php
require_once 'controllers/Controller.php';
require_once 'models/NhanVien.php';
class NhanVienController extends Controller
{

    public function index()
    {
        $this->content = $this->render('views/nhanvien/index.php');
        require_once 'views/layouts/main.php';
    }
    public function add()
    {
        $this->content = $this->render('views/nhanvien/add.php');
        require_once 'views/layouts/main.php';
    }
    public function edit()
    {
        $this->content = $this->render('views/nhanvien/edit.php');
        require_once 'views/layouts/main.php';
    }
}