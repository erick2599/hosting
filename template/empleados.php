<body style="margin: 50px">
    <h1>Empleados</h1>

    <form action="actualizar_inventario.php" method="post">
        <table class="table">
            <tr>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Email</th>
                <th>Telefono</th>
                <th>Puesto</th>
                <th>Salario</th>
                <th>Fecha_contratacion</th>
            </tr>
            <tbody>
                <?php
                $servername = "localhost";
                $username = "root";
                $password = "Gvladimir2599*";
                $database = "smoked_restaurant";
                
                // Create connection
                $conn = new mysqli($servername, $username, $password,$database);
                
                // Check connection
                /* if ($conn->connect_error) {
                  die("Connection failed: " . $conn->connect_error);
                }
                echo "Connected successfully"; */

                // read the data 
                $sql = "SELECT * FROM empleados";
                $result = $conn->query($sql);

                if (!$result) {
                    die("Invalid query: " . $conn->error);
                }
                
                //read data for each row
                while($row = $result->fetch_assoc()){
                    echo "<tr>
                            <td>" . $row["nombre"] . "</td>
                            <td>" . $row["apellido"] . "</td>
                            <td>" . $row["email"] . "</td>
                            <td>" . $row["telefono"] . "</td>
                            <td>" . $row["puesto"] . "</td>
                            <td>" . $row["salario"] . "</td>
                            <td>" . $row["fecha_contratacion"] . "</td>
                        </tr>";
                }

                
                ?>
            </tbody>
            </table>
    </form>
</body>

<?php

?>


