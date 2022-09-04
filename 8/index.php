<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Laboratorio 2 Problema 8</title>
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
                <h1>Laboratorio 2 problema 8</h1>
                <br>
                <p> Tres personas deciden invertir su dinero para fundar una empresa.
                    <br> Cada una de ellas invierte una cantidad distinta. 
                    <br> Obtener el porcentaje que cada quien invierte con respecto a la cantidad total invertida
                </p>
        </div>


        <!--  Lectura de la informacion -->
    <div class="container">
        <br>
        
        <form class="form-inline" action="#" method="post" >
            <label for="content">Ingrese la cantidad invertida de cada participante de la empresa:</label>
            <br><br>
            <label for="content">Participante 1</label>
            <input type = "number" step="any"  name = "N1" placeholder = " " required >
            <label for="content">Participante 2</label>
            <input type = "number" step="any"  name = "N2" placeholder = " " required >
            <label for="content">Participante 3</label>
            <input type = "number" step="any"  name = "N3" placeholder = " " required >
            <br><br>
            <input type = "submit" name = "Calcular" value = "Calcular" >
        </form >
    </div>
        
    <!-- calculo usando el codigo de php-->
    <?php
        $dinero1="";
        $dinero2="";
        $dinero3="";
        $porcentaje1 = " ";
        $porcentaje2 = " ";
        $porcentaje3 = " ";
        $suma="";

            if(isset($_POST['Calcular'])) {
            $dinero1=(int)$_POST['N1'];
            $dinero2=(int)$_POST['N2'];
            $dinero3=(int)$_POST['N3'];

            $suma=$dinero1+$dinero2+$dinero3;
            $porcentaje1=($dinero1/$suma)*100;
            $porcentaje2=($dinero2/$suma)*100;
            $porcentaje3=($dinero3/$suma)*100;
            }
    ?>          

    <!-- presentacion de la informacion-->
    <div class="container-sm">
        <table class="table">
            <br>
            <thead>
                <tr>
                    <th scope="col">Dinero</th>
                    <th scope="col">Participante</th>
                    <th scope="col">Porcentaje sobre la empresa del accionista</th>
                    <th scope="col">Total invertido</th>
                </tr> 
            </thead>
            <tbody action = "#" method = "get">
                <tr>
                    <th scope="row"> <?php echo $dinero1 ?></th>
                    <td>Participante 1</td>
                    <td> <?php echo "$porcentaje1%" ?></td>
                    <td> <?php echo "$suma" ?></td>
                </tr>
                <tr>
                    <th scope="row"><?php echo "$dinero2" ?></th>
                    <td>Participante 2</td>
                    <td><?php echo "$porcentaje2%" ?></td>
                </tr>
                <tr>
                    <th scope="row"><?php echo "$dinero3" ?></th>
                    <td>Participante 3</td>
                    <td><?php echo "$porcentaje3%" ?></td>
                </tr>

            </tbody>
        </table>

    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>