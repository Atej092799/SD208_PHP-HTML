<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <style>
         * {
            box-sizing: border-box;
        }

        html,
        body {
            margin: 0;
            padding: 0;
            align-items: center;
            background: black;
            padding: 10px;
        }
        .container {
            margin: 5% 50%;
            border-radius: 10%;
        }
        
        input {
            width: 100%;
            border: solid 1px #eee;
            padding: 10px 10px;
        }
        .form-group {
            margin: 10px;
            font-size: 15px;
        }
        button {
            width: 100px;
            padding: 15px;
            margin-left: 125px;
            background: #fff;
            color: dodgerblue;
            border: solid 1px dodgerblue;
            border-radius: 33px;
            cursor: pointer;
            transition: all .38s ease-in-out;
        }

        button:hover {
            background: dodgerblue;
            color: #fff;
        }

        table tr td {
            border: solid 1px #eee;
            padding: 10px;
        }

        .form-group:before {
            content: " *";
            color: red;
        }

        .container {
            width: 350px;
            height: 380px;
            align-items: center;
            border: 5px solid #339;
            background: linear-gradient(135deg, #71b7e6, #9b59b6);
        }

        .he {
            text-align: center;
        }

        .c1 {
            margin-left: auto;
            margin-right: auto;
        }
        .gif{
            max-height: 8px;
            margin-left: 5%;
        }
        .login-signup {
            text-align: center;
            margin-top: 3%;
        }
    </style>

</head>

<body style="background-color: black;">
    <div class="gif">
        <img src="New1.gif">
    </div>

    <div class="container">
        <h2 class="he"><u>Login</u></h2>
        <br><br>
        <form action="test1.php" , method="POST">
            <div class="form-group">
                <b>Email Address</b> <input type="email" name="email" id="email" placeholder="Enter email address" required oninvalid="this.setCustomValidity('Please give valid format, like @yahoo.com or @gmail.com, etc,.')" onchange="try{setCustomValidity('')}catch(e){}"></input>
            </div>
            <div class="form-group">
                <b>Password</b> <input type="password" name="pwd" id="pwd" placeholder="Enter new password" pattern="(?=.*[0-9])(?=.*[!@#$%^&*])(?=.*[a-z]).{6,10}" title="Password should be of 6-10 length and should contain atleast one character and one number"></input>
            </div>
            <div class="form-group1">
                <button type="submit">Login</button>
            </div>

            <div class="login-signup">
                <span class="text">Don't have account yet?
                    <a href="index.php" class="text login-link">Sign up Now</a>
                </span>
            </div>
        </form>
    </div>




</body>

</html>