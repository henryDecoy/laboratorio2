<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Laboratorio 2 Problema 21</title>
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
                <h1>Laboratorio 2 problema 21</h1>
                <br>
                <p> Modificar el problema anterior, para que dependiendo del valor se genere de manera aleatorio 
                </p>
        </div>



    
<div class="container-sm">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Numero</th>
                <th scope="col">Valor</th>
                <th scope="col">Grafico con Progress Bar</th>
            </tr>
        </thead>
        <tbody>
        <?php for ($i=0; $i<=10; $i++){ 
            $num = rand(1,100);
            $color= "";

            if($num < 61){
                $color="secondary";
            }else if($num<=70){
                $color="danger";
            }else if($num<=80){
                $color="warning";
            }else if($num<=90){
                $color="info";
            }else {
                $color= "success";
            }

            ?>


            <tr>
                <th scope="row"><?php echo $i ?></th>
                <td><?php echo $num ?></td>
                <td><div class="progress">
                    <div class="progress-bar bg-<?php echo $color ?> progress-bar-striped progress-bar-animated" role="progressbar" style="width: <?php echo $num ?>%;" aria-valuenow="<?php echo $num ?>" aria-valuemin="0" aria-valuemax="100"><?php echo $num ?>%</div>
                </div></td>
            <?php } ?>  
        </tbody>
    </table>

</div>





    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>