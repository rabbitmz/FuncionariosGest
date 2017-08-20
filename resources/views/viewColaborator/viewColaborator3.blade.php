@extends('template.standard') @section('title', 'Inicial')

@section('content')
<div class="panel panel-default mukheroHack ">
	<div class="panel-heading panel-red-heading">
		<span class="panel-heading-text"> {{ __('messages.collaborator.view.title')
			}}</span>
	</div>

	<div class="panel-body">
		<div class="panel panel-default">
			<div class="panel-heading sub-panel-color-heading">
				<span class="panel-heading-text"> {{
					__('messages.collaborator.page.subtitle1') }}</span>
			</div>

			<div class="panel-body">
				<div class="form-group">
					<div class="row">
						<div class="col-lg-2">{!!
							Form::label('lname',trans('messages.collaborator.name').' :',
							['for' => 'name', 'readonly' ]) !!}</div>
						<div class="col-lg-6">{!! Form::text('name',$professional->nome,['class' =>
							'form-control ', 'id' => 'name','readonly']) !!}</div>
						<div class="col-lg-2	">{!!
							Form::label('lgender',trans('messages.collaborator.gender').' :',
							['for' => 'gender' ]) !!}</div>
						<div class="col-lg-2">{!! Form::select('gender', ['M' =>
							'Masculino', 'F' => 'Feminino'], $professional->genero, ['class' => 'form-control
							', 'id' => 'gender','readonly']) !!}</div>
					</div>
				</div>

				<div class="form-group">
					<div class="row">
						<div class="col-lg-2">{!!
							Form::label('lBirthDate',trans('messages.collaborator.birthDate').'
							:', ['for' => 'birthDate' ]) !!}</div>
						<div class="col-lg-2">{!! Form::text('birthDate',Carbon\Carbon::parse($professional->data_nascimento)->format('d-m-Y')  
						,['class' =>
							'form-control ', 'id' => 'birthDate','readonly','placeholder' =>
							'dd/mm/aaaa']) !!}</div>
						<div class="col-lg-2">{!!Form::label('lIdentificationDocumentType',trans('messages.collaborator.identificationDocument.type').'
							:', ['for' => 'identificationDocument' ]) !!}</div>
						<div class="col-lg-2">

							<div class="input-group">
								<label class="radio-inline"> <input type="radio" name="optradio"
									readonly="readonly"> BI
								</label> <label class="radio-inline"><input type="radio"
									name="optradio" readonly="readonly">Passport</label>
							</div>
						</div>

					</div>
				</div>
				<div class="form-group">
					<div class="row">


						<div class="col-lg-2">{!!
							Form::label('lIdentificationDocument',trans('messages.collaborator.identificationDocument').'
							:', ['for' => 'identificationDocument' ]) !!}</div>
						<div class="col-lg-2">{!!
							Form::text('identificationDocument',$professional->numero_documento,['class' =>
							'form-control ', 'id' => 'identificationDocument','readonly'])
							!!}</div>
						<div class="col-lg-2">{!!
							Form::label('ldateIssue',trans('messages.collaborator.identificationDocument.dateIssue').'
							:', ['for' => 'dateIssue' ]) !!}</div>
						<div class="col-lg-2">{!! Form::text('dateIssue',Carbon\Carbon::parse($professional->data_emissao_documento)->format('d-m-Y')
						,['class' =>
							'form-control ', 'id' => 'dateIssue', 'placeholder' =>
							'dd/mm/aaaa','readonly']) !!}</div>
						<div class="col-lg-2">{!!
							Form::label('ldateValid',trans('messages.collaborator.identificationDocument.dateValid').'
							:', ['for' => 'dateValid' ]) !!}</div>
						<div class="col-lg-2">{!! Form::text('dateValid',Carbon\Carbon::parse($professional->data_validade_documento)->format('d-m-Y')
						,['class' =>
							'form-control ', 'id' => 'dateValid', 'placeholder' =>
							'dd/mm/aaaa','readonly']) !!}</div>
					</div>
				</div>

				<div class="form-group">
					<div class="row">
						<div class="col-lg-2">{!!
							Form::label('lnationality',trans('messages.collaborator.nationality').'
							:', ['for' => 'nationality' ]) !!}</div>
						<div class="col-lg-2">{!! Form::select('nationality',
							['Mocambique' => 'Mocambicana', 'AfricaDoSul' => 'Sul Africana'],
							$professional->numero_documento, ['class' => 'form-control ', 'id' =>
							'nationality','readonly']) !!}</div>
						<div class="col-lg-2">{!!
							Form::label('lnationality',trans('messages.collaborator.citizenship').'
							:', ['for' => 'nationality' ]) !!}</div>
						<div class="col-lg-2">{!! Form::select('nationality',
							['Mocambique' => 'Maputo', 'AfricaDoSul' => 'Beira'], $professional->numero_documento,
							['class' => 'form-control ', 'id' => 'nationality','readonly'])
							!!}</div>
						<div class="col-lg-2">{!!
							Form::label('lCity',trans('messages.collaborator.city').' :',
							['for' => 'city' ]) !!}</div>
						<div class="col-lg-2">{!! Form::select('city', ['Mocambique' =>
							'Maputo', 'AfricaDoSul' => 'Beira'], $professional->numero_documento, ['class' =>
							'form-control ', 'id' => 'city' ,'readonly']) !!}</div>
					</div>
				</div>

			</div>
		</div>
		<div class="panel panel-default">
			<div class="panel-heading sub-panel-color-heading">
				<span class="panel-heading-text"> {{
					__('messages.collaborator.page.subtitle2') }}</span>
			</div>

			<div class="panel-body">
				<div class="form-group">
					<div class="row">
						<div class="col-lg-2">{!!
							Form::label('lneighborhood',trans('messages.collaborator.neighborhood').'
							:', ['for' => 'neighborhood' ]) !!}</div>
						<div class="col-lg-2">{!! Form::text('neighborhood', $professional->bairro,['class'
							=> 'form-control ', 'id' => 'neighborhood','readonly']) !!}</div>

						<div class="col-lg-2">{!!
							Form::label('lstreet',trans('messages.collaborator.street').' :',
							['for' => 'street' ]) !!}</div>
						<div class="col-lg-2">{!! Form::text('street',$professional->rua,['class' =>
							'form-control ', 'id' => 'street','readonly']) !!}</div>
						<div class="col-lg-2">{!!
							Form::label('lblock',trans('messages.collaborator.block').' :',
							['for' => 'block' ]) !!}</div>
						<div class="col-lg-2">{!! Form::text('block',$professional->quarteirao,['class' =>
							'form-control ', 'type'=>'Number','id' => 'block','readonly'])
							!!}</div>
					</div>
				</div>
				<div class="form-group">
					<div class="row">
						<div class="col-lg-2">{!!
							Form::label('lcell',trans('messages.collaborator.cell').' :',
							['for' => 'cell' ]) !!}</div>
						<div class="col-lg-2">{!! Form::text('cell',$professional->celula,['class' =>
							'form-control ', 'type'=>'Number','id' => 'block','readonly'])
							!!}</div>
						<div class="col-lg-2">{!!
							Form::label('lCity',trans('messages.collaborator.house').' :',
							['for' => 'city' ]) !!}</div>
						<div class="col-lg-2">{!! Form::text('house',$professional->casa,['class' =>
							'form-control ', 'type'=>'Number','id' => 'house','readonly'])
							!!}</div>
					</div>
				</div>
			</div>
		</div>
		<div class="panel panel-default">
			<div class="panel-heading sub-panel-color-heading">
				<span class="panel-heading-text"> {{
					__('messages.collaborator.page.subtitle3') }}</span>
			</div>

			<div class="panel-body">
				<div class="form-group">
					<div class="row">
						<div class="col-lg-2">{!!
							Form::label('lEducationLevel',trans('messages.collaborator.educationLevel').'
							:', ['for' => 'educationLevel' ]) !!}</div>
						<div class="col-lg-2">{!! Form::select('educationLevel', ['WITH'
							=> 'Com Escolaridade', 'WITHOUT' => 'Sem Escolaridade'], $professional->tem_nivel_academico,
							['class' => 'form-control ', 'id' =>
							'educationLevel','readonly']) !!}</div>
						<div id="educationLevelSection">
							<div class="col-lg-2">{!!
								Form::label('lgeneralEducation',trans('messages.collaborator.educationLevel.generalEducation').'
								:', ['class' => 'radio-inline','for' => 'generalEducation' ])
								!!} {!! Form::checkbox('generalEducation',
								'generalEducation',['readonly']) !!}</div>
							<div class="col-lg-2 col-lg-offset-1">{!!
								Form::label('lgeneralEducation',trans('messages.collaborator.educationLevel.technicalEducation').'
								:', ['class' => 'radio-inline','for' => 'technicalEducation' ])
								!!} {!! Form::checkbox('technicalEducation',
								'technicalEducation',['readonly']) !!}</div>
							<div class="col-lg-2 col-lg-offset-1">{!!
								Form::label('lgeneralEducation',trans('messages.collaborator.educationLevel.university').'
								:', ['class' => 'radio-inline','for' => 'university' ]) !!} {!!
								Form::checkbox('university', 'university',['disabled']) !!}</div>
						</div>
					</div>

				</div>
			</div>
		</div>
		<div class="panel panel-default">
			<div class="panel-heading sub-panel-color-heading">
				<span class="panel-heading-text"> {{
					__('messages.collaborator.page.subtitle4') }}</span>
			</div>

			<div class="panel-body">
				<div class="form-group">
					<div class="row">
						<div class="col-lg-2">{!!
							Form::label('lphoneNumber',trans('messages.collaborator.phoneNumber').'
							:', ['for' => 'phoneNumber' ]) !!}</div>
						<div class="col-lg-2">{!! Form::text('phoneNumber',$professional->telefone,['class'
							=> 'form-control ', 'type'=>'Number','id' =>
							'phoneNumber','readonly']) !!}</div>

						<div class="col-lg-2">{!!
							Form::label('lEmail',trans('messages.collaborator.email').' :',
							['for' => 'email' ]) !!}</div>
						<div class="col-lg-4">{!! Form::text('email',$professional->email,['class' =>
							'form-control ', 'type'=>'email','id' => 'email','readonly']) !!}</div>
					</div>
				</div>
			</div>
		</div>
		<div class="panel-body">
			<div class="form-group">
				<div class="row">
					<div class="col-lg-2">{!!
						Form::label('lprofession1',trans('messages.collaborator.profession').'
						1 :', ['for' => 'profession1' ]) !!}</div>
					<div class="col-lg-6">{!! Form::select('profession1', ['pedreiro'
						=> 'Pedreiro', 'canalizador' => 'Canalizador'], null, ['class' =>
						'form-control ', 'id' => 'profession1','readonly']) !!}</div>
					<div class="col-lg-2	">{!!
						Form::label('lyearsOfExperience',trans('messages.collaborator.yearsOfExperience').'
						:', ['for' => 'yearsOfExperience' ]) !!}</div>
					<div class="col-lg-2">{!!
						Form::text('yearsOfExperience',null,['class' => 'form-control ',
						'id' => 'yearsOfExperience','readonly']) !!}</div>
				</div>
			</div>


			<div class="form-group">
				<div class="row">
					<div class="col-lg-2">{!!
						Form::label('lprofession2',trans('messages.collaborator.profession').'
						2 :', ['for' => 'profession2' ]) !!}</div>
					<div class="col-lg-6">{!! Form::select('profession1', ['pedreiro'
						=> 'Pedreiro', 'canalizador' => 'Canalizador'], null, ['class' =>
						'form-control ', 'id' => 'profession2','readonly']) !!}</div>
					<div class="col-lg-2	">{!!
						Form::label('lyearsOfExperience',trans('messages.collaborator.yearsOfExperience').'
						:', ['for' => 'yearsOfExperience','readonly']) !!}</div>
					<div class="col-lg-2">{!!
						Form::text('yearsOfExperience',null,['class' => 'form-control ',
						'id' => 'yearsOfExperience','readonly']) !!}</div>
				</div>
			</div>
		</div>
		<div class="panel panel-default">
			<div class="panel-heading sub-panel-color-heading">
				<span class="panel-heading-text"> {{
					__('messages.collaborator.pageOne.subtitle2') }}</span>
			</div>
			<div class="panel-body">
				<table class="table" id="unofficialWork"
					data-editing-always-show="true">
					<thead>
						<tr>
							<th data-name="workArea">{{__('messages.collaborator.work.area')
								}}</th>
							<th data-name="startedOn" data-breakpoints="xs sm"
								data-type="date" data-format-string="MMMM Do YYYY">{{__('messages.collaborator.work.unofficial.date.initial')}}</th>
							<th data-name="finishOn" data-breakpoints="xs sm"
								data-type="date" data-format-string="MMMM Do YYYY">{{__('messages.collaborator.work.unofficial.date.final')}}
							</th>
							<th data-name="dob" data-breakpoints="xs sm" data-type="date"
								data-format-string="MMMM Do YYYY">{{__('messages.collaborator.work.unofficial.date.duration')}}
							</th>
						</tr>
					</thead>
					<tbody>

					</tbody>
				</table>
			</div>
		</div>
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
					['class' => 'form-control ', 'id' => 'type1','readonly']) !!}</div>
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
							null, ['class' => 'form-control ', 'id' => 'typeContract','readonly']) !!}</div>
						<div class="col-lg-2">{!!
							Form::label('lcontractStartDate',trans('messages.collaborator.laboral.contract.startDate').':',
							['for' => 'contractStartDate' ]) !!}</div>
						<div class="col-lg-2">{!!
							Form::text('contractStartDate',null,['class' => 'form-control ',
							'id' => 'contractStartDate', 'placeholder' => 'dd/mm/aaaa','readonly']) !!}</div>
					</div>
				</div>
				<div class="form-group">
					<div class="row">
						<div class="col-lg-2">{!!
							Form::label('lemployer',trans('messages.collaborator.laboral.employer').':',
							['for' => 'employer' ]) !!}</div>
						<div class="col-lg-2">{!! Form::text('employer',null,['class' =>
							'form-control ', 'id' => 'employer','readonly']) !!}</div>
						<div class="col-lg-2">{!!
							Form::label('lemployerActivity',trans('messages.collaborator.laboral.employer.activity').':',
							['for' => 'employerActivity' ]) !!}</div>
						<div class="col-lg-2">{!!
							Form::text('employerActivity',null,['class' => 'form-control ',
							'id' => 'employerActivity','readonly']) !!}</div>
						<div class="col-lg-2">{!!
							Form::label('lcategory',trans('messages.collaborator.laboral.contract.category').':',
							['for' => 'category' ]) !!}</div>
						<div class="col-lg-2">{!! Form::select('category', ['pedreiro' =>
							'Pedreiro', 'Auto' => 'Auto Mecanico'], null, ['class' =>
							'form-control ', 'id' => 'category','readonly']) !!}</div>
					</div>
				</div>
				<div class="form-group">
					<div class="row">
						<div class="col-lg-2">{!!
							Form::label('lsalary',trans('messages.collaborator.laboral.salary').':',
							['for' => 'salary' ]) !!}</div>
						<div class="col-lg-2">{!! Form::select('salary', ['1000' =>
							'1000', '2000' => '2000'], null, ['class' => 'form-control ',
							'id' => 'salary','readonly']) !!}</div>
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
							', 'id' => 'unemployedStartDate', 'placeholder' => 'dd/mm/aaaa','readonly'])
							!!}</div>
					</div>
				</div>
			</div>
		</div>
		<div class="panel panel-default">
			<div class="panel-heading sub-panel-color-heading">
				<span class="panel-heading-text"> {{
					__('messages.collaborator.skills') }}</span>
			</div>

			<div class="panel-body">
				<!-- 				Fazer um for para criar checkbox baseados na lista de competencias possiveis -->
				<table class="table" id="competenciaTable"
					data-editing-always-show="true">
					<thead>
						<tr>
							<th data-name="comp">{{__('messages.collaborator.skill.label') }}</th>
							<th data-name="desc">{{__('messages.collaborator.description.label')}}
							</th>
						</tr>
					</thead>
					<tbody>

					</tbody>
				</table>
			</div>
		</div>
		<div class="panel panel-default">
			<div class="panel-heading sub-panel-color-heading">
				<span class="panel-heading-text"> {{
					__('messages.collaborator.course.title') }}</span>
			</div>
			<div class="panel-body">
				<table class="table" id="courseTable"
					data-editing-always-show="true">
					<thead>
						<tr>
							<th data-name="course">{{__('messages.collaborator.course.name')}}</th>
							<th data-name="courseGraduationDate" data-breakpoints="xs sm"
								data-type="date" data-format-string="MMMM Do YYYY">{{__('messages.collaborator.course.date.graduation')}}</th>
							<th data-name="courseCategory">{{__('messages.collaborator.course.category')}}</th>
							<th data-name="institutionName">{{__('messages.collaborator.course.school')}}</th>
							<th data-name="institutionCountry">{{__('messages.collaborator.course.school.country')}}</th>
							<th data-name="institutionProvince">{{__('messages.collaborator.course.school.province')}}</th>
						</tr>
					</thead>
					<tbody>

					</tbody>
				</table>
			</div>
		</div>

		<div class="panel panel-default">
			<div class="panel-heading sub-panel-color-heading">
				<span class="panel-heading-text"> {{
					__('messages.collaborator.aditional.information') }}</span>
			</div>
			<div class="panel-body">{{ Form::textarea('aditionalInformation',
				null, ['size' => '115x5','readonly']) }}</div>
		</div>

	</div>
</div>
@endsection 
