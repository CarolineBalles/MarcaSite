<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1">

    	<!-- Bootstrap CSS -->
    	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
		<title>Pagina Inicial</title>
		<link rel="stylesheet" href="{{asset('css/style.css')}}">
	</head>
	<body>
		<div class="container">
			<div class="row justify-content-md-center">
				<div class="col-sm-auto col-md-auto space">
					<h2 class="index">MARCA<span>SITE</span></h2>
					<a class="btn btn-primary size" href="{{route('user.create')}}">Cadastro de Usuários</a><br/><br/>
					<a class="btn btn-primary size" href="{{route('client.create')}}">Cadastro de Clientes</a><br/><br/>
					<a class="btn btn-primary size" href="{{route('client.index')}}">Listar/Editar Clientes</a><br/><br/>
					<a class="btn btn-primary size" href="{{route('proposal.create')}}">Cadastrar Proposta</a><br/><br/>
					<a class="btn btn-primary size" href="{{route('proposal.index')}}">Listar/Editar Propostas</a><br/><br/>
				</div>
			</div>
		</div>
		<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js" integrity="sha384-lpyLfhYuitXl2zRZ5Bn2fqnhNAKOAaM/0Kr9laMspuaMiZfGmfwRNFh8HlMy49eQ" crossorigin="anonymous"></script>
	</body>
</html>