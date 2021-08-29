<?php
$username = 'Đức';
if (isset($_SESSION['user'])) {
    $username = $_SESSION['user']['username'];
}

?>
<!-- Main Header -->
<header class="main-header">
        <!-- Logo -->
        <a href="index.php?controller=dichvu&action=index" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>SR</b></span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>SMART RADIO</b></span>
        </a>
        <!-- Header Navbar -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
          <span class="sr-only">Toggle navigation</span>
          </a>
          <ul class="nav navbar-nav hidden-sm visible-lg-block">
          </ul>
          <!-- Navbar Right Menu -->
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <li>
                <a href="javascript:void(0);" class="container-refresh">
                <i class="fa fa-refresh"></i>
                </a>
              </li>
              <!-- User Account Menu -->
              <li class="dropdown user user-menu">
                <!-- Menu Toggle Button -->
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <!-- The user image in the navbar-->
                  <img src="https://truyenthanh.org.vn/uploads/images/82cbee3000db78d0096cb546464bf5df695f1125.jpg" class="user-image" alt="User Image">
                  <!-- hidden-xs hides the username on small devices so only the image appears. -->
                  <span class="hidden-xs"><?php echo $username; ?></span>
                </a>
                <ul class="dropdown-menu">
                  <!-- The user image in the menu -->
                  <li class="user-header">
                    <img src="https://truyenthanh.org.vn/uploads/images/82cbee3000db78d0096cb546464bf5df695f1125.jpg" class="img-circle" alt="User Image">
                    <p>
                    <?php echo $username; ?>
                      <small>Member</small>
                    </p>
                  </li>
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="" class="btn btn-default btn-flat">Cấu hình</a>
                    </div>
                    <div class="pull-right">
                      <a href="" class="btn btn-default btn-flat">Thoát</a>
                    </div>
                  </li>
                </ul>
              </li>
              <!-- Control Sidebar Toggle Button -->
            </ul>
          </div>
        </nav>
      </header>
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel (optional) -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="https://truyenthanh.org.vn/uploads/images/82cbee3000db78d0096cb546464bf5df695f1125.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <p><?php echo $username; ?></p>
              <!-- Status -->
              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>
          <!-- Sidebar Menu -->
          <ul class="sidebar-menu">
            <li class="header">Menu</li>
            <li class="treeview active">
              <a href="#">
              <i class="fa fa-newspaper-o"></i>
              <span>Quản lý</span>
              <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li class="<?php if($_REQUEST['controller'] == 'dichvu') echo 'active';?>">
                  <a href="index.php?controller=dichvu&action=index">
                  <i class="fa fa-product-hunt"></i>
                  <span>Dịch vụ</span>
                  </a>
                </li>
                <li class="<?php if($_REQUEST['controller'] == 'hoadon') echo 'active';?>">
                  <a href="index.php?controller=hoadon&action=index">
                  <i class="fa fa-align-right"></i>
                  <span>Hóa đơn</span>
                  </a>
                </li>
                <li class="<?php if($_REQUEST['controller'] == 'khachhang') echo 'active';?>">
                  <a href="index.php?controller=khachhang&action=index">
                  <i class="fa fa-align-right"></i>
                  <span>Khách hàng</span>
                  </a>
                </li>
                <li class="<?php if($_REQUEST['controller'] == 'nhanvien') echo 'active';?>">
                  <a href="index.php?controller=nhanvien&action=index">
                  <i class="fa fa-align-right"></i>
                  <span>Nhân viên</span>
                  </a>
                </li>
              </ul>
            </li>
          </ul>
          <!-- /.sidebar-menu -->
        </section>
        <!-- /.sidebar -->
      </aside>