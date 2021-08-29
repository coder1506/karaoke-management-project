<?php
    //kiểm tra dữ liệu
    if(isset($_REQUEST["editForm"])){
        $form = $_POST["editForm"];
        //echo '<script>alert("'.$form['maDichVu'].'");</script>';
    }

    //Lấy danh sách khách hàng, nhân viên, phòng hát, dịch vụ
    $DichVus = (new DichVu())->DanhSachDichVu(true);
    $KhachHangs = (new KhachHang())->DanhSachKhachHang(true);
    $NhanViens = (new NhanVien())->DanhSachNhanVien(true);
    $PhongHats = (new PhongHat())->DanhSachPhongHat(true);

    $name = 'Hóa đơn';
?>
<div class="content-wrapper" id="pjax-container">
  <style type="text/css"> .w-100{width:100%;} .h-100{height:100%;} .h-400px{height:400px;} .fs-12{ font-size:12px; } .fs-16{ font-size:16px; } .p-0{padding:0;} .d-flex{display:flex;} .d-initial{display:initial;} .bootstrap-switch-handle-on, .bootstrap-switch-handle-off{ white-space: nowrap; } body{ font-family:system-ui; } @keyframes scale-1-3 { from {transform: scale(1);opacity:0.8;} to {transform: scale(1.3);opacity:1;} }  .column-selector { margin-right: 10px; } .column-selector .dropdown-menu { padding: 10px; height: auto; max-height: 500px; overflow-x: hidden; } .column-selector .dropdown-menu ul { padding: 0; } .column-selector .dropdown-menu ul li { margin: 0; } .column-selector .dropdown-menu label { width: 100%; padding: 3px; } </style>
  <div id="app">
    <section class="content-header">
      <h1>
        Chương trình
        <small>Danh sách</small>
      </h1>
      <!-- breadcrumb start -->
      <!-- breadcrumb end -->
    </section>
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Sửa hóa đơn <?php echo $form['maHoaDon']; ?></h3>
              <div class="box-tools">
              </div>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form action="index.php?controller=hoadon&action=index" method="post" class="form-horizontal" accept-charset="UTF-8">
              <div class="box-body">
                <div class="fields-group">
                  <div class="col-md-12">
                    <div class="form-group hidden d-none">
                      <label for="mhd" class="col-sm-2 asterisk control-label">Mã Hóa đơn</label>
                      <div class="col-sm-8">
                        <div class="input-group">
                          <span class="input-group-addon"><i class="fa fa-pencil fa-fw" aria-hidden="true"></i></span>
                          <input type="text" id="mhd" name="editForm[maHoaDon]" class="form-control username" placeholder="Nhập mã hóa đơn" value="<?php echo $form['maHoaDon']; ?>">
                        </div>
                      </div>
                    </div>
                    <div class="form-group  ">
                      <label for="mdv" class="col-sm-2 asterisk control-label">Chọn Dịch Vụ</label>
                      <div class="col-sm-8">
                        <div class="input-group">
                          <span class="input-group-addon"><i class="fa fa-pencil fa-fw" aria-hidden="true"></i></span>
                            <select class="form-control" style="width: 100%;" name="editForm[IdDichVu]" data-placeholder="Nhập mã dịch vụ" data-value="" tabindex="-1" aria-hidden="true">
                            <?php 
                                foreach($DichVus as $item){
                                    $selected = ($form['IdDichVu'] == $item['IdDichVu']) ? 'selected' : '';
                                    echo '<option '.$selected.' value="'.$item['IdDichVu'].'">'.$item['IdDichVu'].' ('.$item['TenDV'].')'.'</option>';
                                }
                            ?>
                            </select>
                        </div>
                      </div>
                    </div>
                    <div class="form-group  ">
                      <label for="mkh" class="col-sm-2 asterisk control-label">Chọn Khách hàng</label>
                      <div class="col-sm-8">
                        <div class="input-group">
                          <span class="input-group-addon"><i class="fa fa-pencil fa-fw" aria-hidden="true"></i></span>
                            <select class="form-control" style="width: 100%;" name="editForm[IdKhachHang]" data-placeholder="Nhập mã khách hàng" data-value="" tabindex="-1" aria-hidden="true">
                            <?php 
                                foreach($KhachHangs as $item){
                                  $selected = ($form['IdKhachHang'] == $item['IdKhachHang']) ? 'selected' : '';
                                    echo '<option '.$selected.' value="'.$item['IdKhachHang'].'">'.$item['IdKhachHang'].' ('.$item['TenKhachHang'].')'.'</option>';
                                }
                            ?>
                            </select>
                        </div>
                      </div>
                    </div>
                    <div class="form-group  ">
                      <label for="mnv" class="col-sm-2 asterisk control-label">Chọn Nhân viên</label>
                      <div class="col-sm-8">
                        <div class="input-group">
                          <span class="input-group-addon"><i class="fa fa-pencil fa-fw" aria-hidden="true"></i></span>
                            <select class="form-control" style="width: 100%;" name="editForm[IdNhanVien]" data-placeholder="Nhập mã nhân viên" data-value="" tabindex="-1" aria-hidden="true">
                            <?php 
                                foreach($NhanViens as $item){
                                  $selected = ($form['IdNhanVien'] == $item['IdNhanVien']) ? 'selected' : '';
                                    echo '<option '.$selected.' value="'.$item['IdNhanVien'].'">'.$item['IdNhanVien'].' ('.$item['HoTen'].')'.'</option>';
                                }
                            ?>
                            </select>
                        </div>
                      </div>
                    </div>
                    <div class="form-group  ">
                      <label for="mph" class="col-sm-2 asterisk control-label">Chọn Phòng hát</label>
                      <div class="col-sm-8">
                        <div class="input-group">
                          <span class="input-group-addon"><i class="fa fa-pencil fa-fw" aria-hidden="true"></i></span>
                            <select class="form-control" style="width: 100%;" name="editForm[IdPhongHat]" data-value="" tabindex="-1" aria-hidden="true">
                            <?php 
                                foreach($PhongHats as $item){
                                  $selected = ($form['IdPhongHat'] == $item['IdPhongHat']) ? 'selected' : '';
                                    echo '<option '.$selected.' value="'.$item['IdPhongHat'].'">'.$item['IdPhongHat'].' ('.$item['TenPhongHat'].')'.'</option>';
                                }
                            ?>
                            </select>
                        </div>
                      </div>
                    </div>
                    <div class="form-group  ">
                      <label for="name" class="col-sm-2 asterisk control-label">Số lượng</label>
                      <div class="col-sm-8">
                        <div class="input-group">
                          <span class="input-group-addon"><i class="fa fa-pencil fa-fw" aria-hidden="true"></i></span>
                          <input type="number" min="1" id="name" name="editForm[SoLuong]" class="form-control name" value="<?php echo $form['SoLuong']; ?>">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <input type="hidden" name="_token" value="qViMudSlLkpNyN5yuj7FDrs7yF0kKYOF69XOMGOU">
                <div class="col-md-2">
                </div>
                <div class="col-md-8">
                  <div class="btn-group pull-right">
                    <button type="submit" class="btn btn-primary">Xác nhận</button>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
  </div>
</div>