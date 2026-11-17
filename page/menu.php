<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <?php
        
        require_once "../bd.php";

        $sql = "select * from produto";
        $resultado = $conn->query($sql);

        while($produtos=$resultado->fetch_assoc());
        ?>
            <div class="card">
                <h1><?php echo htmlspecialchars($produtos["nome"]) ?></h1>
                <div>
                    
                </div>
            </div>
        <?php
        endwhile;
        ?>
    </div>
</body>
</html>