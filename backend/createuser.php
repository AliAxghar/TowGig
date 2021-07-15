<html>
   <head>
      <title>Creating BlueHive Database Tables</title>
   </head>
   
    <body>
    <?php
        // Include config file
        session_start();
        
        require_once "../backend/database.php";
        

        $email = 'admin@Towgig.com';
        $password = '@dmin.Towgig';
        // Prepare an insert statement
        $sql = "INSERT INTO users (email, password) VALUES (?, ?)";
                    
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ss", $param_email, $param_password);
            
            // Set parameter
            $param_email = $email;
            $param_password = password_hash($password, PASSWORD_DEFAULT);
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                header("location: ../login.php");
            } else{
                echo "Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
        
        // Close connection
        mysqli_close($link);
        ?>
    </body>
</html>