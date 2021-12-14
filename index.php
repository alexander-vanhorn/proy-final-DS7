<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/styles.css">
    
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <!--CSS Externo para modificaciones-->
    <link rel="stylesheet" href="css\style.css">
    
    <!-- JavaScript Externo -->
    <script src="js\style.js"></script>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


    <title>VIII Congreso IESTEC UTP</title>

    <!--Imagen de la barra de título-->
    <link rel="shortcut icon" href="imagenes\logo_utp_color.png" type="image/x-icon">
</head>

<body>

    <?php
    // You can also use comments to leave out parts of a code line
    $x = 5 + 5;
    echo $x;
    ?>

    <img class ="logo-utp" src="imagenes\logo_utp_web.png">


    <h1 class="titulo-1">VII Congreso Internacional de Ingeniería, Ciencias y Tecnología</h1>
    <h3 class="subtitulo-1">Ciencias, Tecnología, Sostenibilidad e Inovación: Pilares para la recuperación económica.</h3>
    <?php include 'secciones/certificado.html'; ?>








    <section class="bg p-5">
        <div class="container">

          <h2 class="header-lugar">LUGAR DEL EVENTO</h2>
          <h4 class="header-wyndham">Wyndham Panama Albrook Mall Hotel & Convention Center</h4>
          <p class="ubicacion">Albrook Mall, Ancon, Panama City, Panama</p>
          <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="imagenes/wyndham-panama2.jpg" class="d-block w-100" height="520" width="520">
              </div>
            
              <div class="carousel-item">
                <img src="imagenes/wyndham4.jpg" class="d-block w-100" height="520" width="520">
              </div>
              
              <div class="carousel-item">
                <img src="imagenes/wyndham6.jpg" class="d-block w-100" height="520" width="520">
              </div>
              <div class="carousel-item">
                <img src="imagenes/wyndham7.jpg" class="d-block w-100" height="520" width="520">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>






          <h2 class="header-hospedaje">HOSPEDAJE</h2>
          <div class="card-group">
                <div class="card crdimg1">
                  
                  <div class="card-body cb1">
                    <h5 class="card-title">Hilton Garden Inn</h5>
                    <p class="card-text">Avenida Balboa y Aquilino de la Gua, Panamá, 00000, Panamá</p>
                  <div class="card-footer">
                    <a class="btn " href="https://www.hiltonhotels.com/es_XM/panama/hilton-panama/" role="button">Reservar</a>
                  </div>
                </div>
                  
                </div>
                <div class="card crdimg2">
                  
                  <div class="card-body cb2">
                    <h5 class="card-title">Wyndham Panama Albrook Mall Hotel & Convention Center</h5>
                    <p class="card-text">Albrook Mall, Corregimiento De, Panama City, PA</p>
                  <div class="card-footer">
                    <a class="btn " href="Albrook Mall, Corregimiento De, Panama City, PA" role="button">Reservar</a>
                  </div>
                </div>
                  
                </div>
                <div class="card crdimg3">
                  
                  <div class="card-body cb3">
                    <h5 class="card-title">DoubleTree by Hilton Panama City</h5>
                    <p class="card-text">Via Espana &, Av. Federico Boyd, Panama City</p>
                  <div class="card-footer">
                    <a class="btn " href="https://www.hiltonhotels.com/es_XM/panama/doubletree-by-hilton-hotel-panama-city-el-carmen/" role="button">Reservar</a>
                  </div>
                </div>

                
                  
                </div>
                
              </div>


              <div class="card-group">
                <div class="card crdimg4">
                  
                  <div class="card-body cb4">
                    <h5 class="card-title">The Executive Hotel</h5>
                    <p class="card-text">Calle 52, Aquilino de La Guardia Panama City, Panama</p>
                  <div class="card-footer">
                    <a class="btn " href="https://www.executivehotel-panama.com/" role="button">Reservar</a>
                  </div>
                </div>
                  
                </div>
                <div class="card crdimg5">
                  
                  <div class="card-body cb5">
                    <h5 class="card-title">Holiday-Inn Panama Canal</h5>
                    <p class="card-text">Panama Canal, Av Omar Torrijos Herrera, Panama City</p>
                  <div class="card-footer">
                    <a class="btn " href="https://www.ihg.com/holidayinn/hotels/us/es/panama/pcyhi/hoteldetail" role="button">Reservar</a>
                  </div>
                </div>
                  
                </div>
                <div class="card crdimg6">
                  
                  <div class="card-body cb6">
                    <h5 class="card-title">Courtyard Panama at Metromall Mall</h5>
                    <p class="card-text">Metromall, Avenida Domingo Diaz Via Tocumen Centro Comercial, Panama City
                    </p>
                  <div class="card-footer">
                    <a class="btn " href="https://www.marriott.com/hotels/travel/ptymm-courtyard-panama-metromall/?gclid=CjwKCAiA-9uNBhBTEiwAN3IlNNKLJNKmBj4kyStXrwquIQzDPMIhT56Yy7yMbK-oy43Q6YP3LLA_dBoCYa4QAvD_BwE&gclsrc=aw.ds" role="button">Reservar</a>
                  </div>
                </div>

                
                  
                </div>
                
              </div>

              

        </div>
        
        
    </section>

<section class="bg2">
         <div class="container">
           <div class="img-area">
             <img src="imagenes/areas-tematicas.jpg" alt="">
             <div class="img-text">
               
              <a  href="#" role="button">Areas Tematicas</a>

               
             </div>

           </div> 

           </div>

  
        </section>
        





<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

<script src="./js/bootstrap.min.js">  </script>



    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<footer>
    <br><br>
    @2021 Universidad Tecnológica de Panamá | All rights reserved | Powered by UTP
    <br><br><br>
</footer>   

</body>
</html>