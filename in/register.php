<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        *{
            padding: 0;
            margin: 0;
        }
        body{
        background: url('login1.png');
        }
        .register-form{
            width: 360px;
            height: 650px;
            margin: auto;
            margin-top: 150px;
            background-color: white;
            border-radius: 3px;
        }
        h1{
            text-align: center;
            padding-top: 20px;
        }
        form{
            width: 300px;
            margin-left: 20px;
        }
        form label{
            display: flex;
            margin-top: 20px;
            font-size: 18px;
        }
        form input{
            width: 100%;
            padding: 7px;
            border: none;
            border: 1px solid gray;
            border-radius: 6px;
            outline: none;
        }
button{
width: 320px;
height: 35px;
margin-top: 35px;
border : none;
background-color: rgb(23, 125, 193);
color: aliceblue;
font-size: 18px;
}
a{
    text-decoration: none;
}

    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>

<body><div class="register-form">
    <h1>Register</h1>
    <form action="" method="post">
        <label for="firstname">Enter Firstname</label>
        <input type="text" id="firstname" name="fname" placeholder="firstname">
        <br>
        <label for="lastname">Enter Lastname</label>
        <input type="text" id="lastname" name="lname" placeholder="lastname">
        <br>
        <label for="username">Enter Username</label>
        <input type="text" id="username" name="username" placeholder="usertname">
        <br>
        <label for="email">Enter Email id</label>
        <input type="email" id="email" name="fname" placeholder="email id">
        <br>
        <label for="Password">Enter Password</label>
        <input type="password" id="Password" name="pass" placeholder="password">
        <br>
        <label for="CPassword">Confirm Password</label>
        <input type="password" id="CPassword" name="cpass" placeholder="confirm password">
        <br>

<button type="submit">Register</button>
<br>
<br>
<p>Already a Member? <a href="sign.html">Sign in</a></p>
    </form>
</div>
    
</body>
</html>