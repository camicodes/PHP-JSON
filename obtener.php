<?php
include "db.inc.php";

//CREAMOS LA CONEXIÓN CON EL SERVIDOR QUE SE ALMACENARÁ EN $conexion
$conexion = mysqli_connect($servername, $username, $password, $dbname) or die("No se ha podido conectar con el servidor");

$sql = "SELECT * FROM MyGuests";
$result = $conexion->query($sql);

echo "<table>";
echo "<tr>";
echo "  <th> Id  </th>";
echo "  <th> Nombre  </th>";
echo "  <th> Apellido </th>";
echo "  <th> Email </th>";
echo "</tr>";
/* array asociativo */
while ($row = $result->fetch_array(MYSQLI_ASSOC)){
    print_r(json_encode($row));
    echo "<tr>  <td>" .  $row["id"] ."</td> <td>" . $row["firstname"] . "</td> <td>" . $row["lastname"] ."</td> <td>" . $row["email"] . "</td> </tr>";
}

echo "</table>";

$result->free();

