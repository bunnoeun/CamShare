<?php include"connection.php";?>
<?php
/**
 * Created by PhpStorm.
 * User: try
 * Date: 11/28/2015
 * Time: 4:28 PM
 */
session_start();

$Name=$_POST["txtName"];
$Password=$_POST["txtPassword"];
//echo $Name."<br>";
//echo $Password;
$sql="Select * from tbllogadmin where UserName='$Name'and Password='$Password'";
$result=mysqli_query($conn,$sql);

$url="http://localhost/CamShare/adminsite.php";

if($result->num_rows>0){
    $_SESSION["Success"]=true;
    $_SESSION["User"]=$Name;
    header("Location: ".$url);
}
else{
    $url="http://localhost/CamShare/adminloginform.php";
    header("Location: ".$url);
}