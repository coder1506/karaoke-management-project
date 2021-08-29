<?php
require_once 'models/Model.php';
class NhanVien extends Model
{
    private $cn;

		function __construct(){
			$this->cn = new Model();
		}

    public function DanhSachNhanVien($hoatdong=false)
    {
      if(!$hoatdong)
        $sql = "SELECT * FROM nhanvien";
      else
        $sql = "SELECT * FROM nhanvien WHERE TrangThai = 1";

        return $this->cn->FetchAll($sql); 
    }
    public function TimKiem($IdNhanVien, $TenNV, $TrangThai)
    {
        $maNhanVien = trim($IdNhanVien) == ''? '" "' : $IdNhanVien;

        $timten = trim($TenNV) == ''? '' : "and HoTen like '%$TenNV%'";

        $timtrangthai = trim($TrangThai) == ''? '' : "and TrangThai = $TrangThai";

        $sql = "SELECT * FROM nhanvien WHERE IdNhanVien = $maNhanVien $timten $timtrangthai";
        
        return $this->cn->FetchAll($sql); 
    }
    public function ThemNhanVien($IdNhanVien, $TenNV, $email,$DiaChi, $SoDT, $TrangThai)
	  {
        $now = date("Y-m-d H:i:s");
        $sql = "INSERT INTO nhanvien VALUES($IdNhanVien, '$TenNV', '$email','$SoDT', '$DiaChi', $TrangThai, '$now', '$now')";
        return $this->cn->ExecuteQuery($sql);
	  }
    function XoaNhanVien($ma)
		{
			  $sql = "DELETE FROM nhanvien WHERE IdNhanVien = $ma";

			  return $this->cn->ExecuteQuery($sql);
		}
    public function SuaNhanVien($IdNhanVien, $TenNV, $email,$DiaChi, $SoDT, $TrangThai)
	  {
        $now = date("Y-m-d H:i:s");

        $sql = "UPDATE nhanvien SET IdNhanVien = '$IdNhanVien',HoTen = '$TenNV',email = '$email',DiaChi = '$DiaChi',SoDT = $SoDT, TrangThai = $TrangThai, updated_at='$now' WHERE IdNhanVien = $IdNhanVien";

        //return $sql;
			  return $this->cn->ExecuteQuery($sql);
	  }
}