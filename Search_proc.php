<?php
session_start();
include("connectmealsonwheels.php");
include("search.php");

if (isset($_POST["search"])) {
    $search_value = $_POST["search"];

        $sql = "select * from users where lower(first_name) like (lower('%$search_value%')) or lower(last_name) like(lower('%$search_value%')) or lower(email) like(lower('%$search_value%'))";
        $result = mysqli_query($con, $sql);
        while ($row = mysqli_fetch_array($result)) {
             
            $address= $row['address']." ".$row['province']." ".$row['postal_code'];
            
            $dispalyString = $row["first_name"] . " " . $row["last_name"];
            echo '<BR><BR>';
            echo $dispalyString ." ".$row['email']."<BR>";
            echo $address ." ". $row['contact_number'];

        }
    }
?>
  



