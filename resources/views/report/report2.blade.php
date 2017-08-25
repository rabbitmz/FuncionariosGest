@extends('template.standard') @section('title', 'Inicial')

@section('content')
<div class="panel panel-default mukheroHack ">
	<div class="panel-heading panel-red-heading">
		<span class="panel-heading-text"> {{ __('messages.report.view.title')
			}}</span>


	</div>

	<div class="panel-body">
		{{Form::open(['url' => '/editColaborator/page2'])}}
		<div class="panel panel-default">
			<div class="panel-heading sub-panel-color-heading">
				<span class="panel-heading-text"> {{
					__('messages.report.view.Subtitle.page1') }}</span> 
					
					
					
			<a href="{{ route('downloadPdf',['download'=>'pdf']) }}">Download PDF</a>
			</div>

			<div class="panel-body">
				@foreach ($resultSet as $professional)
				<div class="panel panel-default">
					<div class="panel-heading sub-panel-color-heading">
						<span class="panel-heading-text">{{__('messages.collaborator.name')}}
							: {{ $professional->nome }} </span>
					</div>

					<div class="panel-body">
						<table class="table">

							<thead>
								<tr>

									<th data-name="gender">{{__('messages.collaborator.gender')}}</th>
									<th data-name="dateOfBirth" data-type="date"
										data-format-string="MMMM Do YYYY">{{__('messages.collaborator.birthDate')}}</th>
									<th data-name="docNumber">{{__('messages.collaborator.identificationDocument.short')}}</th>
									<th data-name="contactPhone">{{__('messages.collaborator.phoneNumber')}}</th>
									<th data-name="neighboor">{{__('messages.collaborator.neighborhood')}}</th>
									<th data-name="provincia">{{__('messages.collaborator.course.school.province')}}</th>
									<th data-name="localidade">{{__('messages.collaborator.locality')}}</th>

								</tr>
							</thead>
							<tbody>
								<tr>
									<td>{{ $professional->genero }}</td>
									<td>{{ $professional->data_nascimento }}</td>
									<td>{{ $professional->numero_documento }}</td>
									<td>{{ $professional->bairro }}</td>
									<td>{{ $professional->telefone }}</td>
									<td>teste</td>
									<td>teeste</td>
								</tr>
							</tbody>
						</table>
						<div>


							@foreach ($professional->professions as $profession)
							<div class="form-group required">
								<label class="col-sm-3 control-label boldText">{{__('messages.collaborator.profession.primary')}}</label>
								<label class="col-sm-3">{{ $profession->descricao }}</label> <label
									class="col-sm-3 control-label"><span class="boldText">{{__('messages.collaborator.yearsOfExperience')}}</span></label>
								<label class="col-sm-3">{{ $profession->descricao }}</label>
							</div>

							@endforeach

						</div>
					</div>
				</div>
				@endforeach

			</div>

			<div class="row">
				<div class="col-lg-12 ">{!!Form::submit('Procurar',['class' => 'btn
					pull-right']); !!}</div>
			</div>
			{{Form::close()}}
		</div>
	</div>
</div>
@endsection @section('scripts')
<script src="{{ asset('js/report.js') }}"></script>
@endsection
