<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1">

    	<!-- Bootstrap CSS -->
    	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
		<title>Cadastro de Proposta</title>
		<link rel="stylesheet" href="{{asset('css/style.css')}}">
	</head>
	<body>
		<div class="container">
			<div class="row justify-content-md-center">
				<div class="col-sm-12 col-md-6 create">
					<h2>CADASTRO DE PROPOSTA</h2>
					<form action="{{route('proposal.store')}}" method="post">
						<div class="form-group">
							@csrf
							<label for="client_name">Cliente: </label>
							<select class="form-control @error('client_name') is-invalid @enderror" name="client_name" id="client_name">
								<option>--Selecione--</option>
								@foreach($clients as $client)
									<option value="{{$client->name}}">{{$client->name}}</option>
								@endforeach
							</select>
							@error('client_name')
    							<div class="invalid-feedback">
    								{{ $message }}
    							</div>
							@enderror

							<label for="address">Endereço da Obra: </label>
							<input class="form-control @error('address') is-invalid @enderror" type="text" name="address" id="address" placeholder="Digite o Endereço da Obra">
							@error('address')
    							<div class="invalid-feedback">
    								{{ $message }}
    							</div>
							@enderror

							<label for="service">Serviço: </label>
							<input class="form-control @error('service') is-invalid @enderror" type="text" name="service" id="service" placeholder="Digite o Serviço">
							@error('service')
    							<div class="invalid-feedback">
    								{{ $message }}
    							</div>
							@enderror

							<label for="amount">Valor Total: </label>
							<input class="form-control @error('amount') is-invalid @enderror" type="text" name="amount" id="amount" placeholder="Digite o Valor Total">
							@error('amount')
    							<div class="invalid-feedback">
    								{{ $message }}
    							</div>
							@enderror

							<label for="entrance">Sinal: </label>
							<input class="form-control @error('entrance') is-invalid @enderror" type="text" name="entrance" id="entrance" placeholder="Digite o Valor do Sinal">
							@error('entrance')
    							<div class="invalid-feedback">
    								{{ $message }}
    							</div>
							@enderror

							<label for="number_installments">Quantidade de Parcelas: </label>
							<input class="form-control @error('number_installments') is-invalid @enderror" type="text" name="number_installments" id="number_installments" placeholder="Digite o Numero de Parcelas">
							@error('number_installments')
    							<div class="invalid-feedback">
    								{{ $message }}
    							</div>
							@enderror

							<label for="installments_value">Valor das Parcelas: </label>
							<input class="form-control @error('installments_value') is-invalid @enderror" type="text" name="installments_value" id="installments_value" placeholder="Digite o Valor das Parcelas">
							@error('installments_value')
    							<div class="invalid-feedback">
    								{{ $message }}
    							</div>
							@enderror

							<label for="pay_day">Data de Inicio de Pagamento: </label>
							<input class="form-control @error('pay_day') is-invalid @enderror" type="date" name="pay_day" id="pay_day">
							@error('pay_day')
    							<div class="invalid-feedback">
    								{{ $message }}
    							</div>
							@enderror

							<label for="installment_date">Data das Parcelas: </label>
							<input class="form-control @error('installment_date') is-invalid @enderror" type="date" name="installment_date" id="installment_date">
							@error('installment_date')
    							<div class="invalid-feedback">
    								{{ $message }}
    							</div>
							@enderror

							<label for="attachment">Anexar Arquivo (PDF ou DOC): </label>
							<input class="form-control @error('attachment') is-invalid @enderror" type="file" name="attachment" id="attachment">
							@error('attachment')
    							<div class="invalid-feedback">
    								{{ $message }}
    							</div>
							@enderror

							<label for="status">Status: </label>
							<select class="form-control @error('status') is-invalid @enderror" name="status" id="status" class="">
								<option>--Selecione--</option>
								<option value="Reprovado">Reprovado</option>
								<option value="Aprovado">Aprovado</option>
								<option value="Fechado">Fechado</option>
								<option value="Aberto">Aberto</option>
							</select></br>
							@error('status')
    							<div class="invalid-feedback">
    								{{ $message }}
    							</div>
							@enderror

							<input class="form-control submit" type="submit" name="Enviar"><br/>
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