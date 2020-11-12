<?php
/* Объявляем массив: */
$two_dimensional_array = array();
 
/*Заполняем двумерный массив случайными числами: */
for ($c = 0; $c < 10; $c++):
  for ($r = 0; $r < 10; $r++):
    $two_dimensional_array[$c][$r] = rand(0, 2000);
    $q=$two_dimensional_array[$c][$r];
  endfor;
endfor;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <title>Document</title>
</head>
<body>
<table>

	<?php foreach ($two_dimensional_array as $items): ?>

	<tr>

		<?php foreach ($items as $row): ?>

		<td><?php echo $row; ?></td>

		<?php endforeach; ?>

	</tr>

	<?php endforeach; ?>

</table>
</body>
</html>