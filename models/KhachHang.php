<?php
require_once 'models/Model.php';
class KhachHang extends Model
{
    private $cn;

		function __construct(){
			$this->cn = new Model();
		}

    public function DanhSachKhachHang($hoatdong=false)
    {
      if(!$hoatdong)
        $sql = "SELECT * FROM khachhang";
      else
        $sql = "SELECT * FROM khachhang WHERE TrangThai = 1";

      return $this->cn->FetchAll($sql); 
    }
    public function TimKiem($IdKhachHang, $TenKH, $TrangThai)
    {
        $maKhachHang = trim($IdKhachHang) == ''? '" "' : $IdKhachHang;

        $timten = trim($TenKH) == ''? '' : "and TenKhachHang like '%$TenKH%'";

        $timtrangthai = trim($TrangThai) == ''? '' : "and TrangThai = $TrangThai";

        $sql = "SELECT * FROM khachhang WHERE IdKhachHang = $maKhachHang $timten $timtrangthai";
        
        return $this->cn->FetchAll($sql); 
    }
    public function ThemKhachHang($IdKhachHang, $TenKH, $DiaChi, $SoDT, $TrangThai)
	  {
        $now = date("Y-m-d H:i:s");
        $sql = "INSERT INTO khachhang VALUES($IdKhachHang, '$TenKH', '$DiaChi', '$SoDT', $TrangThai, '$now', '$now')";
        return $this->cn->ExecuteQuery($sql);
	  }
    function XoaKhachHang($ma)
		{
			  $sql = "DELETE FROM khachhang WHERE IdKhachHang = $ma";

			  return $this->cn->ExecuteQuery($sql);
		}
    public function SuaKhachHang($IdKhachHang, $TenKH, $DiaChi, $SoDT, $TrangThai)
	  {
        $now = date("Y-m-d H:i:s");

        $sql = "UPDATE khachhang SET IdKhachHang = '$IdKhachHang',TenKhachHang = '$TenKH',DiaChi = '$DiaChi',SoDT = $SoDT, TrangThai = $TrangThai, updated_at='$now' WHERE IdKhachHang = $IdKhachHang";

        //return $sql;
			  return $this->cn->ExecuteQuery($sql);
	  }
}