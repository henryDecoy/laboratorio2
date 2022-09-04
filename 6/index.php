<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Laboratorio 2 Problema 6</title>
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



<div class="container-sm">
        <br>
        <h1>Laboratorio 2 problema 6</h1>
        <br>
        <p>Un alumno desea saber cuál será su calificación final en la materia de Algoritmos. Dicha 
            calificación se compone de los siguientes porcentajes:
            <br> 55% del promedio de sus tres calificaciones parciales.
            <br> 30% de la calificación del examen final.
            <br> 15% de la calificación de un trabajo final.
            <br> Generar una tabla html con los resultados
        </p>
</div>


<!--  Lectura de la informacion -->
<div class="container">
        <br>
        
        <form class="form-inline" action="#" method="post" >
            <label for="content">Ingrese las 3 calificaciones de parciales:</label>
            <br><br>
            <label for="content">Parcial 1</label>
            <input type = "number" step="any"  name = "N1" placeholder = " " required >
            <label for="content">Parcial 2</label>
            <input type = "number" step="any"  name = "N2" placeholder = " " required >
            <label for="content">Parcial 3</label>
            <input type = "number" step="any"  name = "N3" placeholder = " " required >
            <br><br>
            <label for="content">Ingrese la calificacion del examen final:</label>
            <br><br>
            <label for="content">Examen: </label>
            <input type = "number" step="any"  name = "exFin" placeholder = " " required >
            <br><br>
            <label for="content">Ingrese la calificacion del Trabajo Final:</label>
            <br><br>
            <label for="content">Trabajo Final: </label>
            <input type = "number" step="any"  name = "TrabFin" placeholder = " " required >
            <br><br>
            <input type = "submit" name = "Calcular" value = "Calcular" >
        </form >
    </div>

<!-- calculo usando el codigo de php-->

    <?php
        $exfin = " ";
        $trabfin =" ";
        $promedio =" ";
        $notafinal=" ";

            if(isset($_POST['Calcular'])) {
            $not1=(int)$_POST['N1'];
            $not2=(int)$_POST['N2'];
            $not3=(int)$_POST['N3'];

            $exfin=(int)$_POST['exFin'];
            $trabfin=(int)$_POST['TrabFin'];
            $promedio= ($not1+$not2+$not3)/3;
            $promedio*= .55;
            $exfin*=.30;
            $trabfin*=.15;
            $notafinal= $promedio + $exfin + $trabfin ;
            }
    ?>


<!-- presentacion de la informacion-->
    <div class="container-sm">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Porcentaje</th>
                <th scope="col">Tema</th>
                <th scope="col">Porcentaje Obtenido</th>
                <th scope="col">Calificación Final </th>
            </tr> 
        </thead>
        <tbody action = "#" method = "get">
            <tr>
                <th scope="row">55%</th>
                <td>promedio de sus tres calificaciones parciales</td>
                <td> <?php echo "$promedio%" ?></td>
                <td><?php echo "$notafinal" ?></td>
            </tr>
            <tr>
                <th scope="row">30%</th>
                <td>calificación del examen final.</td>
                <td><?php echo "$exfin%" ?></td>
            </tr>
            <tr>
                <th scope="row">15%</th>
                <td>calificación de un trabajo final.</td>
                <td><?php echo "$trabfin%" ?></td>
            </tr>

        </tbody>
    </table>

   </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>