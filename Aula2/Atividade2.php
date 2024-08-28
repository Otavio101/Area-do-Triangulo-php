<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Área do Triangulo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
    <div class="flex">
<form method="post">
        <h1>Calcule a área do triangulo</h1>
        <div class="alturaInput">
            <label for="altura_triangulo">Altura do triangulo</label>
            <input type="number" id="altura_ariangulo" name="altura_triangulo" step="1" required>
        </div>
        <div class="baseInput">
            <label for="base_triangulo">Base do triangulo</label>
            <input type="number" id="base_triangulo" name="base_triangulo" step="1" required>
        </div>
        <button type="submit" name="calcular_area">Calcular</button>
    </form>
    </div>
    </div>
    <?php
    
        if($_SERVER['REQUEST_METHOD'] == 'POST'){

            if(isset($_POST['calcular_area'])){
                $altura_triangulo = $_POST['altura_triangulo'];
                $base_triangulo = $_POST['base_triangulo'];
                $area_triangulo = ($base_triangulo*$altura_triangulo)/2;
                echo "A área do triangulo é: ". $area_triangulo; 
            }
        

            if($area_triangulo > 100){
                echo "A área do triangulo está maior que o valor limite de 100";
            }elseif($area_triangulo == 100){
                echo "A área do triangulo é igual ao valor limite de 100";
            }else{
                echo "A área do triangulo é menor que o valor limite de 100";
            }

        }

    ?>

</body>
</html>