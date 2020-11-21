

<!DOCTYPE html>

<html lang="fr">

<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Landing page </title>
 
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
  
  <link rel="stylesheet" href="css/app.css">

</head>

<body>


  <nav class="nav">
    <div class="container">
      <ul>
        <li> <?php  echo  'Accueil' ;?>    </li>
        <li> <?php  echo  'Services ' ;?> </li>
        <li> <?php  echo  'Contact' ;?>  </li>
        <li> <?php  echo  'A propos' ;?>  </li>
      </ul>
    </div>
  </nav>

  <!-- carousel -->
  <div id="mycaroussel" class="carousel slide" data-ride="carousel">
    
                    <!-- indicateurs  -->
                    <ol class="carousel-indicators">
                      <li data-target="#mycaroussel" data-slide-to="0" class="active"></li>
                      <li data-target="#mycaroussel" data-slide-to="1"></li>
                      <li data-target="#mycaroussel" data-slide-to="2"></li>
                     
                    </ol>


                    <!-- inner  -->
                    <div  style="height: 85vh;" class="carousel-inner">

                      <div class="carousel-item active h-100" style="position: relative;">
                         <div style="z-index: 0;position:absolute;top:0;left:0;height:100%; width:100%;background-color: rgba(0, 0, 0, 0.7);"> </div> 
                            <img src="img/1.jpg" style="object-fit:fill ;" class="d-block w-100 "  alt="...">
                            <div class="carousel-caption d-none d-md-block">
                              <h5>First slide label</h5>
                              <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                            </div>
                      </div>

                      <div class="carousel-item h-100" style="position: relative;">
                        <div style="position:absolute;top:0;left:0;height:100%; width:100%;background-color: rgba(0, 0, 0, 0.7);" class="over">  </div>
                        <img src="img/2.jpg" class="d-block w-100 " alt="...">
                        <div class="carousel-caption d-none d-md-block">
                          <h5>Second slide label</h5>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                      </div>

                      <div class="carousel-item h-100" style="position: relative;">
                       <div style="position:absolute;top:0;left:0;height:100%; width:100%;background-color: rgba(0, 0, 0, 0.7);" class="over"> </div> 
                        <img src="img/3.jpg" class="d-block w-100 " alt="...">
                        <div class="carousel-caption d-none d-md-block">
                          <h5>Third slide label</h5>
                          <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                        </div>
                      </div>


                    </div>


                    <!-- fleche -->
                    <a class="carousel-control-prev" href="#mycaroussel" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#mycaroussel" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>

  </div>

 

  <!-- services  -->
  <div class="container mt-5">
    <h1 class="text-center mb-5"> Nos Services </h1>
    <div class="row ">

        <div class="col-md-4 text-center">
          <i class="fas fa-gem d-block mb-3"></i>
         Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat cupiditate ut molestias esse repellat molestiae!
        </div>

        <div class="col-md-4   text-center">
          <i class="fas fa-gem  d-block mb-3"></i>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint nemo a, quibusdam nesciunt ea nam.
        </div>
       
          <div class="col-md-4  text-center ">
            <i class="fab fa-cc-visa d-block mb-3"></i>
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rerum commodi laudantium ab repellendus, unde laborum!
          </div>

    </div>
  </div>

  <!-- php db -->
  <div class="container ">

    <?php  include 'db.php' ;?>   


<table class="table">
      <thead class="thead-dark text-light">
        <tr>
          <th scope="col">ID</th>
          <th scope="col">First Name</th>
          <th scope="col">Last Name</th>
          <th scope="col">Speciality</th>
          <th scope="col"></th>
          <th scope="col"></th>
          <th scope="col"></th>

        </tr>
      </thead>

      <tbody class=" ">


      <?php 
      $sql = "SELECT * FROM etudiants";
      $result = $conn->query($sql);

      if ($result->num_rows > 0) { ;?>
        <?php  while($row = $result->fetch_assoc()) { 
       

          echo '<tr>';
          echo '<td>'.$row["id"].'</td>';
          echo ' <td>'.$row["first-name"].'</td>';
          echo '<td>'.$row["last-name"].'</td>';
          echo '<td>'.$row["speciality"].'</td>';
          echo '<td><a href="http://localhost/phpmyadmin/sql.php?server=1&db=master&table=etudiants&pos=0"><button class=" btn btn-info btn-sm">view</button></a></td>';
          echo '<td><button class=" btn btn-warning btn-sm">edit </button></td>';
          echo '<td><button class=" btn btn-danger btn-sm"> delete </button></td>';
          echo ' </tr>';
       
         
        }
      } else {
        echo '<tr>';
        echo '<td> 0 results </td>';
        echo ' </tr>';
        
      }
      $conn->close();
    ?>


       
        
      </tbody>
