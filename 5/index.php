<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title> Laboratorio 2 Problema 5</title>
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
        <h1>Laboratorio 2 problema 5</h1>
        <br>
        <p>Dado el nombre y 5 calificaciones de un alumno; construya un programa en PHP + HTML
            que imprima el nombre del alumno y el promedio de sus calificaciones.</p>
</div>


<!--  Lectura de la informacion -->
<div class="container">
        <br>
        <form action = "#" method = "post" >
            <label for="content">Ingrese las horas trabajadas</label>
            <input type = "text" step="any"  name = "nombre" placeholder = " " required >
            <br><br>
            <label for="content">Nota 1</label>
            <input type = "number" step="any"  name = "N1" placeholder = " " required >
            <br><br>
            <label for="content">Nota 2</label>
            <input type = "number" step="any"  name = "N2" placeholder = " " required >
            <br><br>
            <label for="content">Nota 3</label>
            <input type = "number" step="any"  name = "N3" placeholder = " " required >
            <br><br>
            <label for="content">Nota 4</label>
            <input type = "number" step="any"  name = "N4" placeholder = " " required >
            <br><br>
            <label for="content">Nota 5</label>
            <input type = "number" step="any"  name = "N5" placeholder = " " required >
            <br><br>
            <input type = "submit" name = "Calcular" value = "Calcular" >
        </form >
    </div>

  <!-- calculo usando el codigo de php-->
    <?php
        $promedio=""; $nom="";

        if(isset($_POST['Calcular'])) {
            $nom=$_POST['nombre'];
            $not1=(int)$_POST['N1'];
            $not2=(int)$_POST['N2'];
            $not3=(int)$_POST['N3'];
            $not4=(int)$_POST['N4'];
            $not5=(int)$_POST['N5'];
            
            $promedio= ($not1+$not2+$not3+$not4+$not5)/5;
        }
    ?>

<!-- muestra de la informacion -->
<div class="container-sm">
    <br>
    <p>El promedio del estudiante </p>
        <form action = "#" method = "get" >
            <input type = "text" name="Nombre"
            <?php if (!isset($_POST['nombre'])) { ?>
                value = "Esperando sus datos";>
            <?php } else { ?>
                value = "<?php echo "$nom tu promedio es: $promedio ";?>";>
            <?php  }?>
             
        </form >
    </div>

<br><br>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>