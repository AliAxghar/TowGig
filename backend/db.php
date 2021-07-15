
<html>
   <head>
      <title>Creating BlueHive Database Tables</title>
   </head>
   
    <body>
        <?php
            require_once "database.php";
            if($link->query("IF EXISTS users")){
                
            }else{
                $link->query("CREATE TABLE users (
                    id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                    email VARCHAR(50),
                    password VARCHAR(500) NOT NULL,
                    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
                    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
                )");
            }
            if($link->query("IF EXISTS post_category")){
                
            }else{
                $link->query("CREATE TABLE post_category (
                    id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                    name VARCHAR(100),
                    slug VARCHAR(100),
                    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
                    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
                )");
            }
            if($link->query("IF EXISTS post")){

            }else{
                $link->query("CREATE TABLE post (
                    Id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                    title VARCHAR(255),
                    category INT(10),
                    short_description TEXT,
                    description TEXT,
                    image VARCHAR(255),
                    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
                    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
                )");
            }
            echo "BlueHive Tables created successfully";

            $link->close();
        ?>

    </body>
</html>