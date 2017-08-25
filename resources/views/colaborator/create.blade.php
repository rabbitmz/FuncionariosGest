@extends('template.standard') @section('title', 'Inicial')

@section('content')
<div class="panel panel-default mukheroHack ">
	<div class="panel-heading panel-red-heading">
		<span class="panel-heading-text"> {{ __('messages.collaborator.title')
			}}</span>
	</div>

	<div class="panel-body">
		{{Form::open()}}
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
							['for' => 'name' ]) !!}</div>
						<div class="col-lg-6">{!! Form::text('name',null,['class' =>
							'form-control ', 'id' => 'name']) !!}</div>
						<div class="col-lg-2	">{!!
							Form::label('lgender',trans('messages.collaborator.gender').' :',
							['for' => 'gender' ]) !!}</div>
						<div class="col-lg-2">{!! Form::select('gender', ['M' =>
							'Masculino', 'F' => 'Feminino'], null, ['class' => 'form-control
							', 'id' => 'gender']) !!}</div>
					</div>
				</div>

				<div class="form-group">
					<div class="row">
						<div class="col-lg-2">{!!
							Form::label('lBirthDate',trans('messages.collaborator.birthDate').'
							:', ['for' => 'birthDate' ]) !!}</div>
						<div class="col-lg-2">{!! Form::text('birthDate',null,['class' =>
							'form-control ', 'id' => 'birthDate', 'placeholder' =>
							'dd/mm/aaaa']) !!}</div>
						<div class="col-lg-2">{!!Form::label('lIdentificationDocumentType',trans('messages.collaborator.identificationDocument.type').'
							:', ['for' => 'identificationDocument' ]) !!}</div>
						<div class="col-lg-2">
                                                        {!! Form::select('documentype', ['1' =>
							'BI', '2' => 'Passporte'], null, ['class' => 'form-control
							', 'id' => 'documentype']) !!}
						</div>

					</div>
				</div>
				<div class="form-group">
					<div class="row">


						<div class="col-lg-2">{!!
							Form::label('lIdentificationDocument',trans('messages.collaborator.identificationDocument').'
							:', ['for' => 'identificationDocument' ]) !!}</div>
						<div class="col-lg-2">{!!
							Form::text('identificationDocument',null,['class' =>
							'form-control ', 'id' => 'identificationDocument']) !!}</div>
						<div class="col-lg-2">{!!
							Form::label('ldateIssue',trans('messages.collaborator.identificationDocument.dateIssue').'
							:', ['for' => 'dateIssue' ]) !!}</div>
						<div class="col-lg-2">{!! Form::text('dateIssue',null,['class' =>
							'form-control ', 'id' => 'dateIssue', 'placeholder' =>
							'dd/mm/aaaa']) !!}</div>
						<div class="col-lg-2">{!!
							Form::label('ldateValid',trans('messages.collaborator.identificationDocument.dateValid').'
							:', ['for' => 'dateValid' ]) !!}</div>
						<div class="col-lg-2">{!! Form::text('dateValid',null,['class' =>
							'form-control ', 'id' => 'dateValid', 'placeholder' =>
							'dd/mm/aaaa']) !!}</div>
					</div>
				</div>

				<div class="form-group">
					<div class="row">

						<div class="col-lg-2">{!!
							Form::label('lnationality',trans('messages.collaborator.citizenship').'
							:', ['for' => 'nationality' ]) !!}</div>
						<div class="col-lg-2">{!! Form::select('naturalidade_provincia',$naturalidade_provincias, null, 
                                                    ['class' => 'form-control ', 'id' => 'naturalidade_provincia']) !!}</div>
						<div class="col-lg-2">{!!
							Form::label('ldistrict',trans('messages.collaborator.district').' :',
							['for' => 'city' ]) !!}</div>
						<div class="col-lg-2">{!! Form::select('naturalidade_distrito',$naturalidade_distritos, null, 
                                                    ['class' => 'form-control ', 'id' => 'naturalidade_distrito']) !!}</div>
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
							Form::label('laddressProv',trans('messages.collaborator.course.school.province').'
							:', ['for' => 'addressProv' ]) !!}</div>
						<div class="col-lg-4">{!! Form::select('endereco_provincia',$endereco_provincias, null, 
                                                    ['class' => 'form-control ', 'id' => 'endereco_provincia']) !!}</div>
						<div class="col-lg-2">{!!
							Form::label('laddressCity',trans('messages.collaborator.city').'
							:', ['for' => 'addressProv' ]) !!}</div>
						<div class="col-lg-4">{!! Form::text('addressCity',null,['class' =>
							'form-control ', 'id' => 'addressCity']) !!}</div>

					</div>
				</div>
				<div class="form-group">
					<div class="row">
						<div class="col-lg-2">{!!
							Form::label('llocality',trans('messages.collaborator.district').'
							:', ['for' => 'nationality' ]) !!}</div>
						<div class="col-lg-4">{!! Form::select('endereco_distrito',$endereco_distritos, null, 
                                                    ['class' => 'form-control ', 'id' => 'endereco_distrito']) !!}</div>
						<div class="col-lg-2">{!!
							Form::label('lneighborhood',trans('messages.collaborator.neighborhood').'
							:', ['for' => 'neighborhood' ]) !!}</div>
						<div class="col-lg-4">{!! Form::text('neighborhood',null,['class'
							=> 'form-control ', 'id' => 'neighborhood']) !!}</div>

					</div>
				</div>
				<div class="form-group">
					<div class="row">
						<div class="col-lg-2">{!!
							Form::label('lstreet',trans('messages.collaborator.street').' :',
							['for' => 'street' ]) !!}</div>
						<div class="col-lg-4">{!! Form::text('street',null,['class' =>
							'form-control ', 'id' => 'street']) !!}</div>
						<div class="col-lg-2">{!!
							Form::label('lblock',trans('messages.collaborator.block').' :',
							['for' => 'block' ]) !!}</div>
						<div class="col-lg-4">{!! Form::text('block',null,['class' =>
							'form-control ', 'type'=>'Number','id' => 'block']) !!}</div>

					</div>
				</div>

				<div class="form-group">
					<div class="row">
						<div class="col-lg-2">{!!
							Form::label('lcell',trans('messages.collaborator.cell').' :',
							['for' => 'cell' ]) !!}</div>
						<div class="col-lg-4">{!! Form::text('cell',null,['class' =>
							'form-control ', 'type'=>'Number','id' => 'block']) !!}</div>
						<div class="col-lg-2">{!!
							Form::label('lCity',trans('messages.collaborator.house').' :',
							['for' => 'city' ]) !!}</div>
						<div class="col-lg-4">{!! Form::text('house',null,['class' =>
							'form-control ', 'type'=>'Number','id' => 'house']) !!}</div>
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
						<div class="col-lg-2">{!! Form::select('educationLevel', ['1'
							=> 'Com Escolaridade', '0' => 'Sem Escolaridade'], null,
							['class' => 'form-control ', 'id' => 'educationLevel']) !!}</div>

					</div>
					<div class="row">
						<div id="educationLevelSection">
							<div class="form-group">
								<div class="row">
									<div class="col-lg-2">{!!
										Form::label('lgeneralEducation',trans('messages.collaborator.educationLevel.generalEducation').'
										:', ['class' => 'radio-inline','for' => 'generalEducation' ])
										!!} {!! Form::checkbox('generalEducation', 'generalEducation')
										!!}</div>
									<div class="col-lg-2 col-lg-offset-3">{!!
										Form::label('lgeneralEducation',trans('messages.collaborator.educationLevel.technicalEducation').'
										:', ['class' => 'radio-inline','for' => 'technicalEducation'
										]) !!} {!! Form::checkbox('technicalEducation',
										'technicalEducation') !!}</div>
									<div class="col-lg-2 col-lg-offset-3">{!!
										Form::label('lgeneralEducation',trans('messages.collaborator.educationLevel.university').'
										:', ['class' => 'radio-inline','for' => 'university' ]) !!}
										{!! Form::checkbox('university', 'university') !!}</div>
								</div>
							</div>
							<div class="form-group">
								<div class="row">
									<div class="col-lg-2">{!!
										Form::label('lschooLevel',trans('messages.collaborator.school.level').'
										:', ['for' => 'schooLevel' ]) !!}</div>
									<div class="col-lg-3">{!! Form::select('classe',$classes, null, 
                                                                        ['class' => 'form-control ', 'id' => 'classe']) !!}</div>
								</div>
							</div>
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
						<div class="col-lg-2">{!! Form::text('phoneNumber',null,['class'
							=> 'form-control ', 'type'=>'Number','id' => 'phoneNumber']) !!}</div>

						<div class="col-lg-2">{!!
							Form::label('lEmail',trans('messages.collaborator.email').' :',
							['for' => 'email' ]) !!}</div>
						<div class="col-lg-4">{!! Form::text('email',null,['class' =>
							'form-control ', 'type'=>'email','id' => 'email']) !!}</div>
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
