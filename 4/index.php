<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Laboratorio 2 Problema 4</title>
</head>
<body>

<!-- navbar de la página  va aqui pegar cuando termine todos los programas-->
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
        <h1>Laboratorio 2 problema 4</h1>
        <br>
        <p>Elaborar un programa en PHP + HTML que permita calcular el salario neto de un 
            trabajador en función del número de horas trabajadas, pago por hora de trabajo y un 
            descuento fijo al sueldo bruto del 20% (este valor es una constante). Los cálculos a 
            efectuar para obtener el salario neto de un trabajador se muestran a continuación: 
            <br>  SalarioBruto = HorasTrabajadas * PagoPorHora
            <br>  Descuento = 0.2 * SalarioBruto 
            <br>  SalarioNeto = SalarioBruto – Descuento</p>
</div>


<!--  Lectura de la informacion -->
<div class="container">
        <br>

        <form action = "#" method = "post" >
            <label for="content">Ingrese las horas trabajadas</label>
            <input type = "number" step="any"  name = "N1" placeholder = " " required >
            <br><br>
            <label for="content">Ingrese Pago por hora</label>
            <input type = "number" step="any"  name = "N2" placeholder = " " required >
            <br><br>
            <input type = "submit" name = "Calcular" value = "Calcular" >

        </form >
    </div>
    


    <!-- calculo usando el codigo de php-->
    <?php

    $SalNeto="";
        if(isset($_POST['Calcular'])) {
            $Htrabajadas=(int)$_POST['N1'];
            $PaxHo=(int)$_POST['N2'];

            $salbruto= $Htrabajadas*$PaxHo;
            $desc=.20*$salbruto;
            $SalNeto=$salbruto-$desc;
            
        }
    ?>


<!-- muestra de la informacion -->
    <div class="container-sm">
    <br>
    <p>Su salario neto es:</p>
        <form action = "#" method = "get" >
            <input type = "text" name="Resultado"
             value = "<?php echo $SalNeto ?>";>
        </form >
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>