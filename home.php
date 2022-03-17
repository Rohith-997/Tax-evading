<?php
require_once "config.php";
if (isset($_POST['add'])) {
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $Passbook = mysqli_real_escape_string($con, $_POST['Passbook']);
    $amount = mysqli_real_escape_string($con, $_POST['amount']);
    $mobile = mysqli_real_escape_string($con, $_POST['mobile']);
    
    if (!preg_match("/^[a-zA-Z ]+$/", $name)) {
        $name_error = "Name must contain only alphabets and space";
    }
    
    if (strlen($mobile) < 10) {
        $mobile_error = "Mobile number must be minimum of 10 characters";
    }
    
    if (!$error) {
        if (mysqli_query($con, "INSERT INTO bank_details (name, amount, phoneNo, passbookNo) VALUES ('" . $name . "', '" . $amount . "', '" . $mobile . "', '" . $Passbook . "')")) 
        
        {
            header("location: home.php");
            exit();
        } else {
            echo "Error: " . $sql . "" . mysqli_error($con);
        }
    }
    mysqli_close($con);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
    <title>Welcome to Finance Portal</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assests/css/style.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

</head>

<body>
    <div class="bank_form">
        <form action="home.php" method="post">
            <div class="form-group">
                <label>Name</label>
                <input type="text" name="name" class="form-control" value="" maxlength="50" required="">
                
            </div>
            <div class="form-group ">
                <label>Passbook Number</label>
                <input type="text" name="Passbook" class="form-control" value="" maxlength="12" required="">
                
            </div>
            <div class="form-group">
                <label>Amount</label>
                <input type="text" name="amount" class="form-control" value="" maxlength="5" required="">
                
            </div>
            <div class="form-group">
                <label>Mobile</label>
                <input type="text" name="mobile" class="form-control" value="" maxlength="12" required="">
                <span class="text-danger"><?php if (isset($mobile_error)) echo $mobile_error; ?></span>
            </div>
            
            <input type="submit" class="btn btn-primary" name="add" value="Add Money">
           
        </form>
        <div class="text-center">Want to Leave the Page? <br><a href="logout.php">Logout</a></div>

    </div>
</body>

</html>