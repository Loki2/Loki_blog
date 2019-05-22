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
      <div class="login-box-body col-xs-12">
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
        <form method="post" action="{{url('/admin-dashboard')}}">
          {{  csrf_field() }}
          <div class="form-group has-feedback">
            <input type="email" class="form-control" id="admin_email" name="admin_email" placeholder="ອີເມວຜູ້ໃຊ້...">
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" class="form-control" id="admin_password" name="admin_password" placeholder="ລະຫັດຜ່ານ...">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div class="row">
            <div class="col-xs-8">
              <div class="checkbox icheck">
                <label>
                  <input type="checkbox"> ຈື່ຂ້ອຍໄວ້
                </label>
              </div>
            </div>
            <!-- /.col -->
            <div class="col-xs-4">
              <button type="submit" class="btn btn-primary btn-block btn-flat">ເຂົາໃຊ້ລະບົບ</button>
            </div>
            <!-- /.col -->
          </div>
        </form>
        <a href="#">ລື່ມລະຫັດຜ່ານ?</a><br>
        <a href="{{URL::to('/admin-register')}}" class="text-center">ສະມັກເປັນຜູ້ໃຊ້ລະບົບ?</a>

      </div>
      <!-- /.login-box-body -->
    </div>
    <!-- /.login-box -->
</body>
</html>
