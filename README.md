# Firebird Database Connection in PHP

This repository contains a PHP script that demonstrates how to connect to a Firebird database and perform a simple SELECT query. The script uses the PDO extension for database connectivity.

## Prerequisites

Before running the script, ensure that you have the following:

- PHP installed on your system
- Firebird database server installed
- Access to a Firebird database with the specified credentials

## Configuration

Modify the following variables in the script to match your database configuration:

```php
$host = 'localhost';
$database = 'C:\Users\otacio.barbosa\Desktop\db_2_5\db_2_5\examples.fdb';
$user = 'SYSDBA';
$password = 'masterkey';
```

- `$host`: The host or IP address of your Firebird database server.
- `$database`: The path to your Firebird database file.
- `$user`: The username for connecting to the database (default is 'SYSDBA').
- `$password`: The password for the specified user.

## Running the Script

Execute the script in a PHP environment. You can run it through the command line or set up a web server to execute the script via a browser.

```bash
php your_script_name.php
```

## Script Explanation

The script connects to the Firebird database using PDO and performs a SELECT query on the "CUSTOMER" table. It then fetches the results and prints information for each customer, including CUSTOMER_ID, NAME, ADDRESS, ZIPCODE, and PHONE.

```php
$sql = "SELECT * FROM CUSTOMER";
$stmt = $pdo->query($sql);

while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    // Print customer information
    echo "CUSTOMER_ID: " . $row['CUSTOMER_ID'] . "<br>";
    echo "NAME: " . $row['NAME'] . "<br>";
    echo "ADDRESS: " . $row['ADDRESS'] . "<br>";
    echo "ZIPCODE: " . $row['ZIPCODE'] . "<br>";
    echo "PHONE: " . $row['PHONE'] . "<br>";
    echo "<br>";
}
```

## Error Handling

The script includes error handling to catch any connection or query-related errors and display them.

```php
catch (PDOException $e) {
    echo 'Connection error: ' . $e->getMessage();
}
```

Feel free to adapt and expand upon this script for your specific use case. If you encounter any issues, refer to the error messages for troubleshooting.