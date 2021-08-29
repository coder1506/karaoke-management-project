<?php
    //kiểm tra thêm
    if(isset($_REQUEST["addForm"])){

        $form = $_POST["addForm"];

        $NhanVien = new NhanVien();

        $status = $NhanVien->ThemNhanVien(
            $form["maNhanVien"],
            $form["tenNhanVien"],
            $form["email"],
            $form["diaChi"],
            $form["SoDT"],
            $form["trangThai"]
        );
        if(!$status){
            echo '<script>alert("Có lỗi xảy ra khi thực hiện truy vấn");</script>';
        }
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
              <h3 class="box-title">Tạo</h3>
              <div class="box-tools">
              </div>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form action="index.php?controller=NhanVien&action=index" method="post" class="form-horizontal" accept-charset="UTF-8">
              <div class="box-body">
                <div class="fields-group">
                  <div class="col-md-12">
                    <div class="form-group  ">
                      <label for="username" class="col-sm-2 asterisk control-label">Mã Nhân viên</label>
                      <div class="col-sm-8">
                        <div class="input-group">
                          <span class="input-group-addon"><i class="fa fa-pencil fa-fw" aria-hidden="true"></i></span>
                          <input type="text" id="username" name="addForm[maNhanVien]" value="" class="form-control username" placeholder="Nhập mã Nhân viên">
                        </div>
                      </div>
                    </div>
                    <div class="form-group  ">
                      <label for="name" class="col-sm-2 asterisk control-label">Tên Nhân viên</label>
                      <div class="col-sm-8">
                        <div class="input-group">
                          <span class="input-group-addon"><i class="fa fa-pencil fa-fw" aria-hidden="true"></i></span>
                          <input type="text" id="name" name="addForm[tenNhanVien]" value="" class="form-control name" placeholder="Nhập Tên">
                        </div>
                      </div>
                    </div>
                    <div class="form-group  ">
                      <label for="name" class="col-sm-2 asterisk control-label">Email</label>
                      <div class="col-sm-8">
                        <div class="input-group">
                          <span class="input-group-addon"><i class="fa fa-pencil fa-fw" aria-hidden="true"></i></span>
                          <input type="text" id="name" name="addForm[email]" value="" class="form-control name" >
                        </div>
                      </div>
                    </div>
                    <div class="form-group  ">
                      <label for="name" class="col-sm-2 asterisk control-label">Địa chỉ</label>
                      <div class="col-sm-8">
                        <div class="input-group">
                          <span class="input-group-addon"><i class="fa fa-pencil fa-fw" aria-hidden="true"></i></span>
                          <textarea type="text" id="name" name="addForm[diaChi]" class="form-control name"></textarea>
                        </div>
                      </div>
                    </div>
                    <div class="form-group  ">
                      <label for="name" class="col-sm-2 asterisk control-label">Số điện thoại</label>
                      <div class="col-sm-8">
                        <div class="input-group">
                          <span class="input-group-addon"><i class="fa fa-pencil fa-fw" aria-hidden="true"></i></span>
                          <input type="number" min="0" id="name" name="addForm[SoDT]" class="form-control name">
                        </div>
                      </div>
                    </div>
                    <div class="form-group  ">
                      <label for="roles" class="col-sm-2 asterisk control-label">Trạng thái</label>
                      <div class="col-sm-8">
                        <select class="form-control" style="width: 100%;" name="addForm[trangThai]" data-placeholder="Nhập Trạng thái" data-value="" tabindex="-1" aria-hidden="true">
                          <option value="1">Hoạt động</option>
                          <option value="0">Không hoạt động</option>
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
  <script data-exec-on-popstate>
    $(function () {
    	             $('#endDate_start').datetimepicker({"format":"YYYY-MM-DD","locale":"en"});
                $('#endDate_end').datetimepicker({"format":"YYYY-MM-DD","locale":"en","useCurrent":false});
                $("#endDate_start").on("dp.change", function (e) {
                    $('#endDate_end').data("DateTimePicker").minDate(e.date);
                });
                $("#endDate_end").on("dp.change", function (e) {
                    $('#endDate_start').data("DateTimePicker").maxDate(e.date);
                });  $('.grid-row-checkbox').iCheck({checkboxClass:'icheckbox_minimal-blue'}).on('ifChanged', function () {
    
        var id = $(this).data('id');
    
        if (this.checked) {
            $.admin.grid.select(id);
            $(this).closest('tr').css('background-color', '#ffffd5');
        } else {
            $.admin.grid.unselect(id);
            $(this).closest('tr').css('background-color', '');
        }
    }).on('ifClicked', function () {
    
        var id = $(this).data('id');
    
        if (this.checked) {
            $.admin.grid.unselect(id);
        } else {
            $.admin.grid.select(id);
        }
    
        var selected = $.admin.grid.selected().length;
    
        if (selected > 0) {
            $('.grid-select-all-btn').show();
        } else {
            $('.grid-select-all-btn').hide();
        }
    
        $('.grid-select-all-btn .selected').html("{n} mục đã chọn".replace('{n}', selected));
    });
      ;(function () {
        var expand = $('.grid-expand-grid-row');
    
        
        expand.on('click', function () {
    
            if ($(this).data('inserted') == '0') {
    
                var name = $(this).data('name');
                var row = $(this).closest('tr');
    
                row.after($('template.grid-expand-'+name).html());
    
                $(this).data('inserted', 1);
            }
    
            $("i", this).toggleClass("fa-angle-double-down fa-angle-double-up");
        });
    
        
        })();  var actionResolver = function (data) {
    
                var response = data[0];
                var target   = data[1];
    
                if (typeof response !== 'object') {
                    return $.admin.swal({type: 'error', title: 'Oops!'});
                }
    
                var then = function (then) {
                    if (then.action == 'refresh') {
                        $.admin.reload();
                    }
    
                    if (then.action == 'download') {
                        window.open(then.value, '_blank');
                    }
    
                    if (then.action == 'redirect') {
                        $.admin.redirect(then.value);
                    }
    
                    if (then.action == 'location') {
                        window.location = then.value;
                    }
    
                    if (then.action == 'open') {
                        window.open(then.value, '_blank');
                    }
                };
    
                if (typeof response.html === 'string') {
                    target.html(response.html);
                }
    
                if (typeof response.swal === 'object') {
                    $.admin.swal(response.swal);
                }
    
                if (typeof response.toastr === 'object' && response.toastr.type) {
                    $.admin.toastr[response.toastr.type](response.toastr.content, '', response.toastr.options);
                }
    
                if (response.then) {
                  then(response.then);
                }
            };
    
            var actionCatcher = function (request) {
                if (request && typeof request.responseJSON === 'object') {
                    $.admin.toastr.error(request.responseJSON.message, '', {positionClass:"toast-bottom-center", timeOut: 10000}).css("width","500px")
                }
            };  
    (function ($) {
        $('.grid-row-action-611dfa7a0cfa22646').off('click').on('click', function() {
            var data = $(this).data();
            var target = $(this);
            Object.assign(data, {"_model":"App_Program"});
            
                    var process = $.admin.swal({
                "type": "question",
        "showCancelButton": true,
        "showLoaderOnConfirm": true,
        "confirmButtonText": "X\u00f3a",
        "cancelButtonText": "H\u1ee7y",
        "title": "B\u1ea1n c\u00f3 th\u1ef1c s\u1ef1 mu\u1ed1n x\u00f3a?",
        "text": "",
        "confirmButtonColor": "#d33",
                preConfirm: function(input) {
                    return new Promise(function(resolve, reject) {
                        Object.assign(data, {
                            _token: $.admin.token,
                            _action: 'App_Admin_Actions_Program_Delete',
                            _input: input,
                        });
    
                        $.ajax({
                            method: 'POST',
                            url: 'https://truyenthanh.org.vn/_handle_action_',
                            data: data,
                            success: function (data) {
                                resolve(data);
                            },
                            error:function(request){
                                reject(request);
                            }
                        });
                    });
                }
            }).then(function(result) {
                if (typeof result.dismiss !== 'undefined') {
                    return Promise.reject();
                }
                
                if (typeof result.status === "boolean") {
                    var response = result;
                } else {
                    var response = result.value;
                }
    
                return [response, target];
            });
            process.then(actionResolver).catch(actionCatcher);
        });
    })(jQuery);
      ;(function () {
        $('.table-responsive').on('shown.bs.dropdown', function(e) {
            var t = $(this),
                m = $(e.target).find('.dropdown-menu'),
                tb = t.offset().top + t.height(),
                mb = m.offset().top + m.outerHeight(true),
                d = 20;
            if (t[0].scrollWidth > t.innerWidth()) {
                if (mb + d > tb) {
                    t.css('padding-bottom', ((mb + d) - tb));
                }
            } else {
                t.css('overflow', 'visible');
            }
        }).on('hidden.bs.dropdown', function() {
            $(this).css({
                'padding-bottom': '',
                'overflow': ''
            });
        });
    })();  
    (function ($) {
        $('.grid-row-action-611dfa7a0d2aa3939').off('click').on('click', function() {
            var data = $(this).data();
            var target = $(this);
            Object.assign(data, {"_model":"App_Program"});
            
                    var process = $.admin.swal({
                "type": "question",
        "showCancelButton": true,
        "showLoaderOnConfirm": true,
        "confirmButtonText": "X\u00f3a",
        "cancelButtonText": "H\u1ee7y",
        "title": "B\u1ea1n c\u00f3 th\u1ef1c s\u1ef1 mu\u1ed1n x\u00f3a?",
        "text": "",
        "confirmButtonColor": "#d33",
                preConfirm: function(input) {
                    return new Promise(function(resolve, reject) {
                        Object.assign(data, {
                            _token: $.admin.token,
                            _action: 'App_Admin_Actions_Program_Delete',
                            _input: input,
                        });
    
                        $.ajax({
                            method: 'POST',
                            url: 'https://truyenthanh.org.vn/_handle_action_',
                            data: data,
                            success: function (data) {
                                resolve(data);
                            },
                            error:function(request){
                                reject(request);
                            }
                        });
                    });
                }
            }).then(function(result) {
                if (typeof result.dismiss !== 'undefined') {
                    return Promise.reject();
                }
                
                if (typeof result.status === "boolean") {
                    var response = result;
                } else {
                    var response = result.value;
                }
    
                return [response, target];
            });
            process.then(actionResolver).catch(actionCatcher);
        });
    })(jQuery);
      
    (function ($) {
        $('.grid-row-action-611dfa7a0d49b4330').off('click').on('click', function() {
            var data = $(this).data();
            var target = $(this);
            Object.assign(data, {"_model":"App_Program"});
            
                    var process = $.admin.swal({
                "type": "question",
        "showCancelButton": true,
        "showLoaderOnConfirm": true,
        "confirmButtonText": "X\u00f3a",
        "cancelButtonText": "H\u1ee7y",
        "title": "B\u1ea1n c\u00f3 th\u1ef1c s\u1ef1 mu\u1ed1n x\u00f3a?",
        "text": "",
        "confirmButtonColor": "#d33",
                preConfirm: function(input) {
                    return new Promise(function(resolve, reject) {
                        Object.assign(data, {
                            _token: $.admin.token,
                            _action: 'App_Admin_Actions_Program_Delete',
                            _input: input,
                        });
    
                        $.ajax({
                            method: 'POST',
                            url: 'https://truyenthanh.org.vn/_handle_action_',
                            data: data,
                            success: function (data) {
                                resolve(data);
                            },
                            error:function(request){
                                reject(request);
                            }
                        });
                    });
                }
            }).then(function(result) {
                if (typeof result.dismiss !== 'undefined') {
                    return Promise.reject();
                }
                
                if (typeof result.status === "boolean") {
                    var response = result;
                } else {
                    var response = result.value;
                }
    
                return [response, target];
            });
            process.then(actionResolver).catch(actionCatcher);
        });
    })(jQuery);
      
    (function ($) {
        $('.grid-row-action-611dfa7a0d71a1492').off('click').on('click', function() {
            var data = $(this).data();
            var target = $(this);
            Object.assign(data, {"_model":"App_Program"});
            
                    var process = $.admin.swal({
                "type": "question",
        "showCancelButton": true,
        "showLoaderOnConfirm": true,
        "confirmButtonText": "X\u00f3a",
        "cancelButtonText": "H\u1ee7y",
        "title": "B\u1ea1n c\u00f3 th\u1ef1c s\u1ef1 mu\u1ed1n x\u00f3a?",
        "text": "",
        "confirmButtonColor": "#d33",
                preConfirm: function(input) {
                    return new Promise(function(resolve, reject) {
                        Object.assign(data, {
                            _token: $.admin.token,
                            _action: 'App_Admin_Actions_Program_Delete',
                            _input: input,
                        });
    
                        $.ajax({
                            method: 'POST',
                            url: 'https://truyenthanh.org.vn/_handle_action_',
                            data: data,
                            success: function (data) {
                                resolve(data);
                            },
                            error:function(request){
                                reject(request);
                            }
                        });
                    });
                }
            }).then(function(result) {
                if (typeof result.dismiss !== 'undefined') {
                    return Promise.reject();
                }
                
                if (typeof result.status === "boolean") {
                    var response = result;
                } else {
                    var response = result.value;
                }
    
                return [response, target];
            });
            process.then(actionResolver).catch(actionCatcher);
        });
    })(jQuery);
      
    (function ($) {
        $('.grid-row-action-611dfa7a0d9065873').off('click').on('click', function() {
            var data = $(this).data();
            var target = $(this);
            Object.assign(data, {"_model":"App_Program"});
            
                    var process = $.admin.swal({
                "type": "question",
        "showCancelButton": true,
        "showLoaderOnConfirm": true,
        "confirmButtonText": "X\u00f3a",
        "cancelButtonText": "H\u1ee7y",
        "title": "B\u1ea1n c\u00f3 th\u1ef1c s\u1ef1 mu\u1ed1n x\u00f3a?",
        "text": "",
        "confirmButtonColor": "#d33",
                preConfirm: function(input) {
                    return new Promise(function(resolve, reject) {
                        Object.assign(data, {
                            _token: $.admin.token,
                            _action: 'App_Admin_Actions_Program_Delete',
                            _input: input,
                        });
    
                        $.ajax({
                            method: 'POST',
                            url: 'https://truyenthanh.org.vn/_handle_action_',
                            data: data,
                            success: function (data) {
                                resolve(data);
                            },
                            error:function(request){
                                reject(request);
                            }
                        });
                    });
                }
            }).then(function(result) {
                if (typeof result.dismiss !== 'undefined') {
                    return Promise.reject();
                }
                
                if (typeof result.status === "boolean") {
                    var response = result;
                } else {
                    var response = result.value;
                }
    
                return [response, target];
            });
            process.then(actionResolver).catch(actionCatcher);
        });
    })(jQuery);
      
    (function ($) {
        $('.grid-row-action-611dfa7a0dafe2406').off('click').on('click', function() {
            var data = $(this).data();
            var target = $(this);
            Object.assign(data, {"_model":"App_Program"});
            
                    var process = $.admin.swal({
                "type": "question",
        "showCancelButton": true,
        "showLoaderOnConfirm": true,
        "confirmButtonText": "X\u00f3a",
        "cancelButtonText": "H\u1ee7y",
        "title": "B\u1ea1n c\u00f3 th\u1ef1c s\u1ef1 mu\u1ed1n x\u00f3a?",
        "text": "",
        "confirmButtonColor": "#d33",
                preConfirm: function(input) {
                    return new Promise(function(resolve, reject) {
                        Object.assign(data, {
                            _token: $.admin.token,
                            _action: 'App_Admin_Actions_Program_Delete',
                            _input: input,
                        });
    
                        $.ajax({
                            method: 'POST',
                            url: 'https://truyenthanh.org.vn/_handle_action_',
                            data: data,
                            success: function (data) {
                                resolve(data);
                            },
                            error:function(request){
                                reject(request);
                            }
                        });
                    });
                }
            }).then(function(result) {
                if (typeof result.dismiss !== 'undefined') {
                    return Promise.reject();
                }
                
                if (typeof result.status === "boolean") {
                    var response = result;
                } else {
                    var response = result.value;
                }
    
                return [response, target];
            });
            process.then(actionResolver).catch(actionCatcher);
        });
    })(jQuery);
      
    (function ($) {
        $('.grid-row-action-611dfa7a0dcda2465').off('click').on('click', function() {
            var data = $(this).data();
            var target = $(this);
            Object.assign(data, {"_model":"App_Program"});
            
                    var process = $.admin.swal({
                "type": "question",
        "showCancelButton": true,
        "showLoaderOnConfirm": true,
        "confirmButtonText": "X\u00f3a",
        "cancelButtonText": "H\u1ee7y",
        "title": "B\u1ea1n c\u00f3 th\u1ef1c s\u1ef1 mu\u1ed1n x\u00f3a?",
        "text": "",
        "confirmButtonColor": "#d33",
                preConfirm: function(input) {
                    return new Promise(function(resolve, reject) {
                        Object.assign(data, {
                            _token: $.admin.token,
                            _action: 'App_Admin_Actions_Program_Delete',
                            _input: input,
                        });
    
                        $.ajax({
                            method: 'POST',
                            url: 'https://truyenthanh.org.vn/_handle_action_',
                            data: data,
                            success: function (data) {
                                resolve(data);
                            },
                            error:function(request){
                                reject(request);
                            }
                        });
                    });
                }
            }).then(function(result) {
                if (typeof result.dismiss !== 'undefined') {
                    return Promise.reject();
                }
                
                if (typeof result.status === "boolean") {
                    var response = result;
                } else {
                    var response = result.value;
                }
    
                return [response, target];
            });
            process.then(actionResolver).catch(actionCatcher);
        });
    })(jQuery);
      
    (function ($) {
        $('.grid-row-action-611dfa7a0dec71366').off('click').on('click', function() {
            var data = $(this).data();
            var target = $(this);
            Object.assign(data, {"_model":"App_Program"});
            
                    var process = $.admin.swal({
                "type": "question",
        "showCancelButton": true,
        "showLoaderOnConfirm": true,
        "confirmButtonText": "X\u00f3a",
        "cancelButtonText": "H\u1ee7y",
        "title": "B\u1ea1n c\u00f3 th\u1ef1c s\u1ef1 mu\u1ed1n x\u00f3a?",
        "text": "",
        "confirmButtonColor": "#d33",
                preConfirm: function(input) {
                    return new Promise(function(resolve, reject) {
                        Object.assign(data, {
                            _token: $.admin.token,
                            _action: 'App_Admin_Actions_Program_Delete',
                            _input: input,
                        });
    
                        $.ajax({
                            method: 'POST',
                            url: 'https://truyenthanh.org.vn/_handle_action_',
                            data: data,
                            success: function (data) {
                                resolve(data);
                            },
                            error:function(request){
                                reject(request);
                            }
                        });
                    });
                }
            }).then(function(result) {
                if (typeof result.dismiss !== 'undefined') {
                    return Promise.reject();
                }
                
                if (typeof result.status === "boolean") {
                    var response = result;
                } else {
                    var response = result.value;
                }
    
                return [response, target];
            });
            process.then(actionResolver).catch(actionCatcher);
        });
    })(jQuery);
      
    (function ($) {
        $('.grid-row-action-611dfa7a0e0a05553').off('click').on('click', function() {
            var data = $(this).data();
            var target = $(this);
            Object.assign(data, {"_model":"App_Program"});
            
                    var process = $.admin.swal({
                "type": "question",
        "showCancelButton": true,
        "showLoaderOnConfirm": true,
        "confirmButtonText": "X\u00f3a",
        "cancelButtonText": "H\u1ee7y",
        "title": "B\u1ea1n c\u00f3 th\u1ef1c s\u1ef1 mu\u1ed1n x\u00f3a?",
        "text": "",
        "confirmButtonColor": "#d33",
                preConfirm: function(input) {
                    return new Promise(function(resolve, reject) {
                        Object.assign(data, {
                            _token: $.admin.token,
                            _action: 'App_Admin_Actions_Program_Delete',
                            _input: input,
                        });
    
                        $.ajax({
                            method: 'POST',
                            url: 'https://truyenthanh.org.vn/_handle_action_',
                            data: data,
                            success: function (data) {
                                resolve(data);
                            },
                            error:function(request){
                                reject(request);
                            }
                        });
                    });
                }
            }).then(function(result) {
                if (typeof result.dismiss !== 'undefined') {
                    return Promise.reject();
                }
                
                if (typeof result.status === "boolean") {
                    var response = result;
                } else {
                    var response = result.value;
                }
    
                return [response, target];
            });
            process.then(actionResolver).catch(actionCatcher);
        });
    })(jQuery);
      
    (function ($) {
        $('.grid-row-action-611dfa7a0e2a69453').off('click').on('click', function() {
            var data = $(this).data();
            var target = $(this);
            Object.assign(data, {"_model":"App_Program"});
            
                    var process = $.admin.swal({
                "type": "question",
        "showCancelButton": true,
        "showLoaderOnConfirm": true,
        "confirmButtonText": "X\u00f3a",
        "cancelButtonText": "H\u1ee7y",
        "title": "B\u1ea1n c\u00f3 th\u1ef1c s\u1ef1 mu\u1ed1n x\u00f3a?",
        "text": "",
        "confirmButtonColor": "#d33",
                preConfirm: function(input) {
                    return new Promise(function(resolve, reject) {
                        Object.assign(data, {
                            _token: $.admin.token,
                            _action: 'App_Admin_Actions_Program_Delete',
                            _input: input,
                        });
    
                        $.ajax({
                            method: 'POST',
                            url: 'https://truyenthanh.org.vn/_handle_action_',
                            data: data,
                            success: function (data) {
                                resolve(data);
                            },
                            error:function(request){
                                reject(request);
                            }
                        });
                    });
                }
            }).then(function(result) {
                if (typeof result.dismiss !== 'undefined') {
                    return Promise.reject();
                }
                
                if (typeof result.status === "boolean") {
                    var response = result;
                } else {
                    var response = result.value;
                }
    
                return [response, target];
            });
            process.then(actionResolver).catch(actionCatcher);
        });
    })(jQuery);
      
    (function ($) {
        $('.grid-row-action-611dfa7a0e47c9716').off('click').on('click', function() {
            var data = $(this).data();
            var target = $(this);
            Object.assign(data, {"_model":"App_Program"});
            
                    var process = $.admin.swal({
                "type": "question",
        "showCancelButton": true,
        "showLoaderOnConfirm": true,
        "confirmButtonText": "X\u00f3a",
        "cancelButtonText": "H\u1ee7y",
        "title": "B\u1ea1n c\u00f3 th\u1ef1c s\u1ef1 mu\u1ed1n x\u00f3a?",
        "text": "",
        "confirmButtonColor": "#d33",
                preConfirm: function(input) {
                    return new Promise(function(resolve, reject) {
                        Object.assign(data, {
                            _token: $.admin.token,
                            _action: 'App_Admin_Actions_Program_Delete',
                            _input: input,
                        });
    
                        $.ajax({
                            method: 'POST',
                            url: 'https://truyenthanh.org.vn/_handle_action_',
                            data: data,
                            success: function (data) {
                                resolve(data);
                            },
                            error:function(request){
                                reject(request);
                            }
                        });
                    });
                }
            }).then(function(result) {
                if (typeof result.dismiss !== 'undefined') {
                    return Promise.reject();
                }
                
                if (typeof result.status === "boolean") {
                    var response = result;
                } else {
                    var response = result.value;
                }
    
                return [response, target];
            });
            process.then(actionResolver).catch(actionCatcher);
        });
    })(jQuery);
      
    (function ($) {
        $('.grid-row-action-611dfa7a0e66b6937').off('click').on('click', function() {
            var data = $(this).data();
            var target = $(this);
            Object.assign(data, {"_model":"App_Program"});
            
                    var process = $.admin.swal({
                "type": "question",
        "showCancelButton": true,
        "showLoaderOnConfirm": true,
        "confirmButtonText": "X\u00f3a",
        "cancelButtonText": "H\u1ee7y",
        "title": "B\u1ea1n c\u00f3 th\u1ef1c s\u1ef1 mu\u1ed1n x\u00f3a?",
        "text": "",
        "confirmButtonColor": "#d33",
                preConfirm: function(input) {
                    return new Promise(function(resolve, reject) {
                        Object.assign(data, {
                            _token: $.admin.token,
                            _action: 'App_Admin_Actions_Program_Delete',
                            _input: input,
                        });
    
                        $.ajax({
                            method: 'POST',
                            url: 'https://truyenthanh.org.vn/_handle_action_',
                            data: data,
                            success: function (data) {
                                resolve(data);
                            },
                            error:function(request){
                                reject(request);
                            }
                        });
                    });
                }
            }).then(function(result) {
                if (typeof result.dismiss !== 'undefined') {
                    return Promise.reject();
                }
                
                if (typeof result.status === "boolean") {
                    var response = result;
                } else {
                    var response = result.value;
                }
    
                return [response, target];
            });
            process.then(actionResolver).catch(actionCatcher);
        });
    })(jQuery);
      
    (function ($) {
        $('.grid-row-action-611dfa7a0e8462367').off('click').on('click', function() {
            var data = $(this).data();
            var target = $(this);
            Object.assign(data, {"_model":"App_Program"});
            
                    var process = $.admin.swal({
                "type": "question",
        "showCancelButton": true,
        "showLoaderOnConfirm": true,
        "confirmButtonText": "X\u00f3a",
        "cancelButtonText": "H\u1ee7y",
        "title": "B\u1ea1n c\u00f3 th\u1ef1c s\u1ef1 mu\u1ed1n x\u00f3a?",
        "text": "",
        "confirmButtonColor": "#d33",
                preConfirm: function(input) {
                    return new Promise(function(resolve, reject) {
                        Object.assign(data, {
                            _token: $.admin.token,
                            _action: 'App_Admin_Actions_Program_Delete',
                            _input: input,
                        });
    
                        $.ajax({
                            method: 'POST',
                            url: 'https://truyenthanh.org.vn/_handle_action_',
                            data: data,
                            success: function (data) {
                                resolve(data);
                            },
                            error:function(request){
                                reject(request);
                            }
                        });
                    });
                }
            }).then(function(result) {
                if (typeof result.dismiss !== 'undefined') {
                    return Promise.reject();
                }
                
                if (typeof result.status === "boolean") {
                    var response = result;
                } else {
                    var response = result.value;
                }
    
                return [response, target];
            });
            process.then(actionResolver).catch(actionCatcher);
        });
    })(jQuery);
      
    (function ($) {
        $('.grid-row-action-611dfa7a0ea3d4655').off('click').on('click', function() {
            var data = $(this).data();
            var target = $(this);
            Object.assign(data, {"_model":"App_Program"});
            
                    var process = $.admin.swal({
                "type": "question",
        "showCancelButton": true,
        "showLoaderOnConfirm": true,
        "confirmButtonText": "X\u00f3a",
        "cancelButtonText": "H\u1ee7y",
        "title": "B\u1ea1n c\u00f3 th\u1ef1c s\u1ef1 mu\u1ed1n x\u00f3a?",
        "text": "",
        "confirmButtonColor": "#d33",
                preConfirm: function(input) {
                    return new Promise(function(resolve, reject) {
                        Object.assign(data, {
                            _token: $.admin.token,
                            _action: 'App_Admin_Actions_Program_Delete',
                            _input: input,
                        });
    
                        $.ajax({
                            method: 'POST',
                            url: 'https://truyenthanh.org.vn/_handle_action_',
                            data: data,
                            success: function (data) {
                                resolve(data);
                            },
                            error:function(request){
                                reject(request);
                            }
                        });
                    });
                }
            }).then(function(result) {
                if (typeof result.dismiss !== 'undefined') {
                    return Promise.reject();
                }
                
                if (typeof result.status === "boolean") {
                    var response = result;
                } else {
                    var response = result.value;
                }
    
                return [response, target];
            });
            process.then(actionResolver).catch(actionCatcher);
        });
    })(jQuery);
      
    (function ($) {
        $('.grid-row-action-611dfa7a0ec167641').off('click').on('click', function() {
            var data = $(this).data();
            var target = $(this);
            Object.assign(data, {"_model":"App_Program"});
            
                    var process = $.admin.swal({
                "type": "question",
        "showCancelButton": true,
        "showLoaderOnConfirm": true,
        "confirmButtonText": "X\u00f3a",
        "cancelButtonText": "H\u1ee7y",
        "title": "B\u1ea1n c\u00f3 th\u1ef1c s\u1ef1 mu\u1ed1n x\u00f3a?",
        "text": "",
        "confirmButtonColor": "#d33",
                preConfirm: function(input) {
                    return new Promise(function(resolve, reject) {
                        Object.assign(data, {
                            _token: $.admin.token,
                            _action: 'App_Admin_Actions_Program_Delete',
                            _input: input,
                        });
    
                        $.ajax({
                            method: 'POST',
                            url: 'https://truyenthanh.org.vn/_handle_action_',
                            data: data,
                            success: function (data) {
                                resolve(data);
                            },
                            error:function(request){
                                reject(request);
                            }
                        });
                    });
                }
            }).then(function(result) {
                if (typeof result.dismiss !== 'undefined') {
                    return Promise.reject();
                }
                
                if (typeof result.status === "boolean") {
                    var response = result;
                } else {
                    var response = result.value;
                }
    
                return [response, target];
            });
            process.then(actionResolver).catch(actionCatcher);
        });
    })(jQuery);
      
    (function ($) {
        $('.grid-row-action-611dfa7a0ee015189').off('click').on('click', function() {
            var data = $(this).data();
            var target = $(this);
            Object.assign(data, {"_model":"App_Program"});
            
                    var process = $.admin.swal({
                "type": "question",
        "showCancelButton": true,
        "showLoaderOnConfirm": true,
        "confirmButtonText": "X\u00f3a",
        "cancelButtonText": "H\u1ee7y",
        "title": "B\u1ea1n c\u00f3 th\u1ef1c s\u1ef1 mu\u1ed1n x\u00f3a?",
        "text": "",
        "confirmButtonColor": "#d33",
                preConfirm: function(input) {
                    return new Promise(function(resolve, reject) {
                        Object.assign(data, {
                            _token: $.admin.token,
                            _action: 'App_Admin_Actions_Program_Delete',
                            _input: input,
                        });
    
                        $.ajax({
                            method: 'POST',
                            url: 'https://truyenthanh.org.vn/_handle_action_',
                            data: data,
                            success: function (data) {
                                resolve(data);
                            },
                            error:function(request){
                                reject(request);
                            }
                        });
                    });
                }
            }).then(function(result) {
                if (typeof result.dismiss !== 'undefined') {
                    return Promise.reject();
                }
                
                if (typeof result.status === "boolean") {
                    var response = result;
                } else {
                    var response = result.value;
                }
    
                return [response, target];
            });
            process.then(actionResolver).catch(actionCatcher);
        });
    })(jQuery);
      
    (function ($) {
        $('.grid-row-action-611dfa7a0efd81317').off('click').on('click', function() {
            var data = $(this).data();
            var target = $(this);
            Object.assign(data, {"_model":"App_Program"});
            
                    var process = $.admin.swal({
                "type": "question",
        "showCancelButton": true,
        "showLoaderOnConfirm": true,
        "confirmButtonText": "X\u00f3a",
        "cancelButtonText": "H\u1ee7y",
        "title": "B\u1ea1n c\u00f3 th\u1ef1c s\u1ef1 mu\u1ed1n x\u00f3a?",
        "text": "",
        "confirmButtonColor": "#d33",
                preConfirm: function(input) {
                    return new Promise(function(resolve, reject) {
                        Object.assign(data, {
                            _token: $.admin.token,
                            _action: 'App_Admin_Actions_Program_Delete',
                            _input: input,
                        });
    
                        $.ajax({
                            method: 'POST',
                            url: 'https://truyenthanh.org.vn/_handle_action_',
                            data: data,
                            success: function (data) {
                                resolve(data);
                            },
                            error:function(request){
                                reject(request);
                            }
                        });
                    });
                }
            }).then(function(result) {
                if (typeof result.dismiss !== 'undefined') {
                    return Promise.reject();
                }
                
                if (typeof result.status === "boolean") {
                    var response = result;
                } else {
                    var response = result.value;
                }
    
                return [response, target];
            });
            process.then(actionResolver).catch(actionCatcher);
        });
    })(jQuery);
      
    (function ($) {
        $('.grid-row-action-611dfa7a0f1c35872').off('click').on('click', function() {
            var data = $(this).data();
            var target = $(this);
            Object.assign(data, {"_model":"App_Program"});
            
                    var process = $.admin.swal({
                "type": "question",
        "showCancelButton": true,
        "showLoaderOnConfirm": true,
        "confirmButtonText": "X\u00f3a",
        "cancelButtonText": "H\u1ee7y",
        "title": "B\u1ea1n c\u00f3 th\u1ef1c s\u1ef1 mu\u1ed1n x\u00f3a?",
        "text": "",
        "confirmButtonColor": "#d33",
                preConfirm: function(input) {
                    return new Promise(function(resolve, reject) {
                        Object.assign(data, {
                            _token: $.admin.token,
                            _action: 'App_Admin_Actions_Program_Delete',
                            _input: input,
                        });
    
                        $.ajax({
                            method: 'POST',
                            url: 'https://truyenthanh.org.vn/_handle_action_',
                            data: data,
                            success: function (data) {
                                resolve(data);
                            },
                            error:function(request){
                                reject(request);
                            }
                        });
                    });
                }
            }).then(function(result) {
                if (typeof result.dismiss !== 'undefined') {
                    return Promise.reject();
                }
                
                if (typeof result.status === "boolean") {
                    var response = result;
                } else {
                    var response = result.value;
                }
    
                return [response, target];
            });
            process.then(actionResolver).catch(actionCatcher);
        });
    })(jQuery);
      
    (function ($) {
        $('.grid-row-action-611dfa7a0f39b6877').off('click').on('click', function() {
            var data = $(this).data();
            var target = $(this);
            Object.assign(data, {"_model":"App_Program"});
            
                    var process = $.admin.swal({
                "type": "question",
        "showCancelButton": true,
        "showLoaderOnConfirm": true,
        "confirmButtonText": "X\u00f3a",
        "cancelButtonText": "H\u1ee7y",
        "title": "B\u1ea1n c\u00f3 th\u1ef1c s\u1ef1 mu\u1ed1n x\u00f3a?",
        "text": "",
        "confirmButtonColor": "#d33",
                preConfirm: function(input) {
                    return new Promise(function(resolve, reject) {
                        Object.assign(data, {
                            _token: $.admin.token,
                            _action: 'App_Admin_Actions_Program_Delete',
                            _input: input,
                        });
    
                        $.ajax({
                            method: 'POST',
                            url: 'https://truyenthanh.org.vn/_handle_action_',
                            data: data,
                            success: function (data) {
                                resolve(data);
                            },
                            error:function(request){
                                reject(request);
                            }
                        });
                    });
                }
            }).then(function(result) {
                if (typeof result.dismiss !== 'undefined') {
                    return Promise.reject();
                }
                
                if (typeof result.status === "boolean") {
                    var response = result;
                } else {
                    var response = result.value;
                }
    
                return [response, target];
            });
            process.then(actionResolver).catch(actionCatcher);
        });
    })(jQuery);
      
    (function ($) {
        $('.grid-row-action-611dfa7a0f57f4192').off('click').on('click', function() {
            var data = $(this).data();
            var target = $(this);
            Object.assign(data, {"_model":"App_Program"});
            
                    var process = $.admin.swal({
                "type": "question",
        "showCancelButton": true,
        "showLoaderOnConfirm": true,
        "confirmButtonText": "X\u00f3a",
        "cancelButtonText": "H\u1ee7y",
        "title": "B\u1ea1n c\u00f3 th\u1ef1c s\u1ef1 mu\u1ed1n x\u00f3a?",
        "text": "",
        "confirmButtonColor": "#d33",
                preConfirm: function(input) {
                    return new Promise(function(resolve, reject) {
                        Object.assign(data, {
                            _token: $.admin.token,
                            _action: 'App_Admin_Actions_Program_Delete',
                            _input: input,
                        });
    
                        $.ajax({
                            method: 'POST',
                            url: 'https://truyenthanh.org.vn/_handle_action_',
                            data: data,
                            success: function (data) {
                                resolve(data);
                            },
                            error:function(request){
                                reject(request);
                            }
                        });
                    });
                }
            }).then(function(result) {
                if (typeof result.dismiss !== 'undefined') {
                    return Promise.reject();
                }
                
                if (typeof result.status === "boolean") {
                    var response = result;
                } else {
                    var response = result.value;
                }
    
                return [response, target];
            });
            process.then(actionResolver).catch(actionCatcher);
        });
    })(jQuery);
      ;(function () {
    $('.column-select-submit').on('click', function () {
    
        var defaults = ["name","status","type","fileVoice","mode","devices","id"];
        var selected = [];
    
        $('.column-select-item:checked').each(function () {
            selected.push($(this).val());
        });
    
        if (selected.length == 0) {
            return;
        }
    
        var url = new URL(location);
    
        if (selected.sort().toString() == defaults.sort().toString()) {
            url.searchParams.delete('_columns_');
        } else {
            url.searchParams.set('_columns_', selected.join());
        }
    
        $.pjax({container:'#pjax-container', url: url.toString()});
    });
    
    $('.column-select-all').on('click', function () {
        $('.column-select-item').iCheck('check');
        return false;
    });
    
    $('.column-select-item').iCheck({
        checkboxClass:'icheckbox_minimal-blue'
    });
    })();  
    $('.export-selected').click(function (e) {
        e.preventDefault();
        
        var rows = $.admin.grid.selected().join();
    
        if (!rows) {
            return false;
        }
        
        var href = $(this).attr('href').replace('__rows__', rows);
        location.href = href;
    });
      
    (function ($) {
        $('.grid-batch-action-611dfa7a0ff872598').off('click').on('click', function() {
            var data = $(this).data();
            var target = $(this);
            Object.assign(data, {"_model":"App_Program"});
                    var key = $.admin.grid.selected();
            
            if (key.length === 0) {
                $.admin.toastr.warning('No data selected!', '', {positionClass: 'toast-top-center'});
                return ;
            }
            
            Object.assign(data, {_key:key});
                    var process = $.admin.swal({
                "type": "question",
        "showCancelButton": true,
        "showLoaderOnConfirm": true,
        "confirmButtonText": "X\u00f3a",
        "cancelButtonText": "H\u1ee7y",
        "title": "B\u1ea1n c\u00f3 th\u1ef1c s\u1ef1 mu\u1ed1n x\u00f3a?",
        "text": "",
        "confirmButtonColor": "#d33",
                preConfirm: function(input) {
                    return new Promise(function(resolve, reject) {
                        Object.assign(data, {
                            _token: $.admin.token,
                            _action: 'App_Admin_Actions_Program_BatchDelete',
                            _input: input,
                        });
    
                        $.ajax({
                            method: 'POST',
                            url: 'https://truyenthanh.org.vn/_handle_action_',
                            data: data,
                            success: function (data) {
                                resolve(data);
                            },
                            error:function(request){
                                reject(request);
                            }
                        });
                    });
                }
            }).then(function(result) {
                if (typeof result.dismiss !== 'undefined') {
                    return Promise.reject();
                }
                
                if (typeof result.status === "boolean") {
                    var response = result;
                } else {
                    var response = result.value;
                }
    
                return [response, target];
            });
            process.then(actionResolver).catch(actionCatcher);
        });
    })(jQuery);
      ;(function () {
    $('.grid-select-all').iCheck({checkboxClass:'icheckbox_minimal-blue'});
    
    $('.grid-select-all').on('ifChanged', function(event) {
        if (this.checked) {
            $('.grid-row-checkbox').iCheck('check');
        } else {
            $('.grid-row-checkbox').iCheck('uncheck');
        }
    }).on('ifClicked', function () {
        if (this.checked) {
            $.admin.grid.selects = {};
        } else {
            $('.grid-row-checkbox').each(function () {
                var id = $(this).data('id');
                $.admin.grid.select(id);
            });
        }
    
        var selected = $.admin.grid.selected().length;
    
        if (selected > 0) {
            $('.grid-select-all-btn').show();
        } else {
            $('.grid-select-all-btn').hide();
        }
    
        $('.grid-select-all-btn .selected')
            .html("{n} mục đã chọn".replace('{n}', selected));
    });
    })();  ;(function () {
    var $btn = $('.611dfa7a100ec-filter-btn');
    var $filter = $('#filter-box');
    
    $btn.unbind('click').click(function (e) {
        if ($filter.is(':visible')) {
            $filter.addClass('hide');
        } else {
            $filter.removeClass('hide');
        }
    });
    })();  (function ($){
        $(".mode").select2({
          placeholder: {"id":"","text":"Ch\u1ecdn"},
          "allowClear":true
        });
    })(jQuery);
      (function ($){
        $(".type").select2({
          placeholder: {"id":"","text":"Ch\u1ecdn"},
          "allowClear":true
        });
    })(jQuery);
      
    $('.grid-per-pager').on("change", function(e) {
        $.pjax({url: this.value, container: '#pjax-container'});
    });
      ;(function () {
        $('.container-refresh').off('click').on('click', function() {
            $.admin.reload();
            $.admin.toastr.success('Làm mới thành công !', '', {positionClass:"toast-top-center"});
        });
    })(); });
  </script>
</div>