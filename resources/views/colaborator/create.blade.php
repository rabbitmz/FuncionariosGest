@extends('template.standard') @section('title', 'Inicial')

@section('content')
<div class="panel panel-default mukheroHack ">
	<div class="panel-heading panel-red-heading">
		<span class="panel-heading-text"> {{ __('messages.collaborator.title')
			}}</span>
	</div>

	<div class="panel-body">
		{{Form::open(['url' => '/createColaborator/page1'])}}
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

							<div class="input-group">
								<label class="radio-inline"> <input type="radio" name="optradio">
									BI
								</label> <label class="radio-inline"><input type="radio"
									name="optradio">Passport</label>
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
						<div class="col-lg-2">{!! Form::select('nationality',
							['Mocambique' => 'Maputo', 'AfricaDoSul' => 'Beira'], null,
							['class' => 'form-control ', 'id' => 'nationality']) !!}</div>
						<div class="col-lg-2">{!!
							Form::label('lCity',trans('messages.collaborator.city').' :',
							['for' => 'city' ]) !!}</div>
						<div class="col-lg-2">{!! Form::select('city', ['Mocambique' =>
							'Maputo', 'AfricaDoSul' => 'Beira'], null, ['class' =>
							'form-control ', 'id' => 'city']) !!}</div>
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
							Form::label('laddressProv',trans('messages.collaborator.locality').'
							:', ['for' => 'addressProv' ]) !!}</div>
						<div class="col-lg-4">{!! Form::select('addressProv', ['Maputo' =>
							'Maputo', 'Beira' => 'Beira'], null, ['class' => 'form-control ',
							'id' => 'addressProv']) !!}</div>
						<div class="col-lg-2">{!!
							Form::label('laddressCity',trans('messages.collaborator.city').'
							:', ['for' => 'addressProv' ]) !!}</div>
						<div class="col-lg-4">{!! Form::select('addressCity', ['Maputo' =>
							'Maputo', 'Beira' => 'Beira'], null, ['class' => 'form-control ',
							'id' => 'addressCity']) !!}</div>

					</div>
				</div>
				<div class="form-group">
					<div class="row">
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
						<div class="col-lg-2">{!! Form::select('educationLevel', ['WITH'
							=> 'Com Escolaridade', 'WITHOUT' => 'Sem Escolaridade'], null,
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
									<div class="col-lg-3">{!! Form::select('schooLevel', ['1' => '1
										Classe', '2' => '2 Classe','3' => '3 Classe','4' => '4
										Classe','5' => '5 Classe','6' => '6 Classe','7' => '7
										Classe','8' => '8 Classe','9' => '9 Classe','10' => '10
										Classe','11' => '11 Classe','12' => '12 Classe'], null,
										['class' => 'form-control ', 'id' => 'schooLevel']) !!}</div>
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
