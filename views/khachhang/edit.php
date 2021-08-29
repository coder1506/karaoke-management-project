<?php
    //kiểm tra thêm
    if(isset($_REQUEST["editForm"])){
        $form = $_POST["editForm"];
        //echo '<script>alert("'.$form['maKhachHang'].'");</script>';
    }
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
              <h3 class="box-title">Sửa khách hàng <?php echo $form['maKhachHang']; ?></h3>
              <div class="box-tools">
              </div>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form action="index.php?controller=khachhang&action=index" method="post" class="form-horizontal" accept-charset="UTF-8">
              <div class="box-body">
                <div class="fields-group">
                  <div class="col-md-12">
                    <div class="form-group hidden d-none">
                      <label for="username" class="col-sm-2 asterisk control-label">Mã khách hàng</label>
                      <div class="col-sm-8">
                        <div class="input-group">
                          <span class="input-group-addon"><i class="fa fa-pencil fa-fw" aria-hidden="true"></i></span>
                          <input type="text" id="username" name="editForm[maKhachHang]" class="form-control username" placeholder="Nhập mã khách hàng" value="<?php echo $form['maKhachHang']; ?>">
                        </div>
                      </div>
                    </div>
                    <div class="form-group  ">
                      <label for="name" class="col-sm-2 asterisk control-label">Tên khách hàng</label>
                      <div class="col-sm-8">
                        <div class="input-group">
                          <span class="input-group-addon"><i class="fa fa-pencil fa-fw" aria-hidden="true"></i></span>
                          <input type="text" id="name" name="editForm[tenKhachHang]" class="form-control name" placeholder="Nhập Tên" value="<?php echo $form['tenKhachHang']; ?>">
                        </div>
                      </div>
                    </div>
                    <div class="form-group  ">
                      <label for="name" class="col-sm-2 asterisk control-label">Địa chỉ</label>
                      <div class="col-sm-8">
                        <div class="input-group">
                          <span class="input-group-addon"><i class="fa fa-pencil fa-fw" aria-hidden="true"></i></span>
                          <textarea type="text" id="name" name="editForm[diaChi]" class="form-control name"><?php echo $form['diaChi']; ?></textarea>
                        </div>
                      </div>
                    </div>
                    <div class="form-group  ">
                      <label for="name" class="col-sm-2 asterisk control-label">Số điện thoại</label>
                      <div class="col-sm-8">
                        <div class="input-group">
                          <span class="input-group-addon"><i class="fa fa-pencil fa-fw" aria-hidden="true"></i></span>
                          <input type="number" min="0" id="name" name="editForm[SoDT]" class="form-control name" value="<?php echo $form['SoDT']; ?>">
                        </div>
                      </div>
                    </div>
                    <div class="form-group  ">
                      <label for="roles" class="col-sm-2 asterisk control-label">Trạng thái</label>
                      <div class="col-sm-8">
                        <select class="form-control" style="width: 100%;" name="editForm[trangThai]" data-placeholder="Nhập Trạng thái" data-value="" tabindex="-1" aria-hidden="true">
                          <option <?php if($form['trangThai'] == 1) echo 'selected';?> value="1">Hoạt động</option>
                          <option <?php if($form['trangThai'] == 0) echo 'selected';?> value="0">Không hoạt động</option>
                        </select>
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