
<!DOCTYPE html>
<html>
<head>
    <title>Tienda de Ropa</title>
    <style>
        body {
            font-family: Arial;
            background: #f5f5f5;
            text-align: center;
        }
        h1 {
            color: #333;
        }
        .container {
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
        }
        .card {
            background: white;
            padding: 20px;
            width: 200px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px #ccc;
        }
        .price {
            color: green;
            font-weight: bold;
        }
    </style>
</head>

<body>

<h1>🛍️ Tienda de Ropa</h1>

<div class="container">

    <?php
    $conn = new mysqli("mysql-svc", "root", "123456", "tienda");

    if ($conn->connect_error) {
        die("Error conexión");
    }

    $result = $conn->query("SELECT * FROM productos");

    while($row = $result->fetch_assoc()) {
        echo "
        <div class='card'>
            <h3>{$row['nombre']}</h3>
            <p class='price'>\${$row['precio']}</p>
        </div>";
    }

    $conn->close();
    ?>

</div>

</body>
</html>

