<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <!--CSS Externo para modificaciones-->
    <link rel="stylesheet" href="css\style.css">
    <link rel="stylesheet" href="css\areas_de_interes.css">
    
    <!-- JavaScript Externo -->
    <script src="js\style.js"></script>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


    <title>VIII Congreso IESTEC UTP</title>

    <!--Imagen de la barra de título-->
    <link rel="shortcut icon" href="imagenes\logo_utp_color.png" type="image/x-icon">
</head>

<body>



    
    
    <div class="prueba">
        <?php
        // You can also use comments to leave out parts of a code line
        $x = 5 + 5;
        ?>
       <!--<img class ="logo-utp" src="imagenes\logo_utp_web.png">-->
       <nav class="navbar navbar-expand-lg navbar-dark bg-transparent">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img class="logo-utp" src="imagenes/logo_utp_web.png" alt="" width="50" height="50">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                    <a class="nav-link" href="#areas-interes">Áreas de interés</a>
                    <a class="nav-link" href="secciones/expositores.php">Expositores</a>
                    <a class="nav-link disabled">Disabled</a>

                    &emsp;&emsp;&emsp;&emsp;
                    &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                    &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                    &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                    &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;

                    <a class="btn btn-success" href="secciones/inscripcion.php" role="button">Registrarse</a>
                </div>
                </div>
            </div>
            </nav>

        <h1 class="titulo-1">VII Congreso Internacional de Ingeniería, Ciencias y Tecnología</h1>
        <h3 class="subtitulo-1">Ciencias, Tecnología, Sostenibilidad e Inovación: Pilares para la recuperación económica.</h3>
        <?php include 'secciones/certificado.html'; ?>
        <br><br><br>
    </div>
    

    <div class="expositores">
            <br><br>
            <h4 ><center><b>Expositores</b></center></h4>
            <br><br>
            <div class="table-responsive container">
                <table  width="50%" border="0" align="center" >
                    <tbody>
                        <tr>
                            <tr> 
                                <td align="center"> <img  width="170" height="170" src="imagenes\Forcael.png"></td>
                                <td align="center"> <img width="170" height="170" src="imagenes\RO-photo2.png"></td>
                                <td align="center"> <img width="170" height="170" src="imagenes\Al-Kodmany_10.png"></td>
                            </tr>
                            <tr>
                                <td align="center"> Dr. Eric Forcael</td>
                                <td align="center">Dra. Rosibel Ochoa</td>
                                <td align="center">Dr. Christopher Nugent</td>
                            </tr>
                            <tr> 
                                <td align="center"> <br><img width="170" height="170" src="imagenes/Manuel-quevedo-1.png"> </td>
                                <td align="center"> <br><img width="170" height="170" src="imagenes/granberg.png"> </td>
                                <td align="center"> <br><img width="170" height="170" src="imagenes/Alex-Alvarez2.png"> </td>
                            </tr>
                            <tr>
                                <td align="center">Dr. Manuel Quevedo</td>
                                <td align="center">DR. Douglas D. Gransberg, PE</td>
                                <td align="center">DR. Alex Álvarez</td>
                            </tr>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>



<div class="areas-interes" id="areas-interes">    
    <br>
    <br>    
    <h4 ><center> <b>Áreas de Interés</b></center></h4>
    <br>
    <div class="texto_areasinteres"> Las áreas de interés de estas conferencias se listan a continuación pero no estan limitadas a:</div>
            
    <br>

                <!--imagenes-->     
    <div class="table-responsive container">
        <table  width="50%" border="0" align="center" >
            
        
        <!--Agroindustria 
        Ciencias básicas 
        economía y sociedad 
        educación en ingeniería 
        energía y ambiente 
        gestión empresarial emprendimiento e innovación 
        infraestructura 
        logística y transporte 
        robótica automatización e inteligencia artificial 
        tecnologías de la información y comunicación 
        tecnologías emergentes 
        -->
        
            <tbody>
                <tr>
                    <tr> 
                    <td align="center"> <img  width="90" height="90" src="imagenes/agroindustria.png"></td>
                    <td align="center"> <img width="90" height="90" src="imagenes/ciencias.png"></td>
                    <td align="center"> <img width="90" height="90" src="imagenes/economia.png"></td>
                    <td align="center"> <img width="90" height="90" src="imagenes/educacion.png"> </td>
                    
                    </tr>   
                    <tr>
                    
                    <td align="center"> Agroindustria</td>
                    <td align="center">Ciencias <br> basicas</td>
                    <td align="center">Economia<br>y sociedad </td>
                    <td align="center"> Educación en<br>ingeniería </h6> </td>
                    </tr>
            
                    <tr> 
                    <td align="center"> <br><img width="90" height="90" src="imagenes/ambiente.png"> </td>
                    <td align="center"> <br><img width="90" height="90" src="imagenes/gestion_empresarial.png"> </td>
                    <td align="center"> <br><img width="90" height="90" src="imagenes/infraestructura.png"> </td>
                    <td align="center"><br><img width="90" height="90" src="imagenes/logica.png"> </td>
                    </tr>
                    <tr> 
                    <td align="center">Energía<br>y ambiente  </td>
                    <td align="center"><div class="imagen"> Gestión empresarial<br>emprendimiento e<br>innovación </div></td>
                    <td align="center"> Infraestructura</td>
                    <td align="center"> Logística<br>y transporte</td>
                    </tr>
                    <tr> 
                    <td align="center"><br> <img width="90" height="90" src="imagenes/robotica.png"> </td>
                    <td align="center"> <br><img width="90" height="90" src="imagenes/comunicacion.png"> </td>
                    <td align="center"> <br><img width="90" height="90" src="imagenes/tecnologia_emergente.png"> </td>
                    </tr>
                    <tr> 
                    <td align="center">Róbotica, automatización<br>e inteligencia artificial</td>
                    <td align="center"> Tecnologías de la información<br>y comunicación</td>
                    <td align="center"> Técnologías emergentes</td>
                    </tr>
                        
                    
                </tr>        
            </tbody>
        </table>
    </div>
