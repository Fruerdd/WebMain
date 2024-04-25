<?php 
$error= array("nomatch"=>"","empfield"=>"", "erremail"=>"", "errpwd"=>"","erremailexists"=>"");
$errorFlag = false;


if($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname=$_POST["firstname"];
    $surname=$_POST["surname"];
    $email=$_POST["email"];
    $mobile=$_POST["mobile"];
    $pwd=$_POST["pwd"];
    $repwd=$_POST["repwd"];

   


     // Validate passwords match
     if ($pwd !== $repwd) {
        $error["nomatch"] ="Passwords do not match";
    }

    // Check if any of the fields are empty
    if (empty($firstname) || empty($surname) || empty($email) || empty($mobile)|| empty($pwd) || empty($repwd)) {
        $error["empfield"]="All fields are required";
    }

    //check if email is correctly formated (built-in filter for validation)
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error["erremail"]="It seems your email is not written correctly";
    }

    //validate password
    if (!preg_match('/^(?=.*[a-zA-Z])(?=.*\d)(?=.*[^a-zA-Z0-9]).{6,}$/', $pwd)){
        $error["errpwd"]="Your password must be at least 8 characters long, and be combination of letters and numbers, and contain at least one special character.";
    }


   // Generate a unique activation token (you can use a library like `ramsey/uuid`)
    
    //$activation_token = bin2hex(random_bytes(16));

    try{
        require_once("dbh.php");

    // Check if email already exists in the database
        $check_email_query = "SELECT * FROM users WHERE email=:email";
        $stmt = $pdo->prepare($check_email_query);
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        if ($stmt->rowCount() > 0) {
            $error["erremailexists"]="Email already exists";
        }
    // check if there is an error
        if (!empty($error["nomatch"]) OR !empty($error["empfield"]) OR !empty($error["erremail"]) OR !empty($error["errpwd"]) OR !empty($error["erremailexists"])) {
            $errorFlag=true;
        }
        if ($errorFlag==false) {
        
    // Prepare and execute query    
        $query="INSERT INTO users (firstname, surname,email, mobile, pwd ) VALUES (:firstname, :surname, :email, :mobile, :pwd);";
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(":firstname", $firstname);
        $stmt->bindParam(":surname", $surname);
        $stmt->bindParam(":email", $email);
        $stmt->bindParam(":mobile", $mobile);
        $stmt->bindParam(":pwd", $pwd);

     
        $stmt->execute();
          // Send an email with the activation link
        } 

        $pdo = null;
    } catch (PDOException $e) {
        die("Query failed: " . $e->getMessage());
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transparent Login Form</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Quicksand:100,300,500">
    <link rel="stylesheet" href="css/regformhandlerstyle.css">
</head>
<body>
  <div class="maincontainer">
    <div class="message"><?php 
        if ($errorFlag==true){
            echo "Registration failed: " . "<br><br>"; 
            echo $error["nomatch"] . "<br>";
            echo $error["empfield"] . "<br>";
            echo $error["erremail"] . "<br>";
            echo $error["errpwd"] . "<br>";
            echo $error["erremailexists"] . "<br><br>";
            echo 'Click <a href="registerform.php">here</a> to try again';
        }
        else{
            echo "Registration successful". "<br><br>";
            echo 'Click <a href="loginform.php">here</a> to log in';
        }?>
    </div>
  </div>
</body>