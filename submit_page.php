<?php
include('connectmealsonwheels.php');
if (!empty($_POST["firstname"])) {
    //won't get here the first time you visit the page
    //will only get if a form has been submitted via post
    $fname = $_POST["firstname"];
    $lname = $_POST["lastname"];
    $email = $_POST["email"];
    $province = $_POST["province"];
    $address = $_POST["address"];
    $postalCode=$_POST["postalCode"];
    $contactNumber = $_POST["phonenumber"];
    
    $sql = "Insert into users (first_name,last_name,address ,province,postal_code ,
                                 contact_number,email)
            values('$fname','$lname','$address','$province','$postalCode','$contactNumber','$email')";
    mysqli_query($con, $sql);
    //echo $sql;
        if (mysqli_affected_rows($con)==1){
         $msg = "INSERT SUCCESSFUL";
         header ("location: Contacts.php?message=$msg");
     }
    else{
       $msg ="ERROR ON INSERT";
       header ("location: Contacts.php?message=$msg");
     }//end if
    
    
}