<?php 
  //creating connection to database
  $conn=mysqli_connect("localhost","root","","jobs") or die(mysqli_error());

 
  //check whether submit button is pressed or not
  if ($_SERVER['REQUEST_METHOD'] == "POST"){




  //fetching and storing the form data in variables
  $FName = $con->real_escape_string($_POST['fname']);
  $LName = $con->real_escape_string($_POST['lname']);
  
  $Email = $con->real_escape_string($_POST['email']);
  $Phone = $con->real_escape_string($_POST['phone']);
  
  
  $Wno = $_POST['wno'];
  $Gen = $_POST['gender'];
  $Faname = $_POST['faname'];
  $MAName = $_POST['mname'];
  
  
  $Gphone = $_POST['gphone'];
  $Tenmarks = $_POST['tenmarks'];
  $Twmarks = $_POST['twmarks'];
  
  $gmarks = $_POST['gmarks'];
  $Address = $_POST['address'];
  
  $job = $_POST['job'];
  
    //query to insert the variable data into the database
  $sql="INSERT INTO jobs (fname, lname, email, phone, wno, gender, faname, mname, gphone, tenmarks, twmarks, job, gmarks, address) VALUES ('".$FName."','".$LName."','".$Email."', '".$Phone."','".$Wno."','".$Gen."','".$Faname."','".$MAName."', '".$Gphone."', '".$Tenmarks."','".$Twmarks."', '".$job."','".$gmarks."','".$Address."')";

// -- '$Email','$Loct','$PH','$do','$co','$nit','$fc','$tc')";
// ,'".$Loct."','".$PH."', '".$do."','".$co."','".$nit."','".$fc."','".$tc."')");
// //'".$Email."',
// // ,'".$Wno."','".$Gen."','".$Faname."','".$MAName."', '".$Gphone."', '".$Tenmarks."','".$Twmarks."', '".$Stream."','".$Pcm."',
// 
 mysqli_query($conn, $sql);


// header("location:success.php");
if(!$result = $con->query($sql)){
    die('Error occured [' . $conn->error . ']');
    }
    else
       echo "";
    

}   





?>

  //query to insert the variable data into the database
$sql="INSERT INTO user(name,email,location,pH,do,co,bod,nit,fc,tc,year) VALUES ('$Name','$Email','$Loct','$PH','$do','$co','$bod','$nit','$fc','$tc','$y')";

// -- '$Email','$Loct','$PH','$do','$co','$nit','$fc','$tc')";
// ,'".$Loct."','".$PH."', '".$do."','".$co."','".$nit."','".$fc."','".$tc."')");
// //'".$Email."',
// // ,'".$Wno."','".$Gen."','".$Faname."','".$MAName."', '".$Gphone."', '".$Tenmarks."','".$Twmarks."', '".$Stream."','".$Pcm."',
// 
 mysqli_query($conn, $sql);


header("location:success.php");
  

}   
else{
    echo "Error;";
}




?>