<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>

<body>
    <div class="Ejercicios">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <a class="nav-link <?php echo $tab == 1 ? "active" : null; ?>" id="tab-1" href="ej1.php" role="tab" aria-controls="Ejercicio1" aria-selected="true">Ejercicio 1</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link <?php echo $tab == 2 ? "active" : null; ?>" id="tab-2" href="ej2.php" role="tab" aria-controls="Ejercicio2" aria-selected="false">Ejercicio 2</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link <?php echo $tab == 3 ? "active" : null; ?>" id="tab-3" href="ej3.php" role="tab" aria-controls="Ejercicio3" aria-selected="false">Ejercicio 3</a>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">