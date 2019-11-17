<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>App Mecânica</title>

		<link rel="stylesheet" href="css/estilo.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	</head>

	<body>
		<nav class="navbar navbar-light bg-light">
			<div class="container">
				<a class="navbar-brand" href="#">
					App Mecânica
				</a>
			</div>
		</nav>

		<div class="container">
			<div class="row">
				<div class="col-sm-3 menu">
					<ul class="list-group">
						<li class="list-group-item"><a href="{{ route('orcamento.index') }}">Pesquisar Orçamentos</a></li>
						<li class="list-group-item"><a href="{{ route('orcamento.create') }}">Novo Orçamento</a></li>
					</ul>
				</div>

				<div class="col-sm-9">
					<div class="container">
						<div class="row">
							<div class="col">
								@yield('content')
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>