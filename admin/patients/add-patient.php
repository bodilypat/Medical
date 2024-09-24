<?php
session_start();
error_report(0);
include('../config/dbconnect.php');

    if($_SERVER["REQUEST_METHOD"] == "POST") {
    
            $patname = $_POST['name'];
            $patdob = $_POST['dob'];
            $patgender = $_POST['gender'];
            $patcontact = $_POST['phone'];
            $patemail = $_POST['email'];
            $pataddress = $_POST['address']

            $aPat = mysqli_query($deal,"INSERT INTO patients(name, dob, gender, phone, email, address)
                                        VALUES('$patname','$patdob','$patgender','$patcontact','$patemail', $pataddress')");
            if($aPat)
            {
                echo "<script>alert('patient info added successfully');</script>";
                header('localhost:add-patient.php');
        }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Doctor | add Patient</title>
        <!-- Custom CSS -->
        <link rel="stylesheet" href="../asset/css/styles.css">
    </head>
<body>
    <div class="app">
        <!-- outline: navbar -->
         <div class="app-content">
            <?php include('../layouts/header.php');?>
            <div class="main-content">
                 <div id="container" class="wrap-content container">
                      <section id="page-title">
                            <div class="row">
                                 <div class="col-sm-8"><h1 class="mainTitle"> Patient | add Patient</h1></div>
                            </div>
                      </section>
                      <div class="container bg-white">
                            <form name="addPatient" method="post">
                                <div class="form-group">
                                    <label for="PatietName">Name</label>
                                    <input type="text" name="name" class="form-control" placeholder="Name" required>
                                </div>
                                <div class="form-group">
                                    <label for="DateOfBirth">Date of Birth</label>
                                    <input type="date" name="dob"  class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="Gender">Gender</label>
                                    <select name="gender" required>
                                         <option value="male">Male</option>
                                         <option value="female">Female</option>
                                         <option value="other">Other</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="Phone">Phone</label>
                                    <input type="text" name="phone" class="form-control" placeholder="phone">
                                </div>
                                <div class="form-group">
                                    <lable for="Email">Email</label>
                                    <input type="email" name="email" class="form-control" placeholder="Email">
                                </div>
                                <div class="form-group">
                                     <label for="Address">Address</label>
                                     <textarea name="address" placeholder="Address"></textarea>
                                </div>
                                <button type="submit">Add Patient</button>
                            </form>
                      </div>
                 </div>
            </div>
         </div>
    </div>
</body>
</html>
<form action="add-patient.php" method="POST"></div