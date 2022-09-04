<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Laboratorio 2 Problema 14</title>
</head>
<body>



    
<!-- NavBar de la página -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="http://lab2.com/#">Laboratorio 2 by Enrique Salinas</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="http://lab2.com/#">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Lista de problemas
                            </a>
                            
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="http://lab2.com/1/index.php?n1=10.2&n2=29.6">1</a></li>
                                <?php for ($i=2; $i<= 21; $i++){ ?>   
                                    <li><a class="dropdown-item" href="http://lab2.com/<?php echo $i; ?>/index.php"><?php echo $i; ?></a></li>
                                <?php }?>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="http://lab2.com/">Home</a></li>
                            </ul>

                        
                        </li>
                    </ul>
                </div>
            </div>
        </nav>



        <!-- titulo de la pagina -->
        <div class="container-sm">
                <br>
                <h1>Laboratorio 2 problema 14</h1>
                <br>
                <p> Se les dará un bono por antigüedad a los empleados de una tienda. 
                   <br> Si tienen un año, se les dará $100; 
                   <br> si tienen 2 años, $200, y así sucesivamente hasta los 5 años. 
                   <br> Para los que tengan más de 5, el bono será de $1000. 
                   <br> Realice un Programa en PHP + HTML que permita determinar el bono que recibirá un trabajador
                </p>
        </div>


        <!--  Lectura de la informacion -->
    <div class="container">
        <br>
        <form class="form-inline" action="#" method="post" >
            <label for="content">Ingrese la cantidad de años trabajando en la empresa:</label>
            <br><br>
            <label for="content">Años: </label>
            <input type = "number" step="any"  name = "N1" placeholder = " " required >
            <br><br>
            <input type = "submit" name = "Calcular" value = "Calcular" >
        </form >
    </div>

<!-- calculo usando el codigo de php-->
<?php
        $tiempo="";  
        $result = " ";


            if(isset($_POST['Calcular'])) {
            $tiempo=(int)$_POST['N1'];
                
            if($tiempo==1){
                $result=100;

            }else if($tiempo==2){
                $result=200;

            }else if($tiempo==3){
                $result=300;
            }else if($tiempo==4){
                $result=400;
            }else if($tiempo==5){
                $result=500;
            }else if($tiempo>5){
                $result=1000;
            }else{
                $result="Ingrese un valor valido";
            }

            }
    ?>       


<!-- presentacion de la informacion-->
    <div class="container-sm">
        <table class="table">
            <br>
            <thead>
                <tr>
                    <th scope="col">Tiempo X años</th>
                    <th scope="col">Bono</th>

                </tr> 
            </thead>
            <tbody action = "#" method = "get">
                <tr>
                    <th scope="row"> <?php echo $tiempo ?></th>
                    <td> <?php echo "$result $" ?></td>
                </tr>

            </tbody>
        </table>

    </div>




    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>