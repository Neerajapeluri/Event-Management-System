<?php
session_start();
include("./include/conn.php");
if(isset($_POST['amt']) && isset($_POST['name']) && (isset($_POST['bookingID'])) && (isset($_POST['contact'])) ){
    $amt=$_POST['amt'];
    $name=$_POST['name'];
	$bookingID=$_POST['bookingID'];
	$contact=$_POST['contact'];
    $payment_status="pending";
    $added_on=date('Y-m-d h:i:s');
    mysqli_query($conn,"insert into payment(name,amount,bookingID,contact,payment_status,added_on) values('$name','$amt','$bookingID','$contact','$payment_status','$added_on')");
    $_SESSION['OID']=mysqli_insert_id($conn);
}
if(isset($_POST['payment_id']) && isset($_SESSION['OID'])){
    $payment_id=$_POST['payment_id'];
    mysqli_query($conn,"update payment set payment_status='complete',payment_id='$payment_id' where id='".$_SESSION['OID']."'");
}
?>