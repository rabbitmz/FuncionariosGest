@extends('template.standard') @section('title', 'Inicial')

@section('content')
<div class="panel panel-default mukheroHack ">
	<div class="panel-heading panel-red-heading">
		<span class="panel-heading-text"> {{
			__('messages.collaborator.pageOne.title') }}</span>
	</div>

	<div class="panel-body">
		{{Form::open(['url' => '/createColaborator/page4'])}}
		<!-- 	SITUACAO LABORAL -->
		<div class="panel panel-default">
			<div class="panel-heading sub-panel-color-heading">
				<span class="panel-heading-text"> {{
					__('messages.collaborator.pageOne.subtitle3') }}</span>
			</div>

			<div class="panel-body">
				<div class="col-lg-2">{!!
					Form::label('ltype1',trans('messages.collaborator.laboral.type').':',
					['for' => 'type1' ]) !!}</div>
				<div class="col-lg-6">{!! Form::select('type1',
					['default'=>'Selecione um tipo','CONTRATADO' => 'Contratado',
					'DESEMPREGADO' => 'Desempregado','AUTO' => 'Auto-emprego'], null,
					['class' => 'form-control ', 'id' => 'type1']) !!}</div>
			</div>
		</div>
		<div class="panel panel-default" id="laboralContractedTypeData">
			<div class="panel-heading sub-panel-color-heading">
				<span class="panel-heading-text"> {{
					__('messages.collaborator.pageTwo.subtitle2') }}</span>
			</div>

			<div class="panel-body">
				<div class="form-group">
					<div class="row">
						<div class="col-lg-2">{!!
							Form::label('ltypeContract',trans('messages.collaborator.laboral.type.contract').':',
							['for' => 'typeContract' ]) !!}</div>
						<div class="col-lg-6">{!! Form::select('typeContract',
							['permanente' => 'Permanente', 'temporario' => 'Temporario'],
							null, ['class' => 'form-control ', 'id' => 'typeContract']) !!}</div>
						<div class="col-lg-2">{!!
							Form::label('lcontractStartDate',trans('messages.collaborator.laboral.contract.startDate').':',
							['for' => 'contractStartDate' ]) !!}</div>
						<div class="col-lg-2">{!!
							Form::text('contractStartDate',null,['class' => 'form-control ',
							'id' => 'contractStartDate', 'placeholder' => 'dd/mm/aaaa']) !!}</div>
					</div>
				</div>
				<div class="form-group">
					<div class="row">
						<div class="col-lg-2">{!!
							Form::label('lsalary',trans('messages.collaborator.laboral.salary').':',
							['for' => 'salary' ]) !!}</div>
						<div class="col-lg-2">{!! Form::select('salary', ['1000' =>
							'1000', '2000' => '2000'], null, ['class' => 'form-control ',
							'id' => 'salary']) !!}</div>
						<div class="col-lg-2">{!!
							Form::label('lcontractDuration',trans('messages.collaborator.laboral.contractDuration').':',
							['for' => 'contractDuration' ]) !!}</div>
						<div class="col-lg-2">{!! Form::select('contractDuration', ['1' =>
							'1', '2' => '2', '3' => '3', '4' => '4', '5' => '5', '6' => '6',
							'7' => '7', '8' => '8', '9' => '9'], null, ['class' =>
							'form-control ', 'id' => 'contractDuration']) !!}</div>

						<div class="col-lg-2">{!!
							Form::label('lemployeeWorkArea',trans('messages.collaborator.laboral.contract.employee.work.Area').':',
							['for' => 'category' ]) !!}</div>
						<div class="col-lg-2">{!! Form::select('employeeWorkArea',
							['pedreiro' => 'Pedreiro', 'Auto' => 'Auto Mecanico'], null,
							['class' => 'form-control ', 'id' => 'employeeWorkArea']) !!}</div>
					</div>
				</div>
				<div class="form-group">
					<div class="row">
						<div class="col-lg-2">{!!
							Form::label('lemployer',trans('messages.collaborator.laboral.employer').':',
							['for' => 'employer' ]) !!}</div>
						<div class="col-lg-6">{!! Form::text('employer',null,['class' =>
							'form-control ', 'id' => 'employer']) !!}</div>

					</div>
				</div>
				<div class="form-group">
					<div class="row">
						<div class="col-lg-2">{!!
							Form::label('lemployerCategory',trans('messages.collaborator.laboral.employer.category').':',
							['for' => 'employerCategory' ]) !!}</div>
						<div class="col-lg-2">{!! Form::select('employerCategory',
							['pedreiro' => 'Pedreiro', 'Auto' => 'Auto Mecanico'], null,
							['class' => 'form-control ', 'id' => 'employerCategory']) !!}</div>
						<div class="col-lg-2">{!!
							Form::label('lemployerActivity',trans('messages.collaborator.laboral.employer.activity').':',
							['for' => 'employerActivity' ]) !!}</div>
						<div class="col-lg-2">{!! Form::select('employerActivity',
							['pedreiro' => 'Pedreiro', 'Auto' => 'Auto Mecanico'], null,
							['class' => 'form-control ', 'id' => 'employerActivity']) !!}</div>

					</div>
				</div>
			</div>
		</div>
		<div class="panel panel-default" id="laboralUnemployedTypeData">
			<div class="panel-heading sub-panel-color-heading">
				<span class="panel-heading-text"> {{
					__('messages.collaborator.pageTwo.subtitle3') }}</span>
			</div>

			<div class="panel-body">
				<div class="form-group">
					<div class="row">
						<div class="col-lg-2">{!!
							Form::label('lunemployedStartDate',trans('messages.collaborator.laboral.unemployed.startDate').':',
							['for' => 'unemployedStartDate' ]) !!}</div>
						<div class="col-lg-2">{!!
							Form::text('unemployedStartDate',null,['class' => 'form-control
							', 'id' => 'unemployedStartDate', 'placeholder' => 'dd/mm/aaaa'])
							!!}</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12 ">{!!Form::submit('Seguinte',['class' => 'btn
				pull-right']); !!}</div>
		</div>
		{{Form::close()}}
	</div>
</div>

@endsection @section('scripts')
<script src="{{ asset('js/colaborator.js') }}"></script>
@endsection
