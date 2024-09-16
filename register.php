
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
            width: 390px;
            height:1000px;
            margin: auto;
            margin-top: 100px;
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
    <form action="includes/register.inc.php" method="post">
        <label for="name">Enter Name</label>
        <input type="text" id="name" name="Name" placeholder="Name">
        <br>
        <label for="age">Enter Age</label>
        <input type="number" min="18" id="age" name="Age" placeholder="age">
        <br>
        <label for="gender">Enter gender</label>
        <input type="text" id="gender" name="gen" placeholder="gender">
        <br>
        <label for="DOB">Enter Date of birth</label>
        <input type="date" id="DOB" name="date" placeholder="DD/MM/YY">
        <br>
        <label for="address">Enter Address</label>
        <input type="text" id="address" name="adrs" placeholder="address">
        <br>
        <label for="phoneno">Enter Phone number</label>
        <input type="text" id="phoneno" name="phno" placeholder="phone number">
        <br>
        <label for="email">Enter Email id</label>
        <input type="email" id="email" name="mail" placeholder="email id">
        <br>
        <label for="username">Enter username</label>
        <input type="text" id="username" name="name" placeholder="username">
        <br>
        <label for="Password">Enter Password</label>
        <input type="password" id="Password" name="pass" placeholder="password">
        <br>
        <label for="CPassword">Confirm Password</label>
        <input type="password" id="CPassword" name="cpass" placeholder="confirm password">
        <br>

<button type="submit" name="register">Register</button>
<br>
<br>
<p>Already a Member? <a href="sign.html">Sign in</a></p>
    </form>
</div>
    
</body>
</html>