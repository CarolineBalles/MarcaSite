<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1">

    	<!-- Bootstrap CSS -->
    	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
		<title>Lista de Clientes</title>
		<link rel="stylesheet" href="{{asset('css/style.css')}}">
	</head>
	<body>
		<div class="container">
			<div class="row list">
				<div class="col-sm-12">
					<h2>LISTA DE CLIENTES</h2>
					<table class="table table-bordered table-hover">
						<thead>
					  		<tr>
							    <th scope="col">Razão Social</th>
							    <th scope="col">Nome Fantasia</th>
							    <th scope="col">CNPJ</th>
							    <th scope="col">Endereço</th>
							    <th scope="col">E-mail</th>
							    <th scope="col">Telefone</th>
							    <th scope="col">Nome do Responsável</th>
							    <th scope="col">CPF</th>
							    <th scope="col">Celular</th>
							    <th scope="col">Ação</th>
							    <th scope="col">Propostas</th>
							</tr>
						</thead>
						@foreach($clients as $client)
							<tbody>
							  	<tr>
								    <td>{{$client->company_name}}</td>
								    <td>{{$client->fantasy_name}}</td>
								    <td>{{$client->cnpj}}</td>
								    <td>{{$client->address}}</td>
								    <td>{{$client->email}}</td>
								    <td>{{$client->telephone}}</td>
								    <td>{{$client->name}}</td>
								    <td>{{$client->cpf}}</td>
								    <td>{{$client->cell}}</td>
								    <td>
								    	<form action="{{route('client.edit', ['client' => $client->id])}}" method="get">
								    		<input type="hidden" name="client">
								    		<input class="btn btn-primary submit" type="submit" value="Editar">
								    	</form>
								    </td>
								    <td><a class="btn btn-primary top" href="{{route('client.proposal', ['client' => $client->name])}}">Ver</a></td>
							  	</tr>
							<tbody>
				  		@endforeach
					</table>
					<a class="btn btn-primary" href="{{route('user.index')}}">Voltar ao Inicio</a>
				</div>
			</div>
		</div>
		<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js" integrity="sha384-lpyLfhYuitXl2zRZ5Bn2fqnhNAKOAaM/0Kr9laMspuaMiZfGmfwRNFh8HlMy49eQ" crossorigin="anonymous"></script>
	</body>
</html>