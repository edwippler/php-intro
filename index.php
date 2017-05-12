<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>PHP Intro</title>
</head>
<body>
  <?php
  echo 'hello world';

  $name = 'Edmundo';
  echo $name;
  echo '<br>';

  // NOTE: double quotes will treat variable as full expresstion whereas single quotes will be a string.
  $fullName = "$name Wippler";
  echo $fullName;
  echo '<br>';

  $fullName = 6;

  $list = ['One', 'Two', 'Three'];

// NOTE: must use a parameter in order to access outside variables.
  function printThings($things){
    for ($i=0; $i < count($things); $i++) {
      ?>

      <div class="block"><?php echo $things[$i]?></div>
      
      <?php
      // echo $things[$i];
      echo '<br>';
    }
  }

  printThings($list);

  ?>
</body>
</html>
