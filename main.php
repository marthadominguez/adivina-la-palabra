<?php 

$words = array("girasol", "aguacate", "gato","diamante");
$messy_words = array();

for ($i = 0; $i < count($words); $i++) {
    $messy_words[$i] = str_shuffle($words[$i]);
}

print_r($messy_words);

echo "
<form action='analysis.php'>
  <input type='text' name='word1' />
  <input type='text' name='word2' />
  <input type='text' name='word3' />
  <button type='submit'>Enviar</button>
  </form>
";

?>