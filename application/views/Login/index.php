<html>
  <head>
    <title>Login Administrator</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
    <?php echo link_tag('assets/bootstrap/css/bootstrap.min.css');  ?>
    <!-- Theme style -->
    <?php echo link_tag('assets/dist/css/AdminLTE.min.css'); ?>
  </head>
  <body class="hold-transition login-page">
    <div class="login-box">
    <div class="login-logo">
      <img src="<?php echo base_url('assets/images/logologin.png')?>">
    </div>
    <div class="login-box-body">
        <p class="login-box-msg">Login Administrator</p>
        <div id="error"></div>
            <form id="form-login">
                <div class="form-group has-feedback">
                    <input type="text" name="username" class="form-control input-lg" placeholder="Username" autocomplete="off">
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="password" name="password" class="form-control input-lg" placeholder="Password" autocomplete="off">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <button type="button" onclick="auth_login()" class="btn btn-primary btn-flat btn-block btn-lg"><i class="glyphicon glyphicon-log-in"></i> Login</button>
            </form>
        <a href="#" class="text-bold">Forgot password ?</a>
    </div>
  </div>
    <!-- jQuery 2.2.3 -->
    <script src="<?php echo base_url('assets/plugins/jQuery/jquery-2.2.3.min.js')?>"></script>
    <!-- Bootstrap 3.3.6 -->
   <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js')?>"></script>
  </body>
</html>
<script type="text/javascript">
    $(document).ready(function (e) {
        
    });
    function auth_login() {
        if ($('[name="username"]').val() == "" || $('[name="password"]').val() == "") {
            $.ajax({
                type: "POST",
                url: "error",
                data: {status:"required"},
                success: function (data) {
                    $("#error").html(data)
                    $("#form-login")[0].reset()
                }
            });
        } else {
            $.ajax({
                type: "POST",
                url: "auth",
                data: $("#form-login").serialize(),
                success: function (data) {
                    if (data == 1) {
                        $(location).attr('href','../dashboard/show')
                        $("#form-login")[0].reset()
                    } else {
                        $.ajax({
                            type: "POST",
                            url: "error",
                            data: {status:"wrong"},
                            success: function (data) {
                                $("#error").html(data)
                                $("#form-login")[0].reset()
                            }
                        });
                    }
                }
            });
        }
    }

</script>