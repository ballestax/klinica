<?php
require('function.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Mostrar clientes</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<br>


		<table class="table">
			<thead>
			<tr>
				<td>Documento</td>
				<td>Tipo De Documento</td>
				<td>Primer Nombre</td>
				<td>Segundo Nombre</td>
				<td>Primer Apellido</td>
				<td>Segundo Apellido</td>
			</tr>
		</thead>

		<tbody>

			<?php
			$sql="select * from date_person where 1";
			$result=mysqli_query($conexion, $sql);


			while($mostrar=mysqli_fetch_array($result)) {
				var_dump($mostrar);

				?>
				<tr>
					<td><?php echo $mostrar['id_date_person'] ?></td>
					<td><?php echo $mostrar['id_tipe_doc'] ?><td>
					<td><?php echo $mostrar['f_name'] ?></td>
					<td><?php echo $mostrar['s_name'] ?></td>
					<td><?php echo $mostrar['l_name'] ?></td>
					<td><?php echo $mostrar['l_name_s'] ?></td>
				</tr>
			<?php
			}
			?>

		</tbody>
		</table>

</body>
</html>
