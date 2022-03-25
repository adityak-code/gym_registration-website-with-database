<?php
$insert=false;

if(isset($_POST['Name'])){

    $server='localhost';
    $username='root';
    $password='';

$con=mysqli_connect($server,$username,$password);

if(!$con){
    die("connection to this database failed due to" . mysqli_connect_error());
    
         }
    


  
$Name = $_POST['Name'];
$Age=$_POST['Age'];
$Gender=$_POST['Gender'];
$Locality=$_POST['Locality'];
$email=$_POST['email'];
$phone=$_POST['Phone'];
$sql=  "INSERT INTO `gym_registration`.`registration` ( `Name`, `Age`, `Gender`, `Locality`, `email`, `Phone`, `Date`) VALUES ( '$Name', '$Age', '$Gender', '$Locality', '$email', '$phone',current_timestamp());";

//echo"$sql";
 if($con->query($sql) == true){
    
    //echo"Successfully connected";
    $insert = true;
 }

else{
    
    echo "error: $sql <br> $con->error";
}

$con->close();

}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Adi's Fitness</title>
    <link href="https://fonts.googleapis.com/css?family=Baloo+Bhai&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="style.css">
</head>


<body>

    <header class="header">
        <!-- Left box for logo -->
        <div class="left">
            <img src="img/bg4.png" alt="">
            <div>Adi's Fitness</div>
        </div>
        <!-- Mid box for navbar -->
        <div class="mid">
            <ul class="navbar">
                <li><a href="#" class="active">Home</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Fitness Calculator</a></li>
                <li><a href="#">Contact Us</a></li>
            </ul>
        </div>

        <!-- Right box for buttons -->
        <div class="right">
            <button class="btn">Call Us Now</button>
            <button class="btn">Email Us</button>
        </div>
    </header>
    <div class="container">
        <h1>Join the best gym of Kolhapur now</h1>
        <form action="index.php" method="post">
            <div class="form-group">
                <input type="text" name="Name" id="Name" placeholder="Enter your Name">
            </div>
            <div class="form-group">
                <input type="text" name="Age" id="Age" placeholder="Enter your Age">
            </div>
            <div class="form-group">
                <input type="text" name="Gender" id="Gender" placeholder="Enter your Gender">
            </div>
            <div class="form-group">
                <input type="text" name="Locality" id="Locality" placeholder="Enter your Locality">
            </div>
            <div class="form-group">
                <input type="email" name="email" id="email" placeholder="Enter your Email Id">
            </div>
            <div class="form-group">
                <input type="Phone" name="Phone" id="Phone" placeholder="Enter your Phone Number">
            </div>
            <button class="btn">Submit</button>
            </form>
            <?php
        if($insert == true){
        echo "<p class='submitMsg'>Thanks for submitting your form. We are happy to see you joining us.</p>";
        }
        ?>
    </div>

    <script src="index.js">
    </script>
        
</body>

</html>
