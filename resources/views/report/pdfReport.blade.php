<style>
body {
	font: normal 8px sans-serif;
}

.table-header {
	border-collapse: collapse;
	width: 100%;
}

.table-header th, td {
	text-align: left;
	padding: 8px;
}

.table-all-data {
	border-collapse: collapse;
	width: 100%;
	border: 1px solid #f2f2f2;
}

.table-all-data th, td {
	text-align: left;
	padding: 8px;
}

.table-all-data tr:nth-child(even) {
	background-color: #f2f2f2;
}

.table-all-data th {
	background-color: #3E3E3E;
	color: white;
}

.boldText {
	font-weight: bold;
}

.tt {
	font-weight: bold;
	padding-top: 18px;
}
</style>
<h2 align="center" class="tt">
<img  alt="logo" src="images/fme.jpg" width="100" height="60" />
<br/>Federação Moçambicana de Empreteiros
</h2>
<br />
<p><span class="boldText">Data de Impressão&nbsp;&nbsp;&nbsp;:</span>
				{{$currentDate}}</p>
<p><span class="boldText">Funcionário da FME :</span> default</p>
		

<br />
<h1 align="center">Listagem de Colaboradores</h1>
<br />
<table class="table-all-data">
	<thead>
		<tr>
			<th>Nome</th>
			<th>Sexo</th>
			<th>Data de Nascimento</th>
			<th>N de Documento de Identificacao</th>
			<th>N de Telefone</th>
			<th>Bairro</th>
			<th>Provincia</th>
			<th>Localidade</th>
			<th>Profissão Primaria</th>
			<th>Anos de Experiencia</th>
			<th>Profissão secundaria</th>
			<th>Anos de Experiencia</th>
		</tr>
	</thead>
	<tbody>
		@foreach ($resultSet as $professional)
		<tr>
			<td>{{ $professional->nome }}</td>
			<td>{{ $professional->genero }}</td>
			<td>{{ $professional->data_nascimento }}</td>
			<td>{{ $professional->numero_documento }}</td>
			<td>{{ $professional->bairro }}</td>
			<td>{{ $professional->telefone }}</td>
			<td>teste</td>
			<td>teeste</td> @foreach ($professional->professions as $profession)
			<td>{{ $profession->descricao }}</td>
			<td>{{ $profession->descricao }}</td> @endforeach

		</tr>
		@endforeach
	</tbody>
</table>
<footer>
<p align="center" class="boldText"><small>Dados Produzidos pela Federação Moçambicana de Empreteiros.<br/>
Não autorizada a replicada e distribuição desta informação.</small></p>
</footer>
