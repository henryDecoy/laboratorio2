<?php
if (isset($_GET["num"])){
    $num= $_GET["num"];
    $posi= $_GET["posi"];}?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Laboratorio 2 Problemas
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


<!-- titulo de la pagina -->
<div class="container-sm">
                <br>
                <h1>Laboratorio 2 problema 19</h1>
                <br>
                <p> Crear un programa en PHP + HTML que muestre los números del 1 al 100, y también 
                    muestre el número cifrado con la función md5 o cualquier otra función de cifrado.   
                </p>
        </div>



    
<div class="container-sm">
<?php if(!isset($_GET["num"])){ ?>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Numero</th>
                <th scope="col">Cifrado</th>
                <th scope="col">Ver codigo cifrado en otra pantalla</th>
                <th scope="col">Ver modal con valor cifrado</th>
            </tr>
        </thead>
        <tbody>
        <?php $cifrado=""; for ($i=0; $i<=100; $i++){  $cifrado = md5($i); ?>
            <tr>
                <th scope="row"><?php echo $i ?></th>
                <td><?php echo $cifrado ?></td>    
                <td><a href="http://lab2.com/19/index.php?num=<?php echo $cifrado ?>&posi=<?php echo $i ?>" ><button type="button" class="btn btn-success">Ver</button></a></td>
                
                <td> <!-- Button trigger modal -->
                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal<?php echo $i ?>">
                    Ver modal
                </button>
                
                <!-- Modal -->
                <div class="modal fade" id="exampleModal<?php echo $i ?>" tabindex="-1" aria-labelledby="exampleModalLabel<?php echo $i ?> " aria-hidden="true">
                    <div class="modal-dialog        ">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel<?php echo $i ?>">Resultado: </h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                               <?php echo " El numero $i es: $cifrado" ?>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                    </div>
                </div></td>
                <?php } ?>  
        </tbody>
    </table>
        <?php } else{ ?>
                    <h1>El Valor <?php echo $posi ?> Cifrado es:</h1>
                <?php 
                    echo " <h1> es $num </h1>";
                }?>        


</div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>