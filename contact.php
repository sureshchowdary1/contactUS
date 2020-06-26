<?php

session_start();

?>

<!DOCTYPE html>a.sld;aldf ga;odf;ogs'dofojogiiooijd;olifsgoihosdhfkghsdhfpiuigaoiejp f9p<<<<<>>>>>>>Klkkfa,;





os/drf,g/sdlfklgh osurup9tpdrug
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CONTACT US</title>

    

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

</head>
<body>

<?php

include 'dbs.php';

if(isset($_POST['submit'])){
    $user = mysqli_real_escape_string($con, $_POST['user']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $mobile = mysqli_real_escape_string($con, $_POST['mobile']);
    $enquiry = mysqli_real_escape_string($con, $_POST['enquiry']);
    $message = mysqli_real_escape_string($con, $_POST['message']);

            $insertquery = "INSERT INTO contact(USER, EMAIL, PHONE, ENQUIRY, MESSAGE) VALUES ('$user','$email','$mobile','$enquiry','$message')";

            $iquery = mysqli_query($con, $insertquery);

            if($iquery){
                ?>
                    <script>
                        alert("inserted successful");
                    </script>
                <?php
            }else{
                ?>
                    <script>
                        alert("NOT inserted");
                    </script>
                <?php
            }
        }

?>

    <div class="container"> 

        <h1 class="text-danger text-center">
            CONTACT US
        </h1>

        <hr>

        <div class="col-lg-8 m-auto">
            <form action="contact.php" method="POST" onsubmit="return validation()">
                <div class="form-group">
                    <label for="user" > UserName</label>
                    <input type="text" name="user" id="user" class="form-control" autocomplete="off" required>
                    <span id="USER" class="text-danger font-weight-bold"> </span>
                </div>

                <div class="form-group">
                    <label for="email"> Email</label>
                    <input type="text" name="email" id="email" class="form-control"  autocomplete="off" required>
                    <span id="EMAIL" class="text-danger font-weight-bold"> </span>
                </div>

                <div class="form-group">
                    <label for="mobile"> Phone</label>
                    <input type="text" name="mobile" id="mobile" class="form-control"  autocomplete="off" required>
                    <span id="PHONE" class="text-danger font-weight-bold"> </span>
                </div>

                <div class="form-group">
                    <label for="enquiry">Enquiry</label>

                    <select name="enquiry" id="enquiry" onchange="selectchange(this)" required>
                        <option></option>
                        <option value="Business">Business</option>
                        <option value="Company">Company</option>
                        <option value="Normal">Normal</option>
                    </select>

                    <span id="ENQUIRY" class="text-danger font-weight-bold"> </span>
                </div>

                <div class="form-group">
                    <label for="message"> Message </label>
                    <textarea name="message" id="message" cols="98" rows="2"  autocomplete="off" required></textarea>
                    <span id="MESSAGE" class="text-danger font-weight-bold"> </span>
                </div>
                
                <input  class="btn btn-success " type="submit" id="submit" name="submit" >               

            </form>

        </div>
        
    </div>

    <script src="contact.js"></script>
</body>
</html>
