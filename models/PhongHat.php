<?php
require_once 'models/Model.php';
class PhongHat extends Model
{
    private $cn;

		function __construct(){
			$this->cn = new Model();
		}

    public function DanhSachPhongHat($hoatdong=false)
    {
      if(!$hoatdong)
        $sql = "SELECT * FROM phonghat";
      else
        $sql = "SELECT * FROM phonghat WHERE TrangThai = 1";

        return $this->cn->FetchAll($sql); 
    }
}