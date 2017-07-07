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
				<table class="table" id="listAllTable" data-paging="true" >
					<thead>
						<tr>
							<th data-name="name">{{__('messages.collaborator.name') }}</th>
							<th data-name="docId">{{__('messages.collaborator.identificationDocument.extended')}}
							
							
							<th data-name="gender">{{__('messages.collaborator.gender')}}
							
							<th data-name="work1">{{__('messages.collaborator.profession')}}
							
							
							<th data-name="work2">{{__('messages.collaborator.profession')}}
							
							
							<th data-name="provincia">{{__('messages.collaborator.citizenship')}}
							
							
							<th data-name="city">{{__('messages.collaborator.city')}}
							<th></th>
						</tr>
					</thead>
					<tbody>
<!-- 					fazer um for com todos os colaboratos encontrados, criar um botao com a href contendo o id de cada um dos colaboratos -->
						<tr>
						<td>Marcos Mateus</td>
						<td>123456879123Z</td>
						<td>Masculino</td>
						<td>Pedreiro</td>
						<td>Canalizador</td>
						<td>Maputo Cidade</td>
						<td>Maputo</td>
						<td>{{link_to_route('showColaborator', $title = null, $parameters = [1], $attributes = [])}}</td>
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
