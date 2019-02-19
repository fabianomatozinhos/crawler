<?php

include 'crawler.php';

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>	
	<script type="text/javascript" src="biblioteca/jquery-3.2.1.min.js"></script>
</head>
<body>
<form action="">

	<div class="row justify-content-md-center">
		<div class="container">
			<div class="row justify-content-center form-group">
				<div class="col-md-12">


					<div class="col-md-6  ">
						<label for="marca">Marca</label>
						<?php echo isset($marca) ? $marca : ''; ?>
					</div>

					<div class="col-md-6  ">
						<label for="modelo">Modelo</label>
						<select name="modelo" id="modelo">
							<option value="0">Escolha um modelo</option> 
						</select>
					</div>

					<div class="col-md-12  ">
						<label for="cidade">Cidade</label>
						<select name="cidade" id="cidade">
							<option value="0">Todas as cidades</option>
						</select>
					</div>

					<div class="col-md-6  ">
						<label for="valor1">Preço</label>				
							<?php echo isset($valor1) ? $valor1 : ''; ?>				
					</div>

					<div class="col-md-6  ">
						<label for="valor2">Preço</label>				
							<?php echo isset($valor2) ? $valor2 : ''; ?>				
					</div>

					<div class="col-md-6  ">
						<label for="ano1">Ano/Modelo</label>				
							<?php echo isset($ano1) ? $ano1 :  '' ?>				
					</div>

					<div class="col-md-6  ">
						<label for="ano2">Até</label>				
							<?php echo isset($ano2) ? $ano2 : ''; ?>				
					</div>

					<div class="col-md-12  ">
						<label class="cbbtn small"><input type="checkbox" name="particular" id="particular" value="1"> Particular </label>
						<label class="cbbtn small"><input type="checkbox" name="revenda" id="revenda" value="1"> Revendas </label>
					</div>

					<div class="col-md-12 ">
						<input name="" id="btn_enviar" type="button" class="btn btn-success" style="margin-top:10px;" value="BUSCAR" title="Buscar">
					</div>
				</div>

			</div>

			<div class="row">
				<table class="table">
					<thead>
						<tr>
							<th>Titulo</th>
							<th>Preço</th>
							<th>Descricao</th>
							<th>Acessorios</th>
						</tr>
					</thead>
					<tbody id="lista-veiculos">
						
					</tbody>
				</table>
			</div>		
		</div>
	</div>

</form>

<script type="text/javascript" src="biblioteca/script.js"></script>
