<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1> Eu posso votar?</h1>
            <form method="POST" action="">
                <label for="idade">Qual a sua idade?</label>
                <br>
                <br>
                <input type="number" name="idade" required><br><br>
                <input type="submit" value="Verificar">
            </form>


            <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $idade = $_POST["idade"];
                if ($idade < 16) {
                    echo "<p>Idade: $idade anos. Não pode votar.</p>";
                } else if ($idade >= 16 && $idade < 18) {
                    echo "<p>Idade: $idade anos. Voto facultativo.</p>";
                } else if ($idade >= 18 && $idade <= 65) {
                    echo "<p>Idade: $idade anos. O voto é obrigatório.</p>";
                } elseif ($idade >= 65 && $idade <= 100) {
                    echo "<p>Idade: $idade anos. O voto é facultativo.</p>";
                }
                else {
                echo "<p>Por favor, insira uma idade válida.</p>";
            }
                }
            ?>
            
</body>

</html>