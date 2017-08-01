@extends('template.standard') @section('title', 'Inicial')

@section('content')
<div class="panel panel-default mukheroHack ">
	<div class="panel-heading panel-red-heading">
		<span class="panel-heading-text"> {{
			__('messages.collaborator.pageOne.title') }}</span>
	</div>

	<div class="panel-body">
		{{Form::open(['url' => '/createColaborator/page3'])}}
		<div class="panel panel-default">
			<div class="panel-heading sub-panel-color-heading">
				<span class="panel-heading-text"> {{
					__('messages.collaborator.pageOne.subtitle1') }}</span>
			</div>

			<div class="panel-body">
				<div class="form-group">
					<div class="row">
						<div class="col-lg-2">{!!
							Form::label('lprofession1',trans('messages.collaborator.profession.primary').'
							:', ['for' => 'profession1' ]) !!}</div>
						<div class="col-lg-3">{!! Form::select('profession1', ['pedreiro'
							=> 'Pedreiro', 'canalizador' => 'Canalizador'], null, ['class' =>
							'form-control ', 'id' => 'profession1']) !!}</div>
						<div class="col-lg-2	">{!!
							Form::label('lyearsOfExperience',trans('messages.collaborator.yearsOfExperience').'
							:', ['for' => 'yearsOfExperience' ]) !!}</div>
						<div class="col-lg-2">{!!
							Form::text('yearsOfExperience',null,['class' => 'form-control ',
							'id' => 'yearsOfExperience']) !!}</div>
						<div class="col-lg-3">{!! Form::select('level1', ['MASTER' =>
							'Mestre', 'HELPER' => 'Ajudante','ASSISTANT' => 'Auxiliar'],
							null, ['class' => 'form-control ', 'id' => 'profession1']) !!}</div>
					</div>
				</div>


				<div class="form-group">
					<div class="row">
						<div class="col-lg-2">{!!
							Form::label('lprofession2',trans('messages.collaborator.profession.other').'
							:', ['for' => 'profession2' ]) !!}</div>
						<div class="col-lg-3">{!! Form::select('profession1', ['pedreiro'
							=> 'Pedreiro', 'canalizador' => 'Canalizador'], null, ['class' =>
							'form-control ', 'id' => 'profession2']) !!}</div>
						<div class="col-lg-2	">{!!
							Form::label('lyearsOfExperience',trans('messages.collaborator.yearsOfExperience').'
							:', ['for' => 'yearsOfExperience' ]) !!}</div>
						<div class="col-lg-2">{!!
							Form::text('yearsOfExperience',null,['class' => 'form-control ',
							'id' => 'yearsOfExperience']) !!}</div>
						<div class="col-lg-3">{!! Form::select('level2', ['MASTER' =>
							'Mestre', 'HELPER' => 'Ajudante','ASSISTANT' => 'Auxiliar'],
							null, ['class' => 'form-control ', 'id' => 'profession1']) !!}</div>
					</div>
				</div>

			</div>
		</div>
		<!-- 	INFORMAL -->
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
							<th data-name="levelWork">{{__('messages.collaborator.experience.level')
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
		<div class="row">
			<div class="col-lg-12 ">{!!Form::submit('Seguinte',['class' => 'btn
				pull-right']); !!}</div>
		</div>
		{{Form::close()}}
	</div>
</div>


<!-- EDITOR MODAL -->
<div class="modal fade" id="editor-modal" tabindex="-1" role="dialog"
	aria-labelledby="editor-title">
	<div class="modal-dialog" role="document">
		<form class="modal-content form-horizontal" id="editor">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"
					aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
				<h4 class="modal-title" id="editor-title">{{__('messages.collaborator.work.unofficial.add.title')
					}}</h4>
			</div>
			<div class="modal-body">
				<div class="form-group required">
					<label for="workArea" class="col-sm-3 control-label">{{__('messages.collaborator.work.area')
						}}</label>
					<div class="col-sm-9">{!! Form::select('workArea', ['autoMecanico'
						=> 'Auto Mecanico', 'Soldadura' => 'Soldadura'], null, ['class' =>
						'form-control required', 'id' => 'workArea']) !!}</div>
				</div>
				
				<div class="form-group required">
					<label for="levelInformal" class="col-sm-3 control-label">{{__('messages.collaborator.experience.level')
						}}</label>
						<div class="col-sm-9">{!! Form::select('levelInformal', ['MASTER' =>
							'Mestre', 'HELPER' => 'Ajudante','ASSISTANT' => 'Auxiliar'],
							null, ['class' => 'form-control ', 'id' => 'levelInformal']) !!}</div>					
				</div>
				<div class="form-group required">
					<label for="startedOn" class="col-sm-3 control-label">{{__('messages.collaborator.work.unofficial.date.initial')
						}} </label>
					<div class="col-sm-9">
						<input type="date" class="form-control" id="startedOn"
							name="startedOn" placeholder="Started On" required>
					</div>
				</div>
				<div class="form-group">
					<label for="finishOn" class="col-sm-3 control-label">{{__('messages.collaborator.work.unofficial.date.final')
						}} </label>
					<div class="col-sm-9">
						<input type="date" class="form-control" id="finishOn"
							name="finishOn" placeholder="Date of Birth">
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="submit" class="btn btn-primary">{{__('messages.save')
					}}</button>
				<button type="button" class="btn btn-default" data-dismiss="modal">{{__('messages.cancel')
					}}</button>
			</div>
		</form>
	</div>
</div>
@endsection @section('scripts')
<script src="{{ asset('js/colaborator.js') }}"></script>
@endsection

