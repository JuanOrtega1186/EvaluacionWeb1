<!-- 6.Calcule y almacene en un Array los n primeros números pares
(el usuario debe indicar cuantos números pares se deben
calcular). Imprima en una tabla cada uno de estos números. -->

<?php
$tab = 3;
include("./header.php");

$resultado = [];
if ($_POST) {

    $finalizarCiclo = false;
    $numero = 0;
    $posicionArreglo = 0;
    while (!$finalizarCiclo) {
        if ($numero % 2 == 0) {
            $resultado[$posicionArreglo] = $numero;
            $posicionArreglo++;
        }
        $numero++;
        if (count($resultado) == $_POST["cantidadNumeros"]) {
            $finalizarCiclo = true;
        }
    }
}

?>
<div class="tab-pane fade show active" id="Ejercicio1" role="tabpanel" aria-labelledby="tab-1">
    <div class="card text-white bg-info mb-3" style="max-width: 18rem;">
        <div class="card-header">
            <h5>Ejercicio #3</h5>
        </div>
        <div class="card-body">
            <form action="ej3.php" method="post">
                <h4>NUMEROS PARES</h4>
                <label for="operacion">Ingrese cantidad numeros pares</label><br>
                <input id="cantidadNumeros" type="number" name="cantidadNumeros" class="form-control"><br>

                <br />
                <input type="submit" class="btn btn-success" value="Calcular">
                <br />

            </form>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <table border="1" class="w-100">
            <tr>
                <?php foreach ($resultado as $r) { ?>
                    <td>
                        <h5><?php echo $r; ?></h5>
                    </td>
                <?php } ?>
            </tr>
        </table>
    </div>
</div>

<?php include("./footer.php"); ?>