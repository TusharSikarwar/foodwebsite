<?php
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$number = $_POST['number'];
$address = $_POST['address'];

$conn = new mysqli('localhost','root','','register');
if($conn->connect_error){
    die('Connection Failed :'.$conn->connect_error);

}
else{
    $stmt =$conn->prepare("insert into info(name,email,password,number,address)
    values(?,?,?,?,?)");
    $stmt->bind_param("sssis",$name,$email,$password,$number,$address);
    $stmt->execute();
    echo "<p align='center'> <font color=black  size='6pt'>Ordered Successfuly</font> </p>";
    $stmt->close();
    $conn->close();
}
?>