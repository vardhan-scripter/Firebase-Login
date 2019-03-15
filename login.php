<head>
    <title>Login Form</title>
    <style type="text/css">
    body{
        background: -webkit-linear-gradient(left, #3931af, #00c6ff);
        background: -o-linear-gradient(left, #3931af, #00c6ff);
        background: linear-gradient(to right, #3931af, #00c6ff);
    }

        .login-box{
    width:300px;
    height: 400px;
    background: white;
    color: #898e84;
    top: 50%;
    left: 25%;
    position: absolute;
    transform: translate(-50%,-50%);
    box-sizing: border-box;
    padding: 10px 30px;
}

#username,#password
{
     width: 100%;
    margin-bottom: 20px;
    color: #898e84;
    border: none;
    border-bottom: 1px solid #8b9099;
    background: transparent;
    outline: none;
    height: 25px;
    color: #898e84
    font-size: 16px;
}
#text{
    width: 100%;
    margin-bottom: 30px;
    color: #898e84;
    border: none;
    border-bottom: 1px solid #8b9099;
    background: transparent;
    outline: none;
    height: 25px;
    color: #898e84
    font-size: 16px;
}
#button
{
    border: none;
    outline: none;
    height: 40px;
    width: 100px;
    margin-left: 10px;
    background: #5f91e2;
    color: white;
    font-size: 18px;
    border-radius: 20px;
}
#button:hover
{
    cursor: pointer;
    background: #898e84;
    color: white;
}
a{
    text-decoration: none;
    color: #898e84;
}
a:hover{
    color: #5f91e2;
}
.head{
    text-align: center;
    margin-bottom: 40px;
    color: #5f91e2;
}
p{
    padding-left: 20px;
    color: #898e84}
::placeholder {
    color: #898e84;
    opacity: 1;
}
::value {
    color: #898e84;
    opacity: 1;
    }
</style>
</head>
    <body id="myimage">
    <div class="login-box">
        <h1 class="head">Login</h1>
            <form name="form"  action="login-action.php" method="post">
            <input type="text" name="username" id="text" placeholder="Enter username" required="yes" autocomplete="off">
            <input type="password" name="password" placeholder="Enter Password" id="password" required="yes"><br><br><br>
            <input type="submit" name="submit" value="Login" id="button"><a href="signup.php"><input type="button" name="submit" value="SignUp" id="button"></a><br><br><br>
            <a href="#" style="padding-left: 60px;">Forgot Password.?</a>
            </form>
        </div>

    </body>
</html>
