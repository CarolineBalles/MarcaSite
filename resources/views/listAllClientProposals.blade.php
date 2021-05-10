<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1">

    	<!-- Bootstrap CSS -->
    	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
		<title>Lista de Propostas</title>
		<link rel="stylesheet" href="{{asset('css/style.css')}}">
	</head>
	<body>
		<div class="container">
			<div class="row list">
				<div class="col-sm-12">
					<div class="row">
						<div class="col">
							<h2 class="inline col">LISTA DE PROPOSTAS DO CLIENTE</h2>
							<form class="inline alignment" action="{{route('proposal.search')}}" method="post">
								@csrf
								<div class="inline col alignment">
									<input type="text" class="" name="search" id="search" placeholder="Faça sua Busca" required>
									<button class="btn btn-primary" type="submit">Buscar</button>	
								</div>
							</form>
							<label for="service"></label>
							<select class="inline col alignment selec" required name="service" id="service">
								<option>Serviços</option>
								@foreach($proposals as $proposal)
									<option value="{{$proposal->service}}"><a href="{{route('user.index')}}"> {{$proposal->service}}</a></option>
								@endforeach
							</select>
						</div>
					</div>
					<hr>
					<div class="row">
						<div class="col-sm-12">
							<table class="table table-bordered table-hover">
								<thead>
									<tr>
										<th scope="col">Cliente</th>
										<th scope="col">Proposta feita em</th>
										<th scope="col">Início do pgto.</th>
										<th scope="col">Serviços</th>
										<th scope="col">Qtde. de parcelas</th>
										<th scope="col">Sinal R$</th>
										<th scope="col">Valor Parcela R$</th>
										<th scope="col">Total</th>
										<th scope="col">Status</th>
										<th scope="col">Editar</th>
									</tr>
								</thead>
								@foreach($proposals as $proposal)
									<tbody>
									<tr>
										<td>{{$proposal->client_name}}</td>
										<td>{{date('d/m/Y H:i', strtotime($proposal->created_at))}}</td>
										<td>{{$proposal->pay_day}}</td>
										<td>{{$proposal->service}}</td>
										<td>{{$proposal->number_installments}}</td>
										<td>{{$proposal->entrance}}</td>
										<td>{{$proposal->installments_value}}</td>
										<td>{{$proposal->amount}}</td>
										<td>{{$proposal->status}}</td>
										<td>
											<form action="{{route('proposal.edit', ['proposal' => $proposal->id])}}" method="get">
												<input type="hidden" name="proposal">
												<input class="btn btn-primary" type="submit" value="Editar">
											</form>
										</td>
									</tr>
									<tbody>
								@endforeach
							</table>
							<hr>
							<a class="btn btn-primary" href="{{route('user.index')}}">Voltar ao Inicio</a>
							<a class="btn btn-primary" href="{{route('client.index')}}">Voltar a Lista</a>
							<hr>
						</div>
					</div>
				</div>
			</div>
		</div>
		<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js" integrity="sha384-lpyLfhYuitXl2zRZ5Bn2fqnhNAKOAaM/0Kr9laMspuaMiZfGmfwRNFh8HlMy49eQ" crossorigin="anonymous"></script>
	</body>
</html>