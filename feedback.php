<?php
$name = $_POST['name'];
$email = $_POST['email'];
$number = $_POST['number'];
$opinion = $_POST['opinion'];

$conn = new mysqli('localhost','root','','register');
if($conn->connect_error){
    die('Connection Failed :'.$conn->connect_error);

}
else{
    $stmt =$conn->prepare("insert into feedback(name,email,number,opinion)
    values(?,?,?,?)");
    $stmt->bind_param("ssis",$name,$email,$number,$opinion);
    $stmt->execute();
    echo "<p align='center'> <font color=black  size='6pt'>Thank You for the Feedback</font> </p>";
    $stmt->close();
    $conn->close();
}
?>