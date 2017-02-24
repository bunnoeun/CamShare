<?php
/**
 * Created by PhpStorm.
 * User: Mr. Bunnoeun
 * Date: 12/17/2016
 * Time: 2:37 AM
 */
$conn=mysqli_connect("localhost","root","","camshare");
if (!$conn){
    die("Connection failed:".mysqli_connect_errno());
}
//echo"Connected successfully"."<br>";
?>