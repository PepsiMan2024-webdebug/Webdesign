<php 
include('connect.php');
if(isset($_POST['signUp'])){
    $firstName=$_POST['firstName'];
    $lastName=$_POST['lastName'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $password=md5($password);
}
$checkemail="SELECT * From users where email='$email'";
$result=$conn->query($checkemail);
if($result->num_rows>0){
    echo("!ایمیل قبلا استفاده شده");
}    
else{
    $insertQuery="INSERT INTO users(firstName,lastName,email,password")
    VALUES('$firstName' , '$lastName' , '$email' , '')
}
?>