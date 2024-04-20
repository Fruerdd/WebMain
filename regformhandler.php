<?php 
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname=$_POST["firstname"];
    $surname=$_POST["surname"];
    $email=$_POST["email"];
    $mobile=$_POST["mobile"];
    $pwd=$_POST["pwd"];
    $repwd=$_POST["repwd"];

     // Validate passwords match
     if ($pwd !== $repwd) {
        die("The registratio failed. Passwords do not match");
    }

    // Check if any of the fields are empty
    if (empty($firstname) || empty($surname) || empty($email) || empty($mobile)|| empty($pwd) || empty($repwd)) {
        die("The registratio failed. All fields are required");
    }

    //check if email is correctl formated (built-in filter for validation)
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("The registratio failed. It seems your email is not written correctly");
    }

    if (!preg_match('/^(?=.*[a-zA-Z])(?=.*\d)(?=.*[^a-zA-Z0-9]).{8,}$/', $pwd)){
    die("The registratio failed. Your password must be at least 8 characters long, and be combination of letters and numbers, and contain at least one special character ");
}


   // Generate a unique activation token (you can use a library like `ramsey/uuid`)
    
    $activation_token = bin2hex(random_bytes(16));

    try{
        require_once("dbh.php");

    // Check if email already exists in the database
        $check_email_query = "SELECT * FROM users WHERE email=:email";
        $stmt = $pdo->prepare($check_email_query);
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        if ($stmt->rowCount() > 0) {
            die("Email already exists");
        }
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
   
        if ($stmt->rowCount() > 0) {
            echo "Registration successful.";
            $activation_link = "http://localhost/myPHPproject/loginForm/activate.php?token=$activation_token";
            $message = "Click the following link to activate your account: $activation_link";
            mail($email, "Account Activation", $message);
        } else {
            echo "Registration failed.";
        }

        $pdo = null;
    } catch (PDOException $e) {
        die("Query failed: " . $e->getMessage());
    }
}
?>