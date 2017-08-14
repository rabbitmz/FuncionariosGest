<style>
body {
	font: normal 8px Verdana, Arial, sans-serif;
}

table {
	border-collapse: collapse;
	width: 100%;
}

th, td {	
	text-align: left;
	padding: 8px;
}

tr:nth-child(even) {
	background-color: #f2f2f2;
}

th {
	background-color: #3E3E3E;
	color: white;
}
</style>


<div>

</div>



<table>
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
			<td>teeste</td> 
			@foreach ($professional->professions as $profession)
			<td>{{ $profession->descricao }}</td>
			<td>{{ $profession->descricao }}</td> 
			@endforeach
			
		</tr>
		@endforeach
	</tbody>
</table>

