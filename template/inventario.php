<body style="margin: 50px">
    <h1>Inventario del Restaurante</h1>

    <form action="actualizar_inventario.php" method="post">
        <table class="table">
            <tr>
                <th>id</th>
                <th>producto</th>
                <th>cantidad</th>
                <th>precio_unitario</th>
                <th>fecha_actualizacion</th>
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
                $sql = "SELECT * FROM inventario";
                $result = $conn->query($sql);

                if (!$result) {
                    die("Invalid query: " . $conn->error);
                }
                
                //read data for each row
                while($row = $result->fetch_assoc()){
                    echo "<tr>
                            <td>" . $row["id"] . "</td>
                            <td>" . $row["producto"] . "</td>
                            <td>" . $row["cantidad"] . "</td>
                            <td>" . $row["precio_unitario"] . "</td>
                            <td>" . $row["fecha_actualizacion"] . "</td>
                        </tr>";
                }

                
                ?>
            </tbody>
            </table>
    </form>
</body>

<?php

?>


