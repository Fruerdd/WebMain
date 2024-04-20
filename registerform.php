

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transparent Login Form</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Quicksand:100,300,500">
    <link rel="stylesheet" href="styleregisterform.css">
</head>
<body>
    <div class="maincontainer">
        <div class="logincontainer">
            <h3 class="logintitle">New user registration</h3>
            <form action="regformhandler.php" method="post">
                <div class="inputfield">
                    <label>Name</label>
                    <input type="text" name="firstname">
                </div>
                <div class="inputfield">
                    <label>Surname</label>
                    <input type="text" name="surname">
                </div>
                <div class="inputfield">
                    <label>Email</label>
                    <input type="email" name="email">
                </div>
                <div class="inputfield">
                    <label>Mobile</label>
                    <input type="text" name="mobile">
                </div>
                <div class="inputfield">
                    <label>Password</label>
                    <input type="password" name="pwd">
                </div>
                <div class="inputfield">
                    <label>Re-type Password</label>
                    <input type="password" name="repwd">
                </div>
                <button type="submit" class="loginbutton" name="submit" >Submit data</button>
                
            </form>
        </div>
        
    </div>
</body>
</html>