<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <link rel="icon" href="image/logo.png">
    <style>
    body{
        margin: 0px;
        padding: 0;
        font-family: sans-serif,Arial, Helvetica, sans-serif;
        background: rgb(102, 101, 101);
    }
    .box{
        width: 300px;
        padding: 30px;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%,-50%);
        background: rgb(143, 145, 148);
        border-radius: 10px;
        box-shadow: 7px 7px 20px rgb(56, 56, 56);
    }
    h1{
        position: absolute;
        top: 30px;
        left: 140px;
        font-weight: lighter;
    }
    .box input[type="text"],.box input[type="password"]{
        background: none;
        display: block;
        padding: 5px;
        margin:20px  auto;
        text-align: center;
        border:2px solid goldenrod;
        padding: 10px;
        width: 200px;
        border-radius: 20px;
        color: white;
        outline: none;
        transition: width .3s;
    }
    .box input[type="text"]:hover,.box input[type="password"]:hover{
        width: 250px;
    }
    .box input[type="submit"]{
        display: block;
        padding: 10px 20px;
        margin: auto;
        background: none;
        border: 2px solid goldenrod;
        border-radius: 10px;
        transition: padding .3s;
    }
    .box input[type="submit"]:hover{
        color: #004068;
        background: goldenrod;
        cursor: pointer;
        padding: 10px 30px;
    }
    #bottomlink{
        text-decoration: none;
        color: black;
        padding: 10px;
        font-size: 14px;
    }
    #bottomlink:hover{
        font-size: 16px;
        color: #004068;
    }
    </style>
</head>
<body>
    <form class="box" action="process.php" method="POST">
        
           <a href="index.php"> <img src="image/logo.png" alt="college logo" width="50px" height="70px;"></a>
            <h1>Login</h1>
        
        <input type="text" name="user" placeholder="Email">
        <input type="password" name="pass" placeholder="password">
        <input type="submit" name="submit1" value="Login">
        <a id="bottomlink" href="signup.php">New User</a>
    </form>
</body>
</html>