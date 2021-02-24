<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>

  <?php $testo = 'Lorem ipsum dolor sit amet';
    $lunghezzaTesto = strlen($testo);
    $badword = $_GET['badword'];
    $parolaSostituita = str_replace($badword, '***', $badword);
  ?>

  <p>Il testo è : <?php echo $testo.', ed ha : '. $lunghezzaTesto .' caratteri.' ?></p>
    <div></div>
  <p>Il testo sostituito col metodo GET è : <?php echo $badword . ' sostituito con' . ' '. $parolaSostituita; ?></p>

</body>
</html>
