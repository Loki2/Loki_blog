<html>
  <head>
  @include('admin/partial/head')
  </head>
<body class="hold-transition login-page">
    <div class="login-box">
      <div class="login-logo">
        <a href="#"><b>Advice </b> Laos</a>
      </div>
      <!-- /.login-logo -->
      <div class="login-box-body">
        <p class="login-box-msg">Advice Laos Sale Management Web Service</p>
        <!-- message pop up from php  -->
        <p class="alert-danger">
        <?php
          $message = Session::get('message');
          if ($message){
              echo $message;
              Session::put('message', null );
          }
        ?>
        </p>
      <form action="#" method="post">
      {{  csrf_field() }}
      <div class="form-group has-feedback">
        <input type="text" class="form-control" name="full_name" placeholder="ຊື່ເຕັ່ມ">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="email" class="form-control" name="email" placeholder="ອິເມວ">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" name="password" placeholder="ລະຫັດຜ່ານ">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" name="confirm_password" placeholder="ຢຶນຢັນລະຫັດຜ່ານ">
        <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox"> ຂ້ອຍຍ້ອມຮັບຂໍຕົກລົງຂອງລະບົບ <a href="#">terms</a>
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">ສະມັກເລີຍ</button>
        </div>
        <!-- /.col -->
      </div>
        <a href="#">ລື່ມລະຫັດຜ່ານ?</a><br>
        <a href="{{URL::to('/admin')}}" class="text-center">ຂ້ອຍມີບັນຊີນໍາໃຂ້ລະບົບແລ້ວ</a>

    </form>

        
      </div>
      <!-- /.login-box-body -->
    </div>
    <!-- /.login-box -->
</body>
</html>
