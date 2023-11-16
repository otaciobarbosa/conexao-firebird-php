<?php
$host = 'localhost';
$database = 'C:\Users\otacio.barbosa\Desktop\db_2_5\db_2_5\examples.fdb';
$user = 'SYSDBA';
$password = 'masterkey';

try {
    $pdo = new PDO("firebird:dbname=$host:$database", $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "SELECT * FROM CUSTOMER";
    $stmt = $pdo->query($sql);

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
         echo "CUSTOMER_ID: " . $row['CUSTOMER_ID'] . "<br>";
         echo "NAME: " . $row['NAME'] . "<br>";
         echo "ADDRESS: " . $row['ADDRESS'] . "<br>";
		 echo "ZIPCODE: " . $row['ZIPCODE'] . "<br>";
		 echo "PHONE: " . $row['PHONE'] . "<br>";
        echo "<br>";
    }
} catch (PDOException $e) {
    echo 'Erro de conexão: ' . $e->getMessage();
}
?>
