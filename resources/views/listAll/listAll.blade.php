@extends('template.standard') @section('title', 'Inicial')

@section('content')
<div class="panel panel-default mukheroHack ">
	<div class="panel-heading panel-red-heading">
		<span class="panel-heading-text"> {{
			__('messages.collaborator.listAll.title') }}</span>
	</div>

	<div class="panel-body">
		{{Form::open()}}
		<!-- 	Competencias na area -->
		<div class="panel panel-default">
			<div class="panel-heading sub-panel-color-heading">
				<span class="panel-heading-text"> {{
					__('messages.collaborator.listAll.subtitle') }}</span>
			</div>

			<div class="panel-body">
				<table class="table" id="listAllTable" data-paging="true" data-paging-size="3">
					<thead>
						<tr>
							<th data-name="name">{{__('messages.collaborator.name') }}</th>
							<th data-name="docId">{{__('messages.collaborator.identificationDocument.extended')}}


							
							
							<th data-name="gender">{{__('messages.collaborator.gender')}}
							
							<th data-name="work1">{{__('messages.collaborator.profession')}}


							
							
							<th data-name="work2">{{__('messages.collaborator.profession')}}


							
							
							<th data-name="provincia">{{__('messages.collaborator.citizenship')}}


							
							
							<th data-name="city">{{__('messages.collaborator.city')}}
						
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Maria Andre</td>
							<td>454521215478A</td>
							<td>Feminino</td>
							<td>Engenheira Civil</td>
							<td>Tecnica de Laboratorio</td>
							<td>Maputo</td>
							<td>Maputo</td>
						</tr>
						<tr>
							<td>Joao Mateus</td>
							<td>447845213457A</td>
							<td>Masculino</td>
							<td>Pedreiro</td>
							<td>Tecnica de Laboratorio</td>
							<td>Maputo</td>
							<td>Matola</td>
						</tr>
						<tr>
							<td>Nelio Joao</td>
							<td>545745213257A</td>
							<td>Masculino</td>
							<td>Pedreiro</td>
							<td>Canalizador</td>
							<td>Nampula</td>
							<td>Nacala</td>
						</tr>
							<tr>
							<td>Mateus Joao</td>
							<td>452315467898A</td>
							<td>Feminino</td>
							<td>Canalizador</td>
							<td>Motorista</td>
							<td>Maputo</td>
							<td>Maputo</td>
						</tr>
						<tr>
							<td>Jose Cremildo</td>
							<td>1111111114141A</td>
							<td>Masculino</td>
							<td>Pedreiro</td>
							<td>Tecnica de Laboratorio</td>
							<td>Maputo</td>
							<td>Matola</td>
						</tr>
						<tr>
							<td>Kelia Marlene</td>
							<td>11246564645E</td>
							<td>Masculino</td>
							<td>Pedreiro</td>
							<td>Canalizador</td>
							<td>Nampula</td>
							<td>Nacala</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>

		
		{{Form::close()}}
	</div>
</div>

@endsection @section('scripts')
<script type="text/javascript">
$(function($){
	$('#listAllTable').footable();
});

</script>
@endsection
