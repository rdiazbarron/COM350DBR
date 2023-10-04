<?php 
include('conexion.php');
$sql = "SELECT * FROM ciudadano";

$result = $con->query($sql);
if ($result->num_rows > 0)
{ ?>
    <table>
        <tr>
            <th>Ci</th>
            <th>Nombres</th>
            <th>Apellidos</th>
            <th>Fecha</th>
        </tr>
        

        <?php while ($row = $result->fetch_assoc()) {#fetch_assoc() devuelve un array asociativo que corresponde a la fila obtenida o NULL si no hubiera más filas.
        #fetch te ira devolviendo fila por fila hasta que no haya mas filas
        ?>
            <tr>
                <td><?php echo $row['ci'] ?> </td>
                <td><?php echo $row['nombres'] ?></td>
                <td><?php echo $row['apellidos'] ?></td>
                <td><?php echo $row['fecha'] ?></td>
                
            </tr>
        <?php } ?>
    </table>
<?php
}
else 
{
    echo "la tabla no tiene datos que mostrar";
}

$con->close();
?>

