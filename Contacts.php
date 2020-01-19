<?php include('connectmealsonwheels.php')?>
<?php
   // $message =$_GET["message"];
    if(isset($_GET["message"])){
        $message = $_GET["message"];
      echo "<script>alert('$message')</script>";  
    }
?>

<!DOCTYPE html>
<html>
    <head>
<link href="style.css" rel="stylesheet">
    </head>
    <body>
<!--         <form class="form-inline my-2 my-lg-0" method="post" action="search.php">
                    <input class="form-control mr-sm-2" type="text" name="search" placeholder="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
         </form>-->
        <h3>Contact Information</h3>

        <div>
              
            <form method="post" action="submit_page.php">
                <label for="fname">First Name</label>
                <input type="text" id="fname" name="firstname" placeholder="Your name.." required>

                <label for="lname">Last Name</label>
                <input type="text" id="lname" name="lastname" placeholder="Your last name.." required>

                <label for="address">Address</label>
                <input type="text" id="adress" name="address" placeholder="Your address" required>

                <label for="province">Province</label>
                <select id="province" name="province">
                    <option value="British Columbia">British Columbia</option>
                    <option value="Alberta">Alberta</option>
                    <option value="Saskatchewan">Saskatchewan</option>
                    <option value="Manitoba">Manitoba</option>
                    <option value="Ontario">Ontario</option>
                    <option value="Quebec">Quebec</option>
                    <option value="New Brunswick">New Brunswick</option>
                    <option value="Prince Edward Island">Prince Edward Island</option>
                    <option value="Nova Scotia">Nova Scotia</option>
                    <option value="Newfoundland and Labrador">Newfoundland and Labrador</option>
                    <option value="Northwest Territories">Northwest Territories</option>
                    <option value="Nunavut">Nunavut</option>
                    <option value="Yukon">Yukon</option>
                </select>
                
                <label for="postalCode">Postal Code</label>
                <input type="text" id="postalCode" name="postalCode" placeholder="Your postal code" required>

                <label for="phone">Phone Number</label>
                <input type="text" id="phonenumber" name="phonenumber" required placeholder="Your phone number">
                
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Your email">

                <input type="submit" value="Submit">
            </form>
        </div>

    </body>
</html>
