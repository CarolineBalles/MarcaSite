<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1">

    	<!-- Bootstrap CSS -->
    	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
		<title>Cadastro de Usuário</title>
		<link rel="stylesheet" href="{{asset('css/style.css')}}">
	</head>
	<body>
		<div class="container">
			<div class="row justify-content-md-center">
				<div class="col-sm-auto col-md-auto space">
					<h2>CADASTRO DE USUÁRIO</h2>
					<form action="{{route('user.store')}}" method="post">
						<div>
							@csrf
							<label for="name">Nome: </label>
							<input  type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" placeholder="Digite Seu Nome Completo">
							@error('name')
    							<div class="invalid-feedback">
    								{{ $message }}
    							</div>
							@enderror

							<label for="email">E-mail: </label>
							<input class="form-control @error('email') is-invalid @enderror" type="text" name="email" id="email" placeholder="Digite Seu E-mail">
							@error('email')
    							<div class="invalid-feedback">
    								{{ $message }}
    							</div>
							@enderror

							<label for="password">Senha: </label>
							<input class="form-control @error('password') is-invalid @enderror" type="password" name="password" id="password" placeholder="Digite Sua Senha">
							@error('password')
    							<div class="invalid-feedback">
    								{{ $message }}
    							</div>
							@enderror

							<label for="password_confirmation">Confirme Senha: </label>
							<input class="form-control @error('password_confirmation') is-invalid @enderror" type="password" name="password_confirmation" id="password_confirmation" placeholder="Confirme Sua Senha"><br>
							@error('password_confirmation')
    							<div class="invalid-feedback">
    								{{ $message }}
    							</div>
							@enderror

							<input class="form-control submit" type="submit" value="Cadastrar Usuário"><br/>	
						</div>
					</form>
					<a class="btn btn-primary" href="{{route('user.index')}}">Voltar ao Inicio</a>
			</div>
		</div>
		<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js" integrity="sha384-lpyLfhYuitXl2zRZ5Bn2fqnhNAKOAaM/0Kr9laMspuaMiZfGmfwRNFh8HlMy49eQ" crossorigin="anonymous"></script>
	</body>
</html>