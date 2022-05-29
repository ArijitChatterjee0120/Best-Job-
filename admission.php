<?php 
  //creating connection to database
$con=mysqli_connect("localhost","root","","jobs") or die(mysqli_error());

  //check whether submit button is pressed or not
if((isset($_POST['submit'])))
{
  //fetching and storing the form data in variables
  $FName = $_POST['fname'];
  $LName =$_POST['lname'];
  
  $Email =$_POST['email'];
  $Phone = $_POST['phone'];
  
  
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


  //Execute the query and returning a message
if(!$result = $con->query($sql)){
die('Error occured [' . $conn->error . ']');
}
else
   echo "";
}

?>
<html>
  <head><title>UEM KOLKATA POST ADMISSIOn
</title></head><body><br>
<!DOCTYPE html>
<html lang="en">
  <head>
	<title>UEM KOLKATA</title>
	<link href="images/logo of UEM.png" rel="icon">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">
    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
    <style>
        h2{
            color:orange;
        }
        em{
color:red;
}
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}
    </style>
  </head>
  <body>
    <div class="bg-top navbar-light">
      <div class="container">
          <div class="row no-gutters d-flex align-items-center align-items-stretch">
              <div class="col-md-4 d-flex align-items-center py-4">
                  <a class="navbar-brand" href="index.html"><img src="images/logo of UEM.png" alt="LOGO OF UEM KOLKATA" style="width:150px;height:100px" <span></span></a>
              </div>
              <div class="col-lg-8 d-block">
                  <div class="row d-flex">
                      <div class="col-md d-flex topper align-items-center align-items-stretch py-md-4">
                          <div class="icon d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
                          <div class="text">
                              <span>Email</span>
                              <span><a href="mailto: admissions@iemcal.com">admissions@iemcal.com</a></span>
                          </div>
                      </div>
                      <div class="col-md d-flex topper align-items-center align-items-stretch py-md-4">
                          <div class="icon d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
                          <div class="text">
                              <span>Call</span>
                              <span>Call Us:<a href="callto: 8010700500 / 03323572059 / 03323572995">8010700500 / 03323572059 / 03323572995</a></span>
                          </div>
                      </div>
                      
                  </div>
              </div>
          </div>
        </div>
  </div>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark" id="ftco-navbar">
      <div class="container-fluid d-flex align-items-center px-4">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
              aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="oi oi-menu"></span> Menu
          </button>

          <div class="collapse navbar-collapse text-right" id="ftco-nav">
              <ul class="navbar-nav mr-auto">
                  <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button"
                          data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Home
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="recognition.html">Recognition</a>
                          <a class="dropdown-item" href="campus.html">Campus</a>
                          <a class="dropdown-item" href="internship.html">Internships</a>
                          <a class="dropdown-item" href="laboratory.html">Laboratories</a>
                          <a class="dropdown-item" href="library.html">Library</a>
                          <a class="dropdown-item" href="project.html">Student Project</a>
                          <a class="dropdown-item" href="environment.html">Computering Environment</a>
                          <a class="dropdown-item" href="mous.html">Mous</a>
                          <a class="dropdown-item" href="chapter.html">Student Chapter</a>
                          <a class="dropdown-item" href="online.html">Online Study Materials</a>
                          <a class="dropdown-item" href="startup.html">Startups</a>
                          <a class="dropdown-item" href="faculty.html">Faculty</a>
                          <a class="dropdown-item" href="hostel.html">Hostel</a>
                          <a class="dropdown-item" href="alumni.html">Alumni</a>
                      </div>
                  </li>
                  <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button"
                          data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          About
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="about.html">About UEM,Kolkata</a>
                          <a class="dropdown-item" href="management.html">UEM Kolkata,Management</a>
                          <a class="dropdown-item" href="vision.html">UEM Kolkata,Vision and Mission</a>
                      </div>
                  </li>
                  <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button"
                          data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Approvals
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="approval.html">UEM Kolkata,Approvals</a>
                      </div>
                  </li>
                  <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button"
                          data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Placement
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="2019 placement.html">2019 Placement</a>
                          <a class="dropdown-item" href="2020 placement.html">2020 Placement</a>
                  </li>
                  <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button"
                          data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Deparment
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="cs.html">Department of Computer Science</a>
                          <a class="dropdown-item" href="electrical.html">Department of Electrical Engineering</a>
                          <a class="dropdown-item" href="electronics.html">Department of Electronics and Communication Engineering</a>
                          <a class="dropdown-item" href="mechanical.html">Department of Mechanical Engineering</a>
                          <a class="dropdown-item" href="civil.html">Department of Civil Engineering</a>
                          <a class="dropdown-item" href="biotech.html">Department of Biotechnology</a>
                          <a class="dropdown-item" href="computerapp.html">Department of Computer Application</a>
                          <a class="dropdown-item" href="law.html">Department of Law</a>
                          <a class="dropdown-item" href="business.html">Department of Business Administration</a>
                          <a class="dropdown-item" href="hotel.html">Department of Hotel and Hospitality Management</a>
                      </div>
                  </li>
                  <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button"
                          data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Achievement
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="achievement.html">UEM Kolkata,Achievement</a>
                  </li>

                  <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button"
                          data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Admission
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="admission.html">UEM Kolkata, Admission</a>
                          <a class="dropdown-item" href="admissionform.html">UEM Kolkata, Admission Form</a>
                  </li>
                  <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button"
                          data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          International Conference
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="conference.html">UEM Kolkata,International Conference</a>
                          <a class="dropdown-item" href="green.html">UEM Kolkata,UEM Green</a>
                      </div>
                  </li>
                  <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button"
                          data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Scholarship
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="scholarship.html">Scholarship</a>
                      </div>
                  </li>
                  <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button"
                          data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Contact Us
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="contact.html">Contact Us</a>
                      </div>
                  </li>
                  <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button"
                          data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Events
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="events.html">Event</a>
                      </div>
                  </li>

              </ul>
          </div>
      </div>
  </nav>
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/adm1.jpeg');">
        <div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text align-items-center justify-content-center">
          </div>
        </div>
      </section>
      <center><br><br>
<strong><h2>
  Thank You. We have got your information.<br>
  We cannot allow you to continue. Please close the tab for security purposes.<br>
For any further information or queries, please contact 8010700500 or through email at admissions@iemcal.com</h2></strong><br><br>
</body>
</html>
