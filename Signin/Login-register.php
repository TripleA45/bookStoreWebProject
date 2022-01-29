<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sign In</title>
    <link rel="stylesheet" href="signIn.css" />
</head>

<body>
    <div class="wrapper">
        <div class="comtainer" id="container">
            <div class="signin-signup">
                <form action="logIn.php" method="post" class="signinForm">
                    <h1>Sign In</h1>
                    <div class="username">
                        <label for="username"><img src="Icons/male_user_100px.png" alt="" /></label>
                        <input type="text" name="username" id="username" placeholder="User name" />
                    </div>
                    <div class="password">
                        <label for="password"><img src="Icons/key_2_100px.png" alt="" /></label>
                        <input type="password" id="password" name="password" placeholder="Password" />
                    </div>
                    <div class="formButtons">
                        <button class="signin" name="signin">Sign In</button>
                        <button class="cancel" name="close">Cancel</button>
                    </div>
                </form>
                <form action="signUp.php" method="post" class="signupForm">
                    <h1>Sign up</h1>
                    <div class="username">
                        <label for="username"><img src="Icons/male_user_100px.png" alt="" /></label>
                        <input type="text" name="username" id="username" placeholder="User name" />
                    </div>
                    <div class="email">
                        <label for="email"><img src="Icons/email_open_100px.png" alt="" /></label>
                        <input type="text" name="email" id="email" placeholder="Email" />
                    </div>
                    <div class="password">
                        <label for="password"><img src="Icons/key_2_100px.png" alt="" /></label>
                        <input type="password" id="password" name="password" placeholder="Password" />
                    </div>
                    <div class="formButtons">
                        <button class="signup" name="signup">Sign Up</button>
                        <button class="cancel" name="close">Cancel</button>
                    </div>
                </form>
            </div>
            <div class="panel-container">
                <div class="panel left-panel">
                    <div class="contents">
                        <h1>MEGA</h1>
                        <h2>Book Store</h2>
                        <h3>Don't have an account?</h3>
                        <button class="btn-transparent" id="signUp">Sign Up</button>
                    </div>
                </div>
                <div class="panel right-panel">
                    <div class="contents">
                        <h1>MEGA </h1>
                        <h2>Book Store</h2>
                        <h3>Already have an account?</h3>
                        <button class="btn-transparent" id="signIn">Sign In</button> 
                    </div>
                </div>
            </div>

        </div>
    </div>
    <script src="./signIn.js"></script>
</body>

</html>