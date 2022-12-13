<?php

$words = array("girasol", "aguacate", "gato", "diamante");
$messy_words = array();

// Mezclar aleatoriamente los caracteres de las palabras del arreglo $words y guardar el resultado en un nuevo arreglo $messy_words
for ($i = 0; $i < count($words); $i++) {
  $messy_words[$i] = str_shuffle($words[$i]);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Adivina la Palabra</title>
  <link rel="stylesheet" type="text/css" href="styles.css">
  <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Red+Hat+Display&display=swap" rel="stylesheet">
</head>

<body>
  <main>
    <h1>Adivina la Palabra</h1>
    <p>¡Prepárate para adivinar un montón de palabras desordenadas en el menor tiempo posible y ganar el juego! <br><br>Demuestra lo bueno que eres para descifrar palabras y llevarte la victoria 🏆</p>
    <form action="analysis.php">
      <div class="form__container">
        <label for="word1"><?= $messy_words[1]; ?></label>
        <input type="text" name="word1" />
        <label for="word2"><?= $messy_words[2]; ?></label>
        <input type="text" name="word2" />
        <label for="word3"><?= $messy_words[3]; ?></label>
        <input type="text" name="word3" />
      </div>
      <button type="submit">Enviar</button>
    </form>
  </main>
</body>

</html>