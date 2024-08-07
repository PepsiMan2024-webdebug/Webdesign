<php
$host="localhost:8080";
$user="RayanEsmaeelzadeh";
$password="v3XUeZPGznm8naNR";
$db="webdesignclasss9";
$conn=new mysqli($host,$user,$password,$db);
if($conn->connect_error){
    die("failed To connect to db" .$conn->connect_error);
}
?>
