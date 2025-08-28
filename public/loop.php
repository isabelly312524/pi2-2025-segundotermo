<!DOCTYPE html>
<html lang="pt-br">
<hea> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estruturas de Repetição</title>
</head>
<body>
    <h1>While</h1>
  <ul>
  <?php 
  $cont = 0; 
  while($cont <=10) {
    echo "<li>" . ( $cont * 2) . "</li>";
    $cont++;
  }
  ?>
  </ul>

<h1>Do...While</h1>
<ul>

<?php 
$cont2 = 11; 

do {
 echo "<li>" . ($cont2 * 2) . "</li>";
 $cont2++; 
} while ($cont2 <= 10);
?>
</ul>
<h1>For</h1>
<ul>

<?php 
for($cont3 = 0;$cont3 <= 10;$cont3++){
    echo "<li>" . ($cont3 * 2) . "</li>";
}
?>
</ul>

    <h1>Foreach</h1>
    <?php $frutas = ['maça','banana','laranja']; ?>
    <ul>
        <?php
            foreach($frutas as $f){

            echo "<li>" . $f . "</li>";
          }

        ?>
    </ul>

    <h1>Foreach - embedded</h1>
    <ul>
        <?php foreach($frutas as $f): ?>
            <li><?= $f ?></li>
        <?php endforeach ?>
    </ul>
</body>
</html>