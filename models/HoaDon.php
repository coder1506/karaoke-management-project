<?php
require_once 'models/Model.php';
require_once 'models/DichVu.php';
require_once 'models/KhachHang.php';
require_once 'models/NhanVien.php';
require_once 'models/PhongHat.php';
class HoaDon extends Model
{
    private $cn;

		function __construct(){
			$this->cn = new Model();
		}

    public function DanhSachHoaDon()
    {
        $sql = "SELECT hoadon.*, dichvu.DonGia FROM hoadon INNER JOIN dichvu ON hoadon.IdDichVu = dichvu.IdDichVu";

        return $this->cn->FetchAll($sql); 
    }
    public function ThemHoaDon($IdHoaDon, $IdDichVu, $IdKhachHang, $IdNhanVien, $IdPhongHat, $SoLuong)
	  {
        $now = date("Y-m-d H:i:s");
        $sql = "INSERT INTO hoadon VALUES($IdHoaDon, $IdDichVu, $IdKhachHang, $IdNhanVien, $IdPhongHat, $SoLuong,'$now', '$now', '$now')";

        $soluongdichvu = $this->cn->Fetch("SELECT * FROM dichvu")['SoLuong'];

        //nếu số lượng xuất lớn hơn số lượng tồn tại trong kho
        if($SoLuong > $soluongdichvu)
          return false;

        $status = $this->cn->ExecuteQuery($sql);

        //nếu thêm thành công, giảm số lượng dịch vụ
        if($status)
          (new DichVu())->GiamSoLuong($IdDichVu, $SoLuong);
        return $status; 
	  }
    public function SuaHoaDon($IdHoaDon, $IdDichVu, $IdKhachHang, $IdNhanVien, $IdPhongHat, $SoLuong)
	  {
        $now = date("Y-m-d H:i:s");

        $sql_tim_hd = "SELECT * FROM hoadon WHERE IdHoaDon = $IdHoaDon";

        $hoadoncu = $this->cn->Fetch($sql_tim_hd);
        $soluongcu = $hoadoncu['SoLuong'];

        $sql = "UPDATE hoadon SET IdDichVu = $IdDichVu, IdKhachHang = $IdKhachHang, IdNhanVien = $IdNhanVien, IdPhongHat = $IdPhongHat, SoLuong = $SoLuong, updated_at='$now' WHERE IdHoaDon = $IdHoaDon";

        //Nếu tăng số lượng xuất
        if($SoLuong > $soluongcu){

          $SoLuongThem = $SoLuong - $soluongcu;

          $soluongdichvu = $this->cn->Fetch("SELECT * FROM dichvu")['SoLuong'];

          //nếu số lượng xuất lớn hơn số lượng tồn tại trong kho
          if($SoLuongThem > $soluongdichvu)
            return false;
        }

        $status = $this->cn->ExecuteQuery($sql);

        if($status){

          (new DichVu())->TangSoLuong($IdDichVu, $soluongcu);

          (new DichVu())->GiamSoLuong($IdDichVu, $SoLuong);
        }
        return $status; 
	  }
    public function TimKiem($IdHoaDon, $IdDichVu, $IdKhachHang, $IdNhanVien, $IdPhongHat)
    {
        $maHoaDon = trim($IdHoaDon) == ''? '" "' : $IdHoaDon;

        $timdichvu = trim($IdDichVu) == ''? '' : "OR IdDichVu = $IdDichVu";
        $timkhachhang = trim($IdKhachHang) == ''? '' : "OR IdKhachHang = $IdKhachHang";
        $timnhanvien = trim($IdNhanVien) == ''? '' : "OR IdNhanVien = $IdNhanVien";
        $timphonghat = trim($IdPhongHat) == ''? '' : "OR IdPhongHat = $IdPhongHat";

        $sql = "SELECT * FROM hoadon WHERE IdHoaDon = $maHoaDon $timdichvu $timkhachhang $timnhanvien $timphonghat";
        
        return $this->cn->FetchAll($sql); 
    }
    function XoaHoaDon($ma)
		{
        $sql_tim_hd = "SELECT * FROM hoadon WHERE IdHoaDon = $ma";

        $hoadon = $this->cn->Fetch($sql_tim_hd);

			  $sql = "DELETE FROM hoadon WHERE IdHoaDon = $ma";

        $status = $this->cn->ExecuteQuery($sql);

        if($status){
          $IdDichVu = $hoadon['IdDichVu'];
          $SoLuong = $hoadon['SoLuong'];
          (new DichVu())->TangSoLuong($IdDichVu, $SoLuong);

        }
          
        return $status; 
		}

}