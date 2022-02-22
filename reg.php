<!DOCTYPE html>
<html>
  
<head>
    <title>Insert Page page</title>
</head>
  
<body>
    <center>
        <?php
  
        // servername => localhost
        // username => root
        // password => empty
        // database name => mydb
        $conn = mysqli_connect("localhost", "root", "", "mydb");
          
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. " 
                . mysqli_connect_error());
        }
          
        // Taking all 5 values from the form data(input)
        $name =  $_REQUEST['name'];
        $email = $_REQUEST['email'];
        $address =  $_REQUEST['address'];
        $phone = $_REQUEST['phone'];
        $message = $_REQUEST['message'];
          
        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO registration  VALUES ('$name', 
            '$email','$address','$phone','$message')";
          
        if(mysqli_query($conn, $sql)){
            echo "<h3>data stored in a database successfully." 
                . " Please browse your localhost php my admin" 
                . " to view the updated data</h3>"; 
  
            echo nl2br("\n$name\n $email\n "
                . "$address\n $phone\n $message");
        } else{
            echo "ERROR: Hush! Sorry $sql. " 
                . mysqli_error($conn);
        }
          
        // Close connection
        mysqli_close($conn);
        ?>
    </center>
</body>
  
</html>
