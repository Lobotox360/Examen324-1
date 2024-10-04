<?php 
session_start();
if (isset($_SESSION["rol"]))
{
	if ($_SESSION["rol"] == -1)
        header("Location: login.php");
}
else{
    header("Location: login.php");
}
include "conexion.inc.php";
$usuario = $_GET["usuario"];
$sql="select * from catastro xc, persona xp where '$usuario' = usuario and xc.ci = xp.ci";
$resultado=mysqli_query($con, $sql);
$fila=mysqli_fetch_array($resultado);
include "cabecera_propiedad.php";
?>

        <!-- Abvout Start -->
        <div class="container-fluid about py-5">
            <div class="container py-5">
                <div class="row g-5 align-items-center">
                    <table class="table table-striped">
                        <thead>
                        <tr>    
                            <th scope="col">ID</th>
                            <th scope="col">DISTRITO</th>
                            <th scope="col">ZONA</th>
                            <th scope="col">SUPERFICIE</th>
                            <th scope="col">Xi</th>
                            <th scope="col">Yi</th>
                            <th scope="col">Xf</th>
                            <th scope="col">Yf</th>
                            <th scope="col">Visualizar</th>
                        </tr>
                        </thead>
                        <tbody class="table-group-divider">
                        <?php
                            echo "<tr>";
                            echo "<td scope='row'>$fila[id]</td>";
                            echo "<td scope='row'>$fila[distrito]</td>";
                            echo "<td scope='row'>$fila[zona]</td>";
                            echo "<td scope='row'>$fila[superficie]</td>";
                            echo "<td scope='row'>$fila[xi]</td>";
                            echo "<td scope='row'>$fila[yi]</td>";
                            echo "<td scope='row'>$fila[xf]</td>";
                            echo "<td scope='row'>$fila[yf]</td>";
                            echo "<td scope='row'>";
                            echo "<a class='btn btn-secondary' href='http://localhost:8080/punto4/NewServlet?id=$fila[id]'>Impuesto</a>";
                            echo "</td>";
                            echo "</tr>";
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
<?php include "pie_propiedad.php"?>