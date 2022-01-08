<? php
  $name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

$conn = new mysqli('localhost','root','','mydb');
if($conn->connect_error){
  die('Connection Failed'.$conn->connect_error);
}else{
  $stmt = $conn->prepare("insert into registration(name,email,phone,message) values(?,?,?,?)");
  $stmt->bind_param("s,s,i,s",$name,$email,$phone,$message);
  $stmt->execute();
  echo "registration successfully...";
  $stmt->close();
  $conn->close();
}
  







?>
