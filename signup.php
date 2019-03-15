<html>
<head>
    <title>SignUp form</title>
    
    <style type="text/css">
    body{
        background: -webkit-linear-gradient(left, #3931af, #00c6ff);
        background: -o-linear-gradient(left, #3931af, #00c6ff);
        background: linear-gradient(to right, #3931af, #00c6ff);
    }

    .login-box{
        width:360px;
        height:600px;
        background: white;
        color: #898e84;
        top: 50%;
        left: 30%;
        position: absolute;
        transform: translate(-50%,-50%);
        box-sizing: border-box;
        padding: 10px 30px;
    }

    #username,#password,#course,#age
    {
       width: 100%;
       margin-bottom: 35px;
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
    margin-bottom: 35px;
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
    width: 140px;
    margin-left: 80px;
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
<body id"myimage">
    <div class="login-box">
        <h1 class="head">Signup</h1>
        <form name="form"  action="signup-action.php" method="post">
            <input type="text" name="fullname" id="text" placeholder="Enter fullname" required="yes">
            <input type="text" name="course" id="course" placeholder="Enter course" required="yes">
            <input type="text" name="branch" id="text" placeholder="Enter branch" required="yes">
            <input type="text" name="rollno" id="text" placeholder="Enter roll number" required="yes">
            <input type="text" name="age" id="age" placeholder="Enter your age" required="yes">
            <input type="text" name="username" id="text" placeholder="Enter username" required="yes" autocomplete="off">
            <input type="password" name="password" placeholder="Enter Password" id="password" required="yes">

            <input type="submit" name="submit" value="create account" id="button"><br><br><br>
            
        </form>
    </div>

</body>
</html>
