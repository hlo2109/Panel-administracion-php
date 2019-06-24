<?php 
    class conexion
    {
        private $server;
        private $user;
        private $database;
        private $con;
        private $proceso;
        function __construct(){
            $this->server = "localhost";
            $this->user = "root";
            $this->pass = "";
            $this->database = "admintutorial";
            $this->con = mysqli_connect($this->server,$this->user,$this->pass,$this->database);
            if(!$this->con){
                die("Conexión fallida: ". mysqli_connect_error() );
            }
        }
        function sentencias($sql){
            $this->proceso = mysqli_query($this->con, $sql);
            if(!$this->proceso){
                echo "Error". $sql . "<br>" . mysql_error($this->con);
            }
        }
        function datos(){
            return mysqli_fetch_array($this->proceso);
        }
        function close(){
            mysqli_close($this->con);
        }
    }
    $db = new conexion();
    // $sql = "INSERT INTO menus(name) values('Ejemplo ".rand(0,10)."')";
    // $sql = "UPDATE menus set name='Holaddd' where id=1";
    // $sql = "DELETE FROM menus where id > 16";
    $db->sentencias($sql); 
    
    $sql = "SELECT * from menus";
    $db->sentencias($sql);
    echo "<table>
        <thead>
            <tr>
                <th>Cod</th>
                <th>Nombre</th>
            </tr>
        </thead>
        <tbody>
    ";    
    while ($row = $db->datos()) {
        echo "<tr>
            <td>".$row["id"]."</td>
            <td>".$row["name"]."</td>
        </tr>";
    }
    echo "</tbody></table>";
    $db->close();
?>
