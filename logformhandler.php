<?php 
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $email=$_POST["email"];
    $pwd=$_POST["pwd"];
 
    $error= "";
    $errorFlag=false;
     
    // Check if any of the fields are empty
    if (empty($email) || empty($pwd)) {
        $error="All fields are required!";
        $errorFlag=true;
    }

    //check if email is correctly formated (built-in filter for validation)
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error="It seems your email is not written in a correct form!";
        $errorFlag=true;
    }

  
    if ($errorFlag==true) {
        
        echo"error, check your inputs: ". $error;
    }

    else {

        try {
                require_once("dbh.php");

                // Check if email already exists in the database
                $query = "SELECT * FROM users WHERE email=:email AND pwd=:pwd";
                $stmt = $pdo->prepare($query);
                $stmt->bindParam(':email', $email);
                $stmt->bindParam(':pwd', $pwd);
                $stmt->execute();
                

                $user = $stmt->fetch(PDO::FETCH_ASSOC);

                // Display user data
                if ($user !== false) {
                    echo "User ID: " . $user['id'] . "<br>";
                    echo "First Name: " . $user['firstname'] . "<br>";
                    echo "Last Name: " . $user['surname'] . "<br>";
                    echo "Email: " . $user['email'] . "<br>";
                    echo "Mobile: " . $user['mobile'] . "<br>";

                    $firstname = $user['firstname'];
                    echo "hello " . $firstname;

                    

                    $pdo = null;    
                }
                
            }             
            
        catch (PDOException $e) {
            die("Query failed: " . $e->getMessage());
        }
        
        
    
    }
    
}


