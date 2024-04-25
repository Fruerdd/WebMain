

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transparent Login Form</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Quicksand:100,300,500">
    <link rel="stylesheet" href="css/styleform.css">
</head>
<body>
    <div class="maincontainer">
        <div class="logincontainer">
            <h3 class="logintitle">Please Login</h3>
            <form action="includes/logformhandler.php" method="post">
                <div class="inputfield">
                    <label>Email</label>
                    <input type="email" name='email'>
                </div>
                <div class="inputfield">
                    <label>Password</label>
                    <input type="password" name='pwd'>
                </div>
                <button type="submit" class="loginbutton">Login</button>
                <div class="forgotpasslink">
                    <a href="" class="forgotpass">forgot password</a>
                </div>
                <p class="registertitle"> or register</p>
                <button type="button" onclick="window.location.href='registerform.php'" class="loginbutton">Register</button>
            </form>
        </div>
        
    </div>
</body>
</html>