</table>


    
  </div>

 <!-- section gallery  -->
  <div class="container mt-5">

    <h1 class="text-center "> Nos Produits </h1>

    <div class="row">
      
      <div class="col-md-4 mb-5 ">

        <div class="card shadow-lg " >
          
          <img src="https://picsum.photos/350/200" class="card-img-top" alt="description detaillé de l'image ">
     
          <div class="card-body">
            <h5 class="card-title">Pull Over</h5>
            <p class="card-text">Prix: 65,600 TND</p>
            <a href="#" class="btn btn-primary">Acheter</a>
          </div>
        </div>

      </div>

      <div class="col-md-4  mb-5 ">
        <div class="card shadow-lg" >
          <img src="https://picsum.photos/350/200" class="card-img-top" alt="description detaillé de l'image ">
          <div class="card-body">
            <h5 class="card-title">Pull Over</h5>
            <p class="card-text">Prix: 65,600 TND</p>
            <a href="#" class="btn btn-primary">Acheter</a>
          </div>
        </div>
      </div>

      <div class="col-md-4  mb-5 ">
        <div class="card shadow-lg" >
          <img src="https://picsum.photos/350/200" class="card-img-top" alt="description detaillé de l'image ">
          <div class="card-body">
            <h5 class="card-title">Pull Over</h5>
            <p class="card-text">Prix: 65,600 TND</p>
            <a href="#" class="btn btn-primary">Acheter</a>
          </div>
        </div>
      </div>

      <div class="col-md-4  mb-5 ">
        <div class="card shadow-lg" >
          <img src="https://picsum.photos/350/200" class="card-img-top" alt="description detaillé de l'image ">
          <div class="card-body">
            <h5 class="card-title">Pull Over</h5>
            <p class="card-text">Prix: 65,600 TND</p>
            <a href="#" class="btn btn-primary">Acheter</a>
          </div>
        </div>
      </div>
      <div class="col-md-4  mb-5 ">
        <div class="card shadow-lg" >
          <img src="https://picsum.photos/350/200" class="card-img-top" alt="description detaillé de l'image ">
          <div class="card-body">
            <h5 class="card-title">Pull Over</h5>
            <p class="card-text">Prix: 65,600 TND</p>
            <a href="#" class="btn btn-primary">Acheter</a>
          </div>
        </div>
      </div>
      <div class="col-md-4  mb-5 ">
        <div class="card shadow-lg" >
          <img src="https://picsum.photos/350/200" class="card-img-top" alt="description detaillé de l'image ">
          <div class="card-body">
            <h5 class="card-title">Pull Over</h5>
            <p class="card-text">Prix: 65,600 TND</p>
            <a href="#" class="btn btn-primary">Acheter</a>
          </div>
        </div>
      </div>
     
    </div>
  </div>

 <!-- section timeline  -->
 <div class="timeline">
   <ul>
     <li>
       <div class="content">
         <h3>Lorem ipsum dolor sit.</h3>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum odit vitae facere quis, quas natus maxime, quaerat exercitationem asperiores delectus magnam impedit ab beatae dolor autem commodi similique necessitatibus voluptates!</p>
       </div>
       <div class="time">
         <h4>january 2020</h4>
       </div>
     </li>
     <li>
       <div class="content">
         <h3>Lorem ipsum dolor sit.</h3>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum odit vitae facere quis, quas natus maxime, quaerat exercitationem asperiores delectus magnam impedit ab beatae dolor autem commodi similique necessitatibus voluptates!</p>
       </div>
       <div class="time">
         <h4>january 2020</h4>
       </div>
     </li>
     <li>
       <div class="content">
         <h3>Lorem ipsum dolor sit.</h3>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum odit vitae facere quis, quas natus maxime, quaerat exercitationem asperiores delectus magnam impedit ab beatae dolor autem commodi similique necessitatibus voluptates!</p>
       </div>
       <div class="time">
         <h4>january 2020</h4>
       </div>
     </li>
     <li>
       <div class="content">
         <h3>Lorem ipsum dolor sit.</h3>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum odit vitae facere quis, quas natus maxime, quaerat exercitationem asperiores delectus magnam impedit ab beatae dolor autem commodi similique necessitatibus voluptates!</p>
       </div>
       <div class="time">
         <h4>january 2020</h4>
       </div>
     </li>
     <li>
       <div class="content">
         <h3>Lorem ipsum dolor sit.</h3>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum odit vitae facere quis, quas natus maxime, quaerat exercitationem asperiores delectus magnam impedit ab beatae dolor autem commodi similique necessitatibus voluptates!</p>
       </div>
       <div class="time">
         <h4>january 2020</h4>
       </div>
     </li>
     <div style="clear: both;"></div>
   </ul>
   
 </div>


 <!-- section footer  -->
 <div class="footer bg-dark p-5">
   <div class="container">
     <div class="row">
        <div class="col-md-12">
          <p class="text-center text-light"> &copy; Copyright Masters</p>
        </div>
     </div>
   </div>
 </div>


 <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" ></script>
 <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" ></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" ></script>

 
</body>


</html>