@extends('template.standard') @section('title', 'Inicial')

@section('content')
<div class="panel panel-default mukheroHack ">
	<div class="panel-heading panel-red-heading">
		<span class="panel-heading-text"> {{
			__('messages.collaborator.pageOne.title') }}</span>
	</div>

	<div class="panel-body">
		<!-- 	Competencias na area -->
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
							Form::label('lemployer',trans('messages.collaborator.laboral.employer').':',
							['for' => 'employer' ]) !!}</div>
						<div class="col-lg-2">{!! Form::text('employer',null,['class' =>
							'form-control ', 'id' => 'employer']) !!}</div>
						<div class="col-lg-2">{!!
							Form::label('lemployerActivity',trans('messages.collaborator.laboral.employer.activity').':',
							['for' => 'employerActivity' ]) !!}</div>
						<div class="col-lg-2">{!!
							Form::text('employerActivity',null,['class' => 'form-control ',
							'id' => 'employerActivity', 'placeholder' => 'dd/mm/aaaa']) !!}</div>
						<div class="col-lg-2">{!!
							Form::label('lcategory',trans('messages.collaborator.laboral.contract.category').':',
							['for' => 'category' ]) !!}</div>
						<div class="col-lg-2">{!! Form::select('category', ['pedreiro' =>
							'Pedreiro', 'Auto' => 'Auto Mecanico'], null, ['class' =>
							'form-control ', 'id' => 'category']) !!}</div>
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
	</div>
</div>

@endsection @section('scripts')
<script src="{{ asset('js/colaborator.js') }}"></script>
@endsection
