<?php

include('common/db_connection.php');


$sql = "SELECT appointmentid, date, time FROM appointments";

$search_result = mysqli_query($connect, $sql);
$count = mysqli_num_rows($search_result);
 ?> 

<head>
    <meta charset="UTF-8">
    <title>Medico</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/circle.css">
    <link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css">

</head>

<style>
  table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  padding: 8px;
  text-align: left;
  border-bottom: 1px solid #ddd;
}

tr:hover {background-color:#f5f5f5;}


</style>
<body>

     
    <header>
       <?php session_start(); ?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
          <a class="navbar-brand" href="index.php">Medico</a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse"></div>
       <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <a class="nav-link" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                    <a class="nav-link" href="index.php">About</a>
              </li>
              <li class="nav-item">
                   <a class="nav-link" href="doctor.php">Doctors</a>
              </li>
              <li class="nav-item">
                   <a class="nav-link" href="listappointment.php">View your Appointments</a>
              </li>
              <li class="nav-item">
                   <a class="nav-link" href="user_profile.php">Your Profile</a>
              </li>
              <li class="nav-item">
                   <a class="nav-link" href="contact.php">Contact Us</a>
              </li>
              
              
          </ul>
           <?php 
           if(!isset($_SESSION['fullname'])){ ?>
           <form action="" class="form-inline my-2 my-lg-0">
            <button class="btn menu-right-btn border" >
                <a href="user-registration.php">Register</a>                
            </button>
             <button class="btn menu-left-btn border" >
                <a href="login1.php">Login</a>               
            </button>
        </form>
           <?php
           }else{
            echo $_SESSION['fullname'];?>
               <a href="logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i></a>
          <?php } ?>
           
     </div>
    </nav>
</header>
   
   <main>
        <div class="container text-center">
       <h1 style="font-weight: 500">Your List of Appointments</h1><br>

<table>
  <tr>
    <th>Doctor Name</th>
    <th>Appointment Date</th>
    <th>Appointment Time</th>
  </tr>



<?php while($row = mysqli_fetch_array($search_result)):?>
                <tr>
                    <td><?php echo $row['appointmentid'];?></td>
                    <td><?php echo $row['date'];?></td>
                    <td><?php echo $row['time'];?></td>
                    
                </tr>
                <?php endwhile;?>

</table>
</div>
<footer class="page-footer font-small blue">

  
  <div class="footer-copyright text-center py-3">© Medico
    <a href="https://mdbootstrap.com/education/bootstrap/"></a>
  </div>
  

</footer>


    
   </main>
    
    
    <script src="https://kit.fontawesome.com/d2f5a4ed19.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>