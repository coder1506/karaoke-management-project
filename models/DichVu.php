<?php
require_once 'models/Model.php';
class DichVu extends Model
{
    private $cn;

		function __construct(){
			$this->cn = new Model();
		}

    public function DanhSachDichVu($hoatdong=false)
    {
        if(!$hoatdong)
          $sql = "SELECT * FROM dichvu";
        else
          $sql = "SELECT * FROM dichvu WHERE TrangThai = 1";

        return $this->cn->FetchAll($sql); 
    }
    public function ThemDichVu($IdDichVu, $TenDV, $Mota, $DonGia, $SoLuong, $TrangThai)
	  {
        $now = date("Y-m-d H:i:s");
        $sql = "INSERT INTO dichvu VALUES($IdDichVu, '$TenDV', '$Mota', '$DonGia', $SoLuong, $TrangThai, '$now', '$now')";

        //return $sql;

        return $this->cn->ExecuteQuery($sql);
	  }
    public function SuaDichVu($IdDichVu, $TenDV, $Mota, $DonGia, $SoLuong, $TrangThai)
	  {
        $now = date("Y-m-d H:i:s");

        $sql = "UPDATE dichvu SET TenDV = '$TenDV',Mota = '$Mota',DonGia = '$DonGia',SoLuong = $SoLuong, TrangThai = $TrangThai, updated_at='$now' WHERE IdDichVu = $IdDichVu";

        //return $sql;
			  return $this->cn->ExecuteQuery($sql);
	  }
    public function TimKiem($IdDichVu, $TenDV, $TrangThai)
    {
        $maDichVu = trim($IdDichVu) == ''? '" "' : $IdDichVu;

        $timten = trim($TenDV) == ''? '' : "OR tenDV like '%$TenDV%'";

        $timtrangthai = trim($TrangThai) == ''? '' : "OR TrangThai = $TrangThai";

        $sql = "SELECT * FROM dichvu WHERE IdDichVu = $maDichVu $timten $timtrangthai";
        
        return $this->cn->FetchAll($sql); 
    }
    function TangSoLuong($IdDichVu, $soluong)
		{
        $sql = "UPDATE dichvu SET SoLuong = SoLuong + $soluong WHERE IdDichVu = $IdDichVu";

			  return $this->cn->ExecuteQuery($sql);
		}
    function GiamSoLuong($IdDichVu, $soluong)
		{
        $sql = "UPDATE dichvu SET SoLuong = SoLuong - $soluong WHERE IdDichVu = $IdDichVu";

			  return $this->cn->ExecuteQuery($sql);
		}
    function XoaDichVu($ma)
		{
			  $sql = "DELETE FROM dichvu WHERE IdDichVu = $ma";

			  return $this->cn->ExecuteQuery($sql);
		}

}