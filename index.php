
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Laboratorio 2 main page</title>
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


        <!-- Encabezado de la página -->
        <div class="container-sm">
        <br>
        <h1>Laboratorio 2 </h1>
        <br>
        <h2>Main page de todos los pogramas del laboratorio 2</h2>
        </div>


        <div class="container">
        <table class="table">
    <thead>
        <tr>
            <th>Ennumeración</th>
            <th>Descripcion</th>
            <th>Botones</th>
        </tr>
    </thead>

    <!--inicio de la lista -->
    <tbody>
        <tr>
            <th>1</th>
            <td>Crear un programa que me permita sumar dos números flotantes. </td>
            <td><a href="http://lab2.com/1/index.php?n1=10.2&n2=29.6" class="btn btn-success">Go</a></td>
        </tr>
        <tr>
            <th>2</th>
            <td> Crear un programa que me permita leer dos números del teclado, y me calcule la suma, 
                resta, multiplicación y división.</td>
            <td><a href="http://lab2.com/2/index.php" class="btn btn-success">Go</a></td>
        </tr>
        <tr>
            <th>3</th>
            <td>Crear un programa en PHP + HTML que calcule el área de un círculo. </td>
            <td><a href="http://lab2.com/3/index.php" class="btn btn-success">Go</a></td>
        </tr>
        <tr>
            <th>4</th>
            <td>Crear un programa que me permita calcular el salario neto de un 
                trabajador en función del número de horas trabajadas. </td>
            <td><a href="http://lab2.com/4/index.php" class="btn btn-success">Go</a></td>
        </tr>
        <tr>
            <th>5</th>
            <td>Construya un programa
                que imprima el nombre del alumno y el promedio de sus calificaciones.</td>
            <td><a href="http://lab2.com/5/index.php" class="btn btn-success">Go</a></td>
        </tr>
        <tr>
            <th>6</th>
            <td>Un alumno desea saber cuál será su calificación final en la materia de Algoritmos. </td>
            <td><a href="http://lab2.com/6/index.php" class="btn btn-success">Go</a></td>
        </tr>
        <tr>
            <th>7</th>
            <td>En un hospital existen tres áreas: Ginecología, Pediatría, Traumatologia. Generar una tabla html con los resultados. </td>
            <td><a href="http://lab2.com/7/index.php" class="btn btn-success">Go</a></td>
        </tr>
        <tr>
            <th>8</th>
            <td>Tres personas deciden invertir su dinero para fundar una empresa. Cada una de ellas 
                invierte una cantidad distinta. Obtener el porcentaje que cada quien invierte con respecto a 
                la cantidad total invertida. </td>
            <td><a href="http://lab2.com/8/index.php" class="btn btn-success">Go</a></td>
        </tr>
        <tr>
            <th>9</th>
            <td>Se pide crear un algoritmo que calcule el porcentaje de alumnos y alumnas de un salón de 
                clase. Generar una tabla html con los resultados. </td> 
            <td><a href="http://lab2.com/9/index.php" class="btn btn-success">Go</a></td>
        </tr>
        <tr>
            <th>10</th>
            <td>Escriba un programa donde se ingrese el tiempo necesario para un cierto proceso en 
                horas, minutos y segundos. Se calcule el costo total del proceso sabiendo que el costo por 
                segundo es B/.0.25. </td>
            <td><a href="http://lab2.com/10/index.php" class="btn btn-success">Go</a></td>
        </tr>
        <tr>
            <th>11</th>
            <td>Elabore un programa que realice la conversión de cm. a pulgadas. Donde 1cm = 0.39737 
                pulgadas. </td>
            <td><a href="http://lab2.com/11/index.php" class="btn btn-success">Go</a></td>
        </tr>
        <tr>
            <th>12</th>
            <td>Elabore un programa que realice la conversión de libras a kilogramos Donde 1 Kg. = 2.2046 
                libras. </td>
            <td><a href="http://lab2.com/12/index.php" class="btn btn-success">Go</a></td>
        </tr>
        <tr>
            <th>13</th>
            <td>“La langosta ahumada” es una empresa dedicada a ofrecer banquetes. </td>
            <td><a href="http://lab2.com/13/index.php" class="btn btn-success">Go</a></td>
        </tr>
        <tr>
            <th>14</th>
            <td>Se les dará un bono por antigüedad a los empleados de una tienda. </td>
            <td><a href="http://lab2.com/14/index.php" class="btn btn-success">Go</a></td>
        </tr>
        <tr>
            <th>15</th>
            <td>El banco “Pueblo desconocido” ha decidido aumentar el límite de crédito de las tarjetas de 
                crédito de sus clientes. </td>
            <td><a href="http://lab2.com/15/index.php" class="btn btn-success">Go</a></td>
        </tr>
        <tr>
            <th>16</th>
            <td>Crear un programa en PHP + HTML que lea un valor N y que imprima un triángulo de 
                asteriscos. </td>
            <td><a href="http://lab2.com/16/index.php" class="btn btn-success">Go</a></td>
        </tr>
        <tr>
            <th>17</th>
            <td>Crear una aplicación en PHP+HTML que al entrar me muestre en una tabla los números del 
                0 al 12, al lado un botón que tenga un vínculo a una segunda pantalla.  </td>
            <td><a href="http://lab2.com/17/index.php" class="btn btn-success">Go</a></td>
        </tr>
        <tr>
            <th>18</th>
            <td>Crear un programa en PHP + HTML que muestre los números del 1 al 100, y también 
                muestre el número cifrado con la función md5 o cualquier otra función de cifrado. </td>
            <td><a href="http://lab2.com/18/index.php" class="btn btn-success">Go</a></td>
        </tr>
        <tr>
            <th>19</th>
            <td>Modificar el problema anterior, adicionándole un botón para verlo en una pantalla de tipo 
                modal. </td>
            <td><a href="http://lab2.com/19/index.php" class="btn btn-success">Go</a></td>
        </tr>
        <tr>
            <th>20</th>
            <td>Crear un archivo que con valores generados al azar con 10 filas por la función rand() de php.  </td>
            <td><a href="http://lab2.com/20/index.php" class="btn btn-success">Go</a></td>
        </tr>
        <tr>
            <th>21</th>
            <td>Modificar el problema anterior, para que dependiendo del valor se genere de manera aleatorio 
                se le asigne un color.</td>
            <td><a href="http://lab2.com/21/index.php" class="btn btn-success">Go</a></td>
        </tr>

    </tbody>
</table>

        </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>