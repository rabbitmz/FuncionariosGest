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
			</div>

			<div class="panel-body">
				<div class="panel panel-default">
					<div class="panel-heading sub-panel-color-heading">
						<span class="panel-heading-text"> {{
							__('messages.report.view.Subtitle.personal.data') }}</span>
					</div>

					<div class="panel-body">
						<div class="form-group">
							<div class="row">
								<div class="col-lg-2">{!!
									Form::label('lgender',trans('messages.collaborator.gender').'
									:', ['for' => 'gender' ]) !!}</div>
								<div class="col-lg-3">{!! Form::select('gender', ['N' =>
									'Selecione o Genero','M' => 'Masculino', 'F' => 'Feminino'],
									null, ['class' => 'form-control ', 'id' => 'gender']) !!}</div>

							</div>
						</div>
						<div class="form-group">
							<div class="row">
								<div class="col-lg-2">{!!
									Form::label('lageMin',trans('messages.report.view.age.min').'
									:', ['for' => 'ageMin' ]) !!}</div>

								<div class="col-lg-3">{!! Form::select('ageMin', (['0' =>
									'Selecione a idade minima'] + $listOfAges), null, ['class' =>
									'form-control ', 'id' => 'ageMin']) !!}</div>

								<div class="col-lg-2">{!!
									Form::label('lageMax',trans('messages.report.view.age.max').'
									:', ['for' => 'ageMax' ]) !!}</div>
								<div class="col-lg-3">{!! Form::select('ageMax', (['0' =>
									'Selecione a idade maxima'] + $listOfAges), null, ['class' =>
									'form-control ', 'id' => 'ageMin']) !!}</div>

							</div>
						</div>
					</div>
				</div>
				<div class="panel panel-default">
					<div class="panel-heading sub-panel-color-heading">
						<span class="panel-heading-text"> {{
							__('messages.report.view.Subtitle.personal.address.data') }}</span>
					</div>

					<div class="panel-body">
						<div class="form-group">
							<div class="row">
								<div class="col-lg-2">{!!
									Form::label('laddressProv',trans('messages.collaborator.course.school.province').'
									:', ['for' => 'addressProv' ]) !!}</div>
								<div class="col-lg-3">{!! Form::select('addressProv', ['NONE' =>
									'Selecione a provincia','Maputo' => 'Maputo', 'Beira' =>
									'Beira'], null, ['class' => 'form-control ', 'id' =>
									'addressProv']) !!}</div>

							</div>
						</div>

						<div class="form-group">
							<div class="row">
								<div class="col-lg-2">{!!
									Form::label('llocality',trans('messages.collaborator.locality').'
									:', ['for' => 'nationality' ]) !!}</div>
								<div class="col-lg-3">{!! Form::select('llocality', ['NONE' =>
									'Selecione a localidade','Magude' => 'Magude', 'Bunga' =>
									'Bunga'], null, ['class' => 'form-control ', 'id' =>
									'llocality']) !!}</div>
								<div class="col-lg-2">{!!
									Form::label('laddressCity',trans('messages.collaborator.city').'
									:', ['for' => 'addressCity' ]) !!}</div>
								<div class="col-lg-3">{!! Form::select('addressCity', ['NONE' =>
									'Selecione a cidade','Maputo' => 'Maputo', 'Beira' => 'Beira'],
									null, ['class' => 'form-control ', 'id' => 'addressCity']) !!}</div>

							</div>
						</div>
					</div>
				</div>
				<div class="panel panel-default">
					<div class="panel-heading sub-panel-color-heading">
						<span class="panel-heading-text"> {{
							__('messages.report.view.Subtitle.personal.school.data') }}</span>
					</div>

					<div class="panel-body">
						<div class="form-group">
							<div class="row">
								<div class="col-lg-2">{!!
									Form::label('lEducationLevel',trans('messages.collaborator.educationLevel').'
									:', ['for' => 'educationLevel' ]) !!}</div>
								<div class="col-lg-3">{!! Form::select('educationLevel', ['NONE'
									=> 'Selecione o Nivel de Escolaridade','WITH' => 'Com
									Escolaridade', 'WITHOUT' => 'Sem Escolaridade'], null, ['class'
									=> 'form-control ', 'id' => 'educationLevel']) !!}</div>

							</div>
						</div>


						<div class="form-group">
							<div class="row">
								<div id="educationLevelSection" style="display: none;">
									<div class="form-group">
										<div class="row">
											<div class="col-lg-2">{!!
												Form::label('lgeneralEducation',trans('messages.collaborator.educationLevel.generalEducation').'
												:', ['class' => 'radio-inline','for' => 'generalEducation'
												]) !!} {!! Form::checkbox('generalEducation',
												'generalEducation',null,['id' => 'generalEducation']) !!}</div>
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
								</div>

							</div>
							<div class="form-group">
								<div id="schoolevelDiv" style="display: none;">
									<div class="row">
										<div class="col-lg-2">{!!
											Form::label('lschooLevel',trans('messages.collaborator.school.level').'
											:', ['for' => 'schooLevel' ]) !!}</div>
										<div class="col-lg-3">{!! Form::select('schooLevel', ['1' =>
											'1 Classe', '2' => '2 Classe','3' => '3 Classe','4' => '4
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
				<div class="panel panel-default">
					<div class="panel-heading sub-panel-color-heading">
						<span class="panel-heading-text"> {{
							__('messages.report.view.Subtitle.personal.experiencie.data') }}</span>
					</div>

					<div class="panel-body">
						<div class="form-group">
							<div class="row">
								<div class="col-lg-2">{!!
									Form::label('lprofession1',trans('messages.collaborator.profession.primary').'
									:', ['for' => 'profession1' ]) !!}</div>
								<div class="col-lg-3">{!! Form::select('profession1', ['NONE' =>
									'Selecione a profissão primária','pedreiro' => 'Pedreiro',
									'canalizador' => 'Canalizador'], null, ['class' =>
									'form-control ', 'id' => 'profession1']) !!}</div>
								<div class="col-lg-2	">{!!
									Form::label('lyearsOfExperience',trans('messages.collaborator.yearsOfExperience').'
									:', ['for' => 'yearsOfExperience' ]) !!}</div>
								<div class="col-lg-2">{!! Form::select('yearsOfExperience',
									(['0' => 'Selecione'] + $experiencesYears), null, ['class' =>
									'form-control ', 'id' => 'yearsOfExperience']) !!}</div>

								<div class="col-lg-3">{!! Form::select('level1', ['NONE' =>
									'Selecione o nivel','MASTER' => 'Mestre', 'HELPER' =>
									'Ajudante','ASSISTANT' => 'Auxiliar'], null, ['class' =>
									'form-control ', 'id' => 'level1']) !!}</div>

							</div>
						</div>

						<div class="form-group">
							<div class="row">
								<div class="col-lg-2">{!!
									Form::label('lprofession2',trans('messages.collaborator.profession.other').'
									:', ['for' => 'profession2' ]) !!}</div>
								<div class="col-lg-3">{!! Form::select('profession1', ['NONE' =>
									'Selecione a profissão secundária','pedreiro' => 'Pedreiro',
									'canalizador' => 'Canalizador'], null, ['class' =>
									'form-control ', 'id' => 'profession2']) !!}</div>

								<div class="col-lg-2	">{!!
									Form::label('lyearsOfExperience2',trans('messages.collaborator.yearsOfExperience').'
									:', ['for' => 'yearsOfExperience2' ]) !!}</div>
								<div class="col-lg-2">{!! Form::select('yearsOfExperience2',
									(['0' => 'Selecione'] + $experiencesYears), null, ['class' =>
									'form-control ', 'id' => 'yearsOfExperience2']) !!}</div>

								<div class="col-lg-3">{!! Form::select('level2', ['NONE' =>
									'Selecione o nivel','MASTER' => 'Mestre', 'HELPER' =>
									'Ajudante','ASSISTANT' => 'Auxiliar'], null, ['class' =>
									'form-control ', 'id' => 'level2']) !!}</div>
							</div>
						</div>

					</div>
				</div>
				<div class="panel panel-default">
					<div class="panel-heading sub-panel-color-heading">
						<span class="panel-heading-text"> {{
							__('messages.report.view.Subtitle.personal.Unofficial.experiencie.data') }}</span>
					</div>

					<div class="panel-body">
						<div class="form-group">
							<div class="row">
								<div class="col-lg-2">{!!
									Form::label('lprofessionInformal',trans('messages.report.view.unofficial.experience').'
									1:', ['for' => 'professionInformal' ]) !!}</div>
								<div class="col-lg-3">{!! Form::select('professionInformal',
									['NONE' => 'Selecione a area','pedreiro' => 'Pedreiro',
									'canalizador' => 'Canalizador'], null, ['class' =>
									'form-control ', 'id' => 'professionInformal']) !!}</div>

								<div class="col-lg-2	">{!!
									Form::label('lInformalyearsOfExp',trans('messages.collaborator.yearsOfExperience').'
									:', ['for' => 'informalyearsOfExp' ]) !!}</div>
								<div class="col-lg-2">{!! Form::select('informalyearsOfExp',
									(['0' => 'Selecione'] + $experiencesYears), null, ['class' =>
									'form-control ', 'id' => 'informalyearsOfExp']) !!}</div>

								<div class="col-lg-3">{!!
									Form::select('informalyearsOfExpLevel', ['NONE' => 'Selecione o
									nivel','MASTER' => 'Mestre', 'HELPER' => 'Ajudante','ASSISTANT'
									=> 'Auxiliar'], null, ['class' => 'form-control ', 'id' =>
									'informalyearsOfExpLevel']) !!}</div>
							</div>
						</div>
						<div class="form-group">
							<div class="row">
								<div class="col-lg-2">{!!
									Form::label('lprofessionInformal2',trans('messages.report.view.unofficial.experience').'
									2:', ['for' => 'professionInformal2' ]) !!}</div>
								<div class="col-lg-3">{!! Form::select('professionInformal2',
									['NONE' => 'Selecione a area','pedreiro' => 'Pedreiro',
									'canalizador' => 'Canalizador'], null, ['class' =>
									'form-control ', 'id' => 'professionInformal2']) !!}</div>

								<div class="col-lg-2	">{!!
									Form::label('lInformalyearsOfExp2',trans('messages.collaborator.yearsOfExperience').'
									:', ['for' => 'informalyearsOfExp' ]) !!}</div>
								<div class="col-lg-2">{!! Form::select('informalyearsOfExp2',
									(['0' => 'Selecione'] + $experiencesYears), null, ['class' =>
									'form-control ', 'id' => 'informalyearsOfExp2']) !!}</div>

								<div class="col-lg-3">{!!
									Form::select('informalyearsOfExpLevel2', ['NONE' => 'Selecione
									o nivel','MASTER' => 'Mestre', 'HELPER' =>
									'Ajudante','ASSISTANT' => 'Auxiliar'], null, ['class' =>
									'form-control ', 'id' => 'informalyearsOfExpLevel2']) !!}</div>
							</div>
						</div>

					</div>
				</div>
				<div class="panel panel-default">
					<div class="panel-heading sub-panel-color-heading">
						<span class="panel-heading-text"> {{
							__('messages.report.view.Subtitle.personal.laboral.data') }}</span>
					</div>

					<div class="panel-body">
						<div class="form-group">
							<div class="row">
								<div class="col-lg-2">{!!
									Form::label('ltype1',trans('messages.collaborator.laboral.type').':',
									['for' => 'type1' ]) !!}</div>
								<div class="col-lg-3">{!! Form::select('type1',
									['NONE'=>'Selecione um tipo','CONTRATADO' => 'Contratado',
									'DESEMPREGADO' => 'Desempregado','AUTO' => 'Auto-emprego'],
									null, ['class' => 'form-control ', 'id' => 'type1']) !!}</div>

							</div>
						</div>

						<div class="form-group">
							<div class="row">
								<div class="col-lg-2">{!!
									Form::label('lsalary',trans('messages.collaborator.laboral.salary').':',
									['for' => 'salary' ]) !!}</div>
								<div class="col-lg-3">{!! Form::select('salary', ['NONE' =>
									'Selecione um valor Maximo','1000' =>
									'1000', '2000' => '2000'], null, ['class' => 'form-control ',
									'id' => 'salary']) !!}</div>
							</div>
						</div>
					</div>
				</div>
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
