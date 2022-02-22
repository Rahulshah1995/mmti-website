
<?php
  
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "mydb";
  
// Create connection
$conn = new mysqli($servername, 
    $username, $password, $dbname);
  
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " 
        . $conn->connect_error);
}
  
$sqlquery = "INSERT INTO table VALUES 
    ('John', 'john@example.com', 'Doe','9840012939','how r u')"
  
if ($conn->query($sql) === TRUE) {
    echo "record inserted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
