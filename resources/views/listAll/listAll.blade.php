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
				<table class="table" id="listAllTable" data-paging="true"
					data-paging-size="15">
					<thead>
						<tr>
							<th data-name="name">{{__('messages.collaborator.name') }}</th>
							<th data-name="docId">{{__('messages.collaborator.identificationDocument.extended')}}


							<th data-name="gender">{{__('messages.collaborator.gender')}}

							<th data-name="work1">{{__('messages.collaborator.profession.primary')}}


							<th data-name="work2">{{__('messages.collaborator.profession.other')}}


							<th data-name="provincia">{{__('messages.collaborator.citizenship')}}


							<th data-name="city">{{__('messages.collaborator.city')}}

						</tr>
					</thead>
					<tbody>
						@foreach ($professionals as $professional)
						<tr>
							<td>{{ $professional->nome }}</td>
							<td>{{ $professional->numero_documento }}</td>
							<td>{{ $professional->genero }}</td>
							 @foreach ($professional->profissoes as $profession)
							<td>{{ $profession->descricao }}</td>
							@endforeach
							<td>{{ $professional->NaturalidadeProvincia->nome }}</td>
							<td>{{ $professional->cidade}}</td>
						</tr>
						@endforeach

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
