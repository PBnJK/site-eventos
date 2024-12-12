<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Estatísticas</title>

    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <script src="../js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" type="text/css" href="../css/dados.css">    
</head>
<body>
<div id="data-container" class="d-flex justify-content-center align-items-center">
    <?php
        include_once "db_config.php";

        const SQL = "SELECT COUNT(id) FROM users";
        $result = $conn->query(SQL)->fetchColumn();

        switch( $result <=> 1 ) {
        case -1:
            echo "<h1>Ninguém se registrou até agora... poxa :-(</h1>";
            break;
        case 0:
            echo "<h1>$result pessoa já se registrou!</h1>";
            break;
        case 1:
            echo "<h1>$result pessoas já se registraram!</h1>";
            break;
        }
    ?>
</div>
</body>
</html>