<?php
// initializing variable for errors
$firstnameError="";
$lastnameError="";
$addressError="";
$phoneError="";
$emailError="";
$websiteError="";
//checking button is clicked
if(isset($_POST["submit"]))
{  
//FirstName sanitization 
    if($_POST['firstname'] != ""){
        $_POST['firstname'] = filter_var($_POST['firstname'], FILTER_SANITIZE_STRING);
        if (!preg_match("/^[a-zA-Z ]*$/",$_POST['firstname'])) {
            $firstnameError = "Please enter valid firstname";
          }
    }
    else{
        $firstnameError = "Please enter your firstname";
    }

    //LastName sanitization 
    if($_POST['lastname'] != ""){
        $_POST['lastname'] = filter_var($_POST['lastname'], FILTER_SANITIZE_STRING);
        if (!preg_match("/^[a-zA-Z ]*$/",$_POST['lastname'])) {
            $lastnameError = "Please enter valid lastname";
          }
    }
    else{
        $lastnameError = "Please enter your lastname";
    }

    // Address sanitization
    if($_POST['address'] != ""){
        $_POST['address'] = filter_var($_POST['address'], FILTER_SANITIZE_STRING);
        if(!preg_match("/^[#.0-9a-zA-Z\s,-]+$/",$_POST['address'])){
            $addressError = "Please enter valid address";
        }
    }
    else{
        $addressError = "Please enter your address";
    }

    //Phone Sanitization
    if($_POST['phone'] != ""){
        $_POST['phone'] = filter_var($_POST['phone'], FILTER_SANITIZE_STRING);
         if(!preg_match("/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/",$_POST['phone'])){
             $phoneError = "Please enter valid Phone Number";
         }
     }
     else{
         $phoneError = "Please enter your Phone Number";
     }
    

    // Email sanitization
    if($_POST['email'] != ""){
       $_POST['email'] = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
        if(!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){
            $emailError = "Please enter valid Email";
        }
    }
    else{
        $emailError = "Please enter your email";
    }
    
    // Website Sanitization

    if($_POST['website'] != ""){
        $_POST['website'] = filter_var($_POST['website'], FILTER_SANITIZE_URL);
         if(!filter_var($_POST['website'],FILTER_VALIDATE_URL)){
             $websiteError = "Please enter valid Website URL";
         }
     }
     else{
         $websiteError = "Please enter your Website URL";
     }
}
?>

<html>
    <head>
		<title>Form Sanitize</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
            .error {color: #FF0000;}
        </style>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container">
        <h1 class="well">Registration Form</h1>
        <div class="col-lg-12 well">
            <div class="row">
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" >
                    <div class="col-sm-12">
                        <div class="row">
                            <div class="col-sm-6 form-group">
                                <label>First Name</label>
                                <input type="text" name="firstname" placeholder="Enter First Name Here.." class="form-control" value = "<?php if(isset($_POST['firstname'])) echo $_POST['firstname'];?>">
                                <span class="error" ><?php echo $firstnameError;?></span>
                            </div>
                            <div class="col-sm-6 form-group">
                                <label>Last Name</label>
                                <input type="text" name="lastname"placeholder="Enter Last Name Here.." class="form-control" value = "<?php if(isset($_POST['lastname'])) echo $_POST['lastname'];?>">
                                <span class="error" ><?php  echo $lastnameError;?></span>
                            </div>
                            
                        </div>
                        <div class="form-group">
                            <label>Address</label>
                            <textarea name="address" placeholder="Enter Address Here.." rows="3" class="form-control">
                                <?php if(isset($_POST['address']))echo $_POST['address']; ?>
                                </textarea>
                            <span class="error" ><?php echo $addressError; ?></span>
                        </div>
                        <div class="form-group">
                            <label>Phone Number</label>
                            <input name="phone" type="text" placeholder="Enter Phone Number Here.." class="form-control" value="<?php if(isset($_POST['phone'])) echo $_POST['phone'];?>">
                            <span class="error" ><?php echo $phoneError;?></span>
                        </div>
                        <div class="form-group">
                            <label>Email Address</label>
                            <input name="email" type="text" placeholder="Enter Email Address Here.." class="form-control" value = "<?php if(isset($_POST['email'])) echo $_POST['email'];?>">
                            <span class="error" ><?php echo $emailError;?></span>
                        </div>
                        <div class="form-group">
                            <label>Website</label>
                            <input name="website" type="text" placeholder="Enter Website Name Here.." class="form-control" value="<?php if(isset($_POST['website'])) echo $_POST['website'];?>">
                            <span class="error" ><?php echo $websiteError;?></span>
                        </div>
                        <button type="submit" class="btn btn-lg btn-info" name="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
        </div>
    </body>
</html>