</div>   

<div class="giras">
    <br>
    <br>

    <h4 ><center> <div class=titulo-texto>Giras Técnicas</div></center></h4>
            <br>
            <div class=texto >
                <div class=subtitulo-texto><br>Giras disponibles  
                </div>
                
            
                <br> Las giras científicas - técnicas se llevará a cabo el sábado 12/10/2019.
                <div class=subtitulo-texto>
                    <br>Esclusa de agua claras y nuevo puente sobre el canal colon:
                </div>
                    
    <img class=img_aguasclaras src="https://external-content.duckduckgo.com/iu/?u=http%3A%2F%2Fpbs.twimg.com%2Fmedia%2FCi1rauJXIAABgz-.jpg&f=1&nofb=1">
    <img class=img_cocoli src="https://elcapitalfinanciero.com/wp-content/uploads/2016/06/esclusa-Pacifico-Cocoli-poblado-sector_LPRIMA20160330_0039_26-300x169.jpg">
                08:30 am El bus recogerá a los pasajeros en el hotel de Wyndham más Panamá Albrook Mall
                <br>10:00 am visita al centro de visitantes 
                <br>12:00 pm paso sobre el puente Sherman 
                <br>12:30 pm almuerzo en Sherman (No incluido)
                <br>4:00 pm retomo al hotel Wyndahm Panamá Albrook Mall.
                <br><b>Costo</b> USD 10.50 – Incluye la entrada, no la película.
                Pagar en la mesa de registro.
            
            <div class=subtitulo-texto> 
                <br>Esclusas de Miraflores:
                </div>
                <img class=img_miraflores src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fwww.descubrir.com%2Fwp-content%2Fuploads%2F2020%2F01%2Fmiraflores.jpg&f=1&nofb=1">
                08:30am—El bus recogerá a los pasajeros en el hotel Wyndham Panamá Albrook Mall 
                <br>09:00am —Visita al centro de visitantes de Miraflores
                <br>12:00am —Retorno al hotel Wyndham Panamá Albrook Mall
                <br><b>Costo</b>  	USD10.50 incluye la entrada.
                <div class=subtitulo-texto>
                    <br>Esclusas de Cocolí:
                </div>
                6:30am- El bus recogerá a los pasajeros en el hotel Wyndham Panamá Albrook Mall 
                <br>8:00am a 10:00am —Visita a las Esclusas de Cocolí
                <br>10:30am — Retorno al hotel Wyndham Panamá Albrook Mall
            </div >
</div>        
        


    <h1 class="titulo-1">VII Congreso Internacional de Ingeniería, Ciencias y Tecnología</h1>
    <h3 class="subtitulo-1">Ciencias, Tecnología, Sostenibilidad e Inovación: Pilares para la recuperación económica.</h3>
    <center>
        <br><br><br><br>
        <a href="secciones/certificado.html">
    <button type="button" class="btn btn-success" data-toggle="modal">
  <b>Solicitar certificado</b>
    </button> 
        </a>
    </center>
   
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<footer>
    <br><br>
    @2021 Universidad Tecnológica de Panamá | All rights reserved | Powered by UTP
    <br><br><br>
</footer>   

</body>
</html>