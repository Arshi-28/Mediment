<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Medico</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/doctor.css">
    <link rel="stylesheet" href="css/circle.css">
    <link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css">
    <meta name="viewport" content="initial-scale=1.0, width=device-width" />
    <script src="https://js.api.here.com/v3/3.1/mapsjs-core.js"
    type="text/javascript" charset="utf-8"></script>
    <script src="https://js.api.here.com/v3/3.1/mapsjs-service.js"
    type="text/javascript" charset="utf-8"></script>


</head>

<body>
     
    <header>
      <?php
        include('common/navbar.php');
        ?>
</header>
   
   <main>           
    
    
    <div class="section-1">
    
        <div class="container">
            <h1 style="padding-top:20px; margin-top: 20px; margin-bottom: 70px; text-align: center">Contact Us</h1>
            <div class="row">
                <div class="col-md-5">
                    <div style="width: 640px; height: 480px" id="mapContainer"></div>
                    <p style="text-align: left; margin-top: 20px; font-size: 20px">We'd love your feedback</p>
                    <p style="text-align: left; margin-top: 80px; font-size: 20px"> Dhaka, Bangadesh <br>
                        Phone:12345223 <br>
                        Address: 122 East Road.
                    </p>
                </div>
                
                <div class="col-md-7">
                    
                     <div class="container" style="margin-bottom: 30px">
                          <form action="">

                            <label for="fname">First Name</label>
                            <input type="text" id="fname" name="firstname" placeholder="Your name..">

                            <label for="Email">Email</label>
                            <input type="text" id="lname" name="email" placeholder="Your email..">

                    

                            <label for="message">Message</label>
                            <textarea name="message" placeholder="Write something.." style="height:200px"></textarea>

                            <input type="submit" value="Submit">

                          </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       <script>
      // Initialize the platform object:
      var platform = new H.service.Platform({
        'apikey': 'zEUNvrKsBaDcXU2omT9b30JjTitCeS_V7gQ8hvns0gQ'
      });

      // Obtain the default map types from the platform object
      var maptypes = platform.createDefaultLayers();

      // Instantiate (and display) a map object:
      var map = new H.Map(
        document.getElementById('mapContainer'),
        maptypes.vector.normal.map,
        {
          zoom: 12,
          center: { lng: 13.4, lat: 52.51 }
        });
    </script>
    
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