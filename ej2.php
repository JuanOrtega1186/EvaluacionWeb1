<!-- .Hacer un programa en PHP para ayudar a un trabajador de
Postobón a saber cuál será su sueldo semanal, se sabe que, si
trabaja 40 horas o menos, se le pagará $20000 por hora, pero
si trabaja más de 40 horas entonces las horas extras se le
pagarán a $25000 por hora. -->

<?php
$tab = 2;
include("./header.php");


$sueldoSemanal = 0;
if ($_POST) {

    $valorHora=20000;
    $valorHorasExtras=0;
    
    if($_POST["cantidadHoras"] > 40) {
        $cantidadHorasExtras= $_POST["cantidadHoras"] - 40;
        $valorHorasExtras = $cantidadHorasExtras * 25000;
        $sueldoSemanal = ($valorHora * 40) + $valorHorasExtras;

    }else{
        $sueldoSemanal = $valorHora * $_POST["cantidadHoras"];
    }
}
 
?>
<div class="tab-pane fade show active" id="Ejercicio1" role="tabpanel" aria-labelledby="tab-1">
    <div class="card text-white bg-info mb-3" style="max-width: 18rem;">
        <div class="card-header">
            <h5>Ejercicio #2</h5>
        </div>
        <div class="card-body">
            <form action="ej2.php" method="post">
                <h4>POSTOBON CALCULATOR</h4>
                <label for="operacion">Horas trabajadas en la semana?</label><br>
                <input id="cantidadHoras" type="number" name="cantidadHoras" class="form-control"><br>  
                
                <br/>
                <input type="submit" class="btn btn-success" value="Calcular">
                <br />
                <br />
                <h4>Resultado: <?php echo $sueldoSemanal ?></h4>
            </form>

        </div>
    </div>

</div>

<?php include("./footer.php"); ?>