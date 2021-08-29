<?php
require_once 'controllers/Controller.php';
require_once 'models/DichVu.php';
class DichVuController extends Controller
{

    public function index()
    {
        $this->content = $this->render('views/dichvu/index.php');
        require_once 'views/layouts/main.php';
    }
    public function add()
    {
        $this->content = $this->render('views/dichvu/add.php');
        require_once 'views/layouts/main.php';
    }
    public function edit()
    {
        $this->content = $this->render('views/dichvu/edit.php');
        require_once 'views/layouts/main.php';
    }

    // public function getAllBoMon()
    // {
    //     $bomon =new Bomon();
    //     $pageNumber=$_GET['pageNumber'];
    //     $numberPerPage=$_GET['numberPerPage'];
    //     return $bomon->getALL($pageNumber,$numberPerPage) ;
    // }
}