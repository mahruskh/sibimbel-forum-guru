<html>
  <head>
    <title>Login Administrator</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
    <?php echo link_tag('assets/bootstrap/css/bootstrap.min.css');  ?>
    <!-- Font Awesome -->
    <?php echo link_tag('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css'); ?>
    <!-- Theme style -->
    <?php echo link_tag('assets/dist/css/AdminLTE.min.css'); ?>

  </head>
  <body class="hold-transition login-page">
    <div class="login-box">
    <div class="login-logo ">
      <b>SI BIMBEL </b>
    </div>
    <div class="login-box-body">
        <p class="login-box-msg">Login Administrator</p>
        <div id="error"></div>
        <form action="login/#" method="post" id="form-login">
          <div class="form-group has-feedback">
              <input type="text" name="username" class="form-control input-lg" placeholder="Username" autocomplete="off">
                <span class="glyphicon glyphicon-user form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" name="password" class="form-control input-lg" placeholder="Password" autocomplete="off">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <button type="button" name="login" class="btn btn-primary btn-flat btn-block btn-lg"><i class="glyphicon glyphicon-log-in"></i> Login</button>
        </form>
    </div>
  </div>
    <!-- jQuery 2.2.3 -->
    <script src="../assets/plugins/jQuery/jquery-2.2.3.min.js"></script>
    <!-- Bootstrap 3.3.6 -->
   <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
