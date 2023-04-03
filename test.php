<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>PHP Language</h1>
    <?php 
    $servername = "localhost";
    $username = "username";
    $password = "password";
    $dbname = "webprogramming";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password,$dbname);
    
    // Check connection
    $sql = 'CREATE TABLE books(title VARCHAR(128) NOT NULL,author VARCHAR(32) NOT NULL,publish_date DATE DEFAULT NULL);';

    if ($conn->query($sql) === TRUE) {
        echo "Table books created successfully";
      } else {
        echo "Error creating table: " . $conn->error;
      }
      
      $conn->close();
      exit();

    ?> 
</body>
</html>