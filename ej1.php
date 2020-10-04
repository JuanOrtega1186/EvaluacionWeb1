
<!-- 1.Hacer un programa en PHP que permita mostrar en pantalla la
suma, resta, multiplicación, de dos números enteros almacenados
en 2, variables diferentes (utilice formularios HTML). -->
<?php
$tab = 1;
include("./header.php");

$result = 0;
if ($_POST) {
    switch ($_POST["operacion"]) {
        case 'suma':
            $result = $_POST["suma1"] + $_POST["suma2"];        
            break;
            case "resta": 
                $result = $_POST["suma1"] - $_POST["suma2"];
            break;
            case "mult":
                $result = $_POST["suma1"] * $_POST["suma2"];
            break;
            case "div": 
                $result = $_POST["suma1"] / $_POST["suma2"];
            break;
        default:
            break;
    }
    
}

?>

<div class="tab-pane fade show active" id="Ejercicio1" role="tabpanel" aria-labelledby="tab-1">
    <div class="card text-white bg-info mb-3" style="max-width: 18rem;">
        <div class="card-header">
            <h5>Ejercicio #1</h5>
        </div>
        <div class="card-body">
            <form action="ej1.php" method="post">
                <label for="operacion">Seleccione operación:</label><br>
                <select name="operacion" class="form-control">
                    <option value="suma">Suma</option>
                    <option value="resta">Resta</option>
                    <option value="mult">Multiplicaciín</option>
                    <option value="div">División</option>
                </select>
                <br/>
                <label for="suma1">Valor 1:</label><br>
                <input id="suma1" type="number" name="suma1" class="form-control"><br>
                <label for="suma2">Valor 2:</label><br>
                <input id="suma2" type="number" name="suma2" class="form-control"><br><br>
                <input type="submit" class="btn btn-success" value="Calcular">
                <br />
                <br />
                <h4>Resultado: <?php echo $result ?></h4>
            </form>

        </div>
    </div>

</div>


<?php include("./footer.php"); ?>