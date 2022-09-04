<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Laboratorio 2 Problema 15</title>
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
                <h1>Laboratorio 2 problema 15</h1>
                <br>
                <p> El banco “Pueblo desconocido” ha decidido aumentar el límite de crédito de las tarjetas de 
                    crédito de sus clientes, para esto considera que 
                    <br> si su cliente tiene tarjeta tipo 1, el aumento será de 25 %;
                    <br> si tiene tipo 2, será de 35 %; 
                    <br> si tiene tipo 3, de 40 %, 
                    <br> y para cualquier otro tipo, de 50 %. 
                    <br> Realice un Programa en PHP + HTML para determinar el nuevo límite de crédito que tendrá una persona en su tarjeta.
                </p>
        </div>


        <!--  Lectura de la informacion -->
    <div class="container">
        <br>
        <form class="form-inline" action="#" method="post" >
            <label for="content">Ingrese el tipo de tarjeta que tiene (Tipo 1, 2, 3, u otra):</label>
            <br><br>
            <label for="content">Tipo: </label>
            <input type = "number" step="any"  name = "N1" placeholder = " " required >
            <label for="content">Credito actual de su tarjeta: </label>
            <input type = "number" step="any"  name = "N2" placeholder = " " required >
            <br><br>
            <input type = "submit" name = "Calcular" value = "Calcular" >
        </form >
    </div>

<!-- calculo usando el codigo de php-->
<?php
        $tipo="";  
        $credito="";
        $porcentaje="";
        $result = "";


            if(isset($_POST['Calcular'])) {
            $tipo=(int)$_POST['N1'];
            $credito=(int)$_POST['N2'];    


            if($tipo==1){
                $porcentaje=.25;
                $aumento=$credito*$porcentaje;  
                $result=$credito+$aumento;

            }else if($tipo==2){
                $porcentaje=.35;
                $aumento=$credito*$porcentaje;  
                $result=$credito+$aumento;

            }else if($tipo==3){
                $porcentaje=.40;
                $aumento=$credito*$porcentaje;  
                $result=$credito+$aumento;

            }else if($tipo>3){
                $porcentaje=.50;
                $aumento=$credito*$porcentaje;  
                $result=$credito+$aumento;

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
                    <th scope="col">Tipo de tarjeta</th>
                    <th scope="col">Credito anterior</th>
                    <th scope="col">Aumento en porcentaje del credito</th>
                    <th scope="col">Credito con aumento</th>
                </tr> 
            </thead>
            <tbody action = "#" method = "get">
                <tr>
                    <th scope="row"> <?php echo $tipo ?></th>
                    <th scope="row"> <?php echo "$credito" ?></th>
                    <th scope="row"> <?php echo "$porcentaje" ?></th>
                    <td> <?php echo "$result " ?></td>
                </tr>

            </tbody>
        </table>

    </div>







    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>