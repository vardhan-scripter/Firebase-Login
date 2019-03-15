<!DOCTYPE html>
<html>
<head>
    <title>Home page</title>
    <script type="text/javascript">
    history.pushState(null, null, location.href);
    window.onpopstate = function () {
        window.location.href="index.php"
    };
  </script>
    <style type="text/css">
    body{
        background: -webkit-linear-gradient(left, #3931af, #00c6ff);
        background: -o-linear-gradient(left, #3931af, #00c6ff);
        background: linear-gradient(to right, #3931af, #00c6ff);
    }
    h1{
        color: white;
        text-align: center;
    }
    a{
       text-decoration: none;
       color: orange;
    }
    .button
    {
        border: none;
        outline: none;
        height: 40px;
        width: 160px;
        margin-left: 10px;
        background: white;
        font-size: 18px;
        border-radius: 20px;
    }
    .button:hover
    {
        cursor: pointer;
        background: #898e84;
        color: white;
    }
    .login-division{
        margin-top: 250px;
    }
</style>
</head>
<body>
    <?php session_start();
          session_unset(); ?>
    <h1>Login-System-With-Firebase</h1>
    <div class="login-division" align="center">
        <button class="button"><a href="login.php">Gets Started</a></button>
    </div>
</body>
</html><html>