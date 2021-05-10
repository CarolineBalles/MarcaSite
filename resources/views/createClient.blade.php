<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1">

    	<!-- Bootstrap CSS -->
    	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
		<title>Cadastro de Clientes</title>
		<link rel="stylesheet" href="{{asset('css/style.css')}}">
		<link rel="stylesheet" href="../../public/css/style.css">
	</head>
	<body>
		<div class="container">
			<div class="row justify-content-md-center">
				<div class="col-sm-12 col-md-6 create">
					<h2>CADASTRO DE CLIENTES</h2>
					<form action="{{route('client.store')}}" method="post">
						<div class="form-group">
							@csrf
							<label for="company_name">Razão Social: </label>
							<input class="form-control @error('company_name') is-invalid @enderror" type="text" name="company_name" id="company_name" placeholder="Digite a Razão Social">
							@error('company_name')
    							<div class="invalid-feedback">
    								{{ $message }}
    							</div>
							@enderror

							<label for="fantasy_name">Nome Fantasia: </label>
							<input class="form-control @error('fantasy_name') is-invalid @enderror" type="text" name="fantasy_name" id="fantasy_name" placeholder="Digite o Nome Fantasia">
							@error('fantasy_name')
    							<div class="invalid-feedback">
    								{{ $message }}
    							</div>
							@enderror

							<label for="cnpj">CNPJ: </label>
							<input class="form-control @error('cnpj') is-invalid @enderror" type="text" name="cnpj" id="cnpj" placeholder="Digite o CNPJ">
							@error('cnpj')
    							<div class="invalid-feedback">
    								{{ $message }}
    							</div>
							@enderror

							<label for="address">Endereço: </label>
							<input class="form-control @error('address') is-invalid @enderror" type="text" name="address" id="address" placeholder="Digite o Endereço">
							@error('address')
    							<div class="invalid-feedback">
    								{{ $message }}
    							</div>
							@enderror

							<label for="email">E-mail: </label>
							<input class="form-control @error('email') is-invalid @enderror" type="text" name="email" id="email" placeholder="Digite o E-mail">
							@error('email')
    							<div class="invalid-feedback">
    								{{ $message }}
    							</div>
							@enderror

							<label for="telephone">Telefone: </label>
							<input class="form-control @error('telephone') is-invalid @enderror" type="text" name="telephone" id="telephone" placeholder="Digite o Número do Telefone">
							@error('telephone')
    							<div class="invalid-feedback">
    								{{ $message }}
    							</div>
							@enderror

							<label for="name">Nome do Responsável: </label>
							<input class="form-control @error('name') is-invalid @enderror" type="text" name="name" id="name" placeholder="Digite o Nome">
							@error('name')
    							<div class="invalid-feedback">
    								{{ $message }}
    							</div>
							@enderror

							<label for="cpf">CPF: </label>
							<input class="form-control @error('cpf') is-invalid @enderror" type="text" name="cpf" id="cpf" placeholder="Digite o CPF">
							@error('cpf')
    							<div class="invalid-feedback">
    								{{ $message }}
    							</div>
							@enderror

							<label for="cell">Celular: </label>
							<input class="form-control @error('cell') is-invalid @enderror" type="text" name="cell" id="cell" placeholder="Digite o Número do Celular">
							@error('cell')
    							<div class="invalid-feedback">
    								{{ $message }}
    							</div>
							@enderror

							<input class="form-control submit" type="submit" name="Cadastrar"><br/>
						</div>
					</form>
					<a class="btn btn-primary" href="{{route('user.index')}}">Voltar ao Inicio</a>
				</div>
			</div>
		</div>
		<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js" integrity="sha384-lpyLfhYuitXl2zRZ5Bn2fqnhNAKOAaM/0Kr9laMspuaMiZfGmfwRNFh8HlMy49eQ" crossorigin="anonymous"></script>
	</body>
</html>