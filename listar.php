<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Clinica</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
</head>

<body id="app-layout">

<div class="container-fluid">
  <div class="row">
      <div class="col-md-12">

        <div class="panel panel-default">
    			<div class="panel-heading">Pacientes</div>

    			<div class="panel-body">
    				<div class="pull-right">
    				      <a href="registrar.php" class="btn btn-success">Registrar</a>
    				</div>
    				<table class="table table-striped">
    					<thead>
    					<th>Identificacion</th>
    					<th>Nombres</th>
    					<th>Dato 1</th>
    					<th>Dato 2</th>
    					<th>Acciones</th>
    				</thead>
    				<tbody>
              <!--Ciclo -->
    						<tr>
      						<td>identificacion</td>
      						<td><a href="pacientes.php?cc=">nombre completo</a></td>
      						<td>dato</td>
      						<td>otro dato</td>
      						<td><a href="pacientes.php?cc=" class="btn btn-primary">Editar</a></td>
    						</tr>
    					<!--END CICLO -->
    				</tbody>
    				</table>
    			</div>
    		</div>

      </div>
  </div>
</div>
</body>
</html>
