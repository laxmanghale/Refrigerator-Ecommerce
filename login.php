<?php 
     if(!isset($_SESSION['error_msg']))
     {
         $_SESSION['error_msg']="";   
     }
    include "navbar.php" ;
     ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@400;600;700&display=swap');

        * {
            box-sizing: border-box;
        }

        body {
            background-color: #F5F6FA;
            font-family: 'Nunito Sans', sans-serif;
            margin: 0;
            padding: 0;
        }

        .contents {
            display: flex;
            flex-direction: column;
            align-items: center;
            flex-wrap:wrap;
            padding: 20px;
        }

        form {
            background-color: #fff;
            width: 100%;
            max-width: 620px;
            padding: 0px 50px;
            border-radius: 10px;
        }

        .input-fields {
            display: flex;
            flex-direction: column;
            text-align: left;
            flex-wrap:wrap;
        }

        input[type='email'],
        input[type='password'] {
            width: 100%;
    
            padding: 10px;
            margin: 8px 0;
            border: 1px solid #ccc;
            border-radius: 10px;
        }

        .other-inputs {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap:wrap;
            margin-top: 10px;
        }

        .btn {
            width: 100%;
            height: 50px;
            background-color: black;
            color: white;
            border: none;
            border-radius: 10px;
            font-weight: bold;
            cursor: pointer;
            margin-top: 20px;
            font-size: 18px;
            text-align: center;
        }

        a {
            text-decoration: none;
            font-size: 14px;
            color: #333;
        }

        a:hover {
            text-decoration: underline;
        }

        .others {
            text-align: center;
            display: flex;
            flex-direction: column;
            flex-wrap:wrap;
            gap: 10px;
            margin-top: 10px;
            margin-bottom:10px;
        }

        #button {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
            height: 50px;
            border: none;
            border-radius: 10px;
            box-shadow: 1px 1px 5px 1px rgba(0, 0, 0, 0.1);
            background-color: #fff;
            cursor: pointer;
            font-size: 15px;
        }

        #button img {
            width: 24px;
            height: 24px;
            margin-right: 10px;
        }
        #error{
            color:red;
            min-height:15px;
            font-size:15px;
        }

       
    </style>
</head>
<body>
    
    <div class="contents">
        <form action="check.php" method="POST" name="login-box">
            <h2>Log in</h2>
            <p id="error"> <?php if(isset($_SESSION['error_msg'])){echo htmlspecialchars($_SESSION['error_msg']);}?></p>
            <div class="input-fields">
                <label for="email"><b>Email</b></label>
                <input type="email" name="email" id="email" placeholder="Your email" required>
                <label for="password"><b>Password</b></label>
                <input type="password" name="password" id="password" placeholder="Password" required>
            </div>
            <div class="other-inputs">
                <label class="custom-checkbox">
                    <input type="checkbox"> Remember me
                </label>
                <a href="forgot.php">Forgot Password?</a>
            </div>
            <button type="submit" name="submit" class="btn">Login</button>
            <div class="others">
                <p>OR</p>
                <button id="button"><img src="images/Google.png" alt="Google">Continue with Google</button>
                <a href="signup.php">or create an account</a>
            </div>
        </form>
    </div>
</body>
</html>
