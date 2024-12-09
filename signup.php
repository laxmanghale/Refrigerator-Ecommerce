        
    <?php;
    include 'navbar.php'?>
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
                
                    
                }

                form {
                    background-color: #fff;
                    width: 100%;
                    max-width: 519px;
                    height:600px;
                    padding: 0px 50px;
                    border-radius: 10px;
                }

                .input-fields {
                    display: flex;
                    flex-direction: column;
                    text-align: left;
                
                }
                input[type='text'],
                input[type='email'],
                input[type='password'],select{
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
                    display: flex;
                  
                    align-items: center;
                    justify-content:center;
                }
                .others p{
                    margin-right:10px;
                }

           

            
            
            </style>
        </head>
        <body>

            <div class="contents">
                <form action="register.php" method="POST" name="signup-box">
                    <h2>Sign Up</h2>
                    <div class="input-fields">
                        <label for="uname"><b>Username</b></label>
                        <input type="text" name="uname" id="uname" placeholder="Your username">
                        <label for="email"><b>Email</b></label>
                        <input type="email" name="email" id="email" placeholder="Your email">
                        <label for="password"><b>Password</b></label>
                        <input type="password" name="password" id="password" placeholder="Password">
                        <label for="cpwd"><b>Confirm Password</b></label>
                        <input type="password" name="cpwd" id="cpwd" placeholder="Confirm Password">
                        <label for="options"><b>Sign Up as:</b></label>
                        <select id="options" name="options">
                        <option value="Vendor">Vendor</option>
                        <option value="Customer">Customer</option>
            </select>
                    </div>
                
                        <label class="custom-checkbox">
                            <input type="checkbox" required> I accept the terms and privacy policy
                        </label>
                
                    <button type="submit" name="submit" class="btn">Sign up</button>
                    
                    <div class="others">
                <p> Already have an account? </p> <a href="login.php"> <b>Login</b></a>
                    </div>
                </form>
            </div>
        </body>
        </html>
