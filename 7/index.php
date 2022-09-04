<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>
        Laboratorio 2 problema 7
    </title>
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
                <h1>Laboratorio 2 problema 7</h1>
                <br>
                <p>En un hospital existen tres áreas: Ginecología, Pediatría, Traumatologia. El presupuesto 
                    anual del hospital se reparte conforme a la sig. tabla:
                    <br> Área            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;    Porcentaje del presupuesto
                    <br> Ginecología     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   40%
                    <br> Traumatología   &nbsp;&nbsp;&nbsp;  30%
                    <br> Pediatría       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;    30%
                    <br> Generar una tabla html con los resultados
                    <br> Obtener la cantidad de dinero que recibirá cada área, para cualquier monto presupuestal.
                </p>
        </div>

<!--  Lectura de la informacion -->
<div class="container">
        <form class="form-inline" action="#" method="post" >
            <br><br>
            <label for="content">Ingrese el presupuesto anual del hospital:</label>
            <input type = "number" step="any"  name = "N1" placeholder = " " required >
            <input type = "submit" name = "Calcular" value = "Calcular" >
        </form >
    </div>



    <!-- calculo usando el codigo de php-->
    <?php
        $ginecologia = " ";
        $traumatologia = " ";
        $pediatria = " ";

            if(isset($_POST['Calcular'])) {
            $presupuesto=(int)$_POST['N1'];

                $ginecologia=$presupuesto*.40;
                $traumatologia=$presupuesto*.30;
                $pediatria=$presupuesto*.30;
            }
    ?>                

    <!-- presentacion de la informacion-->
    <div class="container-sm">
        <table class="table">
            <br>
            <thead>
                <tr>
                    <th scope="col">Porcentaje</th>
                    <th scope="col">Areas</th>
                    <th scope="col">Presupuesto dado</th>
                </tr> 
            </thead>
            <tbody action = "#" method = "get">
                <tr>
                    <th scope="row">40%</th>
                    <td>Ginecología</td>
                    <td> <?php echo "$ginecologia" ?></td>
                </tr>
                <tr>
                    <th scope="row">30%</th>
                    <td>Traumatología</td>
                    <td><?php echo "$traumatologia" ?></td>
                </tr>
                <tr>
                    <th scope="row">30%</th>
                    <td>Pediatría</td>
                    <td><?php echo "$pediatria" ?></td>
                </tr>

            </tbody>
        </table>

    </div>




    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>