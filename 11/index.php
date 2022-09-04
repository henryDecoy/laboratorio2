<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Laboratorio 2 problema 11</title>
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
                <h1>Laboratorio 2 problema 11</h1>
                <br>
                <p> Elabore un programa que realice la conversión de cm. a pulgadas. 
                    <br> Donde 1cm = 0.39737 pulgadas.
                </p>
        </div>


        <!--  Lectura de la informacion -->
    <div class="container">
        <br>
        
        <form class="form-inline" action="#" method="post" >
            <label for="content">Ingrese los cm a convertir:</label>
            <br><br>
            <label for="content">CM: </label>
            <input type = "number" step="any"  name = "N1" placeholder = " " required >
            <br><br>
            <input type = "submit" name = "Calcular" value = "Calcular" >
        </form >
    </div>

<!-- calculo usando el codigo de php-->
<?php
        $cm="";  
        $result = " ";


            if(isset($_POST['Calcular'])) {
            $cm=(int)$_POST['N1'];

            $result=$cm*.39737;
            }
    ?>       


<!-- presentacion de la informacion-->
    <div class="container-sm">
        <table class="table">
            <br>
            <thead>
                <tr>
                    <th scope="col">CM</th>
                    <th scope="col">Pulgadas</th>

                </tr> 
            </thead>
            <tbody action = "#" method = "get">
                <tr>
                    <th scope="row"> <?php echo "$cm cm"?></th>
                    <td> <?php echo "$result in" ?></td>
                </tr>

            </tbody>
        </table>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>